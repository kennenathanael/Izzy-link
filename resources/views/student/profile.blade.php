@extends('layouts.app')
@section('title', 'My Profile')

@section('content')
<section style="background:linear-gradient(135deg,#0d1b2a,#1a3c6e);
                padding:60px 0 40px;">
    <div class="container">
        <h1 style="font-size:2rem;font-weight:800;color:#fff;">
            My <span style="color:var(--accent);">Profile</span>
        </h1>
    </div>
</section>
<section style="background:#f4f7fc;padding:50px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div style="background:#fff;border-radius:16px;padding:32px;
                            box-shadow:0 4px 20px rgba(0,0,0,0.06);">
                    <h5 style="color:var(--primary);font-weight:700;
                               margin-bottom:20px;">Account Information</h5>
                    <div style="padding:12px 0;border-bottom:1px solid #f0f0f0;">
                        <div style="font-size:0.72rem;color:#6c7a89;
                                    text-transform:uppercase;">Name</div>
                        <div style="font-weight:600;color:#2d3748;margin-top:3px;">
                            {{ auth()->user()->name }}
                        </div>
                    </div>
                    <div style="padding:12px 0;border-bottom:1px solid #f0f0f0;">
                        <div style="font-size:0.72rem;color:#6c7a89;
                                    text-transform:uppercase;">Email</div>
                        <div style="font-weight:600;color:#2d3748;margin-top:3px;">
                            {{ auth()->user()->email }}
                        </div>
                    </div>
                    <div style="padding:12px 0;margin-bottom:20px;">
                        <div style="font-size:0.72rem;color:#6c7a89;
                                    text-transform:uppercase;">Member Since</div>
                        <div style="font-weight:600;color:#2d3748;margin-top:3px;">
                            {{ auth()->user()->created_at->format('F d, Y') }}
                        </div>
                    </div>
                    <a href="{{ url('/student/dashboard') }}"
                       style="display:inline-flex;align-items:center;gap:8px;
                              background:var(--primary);color:#fff;
                              padding:11px 24px;border-radius:10px;
                              font-weight:600;font-size:0.9rem;">
                        <i class="bi bi-arrow-left"></i> Back to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
