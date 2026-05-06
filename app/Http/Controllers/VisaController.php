<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisaApplication;

class VisaController extends Controller
{
    public function index()
    {
        $lang = session('locale', 'en');
        $tr   = HomeController::getTranslations($lang);
        return view('visa.index', compact('tr'));
    }

    public function apply(Request $request)
    {
        $request->validate([
            'full_name'           => 'required|string|max:255',
            'email'               => 'required|email',
            'phone'               => 'required|string|max:20',
            'date_of_birth'       => 'required|date',
            'destination_country' => 'required',
            'visa_type'           => 'required',
            'preferred_center'    => 'required',
        ]);

        VisaApplication::create([
            'full_name'            => $request->full_name,
            'email'                => $request->email,
            'phone'                => $request->phone,
            'date_of_birth'        => $request->date_of_birth,
            'passport_number'      => $request->passport_number,
            'destination_country'  => $request->destination_country,
            'visa_type'            => $request->visa_type,
            'preferred_center'     => $request->preferred_center,
            'intended_travel_date' => $request->intended_travel_date,
            'admin_notes'          => $request->notes,
            'user_id'              => auth()->id(),
        ]);

        return redirect()->route('visa')
               ->with('success', '✅ Application submitted! A visa specialist will contact you within 24 hours.');
    }
}