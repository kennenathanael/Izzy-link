@extends('layouts.app')
@section('title', $tr['visa_page_tag'] ?? 'Visa Assistance')

@section('content')

{{-- PAGE HEADER --}}
<section style="background:linear-gradient(135deg,#0d1b2a,#1a3c6e);
                padding:80px 0 60px;position:relative;overflow:hidden;">
    <div style="position:absolute;width:500px;height:500px;border-radius:50%;
                background:radial-gradient(circle,rgba(232,160,32,0.07) 0%,
                transparent 70%);top:-150px;right:-100px;"></div>
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
                    {{ $tr['visa_page_tag'] }}
                </li>
            </ol>
        </nav>
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="ph-service-tag">
                    <i class="bi bi-passport-fill"></i>
                    {{ $tr['visa_page_tag'] }}
                </div>
                <h1 class="ph-title">{{ $tr['visa_page_title'] }}</h1>
                <p class="ph-subtitle">{{ $tr['visa_page_sub'] }}</p>
                <div class="d-flex gap-3 flex-wrap mt-4">
                    <a href="#apply" class="btn-ph-primary">
                        <i class="bi bi-send-fill"></i>
                        {{ $tr['visa_start'] }}
                    </a>
                    <a href="#countries" class="btn-ph-outline">
                        <i class="bi bi-globe2"></i>
                        {{ $tr['visa_view_cntrs'] }}
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-flex justify-content-end"
                 data-aos="fade-left">
                <div class="visa-header-visual">
                    <div class="vhv-center">
                        <i class="bi bi-passport-fill"></i>
                    </div>
                    <div class="vhv-flag vhv-f1">🇩🇪 Germany</div>
                    <div class="vhv-flag vhv-f2">🇫🇷 France</div>
                    <div class="vhv-flag vhv-f3">🇱🇹 Lithuania</div>
                    <div class="vhv-badge">
                        <i class="bi bi-patch-check-fill"></i> 98% {{ $tr['visa_stat_rate'] }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- STATS --}}
<section style="background:#f4f7fc;padding:50px 0;">
    <div class="container">
        <div class="row g-3">
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="0">
                <div class="qs-card">
                    <div class="qs-icon"
                         style="background:linear-gradient(135deg,var(--primary),
                                var(--primary-light));">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <div class="qs-number">98%</div>
                    <div class="qs-label">{{ $tr['visa_stat_rate'] }}</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="qs-card">
                    <div class="qs-icon"
                         style="background:linear-gradient(135deg,var(--accent-dark),
                                var(--accent));">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="qs-number">200+</div>
                    <div class="qs-label">{{ $tr['visa_stat_count'] }}</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="qs-card">
                    <div class="qs-icon"
                         style="background:linear-gradient(135deg,#1a6e3c,#28a745);">
                        <i class="bi bi-globe2"></i>
                    </div>
                    <div class="qs-number">3</div>
                    <div class="qs-label">{{ $tr['visa_stat_cntrs'] }}</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="qs-card">
                    <div class="qs-icon"
                         style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="qs-number">5</div>
                    <div class="qs-label">{{ $tr['visa_stat_types'] }}</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- COUNTRIES --}}
<section class="section-padding" id="countries" style="background:#fff;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label">{{ $tr['visa_dest_label'] }}</div>
            <h2 class="section-title">{{ $tr['visa_dest_title'] }}</h2>
            <div class="divider-accent mx-auto"></div>
            <p style="color:#6c7a89;font-size:0.95rem;max-width:580px;margin:0 auto;">
                {{ $tr['visa_dest_sub'] }}
            </p>
        </div>

        {{-- GERMANY --}}
        <div class="country-section mb-5" data-aos="fade-up">
            <div class="cs-header">
                <div class="cs-flag-wrap">
                    <span class="cs-flag">🇩🇪</span>
                    <div>
                        <h3 class="cs-country-name">Germany</h3>
                        <span class="cs-country-sub">{{ $tr['visa_de_types'] }}</span>
                    </div>
                </div>
                <div class="cs-stats">
                    <div class="css-item">
                        <div class="css-num">95%</div>
                        <div class="css-lbl">{{ $tr['visa_stat_rate'] }}</div>
                    </div>
                    <div class="css-item">
                        <div class="css-num">100+</div>
                        <div class="css-lbl">{{ $tr['visa_stat_count'] }}</div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-3">
                {{-- Study --}}
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="visa-type-card">
                        <div class="vtc-header"
                             style="background:linear-gradient(135deg,#1a3c6e,#2a5298);">
                            <div class="vtc-icon">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <div>
                                <div class="vtc-country">Germany</div>
                                <div class="vtc-name">{{ $tr['visa_de_study'] }}</div>
                            </div>
                            <div class="vtc-de-flag">🇩🇪</div>
                        </div>
                        <div class="vtc-body">
                            <p class="vtc-desc">{{ $tr['visa_de_desc'] }}</p>
                            <div class="vtc-includes">
                                <div class="vti-title">{{ $tr['visa_we_handle'] }}</div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    University admission letter assistance
                                </div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Blocked account (Sperrkonto) guidance
                                </div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Health insurance arrangement
                                </div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Complete document preparation
                                </div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Embassy appointment booking
                                </div>
                            </div>
                            <div class="vtc-actions">
                                <a href="#apply" class="vta-btn-main"
                                   onclick="prefillVisa('germany','germany_study')">
                                    <i class="bi bi-send-fill"></i>
                                    {{ $tr['apply_now'] }}
                                </a>
                                <a href="#main-app" target="_blank" class="vta-btn-app">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Work --}}
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="visa-type-card">
                        <div class="vtc-header"
                             style="background:linear-gradient(135deg,#1a6e3c,#28a745);">
                            <div class="vtc-icon">
                                <i class="bi bi-briefcase-fill"></i>
                            </div>
                            <div>
                                <div class="vtc-country">Germany</div>
                                <div class="vtc-name">{{ $tr['visa_de_work'] }}</div>
                            </div>
                            <div class="vtc-de-flag">🇩🇪</div>
                        </div>
                        <div class="vtc-body">
                            <p class="vtc-desc">
                                For skilled professionals with a job offer from a German employer.
                                We guide you through the full recognition and application process.
                            </p>
                            <div class="vtc-includes">
                                <div class="vti-title">{{ $tr['visa_we_handle'] }}</div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Qualification recognition support
                                </div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Job contract review assistance
                                </div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Visa application preparation
                                </div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Financial proof documentation
                                </div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Embassy submission support
                                </div>
                            </div>
                            <div class="vtc-actions">
                                <a href="#apply" class="vta-btn-main"
                                   style="background:linear-gradient(135deg,#1a6e3c,#28a745);"
                                   onclick="prefillVisa('germany','germany_work')">
                                    <i class="bi bi-send-fill"></i>
                                    {{ $tr['apply_now'] }}
                                </a>
                                <a href="#main-app" target="_blank" class="vta-btn-app">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Business --}}
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="visa-type-card">
                        <div class="vtc-header"
                             style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                            <div class="vtc-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <div>
                                <div class="vtc-country">Germany</div>
                                <div class="vtc-name">{{ $tr['visa_de_biz'] }}</div>
                            </div>
                            <div class="vtc-de-flag">🇩🇪</div>
                        </div>
                        <div class="vtc-body">
                            <p class="vtc-desc">
                                For entrepreneurs attending meetings, conferences,
                                or exploring business opportunities in Germany.
                            </p>
                            <div class="vtc-includes">
                                <div class="vti-title">{{ $tr['visa_we_handle'] }}</div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Invitation letter verification
                                </div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Business registration documents
                                </div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Travel itinerary preparation
                                </div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Bank statement guidance
                                </div>
                                <div class="vti-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Embassy appointment support
                                </div>
                            </div>
                            <div class="vtc-actions">
                                <a href="#apply" class="vta-btn-main"
                                   style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);"
                                   onclick="prefillVisa('germany','germany_business')">
                                    <i class="bi bi-send-fill"></i>
                                    {{ $tr['apply_now'] }}
                                </a>
                                <a href="#main-app" target="_blank" class="vta-btn-app">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- FRANCE --}}
        <div class="country-section mb-5" data-aos="fade-up">
            <div class="cs-header"
                 style="background:linear-gradient(135deg,#002395,#ED2939);">
                <div class="cs-flag-wrap">
                    <span class="cs-flag">🇫🇷</span>
                    <div>
                        <h3 class="cs-country-name" style="color:#fff;">France</h3>
                        <span class="cs-country-sub"
                              style="color:rgba(255,255,255,0.7);">
                            {{ $tr['visa_fr_types'] }}
                        </span>
                    </div>
                </div>
                <div class="cs-stats">
                    <div class="css-item">
                        <div class="css-num" style="color:#fff;">98%</div>
                        <div class="css-lbl" style="color:rgba(255,255,255,0.7);">
                            {{ $tr['visa_stat_rate'] }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-3">
                <div class="col-lg-6 col-md-8 mx-auto" data-aos="fade-up">
                    <div class="visa-type-card">
                        <div class="vtc-header"
                             style="background:linear-gradient(135deg,#002395,#0032cc);">
                            <div class="vtc-icon">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <div>
                                <div class="vtc-country">France</div>
                                <div class="vtc-name">{{ $tr['visa_fr_student'] }}</div>
                            </div>
                            <div class="vtc-de-flag">🇫🇷</div>
                        </div>
                        <div class="vtc-body">
                            <p class="vtc-desc">{{ $tr['visa_fr_desc'] }}</p>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="vtc-includes">
                                        <div class="vti-title">{{ $tr['visa_we_handle'] }}</div>
                                        <div class="vti-item">
                                            <i class="bi bi-check-circle-fill"></i>
                                            Campus France pre-registration
                                        </div>
                                        <div class="vti-item">
                                            <i class="bi bi-check-circle-fill"></i>
                                            University application support
                                        </div>
                                        <div class="vti-item">
                                            <i class="bi bi-check-circle-fill"></i>
                                            Financial guarantee documentation
                                        </div>
                                        <div class="vti-item">
                                            <i class="bi bi-check-circle-fill"></i>
                                            Embassy interview coaching
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="vtc-includes">
                                        <div class="vti-title">{{ $tr['visa_requirements'] }}</div>
                                        <div class="vti-item">
                                            <i class="bi bi-arrow-right-circle-fill"
                                               style="color:var(--primary)"></i>
                                            Acceptance letter
                                        </div>
                                        <div class="vti-item">
                                            <i class="bi bi-arrow-right-circle-fill"
                                               style="color:var(--primary)"></i>
                                            Proof of financial resources
                                        </div>
                                        <div class="vti-item">
                                            <i class="bi bi-arrow-right-circle-fill"
                                               style="color:var(--primary)"></i>
                                            Valid passport (6+ months)
                                        </div>
                                        <div class="vti-item">
                                            <i class="bi bi-arrow-right-circle-fill"
                                               style="color:var(--primary)"></i>
                                            Health insurance document
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vtc-actions mt-3">
                                <a href="#apply" class="vta-btn-main"
                                   style="background:linear-gradient(135deg,#002395,#0032cc);"
                                   onclick="prefillVisa('france','france_student')">
                                    <i class="bi bi-send-fill"></i>
                                    {{ $tr['apply_now'] }}
                                </a>
                                <a href="#main-app" target="_blank" class="vta-btn-app">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                    {{ $tr['main_app'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- LITHUANIA --}}
        <div class="country-section" data-aos="fade-up">
            <div class="cs-header"
                 style="background:linear-gradient(135deg,#006A44,#c1272d);">
                <div class="cs-flag-wrap">
                    <span class="cs-flag">🇱🇹</span>
                    <div>
                        <h3 class="cs-country-name" style="color:#fff;">Lithuania</h3>
                        <span class="cs-country-sub"
                              style="color:rgba(255,255,255,0.7);">
                            {{ $tr['visa_lt_types'] }}
                        </span>
                    </div>
                </div>
                <div class="cs-stats">
                    <div class="css-item">
                        <div class="css-num" style="color:#fff;">97%</div>
                        <div class="css-lbl" style="color:rgba(255,255,255,0.7);">
                            {{ $tr['visa_stat_rate'] }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-3">
                <div class="col-lg-6 col-md-8 mx-auto" data-aos="fade-up">
                    <div class="visa-type-card">
                        <div class="vtc-header"
                             style="background:linear-gradient(135deg,#006A44,#008a58);">
                            <div class="vtc-icon">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <div>
                                <div class="vtc-country">Lithuania</div>
                                <div class="vtc-name">{{ $tr['visa_lt_student'] }}</div>
                            </div>
                            <div class="vtc-de-flag">🇱🇹</div>
                        </div>
                        <div class="vtc-body">
                            <p class="vtc-desc">{{ $tr['visa_lt_desc'] }}</p>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="vtc-includes">
                                        <div class="vti-title">{{ $tr['visa_we_handle'] }}</div>
                                        <div class="vti-item">
                                            <i class="bi bi-check-circle-fill"></i>
                                            University selection & application
                                        </div>
                                        <div class="vti-item">
                                            <i class="bi bi-check-circle-fill"></i>
                                            Admission letter assistance
                                        </div>
                                        <div class="vti-item">
                                            <i class="bi bi-check-circle-fill"></i>
                                            National D visa application
                                        </div>
                                        <div class="vti-item">
                                            <i class="bi bi-check-circle-fill"></i>
                                            Full file management
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="vtc-includes">
                                        <div class="vti-title">{{ $tr['visa_why_lt'] }}</div>
                                        <div class="vti-item">
                                            <i class="bi bi-star-fill"
                                               style="color:var(--accent)"></i>
                                            EU member — Schengen area
                                        </div>
                                        <div class="vti-item">
                                            <i class="bi bi-star-fill"
                                               style="color:var(--accent)"></i>
                                            Affordable tuition & living
                                        </div>
                                        <div class="vti-item">
                                            <i class="bi bi-star-fill"
                                               style="color:var(--accent)"></i>
                                            Programs in English
                                        </div>
                                        <div class="vti-item">
                                            <i class="bi bi-star-fill"
                                               style="color:var(--accent)"></i>
                                            Work permit while studying
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vtc-actions mt-3">
                                <a href="#apply" class="vta-btn-main"
                                   style="background:linear-gradient(135deg,#006A44,#008a58);"
                                   onclick="prefillVisa('lithuania','lithuania_student')">
                                    <i class="bi bi-send-fill"></i>
                                    {{ $tr['apply_now'] }}
                                </a>
                                <a href="#main-app" target="_blank" class="vta-btn-app">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                    {{ $tr['main_app'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- VISA PROCESS --}}
<section class="section-padding"
         style="background:linear-gradient(135deg,#0d1b2a,#1a3c6e);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label"
                 style="color:rgba(255,255,255,0.55);">
                {{ $tr['visa_process_label'] }}
            </div>
            <h2 class="section-title" style="color:#fff;">
                {{ $tr['visa_process_title'] }}
            </h2>
            <div class="divider-accent mx-auto"></div>
        </div>
        <div class="row g-4">
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="0">
                <div class="visa-process-step">
                    <div class="vps-bubble">01</div>
                    <div class="vps-icon"><i class="bi bi-chat-dots-fill"></i></div>
                    <div class="vps-title">{{ $tr['visa_p1'] }}</div>
                    <div class="vps-desc">{{ $tr['visa_p1_desc'] }}</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                <div class="visa-process-step">
                    <div class="vps-bubble">02</div>
                    <div class="vps-icon">
                        <i class="bi bi-file-earmark-text-fill"></i>
                    </div>
                    <div class="vps-title">{{ $tr['visa_p2'] }}</div>
                    <div class="vps-desc">{{ $tr['visa_p2_desc'] }}</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="200">
                <div class="visa-process-step">
                    <div class="vps-bubble">03</div>
                    <div class="vps-icon"><i class="bi bi-pencil-square"></i></div>
                    <div class="vps-title">{{ $tr['visa_p3'] }}</div>
                    <div class="vps-desc">{{ $tr['visa_p3_desc'] }}</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
                <div class="visa-process-step">
                    <div class="vps-bubble">04</div>
                    <div class="vps-icon">
                        <i class="bi bi-calendar-check-fill"></i>
                    </div>
                    <div class="vps-title">{{ $tr['visa_p4'] }}</div>
                    <div class="vps-desc">{{ $tr['visa_p4_desc'] }}</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="400">
                <div class="visa-process-step">
                    <div class="vps-bubble">05</div>
                    <div class="vps-icon"><i class="bi bi-send-fill"></i></div>
                    <div class="vps-title">{{ $tr['visa_p5'] }}</div>
                    <div class="vps-desc">{{ $tr['visa_p5_desc'] }}</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="500">
                <div class="visa-process-step">
                    <div class="vps-bubble"
                         style="background:linear-gradient(135deg,var(--accent),
                                var(--accent-dark));color:var(--dark);">06</div>
                    <div class="vps-icon"
                         style="background:linear-gradient(135deg,var(--accent),
                                var(--accent-dark));">
                        <i class="bi bi-passport-fill"></i>
                    </div>
                    <div class="vps-title" style="color:var(--accent);">
                        {{ $tr['visa_p6'] }}
                    </div>
                    <div class="vps-desc">{{ $tr['visa_p6_desc'] }}</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- APPLICATION FORM --}}
<section class="section-padding" id="apply" style="background:#f4f7fc;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="text-center mb-5" data-aos="fade-up">
                    <div class="section-label">{{ $tr['visa_apply_label'] }}</div>
                    <h2 class="section-title">{{ $tr['visa_apply_title'] }}</h2>
                    <div class="divider-accent mx-auto"></div>
                    <p style="color:#6c7a89;font-size:0.93rem;">
                        {{ $tr['visa_apply_sub'] }}
                    </p>
                </div>

                @if(session('success'))
                    <div class="alert-success-custom mb-4">
                        <i class="bi bi-check-circle-fill"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="visa-form-card" data-aos="fade-up">

                    {{-- Country Selector --}}
                    <div class="mb-4">
                        <div class="vcs-label">{{ $tr['visa_sel_country'] }}</div>
                        <div class="d-flex gap-3 flex-wrap">
                            <div class="vcs-option active" id="opt-germany"
                                 onclick="selectCountry('germany')">
                                <span class="vcs-flag">🇩🇪</span>
                                <span class="vcs-name">Germany</span>
                            </div>
                            <div class="vcs-option" id="opt-france"
                                 onclick="selectCountry('france')">
                                <span class="vcs-flag">🇫🇷</span>
                                <span class="vcs-name">France</span>
                            </div>
                            <div class="vcs-option" id="opt-lithuania"
                                 onclick="selectCountry('lithuania')">
                                <span class="vcs-flag">🇱🇹</span>
                                <span class="vcs-name">Lithuania</span>
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="{{ url('/visa/apply') }}">
                        @csrf
                        <input type="hidden" name="destination_country"
                               id="country-input" value="germany"/>
                        <input type="hidden" name="visa_type"
                               id="visa-type-input" value="germany_study"/>

                        {{-- Visa Type --}}
                        <div class="mb-4">
                            <div class="vcs-label">{{ $tr['visa_sel_type'] }}</div>
                            <div class="d-flex gap-3 flex-wrap"
                                 id="visa-type-options">
                                <div class="vts-option active"
                                     onclick="selectVisaType('germany_study')"
                                     id="vt-germany_study">
                                    <i class="bi bi-mortarboard-fill"></i>
                                    {{ $tr['visa_de_study'] }}
                                </div>
                                <div class="vts-option"
                                     onclick="selectVisaType('germany_work')"
                                     id="vt-germany_work">
                                    <i class="bi bi-briefcase-fill"></i>
                                    {{ $tr['visa_de_work'] }}
                                </div>
                                <div class="vts-option"
                                     onclick="selectVisaType('germany_business')"
                                     id="vt-germany_business">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    {{ $tr['visa_de_biz'] }}
                                </div>
                            </div>
                        </div>

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
                                       class="input-custom" required
                                       placeholder="{{ $tr['full_name'] }}"
                                       value="{{ old('full_name') }}"/>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['dob'] }} *
                                </label>
                                <input type="date" name="date_of_birth"
                                       class="input-custom" required
                                       value="{{ old('date_of_birth') }}"/>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['email'] }} *
                                </label>
                                <input type="email" name="email"
                                       class="input-custom" required
                                       placeholder="you@email.com"
                                       value="{{ old('email') }}"/>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['phone'] }} *
                                </label>
                                <input type="tel" name="phone"
                                       class="input-custom" required
                                       placeholder="+237 6XX XXX XXX"
                                       value="{{ old('phone') }}"/>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['visa_passport'] }}
                                </label>
                                <input type="text" name="passport_number"
                                       class="input-custom"
                                       placeholder="e.g. CM1234567"
                                       value="{{ old('passport_number') }}"/>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['visa_travel_date'] }}
                                </label>
                                <input type="date" name="intended_travel_date"
                                       class="input-custom"
                                       value="{{ old('intended_travel_date') }}"/>
                            </div>
                        </div>

                        <div class="form-section-title">
                            <i class="bi bi-building"></i>
                            {{ $tr['preferred_center'] }}
                        </div>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['preferred_center'] }} *
                                </label>
                                <select name="preferred_center"
                                        class="input-custom" required>
                                    <option value="" disabled selected>
                                        {{ $tr['select_center'] }}
                                    </option>
                                    <option value="carrefour">
                                        {{ $tr['center_carrefour'] }}
                                    </option>
                                    <option value="nkomo">
                                        {{ $tr['center_nkomo'] }}
                                    </option>
                                    <option value="essos">
                                        {{ $tr['center_essos'] }}
                                    </option>
                                    <option value="bonas">
                                        {{ $tr['center_bonas'] }}
                                    </option>
                                    <option value="makepe">
                                        {{ $tr['center_makepe'] }}
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
                            {{ $tr['visa_notice'] }}
                        </div>

                        <div class="d-flex gap-3 flex-wrap mt-4">
                            <button type="submit" class="btn-form-submit">
                                <i class="bi bi-send-fill"></i>
                                {{ $tr['visa_submit'] }}
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
<section style="background:#fff;padding:70px 0;">
    <div class="container text-center" data-aos="zoom-in">
        <h3 style="font-size:1.7rem;font-weight:800;
                   color:var(--primary);margin-bottom:12px;">
            {{ $tr['visa_cta_title'] }}
        </h3>
        <p style="color:#6c7a89;font-size:0.93rem;margin-bottom:28px;">
            {{ $tr['visa_cta_sub'] }}
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ url('/german-docs') }}"
               style="background:var(--primary);color:#fff;padding:12px 28px;
                      border-radius:10px;font-weight:600;font-size:0.9rem;
                      display:inline-flex;align-items:center;gap:8px;">
                <i class="bi bi-file-earmark-text-fill"></i>
                {{ $tr['german_docs'] }}
            </a>
            <a href="{{ url('/contact') }}"
               style="background:#fff;color:var(--primary);
                      border:2px solid var(--primary);padding:11px 26px;
                      border-radius:10px;font-weight:600;font-size:0.9rem;
                      display:inline-flex;align-items:center;gap:8px;">
                <i class="bi bi-chat-dots-fill"></i>
                {{ $tr['free_consultation'] }}
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
    background:rgba(232,160,32,0.15);border:1px solid rgba(232,160,32,0.3);
    color:var(--accent);font-size:0.8rem;font-weight:600;
    padding:7px 16px;border-radius:50px;margin-bottom:18px;
}
.ph-title {
    font-size:2.8rem;font-weight:800;color:#fff;line-height:1.2;margin-bottom:16px;
}
.ph-subtitle { color:rgba(255,255,255,0.68);font-size:0.97rem;line-height:1.8;max-width:500px; }
.btn-ph-primary {
    display:inline-flex;align-items:center;gap:8px;
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark) !important;font-weight:700;padding:12px 26px;
    border-radius:10px;font-size:0.9rem;
    box-shadow:0 5px 20px rgba(232,160,32,0.35);transition:all 0.3s;
}
.btn-ph-primary:hover { transform:translateY(-2px); }
.btn-ph-outline {
    display:inline-flex;align-items:center;gap:8px;
    background:rgba(255,255,255,0.1);border:2px solid rgba(255,255,255,0.3);
    color:#fff !important;font-weight:600;padding:11px 24px;
    border-radius:10px;font-size:0.9rem;transition:all 0.3s;
}
.btn-ph-outline:hover { background:rgba(255,255,255,0.18); }
.visa-header-visual {
    position:relative;width:320px;height:320px;
    display:flex;align-items:center;justify-content:center;
}
.vhv-center {
    width:130px;height:130px;border-radius:50%;
    background:rgba(255,255,255,0.1);border:2px solid rgba(255,255,255,0.2);
    display:flex;align-items:center;justify-content:center;
    font-size:3rem;color:var(--accent);backdrop-filter:blur(20px);z-index:2;
}
.vhv-flag {
    position:absolute;background:rgba(255,255,255,0.95);
    border-radius:25px;padding:8px 16px;
    font-size:0.82rem;font-weight:700;color:var(--primary);
    box-shadow:0 5px 20px rgba(0,0,0,0.15);z-index:3;
}
.vhv-f1 { top:20px;right:0;animation:fl1 3s ease-in-out infinite; }
.vhv-f2 { bottom:80px;right:-10px;animation:fl2 3.5s ease-in-out infinite; }
.vhv-f3 { top:100px;left:0;animation:fl3 4s ease-in-out infinite; }
.vhv-badge {
    position:absolute;bottom:30px;left:10px;
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark);border-radius:25px;padding:8px 16px;
    font-size:0.78rem;font-weight:700;z-index:3;
    display:flex;align-items:center;gap:7px;
    animation:fl2 3.2s ease-in-out infinite;
}
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
.country-section { }
.cs-header {
    background:linear-gradient(135deg,var(--light-bg),#e8ecf5);
    border-radius:16px;padding:22px 28px;
    display:flex;align-items:center;justify-content:space-between;
    flex-wrap:wrap;gap:16px;
}
.cs-flag-wrap { display:flex;align-items:center;gap:16px; }
.cs-flag { font-size:2.8rem; }
.cs-country-name { font-size:1.5rem;font-weight:800;color:var(--primary);margin:0; }
.cs-country-sub { font-size:0.78rem;color:#6c7a89;font-weight:500; }
.cs-stats { display:flex;gap:30px; }
.css-item { text-align:center; }
.css-num {
    font-size:1.6rem;font-weight:800;color:var(--primary);
    font-family:'Poppins',sans-serif;line-height:1;
}
.css-lbl { font-size:0.72rem;color:#6c7a89;margin-top:3px; }
.visa-type-card {
    background:#fff;border-radius:18px;overflow:hidden;
    box-shadow:0 4px 25px rgba(0,0,0,0.07);transition:all 0.35s;height:100%;
}
.visa-type-card:hover { transform:translateY(-6px);box-shadow:0 20px 50px rgba(26,60,110,0.13); }
.vtc-header {
    padding:22px 20px;display:flex;align-items:center;
    gap:14px;position:relative;overflow:hidden;
}
.vtc-icon {
    width:48px;height:48px;background:rgba(255,255,255,0.2);
    border-radius:12px;display:flex;align-items:center;
    justify-content:center;font-size:1.2rem;color:#fff;flex-shrink:0;
}
.vtc-country {
    font-size:0.65rem;color:rgba(255,255,255,0.65);
    text-transform:uppercase;letter-spacing:0.8px;font-weight:600;
}
.vtc-name { font-size:1rem;font-weight:700;color:#fff;margin-top:2px; }
.vtc-de-flag { font-size:1.8rem;margin-left:auto;flex-shrink:0;z-index:1; }
.vtc-body { padding:22px; }
.vtc-desc { font-size:0.86rem;color:#6c7a89;line-height:1.7;margin-bottom:16px; }
.vtc-includes { margin-bottom:14px; }
.vti-title {
    font-size:0.7rem;font-weight:700;text-transform:uppercase;
    letter-spacing:0.8px;color:#6c7a89;margin-bottom:9px;
}
.vti-item {
    display:flex;align-items:flex-start;gap:8px;
    font-size:0.82rem;color:#2d3748;padding:4px 0;line-height:1.5;
}
.vti-item i { color:var(--accent);font-size:0.8rem;margin-top:2px;flex-shrink:0; }
.vtc-actions { display:flex;gap:8px;margin-top:16px; }
.vta-btn-main {
    flex:1;background:linear-gradient(135deg,var(--primary),var(--primary-light));
    color:#fff !important;font-size:0.82rem;font-weight:700;
    padding:10px 14px;border-radius:9px;
    display:inline-flex;align-items:center;justify-content:center;
    gap:7px;transition:all 0.3s;
}
.vta-btn-main:hover { transform:translateY(-1px);opacity:0.92; }
.vta-btn-app {
    background:var(--light-bg);color:var(--primary) !important;
    font-size:0.9rem;font-weight:600;padding:10px 14px;
    border-radius:9px;display:inline-flex;align-items:center;gap:6px;transition:all 0.3s;
}
.vta-btn-app:hover { background:var(--primary);color:#fff !important; }
.visa-process-step { text-align:center;padding:20px 10px; }
.vps-bubble {
    width:36px;height:36px;border-radius:50%;
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    color:#fff;font-size:0.78rem;font-weight:800;
    display:flex;align-items:center;justify-content:center;
    margin:0 auto 14px;box-shadow:0 3px 15px rgba(26,60,110,0.3);
}
.vps-icon {
    width:58px;height:58px;border-radius:16px;
    background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.15);
    display:flex;align-items:center;justify-content:center;
    font-size:1.4rem;color:#fff;margin:0 auto 14px;transition:all 0.3s;
}
.vps-title { font-size:0.88rem;font-weight:700;color:#fff;margin-bottom:7px; }
.vps-desc { font-size:0.78rem;color:rgba(255,255,255,0.55);line-height:1.6;margin:0; }
.visa-form-card {
    background:#fff;border-radius:20px;padding:40px;
    box-shadow:0 10px 50px rgba(0,0,0,0.08);
}
.vcs-label {
    font-size:0.78rem;font-weight:700;text-transform:uppercase;
    letter-spacing:0.8px;color:#6c7a89;margin-bottom:12px;
}
.vcs-option {
    display:flex;align-items:center;gap:10px;
    background:var(--light-bg);border:2px solid transparent;
    border-radius:12px;padding:11px 20px;cursor:pointer;
    transition:all 0.3s;flex:1;justify-content:center;min-width:100px;
}
.vcs-option.active {
    background:#fff;border-color:var(--primary);
    box-shadow:0 3px 15px rgba(26,60,110,0.12);
}
.vcs-flag { font-size:1.4rem; }
.vcs-name { font-size:0.88rem;font-weight:700;color:var(--primary); }
.vts-option {
    display:inline-flex;align-items:center;gap:8px;
    background:var(--light-bg);border:2px solid transparent;
    border-radius:10px;padding:9px 18px;cursor:pointer;
    font-size:0.83rem;font-weight:600;color:#6c7a89;transition:all 0.3s;
}
.vts-option.active {
    background:#fff;border-color:var(--primary);
    color:var(--primary);box-shadow:0 3px 12px rgba(26,60,110,0.1);
}
.vts-option i { color:var(--accent); }
.form-section-title {
    font-size:0.83rem;font-weight:700;text-transform:uppercase;
    letter-spacing:0.8px;color:var(--primary);margin-bottom:16px;
    padding-bottom:10px;border-bottom:2px solid var(--light-bg);
    display:flex;align-items:center;gap:8px;
}
.form-section-title i { color:var(--accent); }
.form-label-custom {
    display:block;font-size:0.83rem;font-weight:600;color:#2d3748;margin-bottom:6px;
}
.input-custom {
    width:100%;padding:11px 14px;font-size:0.88rem;
    border:2px solid #e8ecf0;border-radius:10px;
    color:#2d3748;background:#fff;outline:none;
    transition:all 0.3s;font-family:'Inter',sans-serif;appearance:auto;
}
.input-custom:focus { border-color:var(--primary);box-shadow:0 0 0 3px rgba(26,60,110,0.08); }
.form-notice {
    background:rgba(26,60,110,0.05);border:1px solid rgba(26,60,110,0.1);
    border-radius:10px;padding:14px 18px;
    font-size:0.83rem;color:#2d3748;line-height:1.6;
    display:flex;align-items:flex-start;gap:10px;
}
.form-notice i { color:var(--primary);flex-shrink:0;margin-top:1px; }
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
    color:var(--dark) !important;padding:13px 26px;
    border-radius:10px;font-weight:700;font-size:0.92rem;transition:all 0.3s;
}
.btn-form-app:hover { transform:translateY(-2px); }
.alert-success-custom {
    background:rgba(40,167,69,0.12);border:1px solid rgba(40,167,69,0.25);
    color:#155724;border-radius:12px;padding:16px 20px;
    display:flex;align-items:center;gap:10px;font-size:0.88rem;
}
.alert-success-custom i { color:#28a745;font-size:1.1rem; }
@media(max-width:991.98px){
    .ph-title { font-size:2rem; }
    .visa-form-card { padding:24px; }
    .cs-header { flex-direction:column;align-items:flex-start; }
}
</style>
@endpush

@push('scripts')
<script>
const visaTypes = {
    germany: [
        { value:'germany_study',    icon:'bi-mortarboard-fill', label:'{{ $tr['visa_de_study'] }}' },
        { value:'germany_work',     icon:'bi-briefcase-fill',   label:'{{ $tr['visa_de_work'] }}' },
        { value:'germany_business', icon:'bi-graph-up-arrow',   label:'{{ $tr['visa_de_biz'] }}' },
    ],
    france: [
        { value:'france_student', icon:'bi-mortarboard-fill', label:'{{ $tr['visa_fr_student'] }}' },
    ],
    lithuania: [
        { value:'lithuania_student', icon:'bi-mortarboard-fill', label:'{{ $tr['visa_lt_student'] }}' },
    ],
};

function selectCountry(country) {
    document.getElementById('country-input').value = country;
    ['germany','france','lithuania'].forEach(c => {
        document.getElementById('opt-' + c).classList.remove('active');
    });
    document.getElementById('opt-' + country).classList.add('active');
    const container = document.getElementById('visa-type-options');
    container.innerHTML = '';
    visaTypes[country].forEach((vt, i) => {
        const div = document.createElement('div');
        div.className = 'vts-option' + (i === 0 ? ' active' : '');
        div.id = 'vt-' + vt.value;
        div.setAttribute('onclick', `selectVisaType('${vt.value}')`);
        div.innerHTML = `<i class="bi ${vt.icon}"></i> ${vt.label}`;
        container.appendChild(div);
    });
    if (visaTypes[country].length > 0) {
        selectVisaType(visaTypes[country][0].value);
    }
}

function selectVisaType(type) {
    document.getElementById('visa-type-input').value = type;
    document.querySelectorAll('.vts-option').forEach(el => {
        el.classList.remove('active');
    });
    const el = document.getElementById('vt-' + type);
    if (el) el.classList.add('active');
}

function prefillVisa(country, visaType) {
    selectCountry(country);
    setTimeout(() => selectVisaType(visaType), 100);
}
</script>
@endpush