@extends('layouts.app')
@section('title', $tr['files_title'] ?? 'My Files')

@section('content')

<section style="background:#f4f7fc;min-height:calc(100vh - 80px);padding:50px 0;">
    <div class="container">

        <div class="files-header" data-aos="fade-down">
            <div>
                <h2 style="font-size:1.7rem;font-weight:800;color:var(--primary);margin:0;">
                    {{ $tr['files_title'] }}
                </h2>
                <p style="color:#6c7a89;font-size:0.88rem;margin:6px 0 0;">
                    {{ $tr['files_sub'] }}
                </p>
            </div>
            <a href="{{ route('student.dashboard') }}"
               style="display:inline-flex;align-items:center;gap:7px;
                      background:#fff;color:var(--primary);font-size:0.85rem;
                      font-weight:600;padding:10px 20px;border-radius:10px;
                      border:2px solid rgba(26,60,110,0.12);transition:all 0.3s;">
                <i class="bi bi-arrow-left"></i>
                {{ $tr['files_back'] }}
            </a>
        </div>

        {{-- DRIVING APPLICATIONS --}}
        <div class="files-section" data-aos="fade-up">
            <div class="fs-header">
                <div class="fs-icon drv-icon"><i class="bi bi-car-front-fill"></i></div>
                <h4 class="fs-title">{{ $tr['files_drv'] }}</h4>
                <span class="fs-count">{{ $drivingApps->count() }}</span>
            </div>
            @if($drivingApps->count() > 0)
                <div class="files-table-wrap">
                    <table class="files-table">
                        <thead>
                            <tr>
                                <th>{{ $tr['files_cat'] }}</th>
                                <th>{{ $tr['files_center'] }}</th>
                                <th>{{ $tr['files_schedule'] }}</th>
                                <th>{{ $tr['files_submitted'] }}</th>
                                <th>{{ $tr['files_status'] }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($drivingApps as $app)
                                <tr>
                                    <td>
                                        <span class="td-badge">
                                            Cat. {{ $app->license_type }}
                                        </span>
                                    </td>
                                    <td>{{ $app->preferred_center }}</td>
                                    <td>{{ $app->preferred_schedule }}</td>
                                    <td>{{ $app->created_at->format('d M Y') }}</td>
                                    <td>
                                        <span class="status-badge status-{{ $app->status ?? 'pending' }}">
                                            {{ ucfirst($app->status ?? 'pending') }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="no-files-state">
                    <i class="bi bi-folder2-open"></i>
                    <span>{{ $tr['files_no_apps'] }}</span>
                    <a href="{{ url('/driving#register') }}">
                        {{ $tr['register_now'] }}
                    </a>
                </div>
            @endif
        </div>

        {{-- LANGUAGE ENROLLMENTS --}}
        <div class="files-section" data-aos="fade-up">
            <div class="fs-header">
                <div class="fs-icon lang-icon"><i class="bi bi-translate"></i></div>
                <h4 class="fs-title">{{ $tr['files_lang'] }}</h4>
                <span class="fs-count">{{ $languageApps->count() }}</span>
            </div>
            @if($languageApps->count() > 0)
                <div class="files-table-wrap">
                    <table class="files-table">
                        <thead>
                            <tr>
                                <th>{{ $tr['files_language'] }}</th>
                                <th>{{ $tr['files_course'] }}</th>
                                <th>{{ $tr['files_center'] }}</th>
                                <th>{{ $tr['files_submitted'] }}</th>
                                <th>{{ $tr['files_status'] }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($languageApps as $app)
                                <tr>
                                    <td>{{ ucfirst($app->language) }}</td>
                                    <td>{{ $app->course_type }}</td>
                                    <td>{{ $app->preferred_center }}</td>
                                    <td>{{ $app->created_at->format('d M Y') }}</td>
                                    <td>
                                        <span class="status-badge status-{{ $app->status ?? 'pending' }}">
                                            {{ ucfirst($app->status ?? 'pending') }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="no-files-state">
                    <i class="bi bi-folder2-open"></i>
                    <span>{{ $tr['files_no_apps'] }}</span>
                    <a href="{{ url('/language#enroll') }}">
                        {{ $tr['enroll_now'] }}
                    </a>
                </div>
            @endif
        </div>

        {{-- VISA APPLICATIONS --}}
        <div class="files-section" data-aos="fade-up">
            <div class="fs-header">
                <div class="fs-icon visa-icon"><i class="bi bi-passport-fill"></i></div>
                <h4 class="fs-title">{{ $tr['files_visa'] }}</h4>
                <span class="fs-count">{{ $visaApps->count() }}</span>
            </div>
            @if($visaApps->count() > 0)
                <div class="files-table-wrap">
                    <table class="files-table">
                        <thead>
                            <tr>
                                <th>{{ $tr['files_country'] }}</th>
                                <th>{{ $tr['files_visa_type'] }}</th>
                                <th>{{ $tr['files_center'] }}</th>
                                <th>{{ $tr['files_submitted'] }}</th>
                                <th>{{ $tr['files_status'] }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($visaApps as $app)
                                <tr>
                                    <td>
                                        <span class="td-flag">
                                            @if($app->destination_country === 'germany') 🇩🇪
                                            @elseif($app->destination_country === 'france') 🇫🇷
                                            @else 🇱🇹 @endif
                                        </span>
                                        {{ ucfirst($app->destination_country) }}
                                    </td>
                                    <td>{{ $app->visa_type }}</td>
                                    <td>{{ $app->preferred_center }}</td>
                                    <td>{{ $app->created_at->format('d M Y') }}</td>
                                    <td>
                                        <span class="status-badge status-{{ $app->status ?? 'pending' }}">
                                            {{ ucfirst($app->status ?? 'pending') }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="no-files-state">
                    <i class="bi bi-folder2-open"></i>
                    <span>{{ $tr['files_no_apps'] }}</span>
                    <a href="{{ url('/visa#apply') }}">
                        {{ $tr['apply_now'] }}
                    </a>
                </div>
            @endif
        </div>

    </div>
</section>

@endsection

@push('styles')
<style>
.files-header {
    display:flex;align-items:center;justify-content:space-between;
    flex-wrap:wrap;gap:16px;margin-bottom:30px;
}
.files-section {
    background:#fff;border-radius:18px;padding:0;overflow:hidden;
    box-shadow:0 4px 25px rgba(0,0,0,0.06);margin-bottom:24px;
}
.fs-header {
    padding:18px 24px;border-bottom:2px solid var(--light-bg);
    display:flex;align-items:center;gap:12px;
}
.fs-icon {
    width:36px;height:36px;border-radius:9px;
    display:flex;align-items:center;justify-content:center;font-size:0.95rem;flex-shrink:0;
}
.drv-icon { background:rgba(26,60,110,0.1);color:var(--primary); }
.lang-icon { background:rgba(232,160,32,0.12);color:var(--accent-dark); }
.visa-icon { background:rgba(40,167,69,0.1);color:#1a6e3c; }
.fs-title { font-size:1rem;font-weight:700;color:var(--primary);margin:0;flex:1; }
.fs-count {
    background:var(--light-bg);color:var(--primary);
    font-size:0.78rem;font-weight:700;padding:3px 12px;border-radius:20px;
}
.files-table-wrap { overflow-x:auto; }
.files-table {
    width:100%;border-collapse:collapse;font-size:0.85rem;
}
.files-table thead tr {
    background:var(--light-bg);
}
.files-table thead th {
    padding:12px 20px;text-align:left;font-size:0.75rem;
    font-weight:700;color:#6c7a89;text-transform:uppercase;letter-spacing:0.5px;
}
.files-table tbody tr { border-bottom:1px solid rgba(0,0,0,0.05); }
.files-table tbody tr:last-child { border-bottom:none; }
.files-table tbody td { padding:14px 20px;color:#2d3748; }
.td-badge {
    background:rgba(26,60,110,0.08);color:var(--primary);
    font-size:0.75rem;font-weight:700;padding:3px 10px;border-radius:8px;
}
.td-flag { font-size:1.2rem;margin-right:6px; }
.status-badge {
    font-size:0.72rem;font-weight:700;padding:4px 12px;
    border-radius:20px;text-transform:capitalize;
}
.status-pending { background:rgba(255,193,7,0.15);color:#856404; }
.status-approved { background:rgba(40,167,69,0.12);color:#155724; }
.status-rejected { background:rgba(220,53,69,0.12);color:#721c24; }
.no-files-state {
    padding:30px;text-align:center;color:#6c7a89;
    display:flex;align-items:center;gap:12px;justify-content:center;flex-wrap:wrap;
}
.no-files-state i { color:#c8d3e0;font-size:1.2rem; }
.no-files-state span { font-size:0.87rem; }
.no-files-state a {
    color:var(--primary);font-weight:600;font-size:0.85rem;
    background:var(--light-bg);padding:6px 16px;border-radius:8px;
}
</style>
@endpush