<?php

namespace App\Http\Controllers;

use App\Models\DrivingApplication;
use App\Models\LanguageEnrollment;
use App\Models\VisaApplication;

class StudentController extends Controller
{
    

    public function dashboard()
    {
        $lang = session('locale', 'en');
        $tr   = HomeController::getTranslations($lang);
        $user = auth()->user();

        $drivingApps  = DrivingApplication::where('user_id', $user->id)->latest()->take(3)->get();
        $languageApps = LanguageEnrollment::where('user_id', $user->id)->latest()->take(3)->get();
        $visaApps     = VisaApplication::where('user_id', $user->id)->latest()->take(3)->get();

        $totalFiles   = $drivingApps->count() + $languageApps->count() + $visaApps->count();
        $pendingFiles = $drivingApps->where('status', 'pending')->count()
                      + $languageApps->where('status', 'pending')->count()
                      + $visaApps->where('status', 'pending')->count();
        $approvedFiles = $drivingApps->where('status', 'approved')->count()
                       + $languageApps->where('status', 'approved')->count()
                       + $visaApps->where('status', 'approved')->count();

        return view('student.dashboard', compact(
            'tr','user','drivingApps','languageApps','visaApps',
            'totalFiles','pendingFiles','approvedFiles'
        ));
    }

    public function files()
    {
        $lang = session('locale', 'en');
        $tr   = HomeController::getTranslations($lang);
        $user = auth()->user();

        $drivingApps  = DrivingApplication::where('user_id', $user->id)->latest()->get();
        $languageApps = LanguageEnrollment::where('user_id', $user->id)->latest()->get();
        $visaApps     = VisaApplication::where('user_id', $user->id)->latest()->get();

        return view('student.files', compact(
            'tr','user','drivingApps','languageApps','visaApps'
        ));
    }

    public function profile()
    {
        $lang = session('locale', 'en');
        $tr   = HomeController::getTranslations($lang);
        return view('student.profile', compact('tr'));
    }
}