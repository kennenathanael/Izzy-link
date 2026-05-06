<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrivingApplication;

class DrivingController extends Controller
{
    public function index()
    {
        $lang = session('locale', 'en');
        $tr   = HomeController::getTranslations($lang);
        return view('driving.index', compact('tr'));
    }

    public function apply(Request $request)
    {
        $request->validate([
            'full_name'          => 'required|string|max:255',
            'email'              => 'required|email',
            'phone'              => 'required|string|max:20',
            'preferred_center'   => 'required',
            'preferred_schedule' => 'required',
            'license_type'       => 'required',
        ]);

        DrivingApplication::create([
            'full_name'          => $request->full_name,
            'email'              => $request->email,
            'phone'              => $request->phone,
            'date_of_birth'      => $request->date_of_birth,
            'preferred_center'   => $request->preferred_center,
            'preferred_schedule' => $request->preferred_schedule,
            'license_type'       => $request->license_type,
            'notes'              => $request->notes,
            'user_id'            => auth()->id(),
        ]);

        return redirect()->route('driving')
               ->with('success', '✅ Registration submitted! Our team will contact you within 24 hours.');
    }
}
