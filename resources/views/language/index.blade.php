@extends('layouts.app')
@section('title', $tr['lang_page_tag'] ?? 'Language Courses')

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
                    {{ $tr['lang_page_tag'] }}
                </li>
            </ol>
        </nav>
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="ph-service-tag">
                    <i class="bi bi-translate"></i>
                    {{ $tr['lang_page_tag'] }}
                </div>
                <h1 class="ph-title">{{ $tr['lang_page_title'] }}</h1>
                <p class="ph-subtitle">{{ $tr['lang_page_sub'] }}</p>
                <div class="d-flex gap-3 flex-wrap mt-4">
                    <a href="#english" class="btn-ph-primary">
                        <i class="bi bi-flag-fill"></i>
                        {{ $tr['lang_btn_en'] }}
                    </a>
                    <a href="#german" class="btn-ph-outline">
                        <i class="bi bi-globe2"></i>
                        {{ $tr['lang_btn_de'] }}
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-flex justify-content-end"
                 data-aos="fade-left">
                <div class="lang-header-visual">
                    <div class="lhv-center">
                        <i class="bi bi-translate"></i>
                    </div>
                    <div class="lhv-bubble lhv-b1">🇬🇧 English</div>
                    <div class="lhv-bubble lhv-b2">🇩🇪 Deutsch</div>
                    <div class="lhv-bubble lhv-b3">IELTS · TOEFL</div>
                    <div class="lhv-bubble lhv-b4">A1 → B2</div>
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
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="qs-number">300+</div>
                    <div class="qs-label">{{ $tr['lang_certified'] }}</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="qs-card">
                    <div class="qs-icon"
                         style="background:linear-gradient(135deg,var(--accent-dark),
                                var(--accent));">
                        <i class="bi bi-journal-text"></i>
                    </div>
                    <div class="qs-number">6</div>
                    <div class="qs-label">{{ $tr['lang_programs'] }}</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="qs-card">
                    <div class="qs-icon"
                         style="background:linear-gradient(135deg,#1a6e3c,#28a745);">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <div class="qs-number">92%</div>
                    <div class="qs-label">{{ $tr['lang_pass'] }}</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="qs-card">
                    <div class="qs-icon"
                         style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                        <i class="bi bi-person-workspace"></i>
                    </div>
                    <div class="qs-number">10+</div>
                    <div class="qs-label">{{ $tr['lang_instructors'] }}</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ENGLISH COURSES --}}
<section class="section-padding" id="english" style="background:#fff;">
    <div class="container">
        <div class="course-section-header" data-aos="fade-right">
            <div class="csh-flag">🇬🇧</div>
            <div>
                <div class="section-label">{{ $tr['lang_en_label'] }}</div>
                <h2 class="section-title">{{ $tr['lang_en_title'] }}</h2>
            </div>
        </div>
        <div class="divider-accent"></div>
        <p style="color:#6c7a89;font-size:0.95rem;line-height:1.8;
                  max-width:650px;margin-bottom:50px;" data-aos="fade-up">
            {{ $tr['lang_en_sub'] }}
        </p>
        <div class="row g-4">

            {{-- IELTS --}}
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="course-card">
                    <div class="course-card-header"
                         style="background:linear-gradient(135deg,#1a3c6e,#2a5298);">
                        <div class="cch-left">
                            <div class="cch-icon">
                                <i class="bi bi-journal-bookmark-fill"></i>
                            </div>
                            <div>
                                <div class="cch-tag">{{ $tr['lang_cert_tag'] }}</div>
                                <div class="cch-name">{{ $tr['lang_ielts_name'] }}</div>
                            </div>
                        </div>
                        <div class="cch-score-badge">Band 6+</div>
                    </div>
                    <div class="course-card-body">
                        <p class="course-desc">{{ $tr['lang_ielts_desc'] }}</p>
                        <div class="course-modules">
                            <div class="cm-title">{{ $tr['lang_modules'] }}</div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="cm-item">
                                        <i class="bi bi-mic-fill"></i> Speaking
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="cm-item">
                                        <i class="bi bi-headphones"></i> Listening
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="cm-item">
                                        <i class="bi bi-book-fill"></i> Reading
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="cm-item">
                                        <i class="bi bi-pencil-fill"></i> Writing
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-details-row">
                            <div class="cdr-item">
                                <i class="bi bi-clock-fill"></i>
                                <div>
                                    <div class="cdr-label">{{ $tr['lang_duration'] }}</div>
                                    <div class="cdr-value">{{ $tr['lang_3months'] }}</div>
                                </div>
                            </div>
                            <div class="cdr-item">
                                <i class="bi bi-calendar3"></i>
                                <div>
                                    <div class="cdr-label">{{ $tr['lang_schedule'] }}</div>
                                    <div class="cdr-value">{{ $tr['lang_flexible'] }}</div>
                                </div>
                            </div>
                            <div class="cdr-item">
                                <i class="bi bi-bar-chart-fill"></i>
                                <div>
                                    <div class="cdr-label">{{ $tr['lang_level'] }}</div>
                                    <div class="cdr-value">{{ $tr['lang_all_levels'] }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="course-targets">
                            <div class="ct-title">{{ $tr['lang_ideal_for'] }}</div>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="ct-tag">{{ $tr['lang_ielts_t1'] }}</span>
                                <span class="ct-tag">{{ $tr['lang_ielts_t2'] }}</span>
                                <span class="ct-tag">{{ $tr['lang_ielts_t3'] }}</span>
                            </div>
                        </div>
                        <div class="course-actions">
                            <a href="#enroll" class="ca-btn-main">
                                <i class="bi bi-pencil-fill"></i>
                                {{ $tr['enroll_now'] }}
                            </a>
                            <a href="#main-app" target="_blank" class="ca-btn-app">
                                <i class="bi bi-box-arrow-up-right"></i>
                                {{ $tr['main_app'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- TOEFL --}}
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="course-card">
                    <div class="course-card-header"
                         style="background:linear-gradient(135deg,#c8860f,#e8a020);">
                        <div class="cch-left">
                            <div class="cch-icon">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <div>
                                <div class="cch-tag"
                                     style="color:rgba(255,255,255,0.7);">
                                    {{ $tr['lang_cert_tag'] }}
                                </div>
                                <div class="cch-name">{{ $tr['lang_toefl_name'] }}</div>
                            </div>
                        </div>
                        <div class="cch-score-badge"
                             style="background:rgba(255,255,255,0.2);">
                            Score 90+
                        </div>
                    </div>
                    <div class="course-card-body">
                        <p class="course-desc">{{ $tr['lang_toefl_desc'] }}</p>
                        <div class="course-modules">
                            <div class="cm-title">{{ $tr['lang_modules'] }}</div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="cm-item">
                                        <i class="bi bi-mic-fill"></i> Speaking
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="cm-item">
                                        <i class="bi bi-headphones"></i> Listening
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="cm-item">
                                        <i class="bi bi-book-fill"></i> Reading
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="cm-item">
                                        <i class="bi bi-pencil-fill"></i> Writing
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-details-row">
                            <div class="cdr-item">
                                <i class="bi bi-clock-fill"></i>
                                <div>
                                    <div class="cdr-label">{{ $tr['lang_duration'] }}</div>
                                    <div class="cdr-value">{{ $tr['lang_3months'] }}</div>
                                </div>
                            </div>
                            <div class="cdr-item">
                                <i class="bi bi-calendar3"></i>
                                <div>
                                    <div class="cdr-label">{{ $tr['lang_schedule'] }}</div>
                                    <div class="cdr-value">{{ $tr['lang_flexible'] }}</div>
                                </div>
                            </div>
                            <div class="cdr-item">
                                <i class="bi bi-bar-chart-fill"></i>
                                <div>
                                    <div class="cdr-label">{{ $tr['lang_level'] }}</div>
                                    <div class="cdr-value">{{ $tr['lang_all_levels'] }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="course-targets">
                            <div class="ct-title">{{ $tr['lang_ideal_for'] }}</div>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="ct-tag">{{ $tr['lang_toefl_t1'] }}</span>
                                <span class="ct-tag">{{ $tr['lang_toefl_t2'] }}</span>
                                <span class="ct-tag">{{ $tr['lang_toefl_t3'] }}</span>
                            </div>
                        </div>
                        <div class="course-actions">
                            <a href="#enroll" class="ca-btn-main">
                                <i class="bi bi-pencil-fill"></i>
                                {{ $tr['enroll_now'] }}
                            </a>
                            <a href="#main-app" target="_blank" class="ca-btn-app">
                                <i class="bi bi-box-arrow-up-right"></i>
                                {{ $tr['main_app'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- GERMAN COURSES --}}
<section class="section-padding" id="german" style="background:#f4f7fc;">
    <div class="container">
        <div class="course-section-header" data-aos="fade-right">
            <div class="csh-flag">🇩🇪</div>
            <div>
                <div class="section-label">{{ $tr['lang_de_label'] }}</div>
                <h2 class="section-title">{{ $tr['lang_de_title'] }}</h2>
            </div>
        </div>
        <div class="divider-accent"></div>
        <p style="color:#6c7a89;font-size:0.95rem;line-height:1.8;
                  max-width:650px;margin-bottom:40px;" data-aos="fade-up">
            {{ $tr['lang_de_sub'] }}
        </p>

        {{-- Level Progress Bar --}}
        <div class="german-levels-bar mb-4" data-aos="fade-up">
            <div class="glb-track">
                <div class="glb-level">
                    <div class="glb-dot"></div>
                    <div class="glb-label">A1</div>
                    <div class="glb-sublabel">{{ $tr['lang_beginner'] }}</div>
                </div>
                <div class="glb-line"></div>
                <div class="glb-level">
                    <div class="glb-dot"></div>
                    <div class="glb-label">A2</div>
                    <div class="glb-sublabel">{{ $tr['lang_elementary'] }}</div>
                </div>
                <div class="glb-line"></div>
                <div class="glb-level">
                    <div class="glb-dot"></div>
                    <div class="glb-label">B1</div>
                    <div class="glb-sublabel">{{ $tr['lang_intermediate'] }}</div>
                </div>
                <div class="glb-line"></div>
                <div class="glb-level">
                    <div class="glb-dot"></div>
                    <div class="glb-label">B2</div>
                    <div class="glb-sublabel">{{ $tr['lang_upper_int'] }}</div>
                </div>
            </div>
        </div>

        <div class="row g-4">

            {{-- A1 --}}
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="german-level-card">
                    <div class="glc-header"
                         style="background:linear-gradient(135deg,#1a3c6e,#2a5298);">
                        <div class="glc-level-badge">A1</div>
                        <div class="glc-level-name">{{ $tr['lang_beginner'] }}</div>
                        <div class="glc-flag">🇩🇪</div>
                    </div>
                    <div class="glc-body">
                        <p class="glc-desc">{{ $tr['lang_a1_desc'] }}</p>
                        <ul class="glc-list">
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_a1_f1'] }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_a1_f2'] }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_a1_f3'] }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_a1_f4'] }}</li>
                        </ul>
                        <div class="glc-meta">
                            <span><i class="bi bi-clock"></i> {{ $tr['lang_2months'] }}</span>
                            <span><i class="bi bi-people"></i> {{ $tr['lang_beginner'] }}</span>
                        </div>
                        <a href="#enroll" class="glc-btn">
                            {{ $tr['enroll_now'] }} A1
                        </a>
                    </div>
                </div>
            </div>

            {{-- A2 --}}
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="german-level-card">
                    <div class="glc-header"
                         style="background:linear-gradient(135deg,#1a6e50,#20a86e);">
                        <div class="glc-level-badge">A2</div>
                        <div class="glc-level-name">{{ $tr['lang_elementary'] }}</div>
                        <div class="glc-flag">🇩🇪</div>
                    </div>
                    <div class="glc-body">
                        <p class="glc-desc">{{ $tr['lang_a2_desc'] }}</p>
                        <ul class="glc-list">
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_a2_f1'] }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_a2_f2'] }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_a2_f3'] }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_a2_f4'] }}</li>
                        </ul>
                        <div class="glc-meta">
                            <span><i class="bi bi-clock"></i> {{ $tr['lang_2months'] }}</span>
                            <span><i class="bi bi-people"></i> {{ $tr['lang_elementary'] }}</span>
                        </div>
                        <a href="#enroll" class="glc-btn"
                           style="background:linear-gradient(135deg,#1a6e50,#20a86e);">
                            {{ $tr['enroll_now'] }} A2
                        </a>
                    </div>
                </div>
            </div>

            {{-- B1 --}}
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="german-level-card featured-german">
                    <div class="glc-popular-tag">{{ $tr['lang_most_needed'] }}</div>
                    <div class="glc-header"
                         style="background:linear-gradient(135deg,#c8860f,#e8a020);">
                        <div class="glc-level-badge">B1</div>
                        <div class="glc-level-name">{{ $tr['lang_intermediate'] }}</div>
                        <div class="glc-flag">🇩🇪</div>
                    </div>
                    <div class="glc-body">
                        <p class="glc-desc">{{ $tr['lang_b1_desc'] }}</p>
                        <ul class="glc-list">
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_b1_f1'] }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_b1_f2'] }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_b1_f3'] }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_b1_f4'] }}</li>
                        </ul>
                        <div class="glc-meta">
                            <span><i class="bi bi-clock"></i> {{ $tr['lang_3months'] }}</span>
                            <span><i class="bi bi-people"></i> {{ $tr['lang_intermediate'] }}</span>
                        </div>
                        <a href="#enroll" class="glc-btn"
                           style="background:linear-gradient(135deg,#c8860f,#e8a020);
                                  color:var(--dark);">
                            {{ $tr['enroll_now'] }} B1
                        </a>
                    </div>
                </div>
            </div>

            {{-- B2 --}}
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="german-level-card">
                    <div class="glc-header"
                         style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                        <div class="glc-level-badge">B2</div>
                        <div class="glc-level-name">{{ $tr['lang_upper_int'] }}</div>
                        <div class="glc-flag">🇩🇪</div>
                    </div>
                    <div class="glc-body">
                        <p class="glc-desc">{{ $tr['lang_b2_desc'] }}</p>
                        <ul class="glc-list">
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_b2_f1'] }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_b2_f2'] }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_b2_f3'] }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ $tr['lang_b2_f4'] }}</li>
                        </ul>
                        <div class="glc-meta">
                            <span><i class="bi bi-clock"></i> {{ $tr['lang_3months'] }}</span>
                            <span><i class="bi bi-people"></i> {{ $tr['lang_upper_int'] }}</span>
                        </div>
                        <a href="#enroll" class="glc-btn"
                           style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                            {{ $tr['enroll_now'] }} B2
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- WHY OUR METHOD --}}
<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label">{{ $tr['lang_method_label'] }}</div>
            <h2 class="section-title">{{ $tr['lang_method_title'] }}</h2>
            <div class="divider-accent mx-auto"></div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="method-card">
                    <div class="mc-icon"
                         style="background:linear-gradient(135deg,var(--primary),
                                var(--primary-light));">
                        <i class="bi bi-person-video3"></i>
                    </div>
                    <h5 class="mc-title">{{ $tr['lang_m1_title'] }}</h5>
                    <p class="mc-desc">{{ $tr['lang_m1_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="method-card">
                    <div class="mc-icon"
                         style="background:linear-gradient(135deg,var(--accent-dark),
                                var(--accent));">
                        <i class="bi bi-clipboard2-check-fill"></i>
                    </div>
                    <h5 class="mc-title">{{ $tr['lang_m2_title'] }}</h5>
                    <p class="mc-desc">{{ $tr['lang_m2_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="method-card">
                    <div class="mc-icon"
                         style="background:linear-gradient(135deg,#1a6e3c,#28a745);">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h5 class="mc-title">{{ $tr['lang_m3_title'] }}</h5>
                    <p class="mc-desc">{{ $tr['lang_m3_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="method-card">
                    <div class="mc-icon"
                         style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                        <i class="bi bi-calendar2-week-fill"></i>
                    </div>
                    <h5 class="mc-title">{{ $tr['lang_m4_title'] }}</h5>
                    <p class="mc-desc">{{ $tr['lang_m4_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="method-card">
                    <div class="mc-icon"
                         style="background:linear-gradient(135deg,#c8860f,#e8a020);">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h5 class="mc-title">{{ $tr['lang_m5_title'] }}</h5>
                    <p class="mc-desc">{{ $tr['lang_m5_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="method-card">
                    <div class="mc-icon"
                         style="background:linear-gradient(135deg,#0d6efd,#3d8bfd);">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <h5 class="mc-title">{{ $tr['lang_m6_title'] }}</h5>
                    <p class="mc-desc">{{ $tr['lang_m6_desc'] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ENROLLMENT FORM --}}
<section class="section-padding" id="enroll"
         style="background:linear-gradient(135deg,#0d1b2a,#1a3c6e);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5" data-aos="fade-up">
                    <div class="section-label"
                         style="color:rgba(255,255,255,0.55);">
                        {{ $tr['lang_enroll_label'] }}
                    </div>
                    <h2 class="section-title" style="color:#fff;">
                        {{ $tr['lang_enroll_title'] }}
                    </h2>
                    <div class="divider-accent mx-auto"></div>
                    <p style="color:rgba(255,255,255,0.6);font-size:0.93rem;">
                        {{ $tr['lang_enroll_sub'] }}
                    </p>
                </div>

                @if(session('success'))
                    <div class="alert-success-custom mb-4">
                        <i class="bi bi-check-circle-fill"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="enroll-form-card" data-aos="fade-up">

                    {{-- Language Selector --}}
                    <div class="mb-4">
                        <div class="cts-label">{{ $tr['lang_select_lang'] }}</div>
                        <div class="d-flex gap-3">
                            <div class="cts-option active" id="opt-english"
                                 onclick="selectLanguage('english')">
                                <span class="cts-flag">🇬🇧</span>
                                <span class="cts-name">English</span>
                            </div>
                            <div class="cts-option" id="opt-german"
                                 onclick="selectLanguage('german')">
                                <span class="cts-flag">🇩🇪</span>
                                <span class="cts-name">Deutsch</span>
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="{{ url('/language/enroll') }}">
                        @csrf
                        <input type="hidden" name="language"
                               id="language-input" value="english"/>

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
                                    {{ $tr['phone'] }} *
                                </label>
                                <input type="tel" name="phone"
                                       class="input-custom" required
                                       placeholder="+237 6XX XXX XXX"
                                       value="{{ old('phone') }}"/>
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
                                    {{ $tr['lang_current_lvl'] }} *
                                </label>
                                <select name="current_level"
                                        class="input-custom" required>
                                    <option value="beginner">
                                        {{ $tr['lang_beginner'] }}
                                    </option>
                                    <option value="elementary">
                                        {{ $tr['lang_elementary'] }}
                                    </option>
                                    <option value="intermediate">
                                        {{ $tr['lang_intermediate'] }}
                                    </option>
                                    <option value="advanced">
                                        {{ $tr['lang_upper_int'] }}
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-section-title">
                            <i class="bi bi-journal-text"></i>
                            {{ $tr['lang_course_pref'] }}
                        </div>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['lang_course'] }} *
                                </label>
                                <select name="course_type"
                                        id="course-type-select"
                                        class="input-custom" required>
                                    <option value="ielts_preparation">
                                        {{ $tr['lang_ielts_name'] }}
                                    </option>
                                    <option value="toefl_preparation">
                                        {{ $tr['lang_toefl_name'] }}
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
                            {{ $tr['lang_notice'] }}
                        </div>

                        <div class="d-flex gap-3 flex-wrap mt-4">
                            <button type="submit" class="btn-form-submit">
                                <i class="bi bi-send-fill"></i>
                                {{ $tr['lang_submit'] }}
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
            {{ $tr['lang_cta_title'] }}
        </h3>
        <p style="color:#6c7a89;font-size:0.93rem;margin-bottom:28px;">
            {{ $tr['lang_cta_sub'] }}
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ url('/contact') }}"
               style="background:var(--primary);color:#fff;padding:12px 28px;
                      border-radius:10px;font-weight:600;font-size:0.9rem;
                      display:inline-flex;align-items:center;gap:8px;">
                <i class="bi bi-chat-dots-fill"></i>
                {{ $tr['lang_free_advice'] }}
            </a>
            <a href="{{ url('/german-docs') }}"
               style="background:#fff;color:var(--primary);
                      border:2px solid var(--primary);padding:11px 26px;
                      border-radius:10px;font-weight:600;font-size:0.9rem;
                      display:inline-flex;align-items:center;gap:8px;">
                <i class="bi bi-file-earmark-text-fill"></i>
                {{ $tr['lang_german_docs'] }}
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
.lang-header-visual {
    position:relative;width:320px;height:320px;
    display:flex;align-items:center;justify-content:center;
}
.lhv-center {
    width:130px;height:130px;border-radius:50%;
    background:rgba(255,255,255,0.1);
    border:2px solid rgba(255,255,255,0.2);
    display:flex;align-items:center;justify-content:center;
    font-size:3rem;color:var(--accent);backdrop-filter:blur(20px);z-index:2;
}
.lhv-bubble {
    position:absolute;background:rgba(255,255,255,0.95);
    border-radius:25px;padding:8px 16px;
    font-size:0.78rem;font-weight:700;color:var(--primary);
    box-shadow:0 5px 20px rgba(0,0,0,0.15);z-index:3;
}
.lhv-b1 { top:20px;right:0;animation:fl1 3s ease-in-out infinite; }
.lhv-b2 { bottom:60px;right:-10px;animation:fl2 3.5s ease-in-out infinite; }
.lhv-b3 { top:80px;left:0;animation:fl3 4s ease-in-out infinite; }
.lhv-b4 { bottom:120px;left:10px;animation:fl1 3.2s ease-in-out infinite; }
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
.course-section-header {
    display:flex;align-items:center;gap:18px;margin-bottom:8px;
}
.csh-flag { font-size:2.8rem; }
.course-card {
    background:#fff;border-radius:18px;overflow:hidden;
    box-shadow:0 4px 25px rgba(0,0,0,0.07);transition:all 0.35s;height:100%;
}
.course-card:hover { transform:translateY(-6px);box-shadow:0 20px 50px rgba(26,60,110,0.13); }
.course-card-header {
    padding:24px 22px;display:flex;align-items:center;
    justify-content:space-between;position:relative;overflow:hidden;
}
.cch-left { display:flex;align-items:center;gap:14px; }
.cch-icon {
    width:50px;height:50px;background:rgba(255,255,255,0.2);
    border-radius:13px;display:flex;align-items:center;
    justify-content:center;font-size:1.3rem;color:#fff;flex-shrink:0;
}
.cch-tag {
    font-size:0.65rem;color:rgba(255,255,255,0.65);
    text-transform:uppercase;letter-spacing:0.8px;font-weight:600;
}
.cch-name { font-size:1.05rem;font-weight:700;color:#fff;margin-top:3px; }
.cch-score-badge {
    background:rgba(255,255,255,0.2);color:#fff;
    font-size:0.75rem;font-weight:700;padding:5px 12px;border-radius:20px;flex-shrink:0;
}
.course-card-body { padding:24px; }
.course-desc { font-size:0.87rem;color:#6c7a89;line-height:1.7;margin-bottom:18px; }
.course-modules { margin-bottom:18px; }
.cm-title {
    font-size:0.72rem;font-weight:700;text-transform:uppercase;
    letter-spacing:0.8px;color:#6c7a89;margin-bottom:10px;
}
.cm-item {
    background:var(--light-bg);border-radius:8px;
    padding:8px 12px;font-size:0.82rem;font-weight:600;
    color:var(--primary);display:flex;align-items:center;gap:7px;
}
.cm-item i { color:var(--accent); }
.course-details-row {
    display:flex;gap:0;background:var(--light-bg);
    border-radius:12px;padding:14px;margin-bottom:18px;
}
.cdr-item {
    flex:1;display:flex;align-items:center;gap:10px;
    padding:0 12px;border-right:1px solid rgba(0,0,0,0.08);
}
.cdr-item:last-child { border-right:none; }
.cdr-item>i { color:var(--accent);font-size:1rem;flex-shrink:0; }
.cdr-label {
    font-size:0.65rem;color:#6c7a89;font-weight:600;
    text-transform:uppercase;letter-spacing:0.5px;
}
.cdr-value { font-size:0.82rem;font-weight:700;color:var(--primary);margin-top:2px; }
.course-targets { margin-bottom:20px; }
.ct-title {
    font-size:0.72rem;font-weight:700;text-transform:uppercase;
    letter-spacing:0.8px;color:#6c7a89;margin-bottom:9px;
}
.ct-tag {
    background:rgba(26,60,110,0.07);color:var(--primary);
    font-size:0.72rem;font-weight:600;padding:4px 12px;border-radius:20px;
    display:inline-block;
}
.course-actions { display:flex;gap:9px; }
.ca-btn-main {
    flex:1;background:var(--primary);color:#fff !important;
    font-size:0.83rem;font-weight:600;padding:10px 16px;
    border-radius:9px;display:inline-flex;align-items:center;
    justify-content:center;gap:6px;transition:all 0.3s;
}
.ca-btn-main:hover { background:var(--primary-light); }
.ca-btn-app {
    background:var(--light-bg);color:var(--primary) !important;
    font-size:0.83rem;font-weight:600;padding:10px 14px;
    border-radius:9px;display:inline-flex;align-items:center;gap:6px;transition:all 0.3s;
}
.ca-btn-app:hover { background:var(--primary);color:#fff !important; }
.german-levels-bar {
    background:#fff;border-radius:16px;padding:28px 40px;
    box-shadow:0 4px 20px rgba(0,0,0,0.06);
}
.glb-track {
    display:flex;align-items:center;justify-content:space-between;
}
.glb-level { text-align:center;position:relative;flex-shrink:0; }
.glb-dot {
    width:18px;height:18px;border-radius:50%;background:var(--accent);
    margin:0 auto 8px;box-shadow:0 0 0 4px rgba(232,160,32,0.2);
}
.glb-label {
    font-size:1rem;font-weight:800;color:var(--primary);
    font-family:'Poppins',sans-serif;
}
.glb-sublabel { font-size:0.72rem;color:#6c7a89;margin-top:2px; }
.glb-line {
    flex:1;height:3px;
    background:linear-gradient(90deg,var(--accent),rgba(232,160,32,0.3));
    margin:0 8px;margin-bottom:30px;
}
.german-level-card {
    background:#fff;border-radius:18px;overflow:hidden;
    box-shadow:0 4px 25px rgba(0,0,0,0.07);
    transition:all 0.35s;height:100%;position:relative;
}
.german-level-card:hover { transform:translateY(-6px);box-shadow:0 20px 50px rgba(26,60,110,0.12); }
.featured-german { border:2px solid rgba(232,160,32,0.4); }
.glc-popular-tag {
    position:absolute;top:0;left:0;right:0;
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark);font-size:0.62rem;font-weight:800;
    text-transform:uppercase;letter-spacing:0.5px;padding:4px;text-align:center;z-index:2;
}
.glc-header {
    padding:22px 18px;text-align:center;position:relative;overflow:hidden;
}
.glc-level-badge {
    font-size:2.2rem;font-weight:800;color:rgba(255,255,255,0.9);
    font-family:'Poppins',sans-serif;line-height:1;
}
.glc-level-name { font-size:0.78rem;color:rgba(255,255,255,0.7);margin-top:3px;font-weight:600; }
.glc-flag { font-size:1.5rem;margin-top:8px; }
.glc-body { padding:20px; }
.glc-desc { font-size:0.84rem;color:#6c7a89;line-height:1.7;margin-bottom:14px; }
.glc-list { list-style:none;padding:0;margin-bottom:14px; }
.glc-list li {
    font-size:0.82rem;color:#2d3748;padding:3px 0;
    display:flex;align-items:center;gap:8px;
}
.glc-list li i { color:var(--accent);font-size:0.78rem; }
.glc-meta { display:flex;gap:10px;margin-bottom:16px;flex-wrap:wrap; }
.glc-meta span {
    display:inline-flex;align-items:center;gap:5px;
    font-size:0.75rem;color:#6c7a89;font-weight:500;
}
.glc-meta span i { color:var(--accent); }
.glc-btn {
    display:block;text-align:center;
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    color:#fff !important;font-size:0.82rem;font-weight:700;
    padding:10px;border-radius:9px;transition:all 0.3s;
}
.glc-btn:hover { transform:translateY(-1px);opacity:0.92; }
.method-card {
    background:#fff;border:1px solid rgba(0,0,0,0.07);
    border-radius:16px;padding:28px 24px;transition:all 0.3s;height:100%;
}
.method-card:hover { transform:translateY(-5px);box-shadow:0 15px 40px rgba(26,60,110,0.1); }
.mc-icon {
    width:56px;height:56px;border-radius:15px;
    display:flex;align-items:center;justify-content:center;
    font-size:1.4rem;color:#fff;margin-bottom:18px;
}
.mc-title { font-size:0.97rem;font-weight:700;color:var(--primary);margin-bottom:10px; }
.mc-desc { font-size:0.85rem;color:#6c7a89;line-height:1.7;margin:0; }
.enroll-form-card {
    background:#fff;border-radius:20px;padding:40px;
    box-shadow:0 20px 60px rgba(0,0,0,0.2);
}
.cts-label {
    font-size:0.8rem;font-weight:700;text-transform:uppercase;
    letter-spacing:0.8px;color:#6c7a89;margin-bottom:12px;
}
.cts-option {
    display:flex;align-items:center;gap:10px;
    background:var(--light-bg);border:2px solid transparent;
    border-radius:12px;padding:12px 20px;cursor:pointer;
    transition:all 0.3s;flex:1;justify-content:center;
}
.cts-option.active {
    background:#fff;border-color:var(--primary);
    box-shadow:0 3px 15px rgba(26,60,110,0.12);
}
.cts-flag { font-size:1.5rem; }
.cts-name { font-size:0.9rem;font-weight:700;color:var(--primary); }
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
    background:rgba(26,60,110,0.06);border:1px solid rgba(26,60,110,0.12);
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
    .enroll-form-card { padding:24px; }
    .glb-sublabel { display:none; }
}
</style>
@endpush

@push('scripts')
<script>
function selectLanguage(lang) {
    document.getElementById('language-input').value = lang;
    document.getElementById('opt-english').classList.remove('active');
    document.getElementById('opt-german').classList.remove('active');
    document.getElementById('opt-' + lang).classList.add('active');
    const select = document.getElementById('course-type-select');
    select.innerHTML = '';
    if (lang === 'english') {
        select.innerHTML = `
            <option value="ielts_preparation">{{ $tr['lang_ielts_name'] }}</option>
            <option value="toefl_preparation">{{ $tr['lang_toefl_name'] }}</option>
        `;
    } else {
        select.innerHTML = `
            <option value="german_a1">A1 — {{ $tr['lang_beginner'] }}</option>
            <option value="german_a2">A2 — {{ $tr['lang_elementary'] }}</option>
            <option value="german_b1">B1 — {{ $tr['lang_intermediate'] }}</option>
            <option value="german_b2">B2 — {{ $tr['lang_upper_int'] }}</option>
        `;
    }
}
</script>
@endpush