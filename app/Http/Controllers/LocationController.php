<?php

namespace App\Http\Controllers;

class LocationController extends Controller
{
    public function index()
    {
        $lang = session('locale', 'en');
        $tr   = HomeController::getTranslations($lang);
        return view('locations.index', compact('tr'));
    }

    public function contact()
    {
        $lang = session('locale', 'en');
        $tr   = HomeController::getTranslations($lang);
        return view('contact', compact('tr'));
    }
}