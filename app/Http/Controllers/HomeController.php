<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home";
        return view('home.index')->with("viewData", $viewData);
    }
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About";
        return view('home.about')->with("viewData", $viewData);
    }
    public function service()
    {
        $viewData = [];
        $viewData["title"] = "Service";
        return view('home.service')->with("viewData", $viewData);
    }
}
