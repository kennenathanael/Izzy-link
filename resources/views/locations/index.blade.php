@extends('layouts.app')
@section('title', $tr['loc_tag'] ?? 'Locations')

@section('content')

{{-- PAGE HEADER --}}
<section style="background:linear-gradient(135deg,#0d1b2a,#1a3c6e);
                padding:80px 0 60px;position:relative;overflow:hidden;">
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
                    {{ $tr['loc_tag'] }}
                </li>
            </ol>
        </nav>
        <div class="text-center" data-aos="fade-up">
            <div class="ph-service-tag">
                <i class="bi bi-geo-alt-fill"></i>
                {{ $tr['loc_tag'] }}
            </div>
            <h1 class="ph-title" style="font-size:2.5rem;">
                {{ $tr['loc_title'] }}
            </h1>
            <p class="ph-subtitle mx-auto" style="max-width:560px;">
                {{ $tr['loc_sub'] }}
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
                <a href="#yaounde" class="btn-ph-primary">
                    <i class="bi bi-geo-alt-fill"></i>
                    {{ $tr['loc_yaounde_btn'] }}
                </a>
                <a href="#douala" class="btn-ph-outline">
                    <i class="bi bi-geo-alt"></i>
                    {{ $tr['loc_douala_btn'] }}
                </a>
            </div>
        </div>
    </div>
</section>

{{-- YAOUNDÉ CENTERS --}}
<section class="section-padding" id="yaounde" style="background:#f4f7fc;">
    <div class="container">
        <div class="city-header" data-aos="fade-right">
            <div class="ch-icon"><i class="bi bi-geo-alt-fill"></i></div>
            <h2 class="ch-title">{{ $tr['loc_yaounde_title'] }}</h2>
            <div class="ch-count">4 {{ $tr['loc_tag'] }}</div>
        </div>
        <div class="row g-4">

            {{-- CARREFOUR HQ --}}
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0" id="carrefour">
                <div class="location-card hq-location">
                    <div class="lc-hq-tag">{{ $tr['headquarters'] }}</div>
                    <div class="lc-header">
                        <div class="lc-icon">
                            <i class="bi bi-building-fill"></i>
                        </div>
                        <div class="lc-title-wrap">
                            <h4 class="lc-name">Carrefour</h4>
                            <div class="lc-city">
                                <i class="bi bi-geo-alt-fill"></i> Yaoundé
                            </div>
                        </div>
                        <div class="lc-badge-city">Yaoundé</div>
                    </div>
                    <div class="lc-body">
                        <div class="lc-info-row">
                            <div class="lc-info-item">
                                <div class="lci-label">
                                    <i class="bi bi-clock-fill"></i>
                                    {{ $tr['loc_hours'] }}
                                </div>
                                <div class="lci-value">Mon–Sat: 8:00 AM – 6:00 PM</div>
                            </div>
                            <div class="lc-info-item">
                                <div class="lci-label">
                                    <i class="bi bi-telephone-fill"></i>
                                    {{ $tr['loc_phone'] ?? 'Phone' }}
                                </div>
                                <div class="lci-value">+237 6XX XXX XXX</div>
                            </div>
                        </div>
                        <div class="lc-services-section">
                            <div class="lcs-title">{{ $tr['loc_services'] }}</div>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="lcs-tag drv">
                                    <i class="bi bi-car-front-fill"></i>
                                    {{ $tr['driving_tag'] }}
                                </span>
                                <span class="lcs-tag lang">
                                    <i class="bi bi-translate"></i>
                                    {{ $tr['language'] }}
                                </span>
                                <span class="lcs-tag visa">
                                    <i class="bi bi-passport-fill"></i>
                                    {{ $tr['visa'] }}
                                </span>
                            </div>
                        </div>
                        <div class="lc-facilities-section">
                            <div class="lcs-title">{{ $tr['loc_facilities'] }}</div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i>
                                        Main Office
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i>
                                        Theory Hall
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i>
                                        Practice Track
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i>
                                        Language Rooms
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i>
                                        Visa Office
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i>
                                        Parking
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lc-actions">
                            <a href="tel:+237600000000" class="lca-btn-call">
                                <i class="bi bi-telephone-fill"></i>
                                {{ $tr['loc_call'] }}
                            </a>
                            <a href="https://wa.me/237600000000" target="_blank"
                               class="lca-btn-whatsapp">
                                <i class="bi bi-whatsapp"></i>
                                WhatsApp
                            </a>
                            <a href="{{ url('/contact') }}" class="lca-btn-book">
                                <i class="bi bi-calendar-plus-fill"></i>
                                {{ $tr['loc_book'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- NKOMO --}}
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100" id="nkomo">
                <div class="location-card">
                    <div class="lc-header">
                        <div class="lc-icon"><i class="bi bi-building"></i></div>
                        <div class="lc-title-wrap">
                            <h4 class="lc-name">Nkomo</h4>
                            <div class="lc-city">
                                <i class="bi bi-geo-alt-fill"></i> Yaoundé
                            </div>
                        </div>
                        <div class="lc-badge-city">Yaoundé</div>
                    </div>
                    <div class="lc-body">
                        <div class="lc-info-row">
                            <div class="lc-info-item">
                                <div class="lci-label">
                                    <i class="bi bi-clock-fill"></i>
                                    {{ $tr['loc_hours'] }}
                                </div>
                                <div class="lci-value">Mon–Sat: 8:00 AM – 6:00 PM</div>
                            </div>
                            <div class="lc-info-item">
                                <div class="lci-label">
                                    <i class="bi bi-telephone-fill"></i>
                                    {{ $tr['loc_phone'] ?? 'Phone' }}
                                </div>
                                <div class="lci-value">+237 6XX XXX XXX</div>
                            </div>
                        </div>
                        <div class="lc-services-section">
                            <div class="lcs-title">{{ $tr['loc_services'] }}</div>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="lcs-tag drv">
                                    <i class="bi bi-car-front-fill"></i>
                                    {{ $tr['driving_tag'] }}
                                </span>
                                <span class="lcs-tag lang">
                                    <i class="bi bi-translate"></i>
                                    {{ $tr['language'] }}
                                </span>
                            </div>
                        </div>
                        <div class="lc-facilities-section">
                            <div class="lcs-title">{{ $tr['loc_facilities'] }}</div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Theory Hall
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Practice Area
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Language Room
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Parking Lessons
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lc-actions">
                            <a href="tel:+237600000000" class="lca-btn-call">
                                <i class="bi bi-telephone-fill"></i>
                                {{ $tr['loc_call'] }}
                            </a>
                            <a href="https://wa.me/237600000000" target="_blank"
                               class="lca-btn-whatsapp">
                                <i class="bi bi-whatsapp"></i> WhatsApp
                            </a>
                            <a href="{{ url('/contact') }}" class="lca-btn-book">
                                <i class="bi bi-calendar-plus-fill"></i>
                                {{ $tr['loc_book'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ESSOS --}}
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200" id="essos">
                <div class="location-card">
                    <div class="lc-header">
                        <div class="lc-icon"><i class="bi bi-building"></i></div>
                        <div class="lc-title-wrap">
                            <h4 class="lc-name">Essos</h4>
                            <div class="lc-city">
                                <i class="bi bi-geo-alt-fill"></i>
                                Hôtel du Plateau, Yaoundé
                            </div>
                        </div>
                        <div class="lc-badge-city">Yaoundé</div>
                    </div>
                    <div class="lc-body">
                        <div class="lc-info-row">
                            <div class="lc-info-item">
                                <div class="lci-label">
                                    <i class="bi bi-clock-fill"></i>
                                    {{ $tr['loc_hours'] }}
                                </div>
                                <div class="lci-value">Mon–Sat: 8:00 AM – 6:00 PM</div>
                            </div>
                            <div class="lc-info-item">
                                <div class="lci-label">
                                    <i class="bi bi-telephone-fill"></i>
                                    {{ $tr['loc_phone'] ?? 'Phone' }}
                                </div>
                                <div class="lci-value">+237 6XX XXX XXX</div>
                            </div>
                        </div>
                        <div class="lc-services-section">
                            <div class="lcs-title">{{ $tr['loc_services'] }}</div>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="lcs-tag lang">
                                    <i class="bi bi-translate"></i>
                                    {{ $tr['language'] }}
                                </span>
                                <span class="lcs-tag visa">
                                    <i class="bi bi-passport-fill"></i>
                                    {{ $tr['visa'] }}
                                </span>
                            </div>
                        </div>
                        <div class="lc-facilities-section">
                            <div class="lcs-title">{{ $tr['loc_facilities'] }}</div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Language Rooms
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Visa Office
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Highway Training
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Weekend Classes
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lc-actions">
                            <a href="tel:+237600000000" class="lca-btn-call">
                                <i class="bi bi-telephone-fill"></i>
                                {{ $tr['loc_call'] }}
                            </a>
                            <a href="https://wa.me/237600000000" target="_blank"
                               class="lca-btn-whatsapp">
                                <i class="bi bi-whatsapp"></i> WhatsApp
                            </a>
                            <a href="{{ url('/contact') }}" class="lca-btn-book">
                                <i class="bi bi-calendar-plus-fill"></i>
                                {{ $tr['loc_book'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- BONAS --}}
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300" id="bonas">
                <div class="location-card">
                    <div class="lc-header">
                        <div class="lc-icon"><i class="bi bi-building"></i></div>
                        <div class="lc-title-wrap">
                            <h4 class="lc-name">Bonas</h4>
                            <div class="lc-city">
                                <i class="bi bi-geo-alt-fill"></i> Yaoundé
                            </div>
                        </div>
                        <div class="lc-badge-city">Yaoundé</div>
                    </div>
                    <div class="lc-body">
                        <div class="lc-info-row">
                            <div class="lc-info-item">
                                <div class="lci-label">
                                    <i class="bi bi-clock-fill"></i>
                                    {{ $tr['loc_hours'] }}
                                </div>
                                <div class="lci-value">Mon–Sat: 8:00 AM – 6:00 PM</div>
                            </div>
                            <div class="lc-info-item">
                                <div class="lci-label">
                                    <i class="bi bi-telephone-fill"></i>
                                    {{ $tr['loc_phone'] ?? 'Phone' }}
                                </div>
                                <div class="lci-value">+237 6XX XXX XXX</div>
                            </div>
                        </div>
                        <div class="lc-services-section">
                            <div class="lcs-title">{{ $tr['loc_services'] }}</div>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="lcs-tag drv">
                                    <i class="bi bi-car-front-fill"></i>
                                    {{ $tr['driving_tag'] }}
                                </span>
                                <span class="lcs-tag lang">
                                    <i class="bi bi-translate"></i>
                                    {{ $tr['language'] }}
                                </span>
                            </div>
                        </div>
                        <div class="lc-facilities-section">
                            <div class="lcs-title">{{ $tr['loc_facilities'] }}</div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Theory Hall
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Evening Classes
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Weekend Classes
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Practice Area
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lc-actions">
                            <a href="tel:+237600000000" class="lca-btn-call">
                                <i class="bi bi-telephone-fill"></i>
                                {{ $tr['loc_call'] }}
                            </a>
                            <a href="https://wa.me/237600000000" target="_blank"
                               class="lca-btn-whatsapp">
                                <i class="bi bi-whatsapp"></i> WhatsApp
                            </a>
                            <a href="{{ url('/contact') }}" class="lca-btn-book">
                                <i class="bi bi-calendar-plus-fill"></i>
                                {{ $tr['loc_book'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- DOUALA CENTER --}}
<section class="section-padding" id="douala" style="background:#fff;">
    <div class="container">
        <div class="city-header" data-aos="fade-right">
            <div class="ch-icon"><i class="bi bi-geo-alt-fill"></i></div>
            <h2 class="ch-title">{{ $tr['loc_douala_title'] }}</h2>
            <div class="ch-count">1 {{ $tr['loc_tag'] }}</div>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" id="makepe">
                <div class="location-card">
                    <div class="lc-header">
                        <div class="lc-icon"><i class="bi bi-building"></i></div>
                        <div class="lc-title-wrap">
                            <h4 class="lc-name">Makepe-Missoke</h4>
                            <div class="lc-city">
                                <i class="bi bi-geo-alt-fill"></i> Douala
                            </div>
                        </div>
                        <div class="lc-badge-city"
                             style="background:rgba(232,160,32,0.12);
                                    color:var(--accent);">
                            Douala
                        </div>
                    </div>
                    <div class="lc-body">
                        <div class="lc-info-row">
                            <div class="lc-info-item">
                                <div class="lci-label">
                                    <i class="bi bi-clock-fill"></i>
                                    {{ $tr['loc_hours'] }}
                                </div>
                                <div class="lci-value">Mon–Sat: 8:00 AM – 6:00 PM</div>
                            </div>
                            <div class="lc-info-item">
                                <div class="lci-label">
                                    <i class="bi bi-telephone-fill"></i>
                                    {{ $tr['loc_phone'] ?? 'Phone' }}
                                </div>
                                <div class="lci-value">+237 6XX XXX XXX</div>
                            </div>
                        </div>
                        <div class="lc-services-section">
                            <div class="lcs-title">{{ $tr['loc_services'] }}</div>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="lcs-tag drv">
                                    <i class="bi bi-car-front-fill"></i>
                                    {{ $tr['driving_tag'] }}
                                </span>
                                <span class="lcs-tag lang">
                                    <i class="bi bi-translate"></i>
                                    {{ $tr['language'] }}
                                </span>
                                <span class="lcs-tag visa">
                                    <i class="bi bi-passport-fill"></i>
                                    {{ $tr['visa'] }}
                                </span>
                            </div>
                        </div>
                        <div class="lc-facilities-section">
                            <div class="lcs-title">{{ $tr['loc_facilities'] }}</div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> All Services
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Theory Hall
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Language Rooms
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="lcf-item">
                                        <i class="bi bi-check2"></i> Visa Office
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lc-actions">
                            <a href="tel:+237600000000" class="lca-btn-call">
                                <i class="bi bi-telephone-fill"></i>
                                {{ $tr['loc_call'] }}
                            </a>
                            <a href="https://wa.me/237600000000" target="_blank"
                               class="lca-btn-whatsapp">
                                <i class="bi bi-whatsapp"></i> WhatsApp
                            </a>
                            <a href="{{ url('/contact') }}" class="lca-btn-book">
                                <i class="bi bi-calendar-plus-fill"></i>
                                {{ $tr['loc_book'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section style="background:#f4f7fc;padding:70px 0;">
    <div class="container text-center" data-aos="zoom-in">
        <h3 style="font-size:1.7rem;font-weight:800;
                   color:var(--primary);margin-bottom:12px;">
            {{ $tr['loc_cta_title'] }}
        </h3>
        <p style="color:#6c7a89;font-size:0.93rem;margin-bottom:28px;">
            {{ $tr['loc_cta_sub'] }}
        </p>
        <a href="{{ url('/contact') }}"
           style="background:var(--primary);color:#fff;padding:13px 30px;
                  border-radius:10px;font-weight:600;font-size:0.92rem;
                  display:inline-flex;align-items:center;gap:8px;">
            <i class="bi bi-envelope-fill"></i>
            {{ $tr['contact_us'] }}
        </a>
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
.ph-title { font-weight:800;color:#fff;line-height:1.2;margin-bottom:16px; }
.ph-subtitle { color:rgba(255,255,255,0.68);font-size:0.97rem;line-height:1.8; }
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
.city-header {
    display:flex;align-items:center;gap:14px;margin-bottom:28px;
}
.ch-icon {
    width:42px;height:42px;border-radius:12px;
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    display:flex;align-items:center;justify-content:center;
    font-size:1rem;color:#fff;flex-shrink:0;
}
.ch-title { font-size:1.5rem;font-weight:800;color:var(--primary);margin:0;flex:1; }
.ch-count {
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark);font-size:0.75rem;font-weight:700;
    padding:5px 14px;border-radius:20px;
}
.location-card {
    background:#fff;border:2px solid rgba(0,0,0,0.07);
    border-radius:20px;overflow:hidden;
    box-shadow:0 4px 25px rgba(0,0,0,0.06);
    transition:all 0.3s;position:relative;height:100%;
}
.location-card:hover { border-color:var(--primary);box-shadow:0 15px 50px rgba(26,60,110,0.12); }
.hq-location { border-color:var(--accent);background:linear-gradient(180deg,#fffdf5,#fff); }
.lc-hq-tag {
    position:absolute;top:0;left:0;right:0;
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark);font-size:0.65rem;font-weight:800;
    text-transform:uppercase;letter-spacing:0.5px;
    padding:5px;text-align:center;z-index:2;
}
.lc-header {
    padding:24px 24px 16px;display:flex;align-items:center;gap:14px;
    margin-top:28px;
}
.lc-icon {
    width:52px;height:52px;background:var(--light-bg);
    border-radius:13px;display:flex;align-items:center;
    justify-content:center;font-size:1.3rem;color:var(--primary);flex-shrink:0;
}
.lc-name { font-size:1.15rem;font-weight:800;color:var(--primary);margin:0; }
.lc-city { font-size:0.78rem;color:#6c7a89;display:flex;align-items:center;gap:4px;margin-top:3px; }
.lc-city i { color:var(--accent);font-size:0.75rem; }
.lc-badge-city {
    background:rgba(26,60,110,0.08);color:var(--primary);
    font-size:0.7rem;font-weight:700;padding:4px 12px;
    border-radius:20px;margin-left:auto;flex-shrink:0;
}
.lc-body { padding:0 24px 24px; }
.lc-info-row {
    display:flex;gap:20px;margin-bottom:18px;flex-wrap:wrap;
    background:var(--light-bg);border-radius:12px;padding:14px;
}
.lc-info-item { flex:1;min-width:140px; }
.lci-label {
    font-size:0.7rem;font-weight:700;text-transform:uppercase;
    letter-spacing:0.5px;color:#6c7a89;margin-bottom:4px;
    display:flex;align-items:center;gap:5px;
}
.lci-label i { color:var(--accent); }
.lci-value { font-size:0.85rem;font-weight:600;color:var(--primary); }
.lc-services-section { margin-bottom:16px; }
.lcs-title {
    font-size:0.72rem;font-weight:700;text-transform:uppercase;
    letter-spacing:0.8px;color:#6c7a89;margin-bottom:9px;
}
.lcs-tag {
    display:inline-flex;align-items:center;gap:6px;
    font-size:0.75rem;font-weight:600;padding:5px 12px;border-radius:20px;
}
.lcs-tag.drv { background:rgba(26,60,110,0.08);color:var(--primary); }
.lcs-tag.lang { background:rgba(232,160,32,0.12);color:var(--accent-dark); }
.lcs-tag.visa { background:rgba(40,167,69,0.1);color:#155724; }
.lc-facilities-section { margin-bottom:18px; }
.lcf-item {
    display:flex;align-items:center;gap:7px;
    font-size:0.82rem;color:#2d3748;padding:5px 0;
}
.lcf-item i { color:var(--accent);font-size:0.85rem; }
.lc-actions { display:flex;gap:8px;flex-wrap:wrap; }
.lca-btn-call {
    display:inline-flex;align-items:center;gap:6px;
    background:var(--primary);color:#fff !important;
    font-size:0.8rem;font-weight:600;padding:9px 16px;
    border-radius:9px;transition:all 0.3s;flex:1;justify-content:center;
}
.lca-btn-call:hover { background:var(--primary-light); }
.lca-btn-whatsapp {
    display:inline-flex;align-items:center;gap:6px;
    background:#25D366;color:#fff !important;
    font-size:0.8rem;font-weight:600;padding:9px 16px;
    border-radius:9px;transition:all 0.3s;
}
.lca-btn-whatsapp:hover { background:#128C7E; }
.lca-btn-book {
    display:inline-flex;align-items:center;gap:6px;
    background:var(--light-bg);color:var(--primary) !important;
    font-size:0.8rem;font-weight:600;padding:9px 16px;
    border-radius:9px;transition:all 0.3s;
}
.lca-btn-book:hover { background:var(--primary);color:#fff !important; }
@media(max-width:991.98px){ .lc-info-row { flex-direction:column;gap:10px; } }
</style>
@endpush