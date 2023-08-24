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
        $data1 = "About";
        $data2 = "About us";
        return view('home.about')->with("title", $data1)
            ->with("subtitle", $data2);
    }
}
