@extends('layouts.app')
@section('title', $tr['pay_tag'] ?? 'App Activation')

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
                    {{ $tr['pay_tag'] }}
                </li>
            </ol>
        </nav>
        <div class="text-center" data-aos="fade-up">
            <div class="ph-service-tag">
                <i class="bi bi-lightning-charge-fill"></i>
                {{ $tr['pay_tag'] }}
            </div>
            <h1 class="ph-title" style="font-size:2.5rem;">
                {{ $tr['pay_title'] }}
            </h1>
            <p class="ph-subtitle mx-auto" style="max-width:560px;">
                {{ $tr['pay_sub'] }}
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
                <div class="pay-trust-badge">
                    <i class="bi bi-shield-fill-check"></i>
                    {{ $tr['pay_secure'] }}
                </div>
                <div class="pay-trust-badge">
                    <i class="bi bi-phone-fill"></i>
                    MTN MoMo
                </div>
                <div class="pay-trust-badge">
                    <i class="bi bi-phone-fill"></i>
                    Orange Money
                </div>
                <div class="pay-trust-badge">
                    <i class="bi bi-credit-card-fill"></i>
                    Visa / Mastercard
                </div>
            </div>
        </div>
    </div>
</section>

{{-- WHAT YOU UNLOCK --}}
<section style="background:#f4f7fc;padding:60px 0;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label">{{ $tr['pay_unlock_label'] }}</div>
            <h2 class="section-title">{{ $tr['pay_unlock_title'] }}</h2>
            <div class="divider-accent mx-auto"></div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="unlock-card">
                    <div class="uc-icon"
                         style="background:linear-gradient(135deg,var(--primary),
                                var(--primary-light));">
                        <i class="bi bi-folder2-open"></i>
                    </div>
                    <h5 class="uc-title">{{ $tr['pay_f1_title'] }}</h5>
                    <p class="uc-desc">{{ $tr['pay_f1_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="unlock-card">
                    <div class="uc-icon"
                         style="background:linear-gradient(135deg,var(--accent-dark),
                                var(--accent));">
                        <i class="bi bi-cloud-upload-fill"></i>
                    </div>
                    <h5 class="uc-title">{{ $tr['pay_f2_title'] }}</h5>
                    <p class="uc-desc">{{ $tr['pay_f2_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="unlock-card">
                    <div class="uc-icon"
                         style="background:linear-gradient(135deg,#1a6e3c,#28a745);">
                        <i class="bi bi-chat-dots-fill"></i>
                    </div>
                    <h5 class="uc-title">{{ $tr['pay_f3_title'] }}</h5>
                    <p class="uc-desc">{{ $tr['pay_f3_desc'] }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="unlock-card">
                    <div class="uc-icon"
                         style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                        <i class="bi bi-bell-fill"></i>
                    </div>
                    <h5 class="uc-title">{{ $tr['pay_f4_title'] }}</h5>
                    <p class="uc-desc">{{ $tr['pay_f4_desc'] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── STEP 1: PRICING PLANS ── --}}
<section class="section-padding" id="pricing" style="background:#fff;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label">{{ $tr['pay_plans_label'] }}</div>
            <h2 class="section-title">{{ $tr['pay_plans_title'] }}</h2>
            <div class="divider-accent mx-auto"></div>
            <p style="color:#6c7a89;font-size:0.95rem;max-width:560px;margin:0 auto;">
                {{ $tr['pay_plans_sub'] }}
            </p>
        </div>

        <div class="row g-4 justify-content-center" id="plans-row">

            {{-- BASIC --}}
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="pricing-card" id="plan-basic"
                     onclick="selectPlan('basic','{{ $tr['pay_plan_basic'] }}','25,000 FCFA')">
                    <div class="pc-top">
                        <div class="pc-name">{{ $tr['pay_plan_basic'] }}</div>
                        <div class="pc-price">
                            <span class="pc-currency">FCFA</span>
                            <span class="pc-amount">25,000</span>
                        </div>
                        <div class="pc-period">{{ $tr['pay_per_service'] }}</div>
                    </div>
                    <div class="pc-features">
                        <div class="pcf-item">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['pay_basic_f1'] }}
                        </div>
                        <div class="pcf-item">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['pay_basic_f2'] }}
                        </div>
                        <div class="pcf-item">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['pay_basic_f3'] }}
                        </div>
                        <div class="pcf-item">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['pay_basic_f4'] }}
                        </div>
                    </div>
                    <button class="pc-btn" id="btn-basic">
                        <i class="bi bi-arrow-right-circle-fill"></i>
                        {{ $tr['pay_choose'] }}
                    </button>
                </div>
            </div>

            {{-- PRO --}}
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="pricing-card featured-plan" id="plan-pro"
                     onclick="selectPlan('pro','{{ $tr['pay_plan_pro'] }}','50,000 FCFA')">
                    <div class="pc-popular-tag">
                        <i class="bi bi-star-fill"></i>
                        {{ $tr['pay_popular'] }}
                    </div>
                    <div class="pc-top featured-top">
                        <div class="pc-name" style="color:#fff;">
                            {{ $tr['pay_plan_pro'] }}
                        </div>
                        <div class="pc-price" style="color:#fff;">
                            <span class="pc-currency" style="color:rgba(255,255,255,0.7);">
                                FCFA
                            </span>
                            <span class="pc-amount">50,000</span>
                        </div>
                        <div class="pc-period" style="color:rgba(255,255,255,0.65);">
                            {{ $tr['pay_per_month'] }}
                        </div>
                    </div>
                    <div class="pc-features featured-features">
                        <div class="pcf-item" style="color:#fff;">
                            <i class="bi bi-check-circle-fill"
                               style="color:var(--accent);"></i>
                            {{ $tr['pay_pro_f1'] }}
                        </div>
                        <div class="pcf-item" style="color:#fff;">
                            <i class="bi bi-check-circle-fill"
                               style="color:var(--accent);"></i>
                            {{ $tr['pay_pro_f2'] }}
                        </div>
                        <div class="pcf-item" style="color:#fff;">
                            <i class="bi bi-check-circle-fill"
                               style="color:var(--accent);"></i>
                            {{ $tr['pay_pro_f3'] }}
                        </div>
                        <div class="pcf-item" style="color:#fff;">
                            <i class="bi bi-check-circle-fill"
                               style="color:var(--accent);"></i>
                            {{ $tr['pay_pro_f4'] }}
                        </div>
                        <div class="pcf-item" style="color:#fff;">
                            <i class="bi bi-check-circle-fill"
                               style="color:var(--accent);"></i>
                            {{ $tr['pay_pro_f5'] }}
                        </div>
                    </div>
                    <button class="pc-btn featured-btn" id="btn-pro">
                        <i class="bi bi-arrow-right-circle-fill"></i>
                        {{ $tr['pay_choose'] }}
                    </button>
                </div>
            </div>

            {{-- ENTERPRISE --}}
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="pricing-card" id="plan-enterprise"
                     onclick="selectPlan('enterprise','{{ $tr['pay_plan_enterprise'] }}','100,000 FCFA')">
                    <div class="pc-top">
                        <div class="pc-name">{{ $tr['pay_plan_enterprise'] }}</div>
                        <div class="pc-price">
                            <span class="pc-currency">FCFA</span>
                            <span class="pc-amount">100,000</span>
                        </div>
                        <div class="pc-period">{{ $tr['pay_per_month'] }}</div>
                    </div>
                    <div class="pc-features">
                        <div class="pcf-item">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['pay_ent_f1'] }}
                        </div>
                        <div class="pcf-item">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['pay_ent_f2'] }}
                        </div>
                        <div class="pcf-item">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['pay_ent_f3'] }}
                        </div>
                        <div class="pcf-item">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['pay_ent_f4'] }}
                        </div>
                        <div class="pcf-item">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['pay_ent_f5'] }}
                        </div>
                        <div class="pcf-item">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $tr['pay_ent_f6'] }}
                        </div>
                    </div>
                    <button class="pc-btn" id="btn-enterprise">
                        <i class="bi bi-arrow-right-circle-fill"></i>
                        {{ $tr['pay_choose'] }}
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ── STEP 2: PAYMENT METHOD + FORM ── --}}
<section class="section-padding" id="payment-section"
         style="background:linear-gradient(135deg,#0d1b2a,#1a3c6e);display:none;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                {{-- Selected Plan Banner --}}
                <div class="selected-plan-banner mb-5" data-aos="fade-down">
                    <div class="spb-left">
                        <div class="spb-icon">
                            <i class="bi bi-patch-check-fill"></i>
                        </div>
                        <div>
                            <div class="spb-label">{{ $tr['pay_selected_plan'] }}</div>
                            <div class="spb-plan-name" id="banner-plan-name">Pro</div>
                        </div>
                    </div>
                    <div class="spb-price" id="banner-plan-price">50,000 FCFA</div>
                    <button class="spb-change-btn" onclick="showPlans()">
                        <i class="bi bi-arrow-left"></i>
                        {{ $tr['pay_back_plans'] }}
                    </button>
                </div>

                <div class="row g-5">

                    {{-- LEFT: Payment Method --}}
                    <div class="col-lg-5" data-aos="fade-right">
                        <div class="pm-section-title">
                            <i class="bi bi-wallet2"></i>
                            {{ $tr['pay_method_title'] }}
                        </div>

                        {{-- MTN --}}
                        <div class="payment-method-card active" id="pm-mtn"
                             onclick="selectMethod('mtn')">
                            <div class="pmc-header">
                                <div class="pmc-logo mtn-logo">MTN</div>
                                <div class="pmc-name">Mobile Money</div>
                                <div class="pmc-check" id="check-mtn">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="pmc-instructions" id="inst-mtn">
                                <div class="pmc-inst-title">{{ $tr['pay_mtn_inst'] }}</div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">1</div>
                                    <div>Dial <strong>*126#</strong> on your MTN line</div>
                                </div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">2</div>
                                    <div>Select <strong>Transfer Money</strong></div>
                                </div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">3</div>
                                    <div>Send to Easy-Group MTN number</div>
                                </div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">4</div>
                                    <div>Enter the amount for your plan and confirm</div>
                                </div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">5</div>
                                    <div>Copy the <strong>Transaction ID</strong> from SMS</div>
                                </div>
                                <div class="pmc-number-box">
                                    <i class="bi bi-telephone-fill"></i>
                                    MTN MoMo: <strong>+237 6XX XXX XXX</strong>
                                </div>
                            </div>
                        </div>

                        {{-- ORANGE --}}
                        <div class="payment-method-card" id="pm-orange"
                             onclick="selectMethod('orange')">
                            <div class="pmc-header">
                                <div class="pmc-logo orange-logo">OM</div>
                                <div class="pmc-name">Orange Money</div>
                                <div class="pmc-check hidden" id="check-orange">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="pmc-instructions" id="inst-orange"
                                 style="display:none;">
                                <div class="pmc-inst-title">{{ $tr['pay_orange_inst'] }}</div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">1</div>
                                    <div>Dial <strong>#150#</strong> on your Orange line</div>
                                </div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">2</div>
                                    <div>Select <strong>Transfert d'argent</strong></div>
                                </div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">3</div>
                                    <div>Enter Easy-Group Orange number</div>
                                </div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">4</div>
                                    <div>Enter amount for your plan and confirm with PIN</div>
                                </div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">5</div>
                                    <div>Copy the <strong>Transaction ID</strong> from SMS</div>
                                </div>
                                <div class="pmc-number-box"
                                     style="border-color:rgba(255,140,0,0.3);
                                            background:rgba(255,140,0,0.06);">
                                    <i class="bi bi-telephone-fill"
                                       style="color:#ff8c00;"></i>
                                    Orange Money: <strong>+237 6XX XXX XXX</strong>
                                </div>
                            </div>
                        </div>

                        {{-- CARD --}}
                        <div class="payment-method-card" id="pm-card"
                             onclick="selectMethod('card')">
                            <div class="pmc-header">
                                <div class="pmc-logo card-logo">
                                    <i class="bi bi-credit-card-fill"></i>
                                </div>
                                <div class="pmc-name">Visa / Mastercard</div>
                                <div class="pmc-check hidden" id="check-card">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="pmc-instructions" id="inst-card"
                                 style="display:none;">
                                <div class="pmc-inst-title">{{ $tr['pay_card_inst'] }}</div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">1</div>
                                    <div>{{ $tr['pay_card_s1'] }}</div>
                                </div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">2</div>
                                    <div>{{ $tr['pay_card_s2'] }}</div>
                                </div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">3</div>
                                    <div>{{ $tr['pay_card_s3'] }}</div>
                                </div>
                                <div class="pmc-step">
                                    <div class="pmc-step-num">4</div>
                                    <div>{{ $tr['pay_card_s4'] }}</div>
                                </div>
                                <a href="#main-app" target="_blank" class="pmc-app-btn">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                    {{ $tr['go_main_app'] }}
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- RIGHT: Confirmation Form --}}
                    <div class="col-lg-7" data-aos="fade-left">
                        <div class="pay-confirm-card">
                            <div class="pcc-header">
                                <i class="bi bi-shield-fill-check"></i>
                                {{ $tr['pay_confirm_title'] }}
                            </div>

                            @if(session('success'))
                                <div class="alert-success-pay mb-4">
                                    <i class="bi bi-check-circle-fill"></i>
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ url('/payment/process') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="plan"
                                       id="plan-input" value="pro"/>
                                <input type="hidden" name="payment_method"
                                       id="payment-method-input" value="mtn"/>

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
                                            {{ $tr['email'] }} *
                                        </label>
                                        <input type="email" name="email"
                                               class="input-custom" required
                                               placeholder="you@email.com"
                                               value="{{ old('email') }}"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-custom">
                                            {{ $tr['pay_phone_used'] }} *
                                        </label>
                                        <input type="tel" name="phone"
                                               class="input-custom" required
                                               placeholder="+237 6XX XXX XXX"
                                               value="{{ old('phone') }}"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-custom">
                                            {{ $tr['pay_txn_id'] }} *
                                        </label>
                                        <input type="text" name="transaction_id"
                                               class="input-custom" required
                                               placeholder="e.g. MP2312345678"
                                               value="{{ old('transaction_id') }}"/>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label-custom">
                                            {{ $tr['pay_proof'] }}
                                        </label>
                                        <div class="file-upload-box">
                                            <input type="file" name="payment_proof"
                                                   accept="image/*"
                                                   style="display:none;"
                                                   id="proof-upload"
                                                   onchange="showFileName(this)"/>
                                            <label for="proof-upload"
                                                   style="cursor:pointer;width:100%;display:block;">
                                                <i class="bi bi-cloud-upload-fill"></i>
                                                <div class="fub-title">
                                                    {{ $tr['pay_proof_click'] }}
                                                </div>
                                                <div class="fub-hint">
                                                    {{ $tr['pay_proof_hint'] }}
                                                </div>
                                                <div class="fub-filename" id="file-name"></div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label-custom">
                                            {{ $tr['pay_notes_opt'] }}
                                        </label>
                                        <textarea name="notes" class="input-custom"
                                                  rows="2"
                                                  placeholder="{{ $tr['notes_ph'] }}">{{ old('notes') }}</textarea>
                                    </div>
                                </div>

                                {{-- Summary --}}
                                <div class="pay-summary">
                                    <div class="ps-row">
                                        <span class="ps-label">{{ $tr['pay_service'] }}</span>
                                        <span class="ps-value">{{ $tr['pay_service_name'] }}</span>
                                    </div>
                                    <div class="ps-row">
                                        <span class="ps-label">{{ $tr['pay_selected_plan'] }}</span>
                                        <span class="ps-value" id="summary-plan">Pro</span>
                                    </div>
                                    <div class="ps-row">
                                        <span class="ps-label">{{ $tr['pay_amount'] }}</span>
                                        <span class="ps-value ps-amount"
                                              id="summary-amount">50,000 FCFA</span>
                                    </div>
                                    <div class="ps-row">
                                        <span class="ps-label">{{ $tr['pay_method_lbl'] }}</span>
                                        <span class="ps-value" id="summary-method">MTN MoMo</span>
                                    </div>
                                </div>

                                <div class="form-notice mt-3">
                                    <i class="bi bi-info-circle-fill"></i>
                                    {{ $tr['pay_notice'] }}
                                </div>

                                <button type="submit" class="btn-pay-confirm mt-4">
                                    <i class="bi bi-shield-fill-check"></i>
                                    {{ $tr['pay_confirm_btn'] }}
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
/* ── HEADER ── */
.breadcrumb { background:transparent; padding:0; }
.ph-service-tag {
    display:inline-flex;align-items:center;gap:8px;
    background:rgba(232,160,32,0.15);border:1px solid rgba(232,160,32,0.3);
    color:var(--accent);font-size:0.8rem;font-weight:600;
    padding:7px 16px;border-radius:50px;margin-bottom:18px;
}
.ph-title { font-weight:800;color:#fff;line-height:1.2;margin-bottom:16px; }
.ph-subtitle { color:rgba(255,255,255,0.68);font-size:0.97rem;line-height:1.8; }
.pay-trust-badge {
    display:inline-flex;align-items:center;gap:7px;
    background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);
    color:#fff;font-size:0.78rem;font-weight:600;padding:7px 16px;border-radius:25px;
}
.pay-trust-badge i { color:var(--accent); }

/* ── UNLOCK CARDS ── */
.unlock-card {
    background:#fff;border:1px solid rgba(0,0,0,0.07);
    border-radius:16px;padding:28px 22px;text-align:center;
    transition:all 0.3s;height:100%;
}
.unlock-card:hover { transform:translateY(-5px);box-shadow:0 15px 40px rgba(26,60,110,0.1); }
.uc-icon {
    width:58px;height:58px;border-radius:16px;
    display:flex;align-items:center;justify-content:center;
    font-size:1.4rem;color:#fff;margin:0 auto 18px;
}
.uc-title { font-size:0.97rem;font-weight:700;color:var(--primary);margin-bottom:8px; }
.uc-desc { font-size:0.85rem;color:#6c7a89;line-height:1.7;margin:0; }

/* ── PRICING CARDS ── */
.pricing-card {
    background:#fff;border:2px solid rgba(0,0,0,0.08);
    border-radius:24px;overflow:hidden;
    transition:all 0.35s;cursor:pointer;height:100%;
    box-shadow:0 4px 25px rgba(0,0,0,0.06);
    position:relative;
}
.pricing-card:hover {
    transform:translateY(-8px);
    box-shadow:0 25px 60px rgba(26,60,110,0.15);
    border-color:var(--primary);
}
.pricing-card.selected-plan-card {
    border-color:var(--primary);
    box-shadow:0 25px 60px rgba(26,60,110,0.2);
}
.featured-plan {
    border-color:var(--primary);
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    box-shadow:0 20px 60px rgba(26,60,110,0.3);
    transform:translateY(-8px);
}
.featured-plan:hover { transform:translateY(-14px); }
.pc-popular-tag {
    position:absolute;top:0;right:0;
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark);font-size:0.68rem;font-weight:800;
    text-transform:uppercase;letter-spacing:0.5px;
    padding:6px 18px;border-radius:0 24px 0 16px;
    display:flex;align-items:center;gap:5px;
}
.pc-top {
    padding:32px 28px 24px;text-align:center;
    border-bottom:1px solid rgba(0,0,0,0.07);
}
.featured-top { border-bottom:1px solid rgba(255,255,255,0.15); }
.pc-name {
    font-size:0.85rem;font-weight:700;text-transform:uppercase;
    letter-spacing:1px;color:#6c7a89;margin-bottom:16px;
}
.pc-price {
    display:flex;align-items:flex-end;justify-content:center;
    gap:4px;margin-bottom:4px;
}
.pc-currency {
    font-size:0.85rem;font-weight:600;color:#6c7a89;
    margin-bottom:10px;
}
.pc-amount {
    font-size:2.8rem;font-weight:800;color:var(--primary);
    font-family:'Poppins',sans-serif;line-height:1;
}
.featured-top .pc-amount { color:#fff; }
.pc-period { font-size:0.78rem;color:#6c7a89;margin-top:4px; }
.pc-features { padding:24px 28px; }
.pcf-item {
    display:flex;align-items:center;gap:10px;
    font-size:0.87rem;color:#2d3748;padding:8px 0;
    border-bottom:1px solid rgba(0,0,0,0.04);
}
.pcf-item:last-child { border-bottom:none; }
.pcf-item i { color:var(--primary);font-size:0.9rem;flex-shrink:0; }
.pc-btn {
    display:flex;align-items:center;justify-content:center;gap:8px;
    width:calc(100% - 56px);margin:0 28px 28px;
    padding:13px;border:2px solid var(--primary);
    border-radius:12px;background:transparent;
    color:var(--primary);font-weight:700;font-size:0.92rem;
    cursor:pointer;transition:all 0.3s;font-family:'Inter',sans-serif;
}
.pc-btn:hover { background:var(--primary);color:#fff; }
.pc-btn.plan-selected {
    background:var(--primary);color:#fff;
}
.featured-btn {
    border-color:var(--accent);
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark) !important;border:none;
    box-shadow:0 5px 20px rgba(232,160,32,0.4);
}
.featured-btn:hover { transform:translateY(-2px);opacity:0.92; }
.featured-btn.plan-selected { opacity:0.85; }

/* ── PAYMENT SECTION ── */
.selected-plan-banner {
    background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);
    border-radius:16px;padding:20px 28px;
    display:flex;align-items:center;gap:20px;flex-wrap:wrap;
}
.spb-left { display:flex;align-items:center;gap:14px;flex:1; }
.spb-icon {
    width:48px;height:48px;border-radius:12px;
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    display:flex;align-items:center;justify-content:center;
    font-size:1.3rem;color:var(--dark);flex-shrink:0;
}
.spb-label {
    font-size:0.72rem;color:rgba(255,255,255,0.55);
    text-transform:uppercase;letter-spacing:0.8px;font-weight:600;
}
.spb-plan-name { font-size:1.1rem;font-weight:800;color:#fff;margin-top:2px; }
.spb-price {
    font-size:1.4rem;font-weight:800;color:var(--accent);
    font-family:'Poppins',sans-serif;
}
.spb-change-btn {
    display:inline-flex;align-items:center;gap:7px;
    background:rgba(255,255,255,0.12);border:1px solid rgba(255,255,255,0.25);
    color:#fff;font-size:0.83rem;font-weight:600;
    padding:9px 18px;border-radius:10px;cursor:pointer;
    transition:all 0.3s;font-family:'Inter',sans-serif;
}
.spb-change-btn:hover { background:rgba(255,255,255,0.2); }
.pm-section-title {
    font-size:1rem;font-weight:700;color:#fff;
    margin-bottom:20px;display:flex;align-items:center;gap:9px;
}
.pm-section-title i { color:var(--accent); }
.payment-method-card {
    background:rgba(255,255,255,0.07);
    border:2px solid rgba(255,255,255,0.12);
    border-radius:14px;margin-bottom:12px;overflow:hidden;
    cursor:pointer;transition:all 0.3s;
}
.payment-method-card.active {
    background:rgba(255,255,255,0.12);
    border-color:var(--accent);
}
.pmc-header {
    padding:16px 20px;display:flex;align-items:center;gap:14px;
}
.pmc-logo {
    width:44px;height:44px;border-radius:10px;
    display:flex;align-items:center;justify-content:center;
    font-size:0.75rem;font-weight:800;color:#fff;flex-shrink:0;
}
.mtn-logo { background:#ffcc00;color:#000; }
.orange-logo { background:#ff6600; }
.card-logo {
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    font-size:1.1rem;
}
.pmc-name { font-size:0.92rem;font-weight:700;color:#fff;flex:1; }
.pmc-check { color:var(--accent);font-size:1.1rem; }
.pmc-check.hidden { opacity:0; }
.pmc-instructions { padding:0 20px 20px; }
.pmc-inst-title {
    font-size:0.75rem;font-weight:700;text-transform:uppercase;
    letter-spacing:0.8px;color:rgba(255,255,255,0.5);margin-bottom:12px;
}
.pmc-step {
    display:flex;align-items:flex-start;gap:12px;
    font-size:0.83rem;color:rgba(255,255,255,0.75);padding:6px 0;
}
.pmc-step-num {
    width:22px;height:22px;border-radius:50%;flex-shrink:0;
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark);font-size:0.68rem;font-weight:800;
    display:flex;align-items:center;justify-content:center;
}
.pmc-number-box {
    background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.15);
    border-radius:10px;padding:12px 16px;margin-top:12px;
    font-size:0.85rem;color:#fff;
    display:flex;align-items:center;gap:9px;
}
.pmc-app-btn {
    display:inline-flex;align-items:center;gap:8px;
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark) !important;font-weight:700;font-size:0.85rem;
    padding:11px 22px;border-radius:10px;margin-top:14px;transition:all 0.3s;
}
.pmc-app-btn:hover { transform:translateY(-2px); }

/* ── CONFIRM FORM ── */
.pay-confirm-card {
    background:#fff;border-radius:20px;padding:36px;
    box-shadow:0 20px 60px rgba(0,0,0,0.25);
}
.pcc-header {
    font-size:1.05rem;font-weight:700;color:var(--primary);
    margin-bottom:24px;display:flex;align-items:center;gap:10px;
    padding-bottom:16px;border-bottom:2px solid var(--light-bg);
}
.pcc-header i { color:var(--accent);font-size:1.2rem; }
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
.input-custom:focus {
    border-color:var(--primary);box-shadow:0 0 0 3px rgba(26,60,110,0.08);
}
.file-upload-box {
    border:2px dashed #c8d3e0;border-radius:12px;padding:20px;
    text-align:center;background:var(--light-bg);transition:all 0.3s;
}
.file-upload-box:hover { border-color:var(--primary);background:#fff; }
.file-upload-box i {
    font-size:1.8rem;color:var(--accent);margin-bottom:6px;display:block;
}
.fub-title { font-size:0.85rem;font-weight:600;color:var(--primary);margin-bottom:3px; }
.fub-hint { font-size:0.73rem;color:#6c7a89; }
.fub-filename { font-size:0.8rem;color:#28a745;margin-top:7px;font-weight:600; }
.pay-summary {
    background:var(--light-bg);border-radius:12px;padding:16px 20px;
}
.ps-row {
    display:flex;align-items:center;justify-content:space-between;
    padding:8px 0;border-bottom:1px solid rgba(0,0,0,0.06);
}
.ps-row:last-child { border-bottom:none; }
.ps-label { font-size:0.82rem;color:#6c7a89;font-weight:500; }
.ps-value { font-size:0.87rem;font-weight:700;color:var(--primary); }
.ps-amount { color:var(--accent);font-size:1rem; }
.form-notice {
    background:rgba(26,60,110,0.05);border:1px solid rgba(26,60,110,0.1);
    border-radius:10px;padding:13px 18px;
    font-size:0.82rem;color:#2d3748;line-height:1.6;
    display:flex;align-items:flex-start;gap:10px;
}
.form-notice i { color:var(--primary);flex-shrink:0;margin-top:1px; }
.btn-pay-confirm {
    width:100%;padding:14px;border:none;border-radius:12px;
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    color:#fff;font-weight:700;font-size:1rem;cursor:pointer;
    display:flex;align-items:center;justify-content:center;gap:9px;
    transition:all 0.3s;box-shadow:0 5px 20px rgba(26,60,110,0.3);
    font-family:'Inter',sans-serif;
}
.btn-pay-confirm:hover { transform:translateY(-2px); }
.alert-success-pay {
    background:rgba(40,167,69,0.12);border:1px solid rgba(40,167,69,0.25);
    color:#155724;border-radius:12px;padding:14px 18px;
    display:flex;align-items:center;gap:10px;font-size:0.87rem;
}
.alert-success-pay i { color:#28a745;font-size:1.1rem; }

/* ── SCROLL ANIMATION ── */
.section-slide-in {
    animation: slideInUp 0.5s cubic-bezier(0.22,1,0.36,1) both;
}
@keyframes slideInUp {
    from { opacity:0; transform:translateY(40px); }
    to   { opacity:1; transform:translateY(0); }
}
@media(max-width:991.98px){
    .ph-title { font-size:2rem; }
    .pay-confirm-card { padding:22px; }
    .selected-plan-banner { flex-direction:column;align-items:flex-start; }
}
</style>
@endpush

@push('scripts')
<script>
let selectedPlan  = 'pro';
let selectedPrice = '50,000 FCFA';
let selectedPlanLabel = 'Pro';

function selectPlan(plan, label, price) {
    selectedPlan       = plan;
    selectedPrice      = price;
    selectedPlanLabel  = label;

    // Update hidden inputs
    document.getElementById('plan-input').value = plan;

    // Update summary
    document.getElementById('summary-plan').textContent   = label;
    document.getElementById('summary-amount').textContent = price;
    document.getElementById('banner-plan-name').textContent  = label;
    document.getElementById('banner-plan-price').textContent = price;

    // Mark card selected
    document.querySelectorAll('.pricing-card').forEach(c => {
        c.classList.remove('selected-plan-card');
    });
    document.getElementById('plan-' + plan).classList.add('selected-plan-card');

    // Update button text
    ['basic','pro','enterprise'].forEach(p => {
        const btn = document.getElementById('btn-' + p);
        if (p === plan) {
            btn.innerHTML = '<i class="bi bi-check-circle-fill"></i> {{ $tr['pay_selected'] }}';
            btn.classList.add('plan-selected');
        } else {
            btn.innerHTML = '<i class="bi bi-arrow-right-circle-fill"></i> {{ $tr['pay_choose'] }}';
            btn.classList.remove('plan-selected');
        }
    });

    // Scroll & show payment section
    setTimeout(() => showPaymentSection(), 300);
}

function showPaymentSection() {
    const plansSection   = document.getElementById('pricing');
    const paymentSection = document.getElementById('payment-section');

    paymentSection.style.display = 'block';
    paymentSection.classList.add('section-slide-in');

    // Smooth scroll to payment
    paymentSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function showPlans() {
    const paymentSection = document.getElementById('payment-section');
    paymentSection.style.display = 'none';

    document.getElementById('pricing').scrollIntoView({ behavior:'smooth', block:'start' });
}

function selectMethod(method) {
    ['mtn','orange','card'].forEach(m => {
        const card  = document.getElementById('pm-' + m);
        const inst  = document.getElementById('inst-' + m);
        const check = document.getElementById('check-' + m);
        card.classList.remove('active');
        if (inst)  inst.style.display = 'none';
        if (check) check.classList.add('hidden');
    });

    document.getElementById('pm-' + method).classList.add('active');
    const activeInst  = document.getElementById('inst-' + method);
    const activeCheck = document.getElementById('check-' + method);
    if (activeInst)  activeInst.style.display = 'block';
    if (activeCheck) activeCheck.classList.remove('hidden');

    document.getElementById('payment-method-input').value = method;

    const labels = { mtn:'MTN MoMo', orange:'Orange Money', card:'Visa / Mastercard' };
    document.getElementById('summary-method').textContent = labels[method] || method;
}

function showFileName(input) {
    const el = document.getElementById('file-name');
    if (input.files && input.files[0]) {
        el.textContent = '✅ ' + input.files[0].name;
    }
}

// If returning after success, show payment section pre-filled
@if(session('success'))
    window.addEventListener('load', function() {
        document.getElementById('payment-section').style.display = 'block';
    });
@endif
</script>
@endpush