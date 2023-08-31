<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        return "Ganti ke view notification";
    }

    public function delete()
    {
        return "Logic delete notification";
    }
}