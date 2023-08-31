<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index', [
            'title' => 'Profile'
        ]);
    }

    public function edit()
    {
        return "Ganti ke halaman edit profile";
    }

    public function update()
    {
        return "Logic edit profile";
    }
}