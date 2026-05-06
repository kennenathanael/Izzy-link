<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DrivingController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GermanDocsController;
use App\Http\Controllers\LocationController;

// ── Public Routes ──────────────────────────────────────
Route::get('/',               [HomeController::class,      'index'])->name('home');
Route::get('/driving',        [DrivingController::class,   'index'])->name('driving');
Route::post('/driving/apply', [DrivingController::class,   'apply'])->name('driving.apply');
Route::get('/language',       [LanguageController::class,  'index'])->name('language');
Route::post('/language/enroll',[LanguageController::class, 'enroll'])->name('language.enroll');
Route::get('/visa',           [VisaController::class,      'index'])->name('visa');
Route::post('/visa/apply',    [VisaController::class,      'apply'])->name('visa.apply');
Route::get('/german-docs',    [GermanDocsController::class,'index'])->name('german-docs');
Route::get('/locations',      [LocationController::class,  'index'])->name('locations');
Route::get('/contact',        [LocationController::class,  'contact'])->name('contact');
Route::post('/contact/send',  function (Request $request) {
    return back()->with('msg_success',
        '✅ Message sent! We will respond within 24 hours.');
})->name('contact.send');
Route::get('/payment',        [PaymentController::class,   'index'])->name('payment');
Route::post('/payment/process',[PaymentController::class,  'process'])->name('payment.process');

// Language Switcher
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr', 'de'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

// ── Student Space (Auth Protected) ────────────────────
Route::middleware(['auth'])->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
    Route::get('/student/profile',   [StudentController::class, 'profile'])->name('student.profile');
    Route::get('/student/files',     [StudentController::class, 'files'])->name('student.files');
});

// ── Auth Routes ────────────────────────────────────────
// Auth routes
Route::get('/login', function () {
    $lang = session('locale', 'en');
    $tr   = App\Http\Controllers\HomeController::getTranslations($lang);
    return view('auth.login', compact('tr'));
})->name('login');

Route::get('/register', function () {
    $lang = session('locale', 'en');
    $tr   = App\Http\Controllers\HomeController::getTranslations($lang);
    return view('auth.register', compact('tr'));
})->name('register');

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/student/dashboard');
    }
    return back()->with('error', 'Invalid email or password.');
})->name('login.post');

Route::post('/register', function (Request $request) {
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|min:8',
    ]);
    $user = \App\Models\User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => bcrypt($request->password),
    ]);
    Auth::login($user);
    return redirect('/student/dashboard');
})->name('register.post');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');
