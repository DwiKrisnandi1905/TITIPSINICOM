<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index', [
            'title' => 'Profile',
        ]);
    }

    public function edit()
    {
        return view('admin.profile.edit', [
            'title' => 'Profile',
        ]);
    }

    public function update()
    {
        return 'Logic edit profile';
    }
}
