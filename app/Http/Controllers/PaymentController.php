<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $lang = session('locale', 'en');
        $tr   = HomeController::getTranslations($lang);
        return view('payment.index', compact('tr'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'full_name'      => 'required|string|max:255',
            'email'          => 'required|email',
            'phone'          => 'required|string|max:20',
            'plan'           => 'required|string',
            'payment_method' => 'required',
            'transaction_id' => 'required|string|max:100',
        ]);

        Payment::create([
            'full_name'      => $request->full_name,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'plan'           => $request->plan,
            'payment_method' => $request->payment_method,
            'transaction_id' => $request->transaction_id,
            'notes'          => $request->notes,
            'status'         => 'pending',
            'user_id'        => auth()->id(),
        ]);

        return redirect()->route('payment')
               ->with('success', '✅ Payment submitted! Our team will verify and activate your account within 2 hours.');
    }
}