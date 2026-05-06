@extends('layouts.app')
@section('title', $tr['dash_welcome'] ?? 'Dashboard')

@section('content')

<section style="background:#f4f7fc;min-height:calc(100vh - 80px);padding:50px 0;">
    <div class="container">

        {{-- Welcome Header --}}
        <div class="dash-header" data-aos="fade-down">
            <div class="dh-left">
                <div class="dh-avatar">
                    {{ strtoupper(substr($user->name, 0, 2)) }}
                </div>
                <div>
                    <h2 class="dh-title">
                        {{ $tr['dash_welcome'] }}
                        <span>{{ $user->name }}</span>
                    </h2>
                    <p class="dh-sub">{{ $tr['dash_sub'] }}</p>
                </div>
            </div>
            <a href="#main-app" target="_blank" class="dh-app-btn">
                <i class="bi bi-box-arrow-up-right"></i>
                {{ $tr['go_main_app'] }}
            </a>
        </div>

        {{-- Stats --}}
        <div class="row g-4 mb-5">
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                <div class="dash-stat-card">
                    <div class="dsc-icon"
                         style="background:linear-gradient(135deg,var(--primary),
                                var(--primary-light));">
                        <i class="bi bi-folder2-open"></i>
                    </div>
                    <div class="dsc-number">{{ $totalFiles }}</div>
                    <div class="dsc-label">{{ $tr['dash_total'] }}</div>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="dash-stat-card">
                    <div class="dsc-icon"
                         style="background:linear-gradient(135deg,#c8860f,#e8a020);">
                        <i class="bi bi-hourglass-split"></i>
                    </div>
                    <div class="dsc-number">{{ $pendingFiles }}</div>
                    <div class="dsc-label">{{ $tr['dash_pending'] }}</div>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="dash-stat-card">
                    <div class="dsc-icon"
                         style="background:linear-gradient(135deg,#1a6e3c,#28a745);">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <div class="dsc-number">{{ $approvedFiles }}</div>
                    <div class="dsc-label">{{ $tr['dash_approved'] }}</div>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="dash-stat-card">
                    <div class="dsc-icon"
                         style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                        <i class="bi bi-phone-fill"></i>
                    </div>
                    <div class="dsc-number">
    <i class="bi bi-check-circle-fill"
       style="font-size:1.2rem;color:#6c7a89;"></i>
</div>
                    <div class="dsc-label">{{ $tr['dash_activated'] }}</div>
                </div>
            </div>
        </div>

        <div class="row g-4">

            {{-- Recent Applications --}}
            <div class="col-lg-8" data-aos="fade-right">
                <div class="dash-card">
                    <div class="dc-header">
                        <div class="dc-title">
                            <i class="bi bi-folder2-open"></i>
                            {{ $tr['dash_my_apps'] }}
                        </div>
                        <a href="{{ route('student.files') }}" class="dc-view-all">
                            {{ $tr['dash_view_all'] }}
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="dc-body">
             <div class="dc-body">

    @if($totalFiles === 0)
        <div class="no-apps-state">
            <i class="bi bi-folder2-open"></i>
            <p>{{ $tr['dash_no_apps'] }}</p>
            <a href="{{ url('/driving') }}">{{ $tr['dash_explore'] }}</a>
        </div>
    @else

        @foreach($drivingApps as $app)
            <div class="app-item">
                <div class="ai-icon drv-icon">
                    <i class="bi bi-car-front-fill"></i>
                </div>
                <div class="ai-info">
                    <div class="ai-name">{{ $tr['driving_tag'] }}</div>
                    <div class="ai-meta">
                        {{ $app->preferred_center }} •
                        {{ $app->created_at->format('d M Y') }}
                    </div>
                </div>
                <span class="ai-status status-{{ $app->status ?? 'pending' }}">
                    {{ ucfirst($app->status ?? 'pending') }}
                </span>
            </div>
        @endforeach

        @foreach($languageApps as $app)
            <div class="app-item">
                <div class="ai-icon lang-icon">
                    <i class="bi bi-translate"></i>
                </div>
                <div class="ai-info">
                    <div class="ai-name">{{ $tr['language'] }}</div>
                    <div class="ai-meta">
                        {{ $app->course_type }} •
                        {{ $app->created_at->format('d M Y') }}
                    </div>
                </div>
                <span class="ai-status status-{{ $app->status ?? 'pending' }}">
                    {{ ucfirst($app->status ?? 'pending') }}
                </span>
            </div>
        @endforeach

        @foreach($visaApps as $app)
            <div class="app-item">
                <div class="ai-icon visa-icon">
                    <i class="bi bi-passport-fill"></i>
                </div>
                <div class="ai-info">
                    <div class="ai-name">{{ $tr['visa'] }}</div>
                    <div class="ai-meta">
                        {{ $app->destination_country }} •
                        {{ $app->created_at->format('d M Y') }}
                    </div>
                </div>
                <span class="ai-status status-{{ $app->status ?? 'pending' }}">
                    {{ ucfirst($app->status ?? 'pending') }}
                </span>
            </div>
        @endforeach

    @endif

</div>                </div>
                </div>
            </div>

            {{-- Right Column --}}
            <div class="col-lg-4">

                {{-- Quick Actions --}}
                <div class="dash-card mb-4" data-aos="fade-left">
                    <div class="dc-header">
                        <div class="dc-title">
                            <i class="bi bi-lightning-charge-fill"></i>
                            {{ $tr['dash_quick'] }}
                        </div>
                    </div>
                    <div class="dc-body">
                        <a href="{{ url('/driving#register') }}" class="quick-action-btn drv">
                            <i class="bi bi-car-front-fill"></i>
                            {{ $tr['dash_drv'] }}
                        </a>
                        <a href="{{ url('/language#enroll') }}" class="quick-action-btn lang">
                            <i class="bi bi-translate"></i>
                            {{ $tr['dash_lang'] }}
                        </a>
                        <a href="{{ url('/visa#apply') }}" class="quick-action-btn visa">
                            <i class="bi bi-passport-fill"></i>
                            {{ $tr['dash_visa'] }}
                        </a>
                        <a href="{{ url('/payment') }}" class="quick-action-btn pay">
                            <i class="bi bi-lightning-charge-fill"></i>
                            {{ $tr['dash_activate'] }}
                        </a>
                        <a href="#main-app" target="_blank" class="quick-action-btn app">
                            <i class="bi bi-box-arrow-up-right"></i>
                            {{ $tr['go_main_app'] }}
                        </a>
                    </div>
                </div>

                {{-- Account Info --}}
                <div class="dash-card" data-aos="fade-left" data-aos-delay="100">
                    <div class="dc-header">
                        <div class="dc-title">
                            <i class="bi bi-person-circle"></i>
                            {{ $tr['dash_account'] }}
                        </div>
                    </div>
                    <div class="dc-body">
                        <div class="account-info-row">
                            <span class="air-label">{{ $tr['dash_name'] }}</span>
                            <span class="air-value">{{ $user->name }}</span>
                        </div>
                        <div class="account-info-row">
                            <span class="air-label">{{ $tr['email'] }}</span>
                            <span class="air-value"
                                  style="font-size:0.8rem;">{{ $user->email }}</span>
                        </div>
                        <div class="account-info-row">
                            <span class="air-label">{{ $tr['dash_member'] }}</span>
                            <span class="air-value">{{ $user->created_at->format('M Y') }}</span>
                        </div>
                        <form method="POST" action="{{ route('logout') }}" class="mt-3">
                            @csrf
                            <button type="submit" class="logout-btn">
                                <i class="bi bi-box-arrow-right"></i>
                                {{ $tr['dash_logout'] }}
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
.dash-header {
    background:#fff;border-radius:20px;padding:28px 32px;
    display:flex;align-items:center;justify-content:space-between;
    flex-wrap:wrap;gap:16px;margin-bottom:30px;
    box-shadow:0 4px 25px rgba(0,0,0,0.06);
}
.dh-left { display:flex;align-items:center;gap:18px; }
.dh-avatar {
    width:60px;height:60px;border-radius:50%;
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    color:#fff;font-size:1.3rem;font-weight:800;
    display:flex;align-items:center;justify-content:center;flex-shrink:0;
}
.dh-title { font-size:1.4rem;font-weight:800;color:var(--primary);margin:0;margin-bottom:4px; }
.dh-title span { color:var(--accent); }
.dh-sub { font-size:0.85rem;color:#6c7a89;margin:0; }
.dh-app-btn {
    display:inline-flex;align-items:center;gap:8px;
    background:linear-gradient(135deg,var(--accent),var(--accent-dark));
    color:var(--dark) !important;font-weight:700;font-size:0.88rem;
    padding:11px 22px;border-radius:10px;transition:all 0.3s;
}
.dh-app-btn:hover { transform:translateY(-2px); }
.dash-stat-card {
    background:#fff;border-radius:16px;padding:22px 18px;
    text-align:center;box-shadow:0 4px 20px rgba(0,0,0,0.06);transition:all 0.3s;
}
.dash-stat-card:hover { transform:translateY(-4px); }
.dsc-icon {
    width:48px;height:48px;border-radius:12px;
    display:flex;align-items:center;justify-content:center;
    font-size:1.2rem;color:#fff;margin:0 auto 12px;
}
.dsc-number {
    font-size:1.8rem;font-weight:800;color:var(--primary);
    font-family:'Poppins',sans-serif;line-height:1;margin-bottom:5px;
}
.dsc-label { font-size:0.78rem;color:#6c7a89; }
.dash-card {
    background:#fff;border-radius:18px;
    box-shadow:0 4px 25px rgba(0,0,0,0.06);overflow:hidden;
}
.dc-header {
    padding:18px 24px;border-bottom:2px solid var(--light-bg);
    display:flex;align-items:center;justify-content:space-between;
}
.dc-title {
    font-size:0.9rem;font-weight:700;color:var(--primary);
    display:flex;align-items:center;gap:8px;
}
.dc-title i { color:var(--accent); }
.dc-view-all {
    font-size:0.8rem;font-weight:600;color:var(--primary);
    display:flex;align-items:center;gap:5px;
}
.dc-body { padding:20px 24px; }
.app-item {
    display:flex;align-items:center;gap:14px;
    padding:12px 0;border-bottom:1px solid rgba(0,0,0,0.05);
}
.app-item:last-child { border-bottom:none; }
.ai-icon {
    width:40px;height:40px;border-radius:10px;
    display:flex;align-items:center;justify-content:center;
    font-size:1rem;flex-shrink:0;
}
.drv-icon { background:rgba(26,60,110,0.1);color:var(--primary); }
.lang-icon { background:rgba(232,160,32,0.12);color:var(--accent-dark); }
.visa-icon { background:rgba(40,167,69,0.1);color:#1a6e3c; }
.ai-info { flex:1; }
.ai-name { font-size:0.87rem;font-weight:700;color:var(--primary); }
.ai-meta { font-size:0.75rem;color:#6c7a89;margin-top:2px; }
.ai-status {
    font-size:0.7rem;font-weight:700;padding:4px 12px;
    border-radius:20px;text-transform:capitalize;flex-shrink:0;
}
.status-pending { background:rgba(255,193,7,0.15);color:#856404; }
.status-approved { background:rgba(40,167,69,0.12);color:#155724; }
.status-rejected { background:rgba(220,53,69,0.12);color:#721c24; }
.no-apps-state {
    text-align:center;padding:30px;color:#6c7a89;
}
.no-apps-state i { font-size:2.5rem;color:#c8d3e0;margin-bottom:12px;display:block; }
.no-apps-state p { font-size:0.88rem;margin-bottom:12px; }
.no-apps-state a { color:var(--primary);font-weight:600;font-size:0.85rem; }
.quick-action-btn {
    display:flex;align-items:center;gap:10px;
    padding:12px 16px;border-radius:10px;
    font-size:0.85rem;font-weight:600;margin-bottom:8px;
    transition:all 0.3s;color:#fff !important;
}
.quick-action-btn:hover { transform:translateX(4px); }
.quick-action-btn.drv { background:linear-gradient(135deg,var(--primary),var(--primary-light)); }
.quick-action-btn.lang { background:linear-gradient(135deg,#c8860f,#e8a020);color:var(--dark) !important; }
.quick-action-btn.visa { background:linear-gradient(135deg,#1a6e3c,#28a745); }
.quick-action-btn.pay { background:linear-gradient(135deg,#6f42c1,#9b6dd1); }
.quick-action-btn.app { background:var(--dark); }
.account-info-row {
    display:flex;align-items:center;justify-content:space-between;
    padding:10px 0;border-bottom:1px solid rgba(0,0,0,0.05);
}
.account-info-row:last-of-type { border-bottom:none; }
.air-label { font-size:0.78rem;color:#6c7a89;font-weight:500; }
.air-value { font-size:0.87rem;font-weight:700;color:var(--primary); }
.logout-btn {
    width:100%;padding:10px;border:2px solid rgba(220,53,69,0.25);
    border-radius:10px;background:rgba(220,53,69,0.06);
    color:#dc3545;font-weight:600;font-size:0.85rem;
    cursor:pointer;display:flex;align-items:center;
    justify-content:center;gap:8px;transition:all 0.3s;
    font-family:'Inter',sans-serif;
}
.logout-btn:hover { background:#dc3545;color:#fff;border-color:#dc3545; }
</style>
@endpush