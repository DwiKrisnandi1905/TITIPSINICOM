<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BuildingVendorService;
use App\Models\CommodityVendorService;
use App\Models\Customer;
use App\Models\Finance;
use App\Models\PickupVendorService;
use App\Models\VehicleVendorService;
use App\Models\Vendor;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class DashboardController extends Controller
{
    public function index()
    {
        $counts = [
            'customer' => Customer::class,
            'vendor' => Vendor::class,
            'finance' => Finance::class,
            'admin' => Admin::class,
            'building_vendor_service' => BuildingVendorService::class,
            'pickup_vendor_service' => PickupVendorService::class,
            'vehicle_vendor_service' => VehicleVendorService::class,
            'commodity_vendor_service' => CommodityVendorService::class,
        ];

        $userCounts = [];

        foreach ($counts as $key => $modelClass) {
            $userCounts[$key] = $this->getUserCount($modelClass);
        }

        return view('admin.dashboard.index', [
            'title' => 'Dashboard',
            'userCount' => $userCounts['customer'] + $userCounts['vendor'] + $userCounts['finance'] + $userCounts['admin'],
            'customerCount' => $userCounts['customer'],
            'vendorCount' => $userCounts['vendor'],
            'serviceCount' => $userCounts['building_vendor_service'] + $userCounts['pickup_vendor_service'] + $userCounts['vehicle_vendor_service'] + $userCounts['commodity_vendor_service'],
        ]);
    }

    private function getUserCount($modelClass)
    {
        return $modelClass::query()
            ->when(request('month'), function ($query) {
                $query->whereMonth('created_at', request('month'));
            })
            ->when(!request('month'), function ($query) {
                $query->whereMonth('created_at', now());
            })
            ->when(request('year'), function ($query) {
                $query->whereYear('created_at', request('year'));
            })
            ->when(!request('year'), function ($query) {
                $query->whereYear('created_at', now());
            })
            ->count();
    }
}
