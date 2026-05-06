@extends('layouts.app')
@section('title', $tr['gdoc_tag'] ?? 'German Documentation')

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
                    {{ $tr['gdoc_tag'] }}
                </li>
            </ol>
        </nav>
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="ph-service-tag">
                    <i class="bi bi-file-earmark-text-fill"></i>
                    {{ $tr['gdoc_tag'] }}
                </div>
                <h1 class="ph-title">{{ $tr['gdoc_title'] }}</h1>
                <p class="ph-subtitle">{{ $tr['gdoc_sub'] }}</p>
                <div class="d-flex gap-3 flex-wrap mt-4">
                    <a href="#checklist" class="btn-ph-primary">
                        <i class="bi bi-list-check"></i>
                        {{ $tr['gdoc_view_list'] }}
                    </a>
                    <a href="{{ url('/visa') }}" class="btn-ph-outline">
                        <i class="bi bi-passport-fill"></i>
                        {{ $tr['gdoc_apply_visa'] }}
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-flex justify-content-end"
                 data-aos="fade-left">
                <div class="gdoc-header-visual">
                    <div class="gdv-center">
                        <i class="bi bi-file-earmark-text-fill"></i>
                    </div>
                    <div class="gdv-badge gdv-b1">
                        <i class="bi bi-download"></i> Downloadable
                    </div>
                    <div class="gdv-badge gdv-b2">🇩🇪 Germany</div>
                    <div class="gdv-badge gdv-b3">
                        <i class="bi bi-patch-check-fill"></i> Up to Date
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- IMPORTANT NOTICE --}}
<section style="background:#fff7e6;border-bottom:3px solid var(--accent);padding:20px 0;">
    <div class="container">
        <div class="d-flex align-items-start gap-3">
            <i class="bi bi-exclamation-triangle-fill"
               style="color:var(--accent);font-size:1.4rem;flex-shrink:0;margin-top:2px;"></i>
            <div>
                <strong style="color:var(--primary);font-size:0.9rem;">
                    Important Notice:
                </strong>
                <span style="color:#5a4a00;font-size:0.88rem;">
                    {{ $tr['gdoc_notice'] }}
                </span>
            </div>
        </div>
    </div>
</section>

{{-- DOCUMENT CHECKLIST --}}
<section class="section-padding" id="checklist" style="background:#f4f7fc;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label">{{ $tr['gdoc_guide_label'] }}</div>
            <h2 class="section-title">{{ $tr['gdoc_guide_title'] }}</h2>
            <div class="divider-accent mx-auto"></div>
            <p style="color:#6c7a89;font-size:0.95rem;max-width:580px;margin:0 auto;">
                {{ $tr['gdoc_guide_sub'] }}
            </p>
        </div>

        {{-- Tab Nav --}}
        <div class="doc-tabs" data-aos="fade-up">
            <button class="doc-tab active" onclick="showDocTab('study', event)">
                <i class="bi bi-mortarboard-fill"></i>
                {{ $tr['gdoc_tab_study'] }}
            </button>
            <button class="doc-tab" onclick="showDocTab('work', event)">
                <i class="bi bi-briefcase-fill"></i>
                {{ $tr['gdoc_tab_work'] }}
            </button>
            <button class="doc-tab" onclick="showDocTab('business', event)">
                <i class="bi bi-graph-up-arrow"></i>
                {{ $tr['gdoc_tab_biz'] }}
            </button>
            <button class="doc-tab" onclick="showDocTab('language', event)">
                <i class="bi bi-translate"></i>
                {{ $tr['gdoc_tab_lang'] }}
            </button>
        </div>

        {{-- STUDY VISA --}}
        <div class="doc-tab-content active" id="tab-study" data-aos="fade-up">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#1a3c6e,#2a5298);">
                            <i class="bi bi-person-vcard-fill"></i>
                            <span>{{ $tr['gdoc_identity'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Valid Passport</div>
                                    <div class="di-detail">Valid for at least 6 months beyond stay</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Passport Copies</div>
                                    <div class="di-detail">All pages including old visas</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Biometric Photos</div>
                                    <div class="di-detail">2 recent passport-size photos</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Birth Certificate</div>
                                    <div class="di-detail">Apostilled & translated to German</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#1a6e3c,#28a745);">
                            <i class="bi bi-building-fill"></i>
                            <span>{{ $tr['gdoc_university'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">University Admission Letter</div>
                                    <div class="di-detail">Official acceptance from German university</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Academic Transcripts</div>
                                    <div class="di-detail">All previous degrees, translated</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Degree Certificates</div>
                                    <div class="di-detail">Bachelor/Master diploma, apostilled</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status optional-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">APS Certificate</div>
                                    <div class="di-detail">Academic evaluation for Cameroon</div>
                                </div>
                                <span class="di-badge optional-badge">{{ $tr['gdoc_often_req'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#c8860f,#e8a020);">
                            <i class="bi bi-bank2"></i>
                            <span>{{ $tr['gdoc_financial'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Blocked Account (Sperrkonto)</div>
                                    <div class="di-detail">Min. €11,208/year (€934/month)</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Bank Statement</div>
                                    <div class="di-detail">Last 3 months statements</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status optional-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Scholarship Letter</div>
                                    <div class="di-detail">If applicable — replaces blocked account</div>
                                </div>
                                <span class="di-badge optional-badge">{{ $tr['gdoc_if_app'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                            <i class="bi bi-translate"></i>
                            <span>{{ $tr['gdoc_lang_proof'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">German Language Certificate</div>
                                    <div class="di-detail">Goethe B1/B2 or TestDaF/DSH</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status optional-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">English Proof (IELTS/TOEFL)</div>
                                    <div class="di-detail">For English-taught programs</div>
                                </div>
                                <span class="di-badge optional-badge">{{ $tr['gdoc_if_app'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#0d6efd,#3d8bfd);">
                            <i class="bi bi-heart-pulse-fill"></i>
                            <span>{{ $tr['gdoc_insurance'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Health Insurance</div>
                                    <div class="di-detail">Valid German health insurance</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Travel Insurance</div>
                                    <div class="di-detail">For the visa application period</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#495057,#6c757d);">
                            <i class="bi bi-house-fill"></i>
                            <span>{{ $tr['gdoc_accommodation'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Proof of Accommodation</div>
                                    <div class="di-detail">Student residence or rental contract</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status optional-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Host Family Letter</div>
                                    <div class="di-detail">If staying with a host</div>
                                </div>
                                <span class="di-badge optional-badge">{{ $tr['gdoc_if_app'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- WORK VISA --}}
        <div class="doc-tab-content" id="tab-work">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#1a3c6e,#2a5298);">
                            <i class="bi bi-person-vcard-fill"></i>
                            <span>{{ $tr['gdoc_identity'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Valid Passport</div>
                                    <div class="di-detail">Min. 6 months validity</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">2 Biometric Photos</div>
                                    <div class="di-detail">Recent passport-size</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">CV / Resume</div>
                                    <div class="di-detail">In German or English</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#1a6e3c,#28a745);">
                            <i class="bi bi-briefcase-fill"></i>
                            <span>{{ $tr['gdoc_employment'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Job Contract / Offer Letter</div>
                                    <div class="di-detail">From German employer</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Qualification Certificates</div>
                                    <div class="di-detail">Recognized by German authority</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Proof of Qualifications</div>
                                    <div class="di-detail">Diplomas, transcripts translated</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                            <i class="bi bi-translate"></i>
                            <span>{{ $tr['gdoc_lang_proof'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">German Certificate (B1 min.)</div>
                                    <div class="di-detail">Goethe or equivalent</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Health Insurance</div>
                                    <div class="di-detail">Valid German coverage</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Police Clearance</div>
                                    <div class="di-detail">From Cameroon, apostilled</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- BUSINESS VISA --}}
        <div class="doc-tab-content" id="tab-business">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#1a3c6e,#2a5298);">
                            <i class="bi bi-person-vcard-fill"></i>
                            <span>{{ $tr['gdoc_identity'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Valid Passport</div>
                                    <div class="di-detail">Min. 6 months validity</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">2 Biometric Photos</div>
                                    <div class="di-detail">Recent passport-size</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                            <i class="bi bi-building-fill"></i>
                            <span>{{ $tr['gdoc_business'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Invitation Letter</div>
                                    <div class="di-detail">From German business partner</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Business Registration</div>
                                    <div class="di-detail">Your company documents</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Travel Itinerary</div>
                                    <div class="di-detail">Meeting/conference schedule</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#c8860f,#e8a020);">
                            <i class="bi bi-bank2"></i>
                            <span>{{ $tr['gdoc_financial'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Bank Statement</div>
                                    <div class="di-detail">Last 3 months</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Hotel Booking</div>
                                    <div class="di-detail">Confirmed accommodation</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Travel Insurance</div>
                                    <div class="di-detail">Min. €30,000 coverage</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- LANGUAGE COURSE --}}
        <div class="doc-tab-content" id="tab-language">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#1a3c6e,#2a5298);">
                            <i class="bi bi-person-vcard-fill"></i>
                            <span>{{ $tr['gdoc_identity'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">National ID or Passport</div>
                                    <div class="di-detail">Valid government ID</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Passport Photo</div>
                                    <div class="di-detail">1 recent photo</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#1a6e3c,#28a745);">
                            <i class="bi bi-journal-text"></i>
                            <span>{{ $tr['gdoc_course_reg'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Enrollment Form</div>
                                    <div class="di-detail">Completed registration form</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status required-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Payment Receipt</div>
                                    <div class="di-detail">Course fee payment proof</div>
                                </div>
                                <span class="di-badge required-badge">{{ $tr['gdoc_required'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status optional-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Previous Level Certificate</div>
                                    <div class="di-detail">If enrolling in A2, B1, or B2</div>
                                </div>
                                <span class="di-badge optional-badge">{{ $tr['gdoc_if_app'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="doc-category-card">
                        <div class="dcc-header"
                             style="background:linear-gradient(135deg,#c8860f,#e8a020);">
                            <i class="bi bi-info-circle-fill"></i>
                            <span>{{ $tr['gdoc_additional'] }}</span>
                        </div>
                        <div class="dcc-body">
                            <div class="doc-item">
                                <div class="di-status optional-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Academic Background</div>
                                    <div class="di-detail">School certificate or diploma</div>
                                </div>
                                <span class="di-badge optional-badge">{{ $tr['gdoc_optional'] }}</span>
                            </div>
                            <div class="doc-item">
                                <div class="di-status optional-dot"></div>
                                <div class="di-info">
                                    <div class="di-name">Motivation Letter</div>
                                    <div class="di-detail">Why you want to learn German</div>
                                </div>
                                <span class="di-badge optional-badge">{{ $tr['gdoc_optional'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- TIPS --}}
<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label">{{ $tr['gdoc_tips_label'] }}</div>
            <h2 class="section-title">{{ $tr['gdoc_tips_title'] }}</h2>
            <div class="divider-accent mx-auto"></div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="tip-card">
                    <div class="tip-number">01</div>
                    <div class="tip-icon">
                        <i class="bi bi-translate"></i>
                    </div>
                    <h5 class="tip-title">{{ $tr['gdoc_t1_title'] }}</h5>
                    <p class="tip-desc">{{ $tr['gdoc_t1_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="tip-card">
                    <div class="tip-number">02</div>
                    <div class="tip-icon">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <h5 class="tip-title">{{ $tr['gdoc_t2_title'] }}</h5>
                    <p class="tip-desc">{{ $tr['gdoc_t2_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="tip-card">
                    <div class="tip-number">03</div>
                    <div class="tip-icon">
                        <i class="bi bi-files"></i>
                    </div>
                    <h5 class="tip-title">{{ $tr['gdoc_t3_title'] }}</h5>
                    <p class="tip-desc">{{ $tr['gdoc_t3_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="tip-card">
                    <div class="tip-number">04</div>
                    <div class="tip-icon">
                        <i class="bi bi-calendar-check-fill"></i>
                    </div>
                    <h5 class="tip-title">{{ $tr['gdoc_t4_title'] }}</h5>
                    <p class="tip-desc">{{ $tr['gdoc_t4_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="tip-card">
                    <div class="tip-number">05</div>
                    <div class="tip-icon">
                        <i class="bi bi-bank2"></i>
                    </div>
                    <h5 class="tip-title">{{ $tr['gdoc_t5_title'] }}</h5>
                    <p class="tip-desc">{{ $tr['gdoc_t5_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="tip-card">
                    <div class="tip-number">06</div>
                    <div class="tip-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h5 class="tip-title">{{ $tr['gdoc_t6_title'] }}</h5>
                    <p class="tip-desc">{{ $tr['gdoc_t6_desc'] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section style="background:linear-gradient(135deg,#0d1b2a,#1a3c6e);padding:80px 0;">
    <div class="container text-center" data-aos="zoom-in">
        <h2 style="font-size:2rem;font-weight:800;color:#fff;margin-bottom:14px;">
            {{ $tr['gdoc_cta_title'] }}
        </h2>
        <p style="color:rgba(255,255,255,0.65);font-size:0.95rem;
                  margin-bottom:32px;max-width:560px;margin-left:auto;margin-right:auto;">
            {{ $tr['gdoc_cta_sub'] }}
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ url('/visa') }}"
               style="background:linear-gradient(135deg,var(--accent),var(--accent-dark));
                      color:var(--dark);padding:13px 30px;border-radius:10px;
                      font-weight:700;font-size:0.92rem;
                      display:inline-flex;align-items:center;gap:8px;">
                <i class="bi bi-passport-fill"></i>
                {{ $tr['gdoc_cta_btn'] }}
            </a>
            <a href="{{ url('/contact') }}"
               style="background:rgba(255,255,255,0.1);
                      border:2px solid rgba(255,255,255,0.3);
                      color:#fff;padding:12px 28px;border-radius:10px;
                      font-weight:600;font-size:0.92rem;
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
.ph-title { font-size:2.8rem;font-weight:800;color:#fff;line-height:1.2;margin-bottom:16px; }
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
.gdoc-header-visual {
    position:relative;width:320px;height:320px;
    display:flex;align-items:center;justify-content:center;
}
.gdv-center {
    width:130px;height:130px;border-radius:50%;
    background:rgba(255,255,255,0.1);border:2px solid rgba(255,255,255,0.2);
    display:flex;align-items:center;justify-content:center;
    font-size:3rem;color:var(--accent);backdrop-filter:blur(20px);z-index:2;
}
.gdv-badge {
    position:absolute;background:rgba(255,255,255,0.95);
    border-radius:25px;padding:8px 16px;
    font-size:0.78rem;font-weight:700;color:var(--primary);
    box-shadow:0 5px 20px rgba(0,0,0,0.15);z-index:3;
    display:flex;align-items:center;gap:7px;
}
.gdv-badge i { color:var(--accent); }
.gdv-b1 { top:30px;right:0;animation:fl1 3s ease-in-out infinite; }
.gdv-b2 { bottom:80px;right:-10px;animation:fl2 3.5s ease-in-out infinite; }
.gdv-b3 { top:110px;left:0;animation:fl3 4s ease-in-out infinite; }
.doc-tabs {
    display:flex;gap:8px;flex-wrap:wrap;
    background:#fff;border-radius:14px;padding:8px;
    box-shadow:0 4px 20px rgba(0,0,0,0.06);margin-bottom:30px;
}
.doc-tab {
    flex:1;padding:12px 16px;border:none;border-radius:10px;
    background:transparent;cursor:pointer;font-size:0.85rem;
    font-weight:600;color:#6c7a89;transition:all 0.3s;
    display:flex;align-items:center;justify-content:center;
    gap:7px;font-family:'Inter',sans-serif;min-width:120px;
}
.doc-tab.active {
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    color:#fff;box-shadow:0 3px 12px rgba(26,60,110,0.25);
}
.doc-tab:hover:not(.active) { background:var(--light-bg);color:var(--primary); }
.doc-tab-content { display:none; }
.doc-tab-content.active { display:block; }
.doc-category-card {
    background:#fff;border-radius:16px;overflow:hidden;
    box-shadow:0 4px 20px rgba(0,0,0,0.06);height:100%;transition:all 0.3s;
}
.doc-category-card:hover { transform:translateY(-4px);box-shadow:0 15px 40px rgba(0,0,0,0.1); }
.dcc-header {
    padding:16px 20px;display:flex;align-items:center;gap:10px;
    font-size:0.85rem;font-weight:700;color:#fff;
}
.dcc-header i { font-size:1rem; }
.dcc-body { padding:16px 20px; }
.doc-item {
    display:flex;align-items:flex-start;gap:10px;
    padding:10px 0;border-bottom:1px solid rgba(0,0,0,0.05);
}
.doc-item:last-child { border-bottom:none; }
.di-status { width:10px;height:10px;border-radius:50%;flex-shrink:0;margin-top:5px; }
.required-dot { background:#28a745; }
.optional-dot { background:#ffc107; }
.di-info { flex:1; }
.di-name { font-size:0.84rem;font-weight:600;color:#2d3748;margin-bottom:2px; }
.di-detail { font-size:0.75rem;color:#6c7a89;line-height:1.4; }
.di-badge {
    font-size:0.65rem;font-weight:700;padding:3px 10px;
    border-radius:20px;white-space:nowrap;flex-shrink:0;
}
.required-badge { background:rgba(40,167,69,0.12);color:#155724; }
.optional-badge { background:rgba(255,193,7,0.15);color:#856404; }
.tip-card {
    background:#fff;border:1px solid rgba(0,0,0,0.07);
    border-radius:16px;padding:28px 24px;
    position:relative;overflow:hidden;height:100%;transition:all 0.3s;
}
.tip-card:hover { transform:translateY(-5px);box-shadow:0 15px 40px rgba(26,60,110,0.1); }
.tip-number {
    position:absolute;top:14px;right:18px;
    font-size:2.5rem;font-weight:800;color:rgba(26,60,110,0.05);
    font-family:'Poppins',sans-serif;line-height:1;
}
.tip-icon {
    width:54px;height:54px;border-radius:14px;
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    display:flex;align-items:center;justify-content:center;
    font-size:1.3rem;color:#fff;margin-bottom:16px;
}
.tip-title { font-size:0.97rem;font-weight:700;color:var(--primary);margin-bottom:10px; }
.tip-desc { font-size:0.85rem;color:#6c7a89;line-height:1.7;margin:0; }
@media(max-width:991.98px){ .ph-title { font-size:2rem; } }
</style>
@endpush

@push('scripts')
<script>
function showDocTab(tab, event) {
    document.querySelectorAll('.doc-tab-content').forEach(el => {
        el.classList.remove('active');
    });
    document.querySelectorAll('.doc-tab').forEach(el => {
        el.classList.remove('active');
    });
    document.getElementById('tab-' + tab).classList.add('active');
    if (event && event.target) {
        event.target.closest('.doc-tab').classList.add('active');
    }
}
</script>
@endpush