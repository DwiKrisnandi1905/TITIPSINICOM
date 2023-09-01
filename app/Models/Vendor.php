<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vendor extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function zipCode(): BelongsTo
    {
        return $this->belongsTo(ZipCode::class);
    }

    public function buildingVendorService(): HasMany
    {
        return $this->hasMany(BuildingVendorService::class);
    }

    public function commodityVendorService(): HasMany
    {
        return $this->hasMany(CommodityVendorService::class);
    }

    public function pickupVendorService(): HasMany
    {
        return $this->hasMany(PickupVendorService::class);
    }

    public function vehicleVendorService(): HasMany
    {
        return $this->hasMany(VehicleVendorService::class);
    }
}
