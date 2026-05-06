@extends('layouts.app')
@section('title', $tr['drv_title'] ?? 'Easy Driving')

@section('content')

{{-- PAGE HEADER --}}
<section style="background:linear-gradient(135deg,#0d1b2a,#1a3c6e);
                padding:80px 0 60px;position:relative;overflow:hidden;">
    <div style="position:absolute;width:400px;height:400px;border-radius:50%;
                background:radial-gradient(circle,rgba(232,160,32,0.08) 0%,
                transparent 70%);top:-100px;right:-80px;"></div>
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"
                       style="color:rgba(255,255,255,0.55);font-size:0.82rem;">
                        {{ $tr['breadcrumb_home'] }}
                    </a>
                </li>
                <li class="breadcrumb-item active"
                    style="color:var(--accent);font-size:0.82rem;">
                    {{ $tr['drv_tag'] }}
                </li>
            </ol>
        </nav>
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="ph-service-tag">
                    <i class="bi bi-car-front-fill"></i>
                    {{ $tr['drv_tag'] }}
                </div>
                <h1 class="ph-title">
                    Easy <span>Driving</span>
                </h1>
                <p class="ph-subtitle">{{ $tr['drv_subtitle'] }}</p>
                <div class="d-flex gap-3 flex-wrap mt-4">
                    <a href="#register" class="btn-ph-primary">
                        <i class="bi bi-pencil-fill"></i>
                        {{ $tr['register_now'] }}
                    </a>
                    <a href="#centers" class="btn-ph-outline">
                        <i class="bi bi-building"></i>
                        {{ $tr['drv_view_centers'] }}
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-flex justify-content-end"
                 data-aos="fade-left">
                <div class="ph-visual">
                    <div class="phv-icon-main">
                        <i class="bi bi-car-front-fill"></i>
                    </div>
                    <div class="phv-badge phv-b1">
                        <i class="bi bi-people-fill"></i>
                        500+ {{ $tr['drv_licensed'] }}
                    </div>
                    <div class="phv-badge phv-b2">
                        <i class="bi bi-building"></i>
                        4 {{ $tr['drv_centers'] }}
                    </div>
                    <div class="phv-badge phv-b3">
                        <i class="bi bi-patch-check-fill"></i>
                        {{ $tr['trust_certified'] }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- QUICK STATS --}}
<section style="background:#f4f7fc;padding:50px 0;">
    <div class="container">
        <div class="row g-3">
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="0">
                <div class="qs-card">
                    <div class="qs-icon"
                         style="background:linear-gradient(135deg,var(--primary),
                                var(--primary-light));">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="qs-number">500+</div>
                    <div class="qs-label">{{ $tr['drv_licensed'] }}</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="qs-card">
                    <div class="qs-icon"
                         style="background:linear-gradient(135deg,var(--accent-dark),
                                var(--accent));">
                        <i class="bi bi-building-fill"></i>
                    </div>
                    <div class="qs-number">4</div>
                    <div class="qs-label">{{ $tr['drv_centers'] }}</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="qs-card">
                    <div class="qs-icon"
                         style="background:linear-gradient(135deg,#1a6e3c,#28a745);">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <div class="qs-number">95%</div>
                    <div class="qs-label">{{ $tr['drv_pass'] }}</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="qs-card">
                    <div class="qs-icon"
                         style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                        <i class="bi bi-calendar-check-fill"></i>
                    </div>
                    <div class="qs-number">4</div>
                    <div class="qs-label">{{ $tr['drv_categories'] }}</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ABOUT --}}
<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="section-label">{{ $tr['drv_about_label'] }}</div>
                <h2 class="section-title">{{ $tr['drv_about_title'] }}</h2>
                <div class="divider-accent"></div>
                <p style="color:#6c7a89;font-size:0.95rem;line-height:1.8;margin-bottom:20px;">
                    {{ $tr['drv_about_p1'] }}
                </p>
                <p style="color:#6c7a89;font-size:0.95rem;line-height:1.8;margin-bottom:30px;">
                    {{ $tr['drv_about_p2'] }}
                </p>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="feature-tick">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['drv_f1'] }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-tick">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['drv_f2'] }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-tick">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['drv_f3'] }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-tick">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['drv_f4'] }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-tick">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['drv_f5'] }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-tick">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['drv_f6'] }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="license-card"
                             style="background:linear-gradient(135deg,#1a3c6e,#2a5298);">
                            <div class="lc-letter">A</div>
                            <div class="lc-name">{{ $tr['drv_motorcycle'] }}</div>
                            <div class="lc-desc">{{ $tr['drv_2wheel'] }}</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="license-card"
                             style="background:linear-gradient(135deg,#c8860f,#e8a020);">
                            <div class="lc-letter">B</div>
                            <div class="lc-name">{{ $tr['drv_car'] }}</div>
                            <div class="lc-desc">{{ $tr['drv_standard'] }}</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="license-card"
                             style="background:linear-gradient(135deg,#1a6e3c,#28a745);">
                            <div class="lc-letter">C</div>
                            <div class="lc-name">{{ $tr['drv_truck'] }}</div>
                            <div class="lc-desc">{{ $tr['drv_heavy'] }}</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="license-card"
                             style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                            <div class="lc-letter">D</div>
                            <div class="lc-name">{{ $tr['drv_bus'] }}</div>
                            <div class="lc-desc">{{ $tr['drv_passenger'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- TRAINING CENTERS --}}
<section class="section-padding" id="centers" style="background:#f4f7fc;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label">{{ $tr['drv_centers_label'] }}</div>
            <h2 class="section-title">{{ $tr['drv_centers_title'] }}</h2>
            <div class="divider-accent mx-auto"></div>
            <p style="color:#6c7a89;font-size:0.95rem;">
                {{ $tr['drv_centers_sub'] }}
            </p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="training-center-card hq">
                    <div class="tc-hq-tag">{{ $tr['headquarters'] }}</div>
                    <div class="tc-number">01</div>
                    <div class="tc-icon"><i class="bi bi-building-fill"></i></div>
                    <h5 class="tc-name">Carrefour</h5>
                    <p class="tc-location">
                        <i class="bi bi-geo-alt-fill"></i> Yaoundé
                    </p>
                    <div class="tc-features">
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_all_cats'] }}</span>
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_theory_hall'] }}</span>
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_track'] }}</span>
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_main_office'] }}</span>
                    </div>
                    <a href="#register" class="tc-btn">{{ $tr['drv_register_here'] }}</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="training-center-card">
                    <div class="tc-number">02</div>
                    <div class="tc-icon"><i class="bi bi-building"></i></div>
                    <h5 class="tc-name">Nkomo</h5>
                    <p class="tc-location">
                        <i class="bi bi-geo-alt-fill"></i> Yaoundé
                    </p>
                    <div class="tc-features">
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_cat_ab'] ?? 'Cat. A & B' }}</span>
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_theory_hall'] }}</span>
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_practice'] }}</span>
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_parking'] }}</span>
                    </div>
                    <a href="#register" class="tc-btn">{{ $tr['drv_register_here'] }}</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="training-center-card">
                    <div class="tc-number">03</div>
                    <div class="tc-icon"><i class="bi bi-building"></i></div>
                    <h5 class="tc-name">Essos</h5>
                    <p class="tc-location">
                        <i class="bi bi-geo-alt-fill"></i>
                        Hôtel du Plateau, Yaoundé
                    </p>
                    <div class="tc-features">
                        <span><i class="bi bi-check2"></i> Cat. B & C</span>
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_theory_hall'] }}</span>
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_highway'] }}</span>
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_weekend_cls'] }}</span>
                    </div>
                    <a href="#register" class="tc-btn">{{ $tr['drv_register_here'] }}</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="training-center-card">
                    <div class="tc-number">04</div>
                    <div class="tc-icon"><i class="bi bi-building"></i></div>
                    <h5 class="tc-name">Bonas</h5>
                    <p class="tc-location">
                        <i class="bi bi-geo-alt-fill"></i> Yaoundé
                    </p>
                    <div class="tc-features">
                        <span><i class="bi bi-check2"></i> Cat. A & B</span>
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_theory_hall'] }}</span>
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_evening_cls'] }}</span>
                        <span><i class="bi bi-check2"></i> {{ $tr['drv_weekend_cls'] }}</span>
                    </div>
                    <a href="#register" class="tc-btn">{{ $tr['drv_register_here'] }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- HOW IT WORKS --}}
<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label">{{ $tr['drv_process_label'] }}</div>
            <h2 class="section-title">{{ $tr['drv_process_title'] }}</h2>
            <div class="divider-accent mx-auto"></div>
        </div>
        <div class="row g-0">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="process-step">
                    <div class="ps-line"></div>
                    <div class="ps-bubble">01</div>
                    <div class="ps-icon"><i class="bi bi-pencil-fill"></i></div>
                    <h6 class="ps-title">{{ $tr['drv_p1_title'] }}</h6>
                    <p class="ps-desc">{{ $tr['drv_p1_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step">
                    <div class="ps-line"></div>
                    <div class="ps-bubble">02</div>
                    <div class="ps-icon"><i class="bi bi-book-fill"></i></div>
                    <h6 class="ps-title">{{ $tr['drv_p2_title'] }}</h6>
                    <p class="ps-desc">{{ $tr['drv_p2_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step">
                    <div class="ps-line"></div>
                    <div class="ps-bubble">03</div>
                    <div class="ps-icon"><i class="bi bi-car-front-fill"></i></div>
                    <h6 class="ps-title">{{ $tr['drv_p3_title'] }}</h6>
                    <p class="ps-desc">{{ $tr['drv_p3_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step no-line">
                    <div class="ps-bubble">04</div>
                    <div class="ps-icon"><i class="bi bi-trophy-fill"></i></div>
                    <h6 class="ps-title">{{ $tr['drv_p4_title'] }}</h6>
                    <p class="ps-desc">{{ $tr['drv_p4_desc'] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- REGISTRATION FORM --}}
<section class="section-padding" id="register"
         style="background:linear-gradient(135deg,#0d1b2a,#1a3c6e);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5" data-aos="fade-up">
                    <div class="section-label"
                         style="color:rgba(255,255,255,0.55);">
                        {{ $tr['drv_form_label'] }}
                    </div>
                    <h2 class="section-title" style="color:#fff;">
                        {{ $tr['drv_form_title'] }}
                    </h2>
                    <div class="divider-accent mx-auto"></div>
                    <p style="color:rgba(255,255,255,0.6);font-size:0.93rem;">
                        {{ $tr['drv_form_sub'] }}
                    </p>
                </div>

                @if(session('success'))
                    <div class="alert-custom-success mb-4">
                        <i class="bi bi-check-circle-fill"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="reg-form-card" data-aos="fade-up">
                    <form method="POST" action="{{ route('driving.apply') }}">
                        @csrf

                        <div class="form-section-title">
                            <i class="bi bi-person-fill"></i>
                            {{ $tr['personal_info'] }}
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['full_name'] }} *
                                </label>
                                <input type="text" name="full_name"
                                       class="input-custom @error('full_name') is-error @enderror"
                                       placeholder="{{ $tr['full_name'] }}"
                                       value="{{ old('full_name') }}" required/>
                                @error('full_name')
                                    <div class="error-msg">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['dob'] }}
                                </label>
                                <input type="date" name="date_of_birth"
                                       class="input-custom"
                                       value="{{ old('date_of_birth') }}"/>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['email'] }} *
                                </label>
                                <input type="email" name="email"
                                       class="input-custom @error('email') is-error @enderror"
                                       placeholder="you@email.com"
                                       value="{{ old('email') }}" required/>
                                @error('email')
                                    <div class="error-msg">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['phone'] }} *
                                </label>
                                <input type="tel" name="phone"
                                       class="input-custom @error('phone') is-error @enderror"
                                       placeholder="+237 6XX XXX XXX"
                                       value="{{ old('phone') }}" required/>
                                @error('phone')
                                    <div class="error-msg">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-section-title">
                            <i class="bi bi-car-front-fill"></i>
                            {{ $tr['drv_training_pref'] }}
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['drv_license_cat'] }} *
                                </label>
                                <select name="license_type"
                                        class="input-custom" required>
                                    <option value="" disabled selected>
                                        {{ $tr['drv_select_cat'] }}
                                    </option>
                                    <option value="A" {{ old('license_type')=='A'?'selected':'' }}>
                                        {{ $tr['drv_cat_a'] }}
                                    </option>
                                    <option value="B" {{ old('license_type')=='B'?'selected':'' }}>
                                        {{ $tr['drv_cat_b'] }}
                                    </option>
                                    <option value="C" {{ old('license_type')=='C'?'selected':'' }}>
                                        {{ $tr['drv_cat_c'] }}
                                    </option>
                                    <option value="D" {{ old('license_type')=='D'?'selected':'' }}>
                                        {{ $tr['drv_cat_d'] }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['preferred_center'] }} *
                                </label>
                                <select name="preferred_center"
                                        class="input-custom" required>
                                    <option value="" disabled selected>
                                        {{ $tr['select_center'] }}
                                    </option>
                                    <option value="center_1">
                                        {{ $tr['center_carrefour'] }}
                                    </option>
                                    <option value="center_2">
                                        {{ $tr['center_nkomo'] }}
                                    </option>
                                    <option value="center_3">
                                        {{ $tr['center_essos'] }}
                                    </option>
                                    <option value="center_4">
                                        {{ $tr['center_bonas'] }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['preferred_schedule'] }} *
                                </label>
                                <select name="preferred_schedule"
                                        class="input-custom" required>
                                    <option value="" disabled selected>
                                        {{ $tr['select_schedule'] }}
                                    </option>
                                    <option value="morning">
                                        {{ $tr['morning'] }}
                                    </option>
                                    <option value="afternoon">
                                        {{ $tr['afternoon'] }}
                                    </option>
                                    <option value="evening">
                                        {{ $tr['evening'] }}
                                    </option>
                                    <option value="weekend">
                                        {{ $tr['weekend'] }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['notes'] }}
                                </label>
                                <input type="text" name="notes"
                                       class="input-custom"
                                       placeholder="{{ $tr['notes_ph'] }}"
                                       value="{{ old('notes') }}"/>
                            </div>
                        </div>

                        <div class="form-notice">
                            <i class="bi bi-info-circle-fill"></i>
                            {{ $tr['form_notice_app'] }}
                        </div>

                        <div class="d-flex gap-3 flex-wrap mt-4">
                            <button type="submit" class="btn-form-submit">
                                <i class="bi bi-send-fill"></i>
                                {{ $tr['drv_submit'] }}
                            </button>
                            <a href="#main-app" target="_blank"
                               class="btn-form-app">
                                <i class="bi bi-box-arrow-up-right"></i>
                                {{ $tr['go_main_app'] }}
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- BOTTOM CTA --}}
<section style="background:#f4f7fc;padding:70px 0;">
    <div class="container text-center" data-aos="zoom-in">
        <h3 style="font-size:1.7rem;font-weight:800;
                   color:var(--primary);margin-bottom:12px;">
            {{ $tr['drv_cta_title'] }}
        </h3>
        <p style="color:#6c7a89;font-size:0.93rem;margin-bottom:28px;">
            {{ $tr['drv_cta_sub'] }}
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ url('/contact') }}"
               style="background:var(--primary);color:#fff;padding:12px 28px;
                      border-radius:10px;font-weight:600;font-size:0.9rem;
                      display:inline-flex;align-items:center;gap:8px;">
                <i class="bi bi-envelope-fill"></i>
                {{ $tr['contact_us'] }}
            </a>
            <a href="{{ url('/locations') }}"
               style="background:#fff;color:var(--primary);
                      border:2px solid var(--primary);
                      padding:11px 26px;border-radius:10px;font-weight:600;
                      font-size:0.9rem;display:inline-flex;
                      align-items:center;gap:8px;">
                <i class="bi bi-geo-alt-fill"></i>
                {{ $tr['view_all_centers'] }}
            </a>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
.breadcrumb { background:transparent; padding:0; }
.ph-service-tag {
    display:inline-flex;align-items:center;gap:8px;
    background:rgba(232,160,32,0.15);
    border:1px solid rgba(232,160,32,0.3);
    color:var(--accent);font-size:0.8rem;font-weight:600;
    padding:7px 16px;border-radius:50px;margin-bottom:18px;
}
.ph-title {
    font-size:2.8rem;font-weight:800;color:#fff;
    line-height:1.2;margin-bottom:16px;
}
.ph-title span { color:var(--accent); }
.ph-subtitle {
    color:rgba(255,255,255,0.68);font-size:0.97rem;
    line-height:1.8;max-width:500px;
}
.btn-ph-primary {
    display:inline-flex;align-items:center;gap:8px;
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark) !important;font-weight:700;
    padding:12px 26px;border-radius:10px;font-size:0.9rem;
    box-shadow:0 5px 20px rgba(232,160,32,0.35);transition:all 0.3s;
}
.btn-ph-primary:hover { transform:translateY(-2px); }
.btn-ph-outline {
    display:inline-flex;align-items:center;gap:8px;
    background:rgba(255,255,255,0.1);
    border:2px solid rgba(255,255,255,0.3);
    color:#fff !important;font-weight:600;
    padding:11px 24px;border-radius:10px;font-size:0.9rem;transition:all 0.3s;
}
.btn-ph-outline:hover { background:rgba(255,255,255,0.18); }
.ph-visual {
    position:relative;width:300px;height:300px;
    display:flex;align-items:center;justify-content:center;
}
.phv-icon-main {
    width:140px;height:140px;border-radius:50%;
    background:rgba(255,255,255,0.1);
    border:2px solid rgba(255,255,255,0.2);
    display:flex;align-items:center;justify-content:center;
    font-size:3.5rem;color:var(--accent);backdrop-filter:blur(20px);
}
.phv-badge {
    position:absolute;background:rgba(255,255,255,0.95);
    border-radius:10px;padding:8px 14px;
    font-size:0.75rem;font-weight:700;color:var(--primary);
    display:flex;align-items:center;gap:6px;
    box-shadow:0 5px 20px rgba(0,0,0,0.15);
}
.phv-badge i { color:var(--accent); }
.phv-b1 { top:20px;right:0;animation:fl1 3s ease-in-out infinite; }
.phv-b2 { bottom:60px;right:-10px;animation:fl2 3.5s ease-in-out infinite; }
.phv-b3 { top:100px;left:0;animation:fl3 4s ease-in-out infinite; }
.qs-card {
    background:#fff;border-radius:14px;padding:24px 20px;
    text-align:center;box-shadow:0 4px 20px rgba(0,0,0,0.06);transition:all 0.3s;
}
.qs-card:hover { transform:translateY(-4px); }
.qs-icon {
    width:48px;height:48px;border-radius:12px;
    display:flex;align-items:center;justify-content:center;
    font-size:1.2rem;color:#fff;margin:0 auto 12px;
}
.qs-number {
    font-size:1.8rem;font-weight:800;color:var(--primary);
    font-family:'Poppins',sans-serif;line-height:1;
}
.qs-label { font-size:0.78rem;color:#6c7a89;margin-top:5px; }
.feature-tick {
    display:flex;align-items:center;gap:9px;
    font-size:0.87rem;font-weight:600;color:#2d3748;
    background:var(--light-bg);padding:10px 14px;border-radius:9px;
}
.feature-tick i { color:var(--accent);font-size:0.9rem; }
.license-card {
    border-radius:16px;padding:28px 20px;text-align:center;
    position:relative;overflow:hidden;color:#fff;transition:all 0.3s;
}
.license-card:hover { transform:translateY(-4px); }
.lc-letter {
    font-size:3rem;font-weight:800;color:rgba(255,255,255,0.9);
    font-family:'Poppins',sans-serif;line-height:1;margin-bottom:6px;
}
.lc-name { font-size:0.9rem;font-weight:700;color:#fff;margin-bottom:4px; }
.lc-desc { font-size:0.72rem;color:rgba(255,255,255,0.65); }
.training-center-card {
    background:#fff;border:2px solid rgba(0,0,0,0.06);
    border-radius:18px;padding:30px 22px;text-align:center;
    position:relative;overflow:hidden;height:100%;transition:all 0.3s;
}
.training-center-card:hover {
    border-color:var(--primary);transform:translateY(-5px);
    box-shadow:0 15px 40px rgba(26,60,110,0.12);
}
.training-center-card.hq {
    border-color:var(--accent);
    background:linear-gradient(180deg,#fffdf5,#fff);
}
.tc-hq-tag {
    position:absolute;top:0;left:0;right:0;
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark);font-size:0.65rem;font-weight:800;
    text-transform:uppercase;letter-spacing:0.5px;padding:5px;
}
.tc-number {
    position:absolute;top:14px;right:16px;
    font-size:2.5rem;font-weight:800;color:rgba(26,60,110,0.06);
    font-family:'Poppins',sans-serif;line-height:1;
}
.tc-icon {
    width:58px;height:58px;border-radius:14px;background:var(--light-bg);
    display:flex;align-items:center;justify-content:center;
    font-size:1.4rem;color:var(--primary);margin:20px auto 14px;
}
.tc-name { font-size:1.05rem;font-weight:700;color:var(--primary);margin-bottom:6px; }
.tc-location { font-size:0.78rem;color:#6c7a89;margin-bottom:16px; }
.tc-location i { color:var(--accent); }
.tc-features { text-align:left;margin-bottom:20px; }
.tc-features span {
    display:flex;font-size:0.8rem;color:#2d3748;
    padding:4px 0;align-items:center;gap:7px;
}
.tc-features span i { color:var(--accent); }
.tc-btn {
    display:block;background:var(--primary);color:#fff !important;
    font-size:0.82rem;font-weight:600;padding:10px 20px;
    border-radius:9px;text-align:center;transition:all 0.3s;
}
.tc-btn:hover { background:var(--primary-light);transform:translateY(-1px); }
.process-step { text-align:center;padding:30px 20px;position:relative; }
.ps-line {
    position:absolute;top:45px;left:50%;right:-50%;
    height:2px;background:linear-gradient(90deg,var(--accent),
    rgba(232,160,32,0.2));z-index:0;
}
.no-line .ps-line { display:none; }
.ps-bubble {
    width:40px;height:40px;border-radius:50%;
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark);font-size:0.8rem;font-weight:800;
    display:flex;align-items:center;justify-content:center;
    margin:0 auto 16px;position:relative;z-index:1;
    box-shadow:0 3px 15px rgba(232,160,32,0.35);
}
.ps-icon {
    width:60px;height:60px;border-radius:16px;
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    display:flex;align-items:center;justify-content:center;
    font-size:1.4rem;color:#fff;margin:0 auto 16px;
    box-shadow:0 5px 20px rgba(26,60,110,0.2);
}
.ps-title { font-size:0.95rem;font-weight:700;color:var(--primary);margin-bottom:8px; }
.ps-desc { font-size:0.82rem;color:#6c7a89;line-height:1.7;margin:0; }
.reg-form-card {
    background:#fff;border-radius:20px;padding:40px;
    box-shadow:0 20px 60px rgba(0,0,0,0.2);
}
.form-section-title {
    font-size:0.85rem;font-weight:700;text-transform:uppercase;
    letter-spacing:0.8px;color:var(--primary);margin-bottom:16px;
    padding-bottom:10px;border-bottom:2px solid var(--light-bg);
    display:flex;align-items:center;gap:8px;
}
.form-section-title i { color:var(--accent); }
.form-label-custom {
    display:block;font-size:0.83rem;font-weight:600;
    color:#2d3748;margin-bottom:6px;
}
.input-custom {
    width:100%;padding:11px 14px;font-size:0.88rem;
    border:2px solid #e8ecf0;border-radius:10px;
    color:#2d3748;background:#fff;outline:none;
    transition:all 0.3s;font-family:'Inter',sans-serif;appearance:auto;
}
.input-custom:focus {
    border-color:var(--primary);
    box-shadow:0 0 0 3px rgba(26,60,110,0.08);
}
.input-custom.is-error { border-color:#dc3545; }
.error-msg { font-size:0.78rem;color:#dc3545;margin-top:5px; }
.form-notice {
    background:rgba(26,60,110,0.06);
    border:1px solid rgba(26,60,110,0.12);
    border-radius:10px;padding:14px 18px;
    font-size:0.83rem;color:#2d3748;line-height:1.6;
    display:flex;align-items:flex-start;gap:10px;
}
.form-notice i { color:var(--primary);font-size:1rem;margin-top:1px;flex-shrink:0; }
.btn-form-submit {
    display:inline-flex;align-items:center;gap:8px;
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    color:#fff;border:none;padding:13px 28px;border-radius:10px;
    font-weight:700;font-size:0.92rem;cursor:pointer;transition:all 0.3s;
    box-shadow:0 5px 20px rgba(26,60,110,0.3);font-family:'Inter',sans-serif;
}
.btn-form-submit:hover { transform:translateY(-2px); }
.btn-form-app {
    display:inline-flex;align-items:center;gap:8px;
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark) !important;padding:13px 26px;border-radius:10px;
    font-weight:700;font-size:0.92rem;transition:all 0.3s;
}
.btn-form-app:hover { transform:translateY(-2px); }
.alert-custom-success {
    background:rgba(40,167,69,0.12);border:1px solid rgba(40,167,69,0.25);
    color:#155724;border-radius:12px;padding:16px 20px;
    display:flex;align-items:center;gap:10px;font-size:0.88rem;
}
.alert-custom-success i { font-size:1.1rem;color:#28a745; }
@media(max-width:991.98px){
    .ph-title { font-size:2rem; }
    .reg-form-card { padding:25px; }
}
</style>
@endpush
