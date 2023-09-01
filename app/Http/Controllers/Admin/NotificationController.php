<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function index()
    {
        return view('admin.notification.index', [
            'title' => 'Notifikasi',
        ]);
    }

    public function delete()
    {
        return 'Logic delete notification';
    }
}
