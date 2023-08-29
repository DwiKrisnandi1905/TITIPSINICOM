<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()
    {
        return view('guest.home', [
            'title' => 'Home'
        ]);
    }
    public function about()
    {
        return view('guest.about', [
            'title' => 'About'
        ]);
    }
    public function service()
    {
        return view('guest.service', [
            'title' => 'Service'
        ]);
    }
    public function faq()
    {
        return view('guest.faq', [
            'title' => 'FAQ'
        ]);
    }
    public function syaratKetentuan()
    {
        return view('guest.syarat-ketentuan', [
            'title' => 'Syarat Ketentuan'
        ]);
    }
    public function privacyPolicy()
    {
        return view('guest.privacy-policy', [
            'title' => 'Privacy & Policy'
        ]);
    }

    public function contact()
    {
        return view('guest.contact', [
            'title' => 'Kontak Kami'
        ]);
    }
}