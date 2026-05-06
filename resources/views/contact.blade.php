@extends('layouts.app')
@section('title', $tr['cont_tag'] ?? 'Contact')

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
                    {{ $tr['cont_tag'] }}
                </li>
            </ol>
        </nav>
        <div class="text-center" data-aos="fade-up">
            <div class="ph-service-tag">
                <i class="bi bi-envelope-fill"></i>
                {{ $tr['cont_tag'] }}
            </div>
            <h1 class="ph-title" style="font-size:2.5rem;">
                {{ $tr['cont_title'] }}
            </h1>
            <p class="ph-subtitle mx-auto" style="max-width:520px;">
                {{ $tr['cont_sub'] }}
            </p>
        </div>
    </div>
</section>

{{-- CONTACT INFO + FORM --}}
<section class="section-padding" style="background:#f4f7fc;">
    <div class="container">
        <div class="row g-5">

            {{-- LEFT: Contact Info --}}
            <div class="col-lg-4" data-aos="fade-right">
                <div class="contact-info-card">
                    <div class="cic-item">
                        <div class="cic-icon"
                             style="background:linear-gradient(135deg,var(--primary),
                                    var(--primary-light));">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <div class="cic-label">{{ $tr['cont_phone'] }}</div>
                            <div class="cic-value">+237 6XX XXX XXX</div>
                        </div>
                    </div>
                    <div class="cic-item">
                        <div class="cic-icon"
                             style="background:linear-gradient(135deg,var(--accent-dark),
                                    var(--accent));">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <div class="cic-label">{{ $tr['cont_email'] }}</div>
                            <div class="cic-value">contact@easy-group.cm</div>
                        </div>
                    </div>
                    <div class="cic-item">
                        <div class="cic-icon"
                             style="background:linear-gradient(135deg,#25D366,#128C7E);">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <div class="cic-label">{{ $tr['cont_whatsapp'] }}</div>
                            <div class="cic-value">+237 6XX XXX XXX</div>
                        </div>
                    </div>
                    <div class="cic-item">
                        <div class="cic-icon"
                             style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <div class="cic-label">{{ $tr['cont_hours'] }}</div>
                            <div class="cic-value">{{ $tr['cont_hours_val'] }}</div>
                        </div>
                    </div>

                    <a href="https://wa.me/237600000000" target="_blank"
                       class="cic-whatsapp-btn">
                        <i class="bi bi-whatsapp"></i>
                        {{ $tr['cont_whatsapp_btn'] }}
                    </a>
                </div>

                {{-- Centers Quick List --}}
                <div class="contact-centers-card mt-4" data-aos="fade-up">
                    <div class="ccc-title">
                        <i class="bi bi-geo-alt-fill"></i>
                        {{ $tr['cont_visit'] }}
                    </div>
                    <a href="{{ url('/locations#carrefour') }}" class="ccc-item">
                        <div class="ccc-dot hq-dot"></div>
                        <div>
                            <div class="ccc-name">Carrefour</div>
                            <div class="ccc-city">Yaoundé (HQ)</div>
                        </div>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="{{ url('/locations#nkomo') }}" class="ccc-item">
                        <div class="ccc-dot"></div>
                        <div>
                            <div class="ccc-name">Nkomo</div>
                            <div class="ccc-city">Yaoundé</div>
                        </div>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="{{ url('/locations#essos') }}" class="ccc-item">
                        <div class="ccc-dot"></div>
                        <div>
                            <div class="ccc-name">Essos</div>
                            <div class="ccc-city">Yaoundé</div>
                        </div>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="{{ url('/locations#bonas') }}" class="ccc-item">
                        <div class="ccc-dot"></div>
                        <div>
                            <div class="ccc-name">Bonas</div>
                            <div class="ccc-city">Yaoundé</div>
                        </div>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="{{ url('/locations#makepe') }}" class="ccc-item">
                        <div class="ccc-dot douala-dot"></div>
                        <div>
                            <div class="ccc-name">Makepe-Missoke</div>
                            <div class="ccc-city">Douala</div>
                        </div>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            {{-- RIGHT: Contact Form --}}
            <div class="col-lg-8" data-aos="fade-left">
                <div class="contact-form-card">
                    <div class="cfc-header">
                        <div class="section-label">{{ $tr['cont_form_label'] }}</div>
                        <h2 class="section-title">{{ $tr['cont_form_title'] }}</h2>
                        <div class="divider-accent"></div>
                    </div>

                    @if(session('success'))
                        <div class="alert-success-contact mb-4">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="row g-3">
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
                                    {{ $tr['email'] }}
                                </label>
                                <input type="email" name="email"
                                       class="input-custom"
                                       placeholder="you@email.com"
                                       value="{{ old('email') }}"/>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">
                                    {{ $tr['cont_service'] }}
                                </label>
                                <select name="service" class="input-custom">
                                    <option value="" disabled selected>
                                        {{ $tr['cont_service'] }}
                                    </option>
                                    <option value="driving">{{ $tr['driving_tag'] }}</option>
                                    <option value="language">{{ $tr['language'] }}</option>
                                    <option value="visa">{{ $tr['visa'] }}</option>
                                    <option value="german_docs">{{ $tr['german_docs'] }}</option>
                                    <option value="payment">{{ $tr['pay_tag'] }}</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label-custom">
                                    {{ $tr['cont_message'] }} *
                                </label>
                                <textarea name="message" class="input-custom"
                                          rows="5" required
                                          placeholder="{{ $tr['cont_msg_ph'] }}">{{ old('message') }}</textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-contact-send">
                                    <i class="bi bi-send-fill"></i>
                                    {{ $tr['cont_send'] }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section style="background:#fff;padding:70px 0;">
    <div class="container text-center" data-aos="zoom-in">
        <h3 style="font-size:1.7rem;font-weight:800;color:var(--primary);margin-bottom:12px;">
            {{ $tr['cont_cta_title'] }}
        </h3>
        <p style="color:#6c7a89;font-size:0.93rem;margin-bottom:28px;">
            {{ $tr['cont_cta_sub'] }}
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="https://wa.me/237600000000" target="_blank"
               style="background:#25D366;color:#fff;padding:12px 28px;
                      border-radius:10px;font-weight:600;font-size:0.9rem;
                      display:inline-flex;align-items:center;gap:8px;">
                <i class="bi bi-whatsapp"></i>
                {{ $tr['cont_whatsapp_btn'] }}
            </a>
            <a href="{{ url('/locations') }}"
               style="background:var(--primary);color:#fff;padding:12px 28px;
                      border-radius:10px;font-weight:600;font-size:0.9rem;
                      display:inline-flex;align-items:center;gap:8px;">
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
    background:rgba(232,160,32,0.15);border:1px solid rgba(232,160,32,0.3);
    color:var(--accent);font-size:0.8rem;font-weight:600;
    padding:7px 16px;border-radius:50px;margin-bottom:18px;
}
.ph-title { font-weight:800;color:#fff;line-height:1.2;margin-bottom:16px; }
.ph-subtitle { color:rgba(255,255,255,0.68);font-size:0.97rem;line-height:1.8; }
.contact-info-card {
    background:#fff;border-radius:20px;padding:30px;
    box-shadow:0 8px 40px rgba(0,0,0,0.07);
}
.cic-item {
    display:flex;align-items:flex-start;gap:16px;
    padding:16px 0;border-bottom:1px solid rgba(0,0,0,0.06);
}
.cic-item:last-of-type { border-bottom:none;padding-bottom:20px; }
.cic-icon {
    width:46px;height:46px;border-radius:12px;
    display:flex;align-items:center;justify-content:center;
    font-size:1.1rem;color:#fff;flex-shrink:0;
}
.cic-label {
    font-size:0.72rem;font-weight:700;text-transform:uppercase;
    letter-spacing:0.5px;color:#6c7a89;margin-bottom:4px;
}
.cic-value { font-size:0.92rem;font-weight:600;color:var(--primary); }
.cic-whatsapp-btn {
    display:flex;align-items:center;justify-content:center;gap:9px;
    background:#25D366;color:#fff !important;
    font-weight:700;font-size:0.92rem;padding:13px;
    border-radius:12px;transition:all 0.3s;
}
.cic-whatsapp-btn:hover { background:#128C7E;transform:translateY(-2px); }
.contact-centers-card {
    background:#fff;border-radius:20px;padding:24px;
    box-shadow:0 8px 40px rgba(0,0,0,0.07);
}
.ccc-title {
    font-size:0.85rem;font-weight:700;text-transform:uppercase;
    letter-spacing:0.8px;color:var(--primary);margin-bottom:16px;
    display:flex;align-items:center;gap:8px;
}
.ccc-title i { color:var(--accent); }
.ccc-item {
    display:flex;align-items:center;gap:12px;
    padding:11px 0;border-bottom:1px solid rgba(0,0,0,0.05);
    color:var(--primary) !important;transition:all 0.2s;
}
.ccc-item:last-child { border-bottom:none; }
.ccc-item:hover { padding-left:6px; }
.ccc-item > i { color:#6c7a89;font-size:0.8rem;margin-left:auto; }
.ccc-dot {
    width:10px;height:10px;border-radius:50%;
    background:var(--primary);flex-shrink:0;
}
.hq-dot { background:var(--accent); }
.douala-dot { background:#28a745; }
.ccc-name { font-size:0.88rem;font-weight:600;color:var(--primary); }
.ccc-city { font-size:0.75rem;color:#6c7a89;margin-top:2px; }
.contact-form-card {
    background:#fff;border-radius:20px;padding:36px;
    box-shadow:0 8px 40px rgba(0,0,0,0.07);
}
.cfc-header { margin-bottom:28px; }
.form-label-custom {
    display:block;font-size:0.83rem;font-weight:600;color:#2d3748;margin-bottom:6px;
}
.input-custom {
    width:100%;padding:11px 14px;font-size:0.88rem;
    border:2px solid #e8ecf0;border-radius:10px;
    color:#2d3748;background:#fff;outline:none;
    transition:all 0.3s;font-family:'Inter',sans-serif;
    appearance:auto;resize:vertical;
}
.input-custom:focus { border-color:var(--primary);box-shadow:0 0 0 3px rgba(26,60,110,0.08); }
.btn-contact-send {
    display:inline-flex;align-items:center;gap:9px;
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    color:#fff;border:none;padding:13px 30px;border-radius:12px;
    font-weight:700;font-size:0.95rem;cursor:pointer;transition:all 0.3s;
    box-shadow:0 5px 20px rgba(26,60,110,0.3);font-family:'Inter',sans-serif;
}
.btn-contact-send:hover { transform:translateY(-2px); }
.alert-success-contact {
    background:rgba(40,167,69,0.12);border:1px solid rgba(40,167,69,0.25);
    color:#155724;border-radius:12px;padding:16px 20px;
    display:flex;align-items:center;gap:10px;font-size:0.88rem;
}
.alert-success-contact i { color:#28a745;font-size:1.1rem; }
@media(max-width:991.98px){
    .ph-title { font-size:2rem; }
    .contact-form-card { padding:24px; }
}
</style>
@endpush