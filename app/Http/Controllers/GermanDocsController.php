<?php

namespace App\Http\Controllers;

class GermanDocsController extends Controller
{
    public function index()
    {
        $lang = session('locale', 'en');
        $tr   = HomeController::getTranslations($lang);
        return view('german-docs.index', compact('tr'));
    }
}