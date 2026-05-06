<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LanguageEnrollment;

class LanguageController extends Controller
{
    public function index()
    {
        $lang = session('locale', 'en');
        $tr   = HomeController::getTranslations($lang);
        return view('language.index', compact('tr'));
    }

    public function enroll(Request $request)
    {
        $request->validate([
            'full_name'          => 'required|string|max:255',
            'email'              => 'required|email',
            'phone'              => 'required|string|max:20',
            'language'           => 'required',
            'course_type'        => 'required',
            'preferred_center'   => 'required',
            'preferred_schedule' => 'required',
        ]);

        LanguageEnrollment::create([
            'full_name'          => $request->full_name,
            'email'              => $request->email,
            'phone'              => $request->phone,
            'language'           => $request->language,
            'course_type'        => $request->course_type,
            'preferred_center'   => $request->preferred_center,
            'preferred_schedule' => $request->preferred_schedule,
            'current_level'      => $request->current_level ?? 'beginner',
            'notes'              => $request->notes,
            'user_id'            => auth()->id(),
        ]);

        return redirect()->route('language')
               ->with('success', '✅ Enrollment submitted! Our team will contact you within 24 hours.');
    }
}