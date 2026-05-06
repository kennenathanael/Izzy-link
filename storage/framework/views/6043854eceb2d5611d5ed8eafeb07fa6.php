<?php $__env->startSection('title', $tr['home'] ?? 'Home'); ?>


<?php $__env->startSection('content'); ?>


<section class="hero-section">
    <div class="hero-shapes">
        <div class="hs-1"></div><div class="hs-2"></div><div class="hs-3"></div>
    </div>
    <div class="container">
        <div class="row align-items-center" style="min-height:88vh;padding:80px 0 120px;">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="hero-badge">
                    <i class="bi bi-patch-check-fill"></i>
                    <?php echo e($tr['hero_badge']); ?>

                </div>
                <h1 class="hero-title">
                    <?php echo e($tr['hero_title1']); ?><br>
                    <span class="hero-highlight"><?php echo e($tr['hero_title2']); ?></span><br>
                    <?php echo e($tr['hero_title3']); ?>

                </h1>
                <p class="hero-subtitle"><?php echo e($tr['hero_sub']); ?></p>
                <div class="d-flex gap-3 flex-wrap mb-5">
                    <a href="<?php echo e(url('/driving')); ?>" class="btn-hero-primary">
                        <i class="bi bi-rocket-takeoff-fill"></i>
                        <?php echo e($tr['hero_explore']); ?>

                    </a>
                    <a href="#main-app" target="_blank" class="btn-hero-outline">
                        <i class="bi bi-box-arrow-up-right"></i>
                        <?php echo e($tr['go_main_app']); ?>

                    </a>
                </div>
                <div class="hero-stats-bar">
                    <div class="hsb-item">
                        <div class="hsb-number">500+</div>
                        <div class="hsb-label"><?php echo e($tr['hero_students']); ?></div>
                    </div>
                    <div class="hsb-divider"></div>
                    <div class="hsb-item">
                        <div class="hsb-number">5</div>
                        <div class="hsb-label"><?php echo e($tr['hero_centers']); ?></div>
                    </div>
                    <div class="hsb-divider"></div>
                    <div class="hsb-item">
                        <div class="hsb-number">3</div>
                        <div class="hsb-label"><?php echo e($tr['hero_countries']); ?></div>
                    </div>
                    <div class="hsb-divider"></div>
                    <div class="hsb-item">
                        <div class="hsb-number">98%</div>
                        <div class="hsb-label"><?php echo e($tr['hero_success']); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center" data-aos="fade-left">
                <div class="hero-visual">
                    <div class="hv-center">
                        <div class="hvc-logo">EG</div>
                        <div class="hvc-name">Easy-Group</div>
                        <div class="hvc-sub">Est. Cameroon</div>
                    </div>
                    <div class="hv-float hv-f1">
                        <div class="hvf-icon" style="background:rgba(26,60,110,0.1);color:var(--primary);">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <div>
                            <div class="hvf-title"><?php echo e($tr['driving']); ?></div>
                            <div class="hvf-sub">4 <?php echo e($tr['hero_centers']); ?></div>
                        </div>
                    </div>
                    <div class="hv-float hv-f2">
                        <div class="hvf-icon" style="background:rgba(232,160,32,0.12);color:var(--accent);">
                            <i class="bi bi-translate"></i>
                        </div>
                        <div>
                            <div class="hvf-title"><?php echo e($tr['language']); ?></div>
                            <div class="hvf-sub">IELTS · TOEFL · Deutsch</div>
                        </div>
                    </div>
                    <div class="hv-float hv-f3">
                        <div class="hvf-icon" style="background:rgba(40,167,69,0.12);color:#28a745;">
                            <i class="bi bi-passport-fill"></i>
                        </div>
                        <div>
                            <div class="hvf-title"><?php echo e($tr['visa']); ?></div>
                            <div class="hvf-sub">DE · FR · LT</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-wave">
        <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#f4f7fc"/>
        </svg>
    </div>
</section>


<section style="background:#fff;padding:20px 0;border-bottom:1px solid rgba(0,0,0,0.06);">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-4">
            <div class="trust-pill" data-aos="fade-up" data-aos-delay="0">
                <i class="bi bi-shield-fill-check"></i> <?php echo e($tr['trust_official']); ?>

            </div>
            <div class="trust-pill" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-award-fill"></i> <?php echo e($tr['trust_certified']); ?>

            </div>
            <div class="trust-pill" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt-fill"></i> <?php echo e($tr['trust_location']); ?>

            </div>
            <div class="trust-pill" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-headset"></i> <?php echo e($tr['trust_support']); ?>

            </div>
            <div class="trust-pill" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-globe2"></i> <?php echo e($tr['trust_european']); ?>

            </div>
        </div>
    </div>
</section>


<section class="section-padding" style="background:#f4f7fc;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label"><?php echo e($tr['services_label']); ?></div>
            <h2 class="section-title"><?php echo e($tr['services_title']); ?></h2>
            <div class="divider-accent mx-auto"></div>
            <p style="color:#6c7a89;max-width:560px;margin:0 auto;font-size:0.95rem;">
                <?php echo e($tr['services_sub']); ?>

            </p>
        </div>
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="svc-card">
                    <div class="svc-header" style="background:linear-gradient(135deg,#1a3c6e,#2a5298);">
                        <div class="svc-icon"><i class="bi bi-car-front-fill"></i></div>
                        <div>
                            <div class="svc-tag"><?php echo e($tr['driving_tag']); ?></div>
                            <div class="svc-name">Easy Driving</div>
                        </div>
                        <div class="svc-num">01</div>
                    </div>
                    <div class="svc-body">
                        <p class="svc-desc"><?php echo e($tr['driving_desc']); ?></p>
                        <ul class="svc-list">
                            <li><i class="bi bi-check-circle-fill"></i> <?php echo e($tr['driving_f1']); ?></li>
                            <li><i class="bi bi-check-circle-fill"></i> <?php echo e($tr['driving_f2']); ?></li>
                            <li><i class="bi bi-check-circle-fill"></i> <?php echo e($tr['driving_f3']); ?></li>
                            <li><i class="bi bi-check-circle-fill"></i> <?php echo e($tr['driving_f4']); ?></li>
                        </ul>
                        <div class="svc-actions">
                            <a href="<?php echo e(url('/driving')); ?>" class="svc-btn-main">
                                <?php echo e($tr['learn_more']); ?> <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="#main-app" target="_blank" class="svc-btn-alt">
                                <i class="bi bi-box-arrow-up-right"></i> <?php echo e($tr['register_now']); ?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="svc-card featured-svc">
                    <div class="svc-popular"><?php echo e($tr['most_popular']); ?></div>
                    <div class="svc-header" style="background:linear-gradient(135deg,#c8860f,#e8a020);">
                        <div class="svc-icon"><i class="bi bi-translate"></i></div>
                        <div>
                            <div class="svc-tag" style="color:rgba(255,255,255,0.7);">
                                <?php echo e($tr['lang_tag']); ?>

                            </div>
                            <div class="svc-name"><?php echo e($tr['language']); ?></div>
                        </div>
                        <div class="svc-num">02</div>
                    </div>
                    <div class="svc-body">
                        <p class="svc-desc"><?php echo e($tr['lang_desc']); ?></p>
                        <ul class="svc-list">
                            <li><i class="bi bi-check-circle-fill"></i> <?php echo e($tr['lang_f1']); ?></li>
                            <li><i class="bi bi-check-circle-fill"></i> <?php echo e($tr['lang_f2']); ?></li>
                            <li><i class="bi bi-check-circle-fill"></i> <?php echo e($tr['lang_f3']); ?></li>
                            <li><i class="bi bi-check-circle-fill"></i> <?php echo e($tr['lang_f4']); ?></li>
                        </ul>
                        <div class="svc-actions">
                            <a href="<?php echo e(url('/language')); ?>" class="svc-btn-main">
                                <?php echo e($tr['learn_more']); ?> <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="#main-app" target="_blank" class="svc-btn-alt">
                                <i class="bi bi-box-arrow-up-right"></i> <?php echo e($tr['enroll_now']); ?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="svc-card">
                    <div class="svc-header" style="background:linear-gradient(135deg,#1a6e3c,#28a745);">
                        <div class="svc-icon"><i class="bi bi-passport-fill"></i></div>
                        <div>
                            <div class="svc-tag"><?php echo e($tr['visa_tag']); ?></div>
                            <div class="svc-name"><?php echo e($tr['visa']); ?></div>
                        </div>
                        <div class="svc-num">03</div>
                    </div>
                    <div class="svc-body">
                        <p class="svc-desc"><?php echo e($tr['visa_desc']); ?></p>
                        <ul class="svc-list">
                            <li><i class="bi bi-check-circle-fill"></i> <?php echo e($tr['visa_f1']); ?></li>
                            <li><i class="bi bi-check-circle-fill"></i> <?php echo e($tr['visa_f2']); ?></li>
                            <li><i class="bi bi-check-circle-fill"></i> <?php echo e($tr['visa_f3']); ?></li>
                            <li><i class="bi bi-check-circle-fill"></i> <?php echo e($tr['visa_f4']); ?></li>
                        </ul>
                        <div class="svc-actions">
                            <a href="<?php echo e(url('/visa')); ?>" class="svc-btn-main">
                                <?php echo e($tr['learn_more']); ?> <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="#main-app" target="_blank" class="svc-btn-alt">
                                <i class="bi bi-box-arrow-up-right"></i> <?php echo e($tr['apply_now']); ?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="section-label"><?php echo e($tr['why_label']); ?></div>
                <h2 class="section-title"><?php echo e($tr['why_title']); ?></h2>
                <div class="divider-accent"></div>
                <p style="color:#6c7a89;font-size:0.95rem;line-height:1.8;margin-bottom:30px;">
                    <?php echo e($tr['why_sub']); ?>

                </p>
                <div class="why-item">
                    <div class="why-icon"><i class="bi bi-person-check-fill"></i></div>
                    <div>
                        <h6><?php echo e($tr['why_f1_title']); ?></h6>
                        <p><?php echo e($tr['why_f1_desc']); ?></p>
                    </div>
                </div>
                <div class="why-item">
                    <div class="why-icon"><i class="bi bi-file-earmark-check-fill"></i></div>
                    <div>
                        <h6><?php echo e($tr['why_f2_title']); ?></h6>
                        <p><?php echo e($tr['why_f2_desc']); ?></p>
                    </div>
                </div>
                <div class="why-item">
                    <div class="why-icon"><i class="bi bi-phone-fill"></i></div>
                    <div>
                        <h6><?php echo e($tr['why_f3_title']); ?></h6>
                        <p><?php echo e($tr['why_f3_desc']); ?></p>
                    </div>
                </div>
                <a href="<?php echo e(url('/contact')); ?>"
                   class="btn-primary-custom mt-4 d-inline-flex align-items-center gap-2">
                    <?php echo e($tr['why_btn']); ?> <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="stat-block"
                             style="background:linear-gradient(135deg,var(--primary),var(--primary-light));">
                            <div class="sb-number">500+</div>
                            <div class="sb-label"><?php echo e($tr['stat_students']); ?></div>
                            <i class="bi bi-people-fill sb-icon"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-block"
                             style="background:linear-gradient(135deg,#c8860f,#e8a020);">
                            <div class="sb-number">98%</div>
                            <div class="sb-label"><?php echo e($tr['stat_visa']); ?></div>
                            <i class="bi bi-patch-check-fill sb-icon"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-block"
                             style="background:linear-gradient(135deg,#1a6e3c,#28a745);">
                            <div class="sb-number">5</div>
                            <div class="sb-label"><?php echo e($tr['stat_centers']); ?></div>
                            <i class="bi bi-building sb-icon"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-block"
                             style="background:linear-gradient(135deg,#6f42c1,#9b6dd1);">
                            <div class="sb-number">3</div>
                            <div class="sb-label"><?php echo e($tr['stat_countries']); ?></div>
                            <i class="bi bi-globe2 sb-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-padding visa-dark-section">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label" style="color:rgba(255,255,255,0.55);">
                <?php echo e($tr['visa']); ?>

            </div>
            <h2 class="section-title" style="color:#fff;">
                <?php echo e($tr['visa_we_get']); ?>

            </h2>
            <div class="divider-accent mx-auto"></div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="country-card">
                    <div class="cc-flag">🇩🇪</div>
                    <h4 class="cc-name">Germany</h4>
                    <div class="cc-tags">
                        <span><?php echo e($tr['visa_de_study']); ?></span>
                        <span><?php echo e($tr['visa_de_work']); ?></span>
                        <span><?php echo e($tr['visa_de_biz']); ?></span>
                    </div>
                    <p class="cc-desc"><?php echo e($tr['visa_de_desc']); ?></p>
                    <a href="<?php echo e(url('/visa')); ?>" class="cc-btn">
                        <?php echo e($tr['start_application']); ?> <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="country-card">
                    <div class="cc-flag">🇫🇷</div>
                    <h4 class="cc-name">France</h4>
                    <div class="cc-tags">
                        <span><?php echo e($tr['visa_fr_student']); ?></span>
                    </div>
                    <p class="cc-desc"><?php echo e($tr['visa_fr_desc']); ?></p>
                    <a href="<?php echo e(url('/visa')); ?>" class="cc-btn">
                        <?php echo e($tr['start_application']); ?> <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="country-card">
                    <div class="cc-flag">🇱🇹</div>
                    <h4 class="cc-name">Lithuania</h4>
                    <div class="cc-tags">
                        <span><?php echo e($tr['visa_lt_student']); ?></span>
                    </div>
                    <p class="cc-desc"><?php echo e($tr['visa_lt_desc']); ?></p>
                    <a href="<?php echo e(url('/visa')); ?>" class="cc-btn">
                        <?php echo e($tr['start_application']); ?> <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-padding" style="background:#f4f7fc;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label"><?php echo e($tr['how_label']); ?></div>
            <h2 class="section-title"><?php echo e($tr['how_title']); ?></h2>
            <div class="divider-accent mx-auto"></div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="step-card">
                    <div class="step-num">01</div>
                    <div class="step-icon-wrap"><i class="bi bi-search"></i></div>
                    <h5 class="step-title"><?php echo e($tr['how_s1_title']); ?></h5>
                    <p class="step-desc"><?php echo e($tr['how_s1_desc']); ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="step-card">
                    <div class="step-num">02</div>
                    <div class="step-icon-wrap"><i class="bi bi-person-plus-fill"></i></div>
                    <h5 class="step-title"><?php echo e($tr['how_s2_title']); ?></h5>
                    <p class="step-desc"><?php echo e($tr['how_s2_desc']); ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="step-card">
                    <div class="step-num">03</div>
                    <div class="step-icon-wrap">
                        <i class="bi bi-file-earmark-arrow-up-fill"></i>
                    </div>
                    <h5 class="step-title"><?php echo e($tr['how_s3_title']); ?></h5>
                    <p class="step-desc"><?php echo e($tr['how_s3_desc']); ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="step-card">
                    <div class="step-num">04</div>
                    <div class="step-icon-wrap"><i class="bi bi-trophy-fill"></i></div>
                    <h5 class="step-title"><?php echo e($tr['how_s4_title']); ?></h5>
                    <p class="step-desc"><?php echo e($tr['how_s4_desc']); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-label"><?php echo e($tr['centers_label']); ?></div>
            <h2 class="section-title"><?php echo e($tr['centers_title']); ?></h2>
            <div class="divider-accent mx-auto"></div>
            <p style="color:#6c7a89;font-size:0.95rem;"><?php echo e($tr['centers_sub']); ?></p>
        </div>
        <div class="city-section-label" data-aos="fade-right">
            <i class="bi bi-geo-alt-fill"></i> Yaoundé
        </div>
        <div class="row g-4 mb-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="center-card hq-card">
                    <div class="cc-hq-badge"><?php echo e($tr['headquarters']); ?></div>
                    <div class="cc-icon"><i class="bi bi-building-fill"></i></div>
                    <h5 class="cc-title">Carrefour</h5>
                    <p class="cc-city">Yaoundé</p>
                    <div class="cc-services-tags">
                        <span><?php echo e($tr['driving_tag']); ?></span>
                        <span><?php echo e($tr['language']); ?></span>
                        <span><?php echo e($tr['visa']); ?></span>
                    </div>
                    <a href="<?php echo e(url('/locations#carrefour')); ?>" class="cc-link">
                        <?php echo e($tr['view_center']); ?> <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="center-card">
                    <div class="cc-icon"><i class="bi bi-building"></i></div>
                    <h5 class="cc-title">Nkomo</h5>
                    <p class="cc-city">Yaoundé</p>
                    <div class="cc-services-tags">
                        <span><?php echo e($tr['driving_tag']); ?></span>
                        <span><?php echo e($tr['language']); ?></span>
                    </div>
                    <a href="<?php echo e(url('/locations#nkomo')); ?>" class="cc-link">
                        <?php echo e($tr['view_center']); ?> <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="center-card">
                    <div class="cc-icon"><i class="bi bi-building"></i></div>
                    <h5 class="cc-title">Essos</h5>
                    <p class="cc-city">Hôtel du Plateau, Yaoundé</p>
                    <div class="cc-services-tags">
                        <span><?php echo e($tr['language']); ?></span>
                        <span><?php echo e($tr['visa']); ?></span>
                    </div>
                    <a href="<?php echo e(url('/locations#essos')); ?>" class="cc-link">
                        <?php echo e($tr['view_center']); ?> <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="center-card">
                    <div class="cc-icon"><i class="bi bi-building"></i></div>
                    <h5 class="cc-title">Bonas</h5>
                    <p class="cc-city">Yaoundé</p>
                    <div class="cc-services-tags">
                        <span><?php echo e($tr['driving_tag']); ?></span>
                        <span><?php echo e($tr['language']); ?></span>
                    </div>
                    <a href="<?php echo e(url('/locations#bonas')); ?>" class="cc-link">
                        <?php echo e($tr['view_center']); ?> <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="city-section-label mt-4" data-aos="fade-right">
            <i class="bi bi-geo-alt-fill"></i> Douala
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="center-card">
                    <div class="cc-icon"><i class="bi bi-building"></i></div>
                    <h5 class="cc-title">Makepe-Missoke</h5>
                    <p class="cc-city">Douala</p>
                    <div class="cc-services-tags">
                        <span><?php echo e($tr['driving_tag']); ?></span>
                        <span><?php echo e($tr['language']); ?></span>
                        <span><?php echo e($tr['visa']); ?></span>
                    </div>
                    <a href="<?php echo e(url('/locations#makepe')); ?>" class="cc-link">
                        <?php echo e($tr['view_center']); ?> <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section style="background:#f4f7fc;padding:80px 0;">
    <div class="container">
        <div class="cta-box" data-aos="zoom-in">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <div style="font-size:0.72rem;font-weight:700;text-transform:uppercase;
                                letter-spacing:2px;color:var(--accent);margin-bottom:10px;">
                        <?php echo e($tr['cta_label']); ?>

                    </div>
                    <h2 style="font-size:2rem;font-weight:800;color:#fff;margin-bottom:12px;">
                        <?php echo e($tr['cta_title']); ?>

                    </h2>
                    <p style="color:rgba(255,255,255,0.65);font-size:0.92rem;
                               line-height:1.7;margin:0;">
                        <?php echo e($tr['cta_sub']); ?>

                    </p>
                </div>
                <div class="col-lg-5 d-flex gap-3 flex-wrap justify-content-lg-end">
                    <a href="<?php echo e(url('/payment')); ?>" class="btn-hero-primary">
                        <i class="bi bi-lightning-charge-fill"></i>
                        <?php echo e($tr['activate_now']); ?>

                    </a>
                    <a href="#main-app" target="_blank" class="btn-hero-outline">
                        <i class="bi bi-box-arrow-up-right"></i>
                        <?php echo e($tr['go_main_app']); ?>

                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
.hero-section{background:linear-gradient(135deg,#0d1b2a 0%,#1a3c6e 60%,#2a5298 100%);position:relative;overflow:hidden;}
.hero-shapes .hs-1,.hero-shapes .hs-2,.hero-shapes .hs-3{position:absolute;border-radius:50%;opacity:0.05;}
.hs-1{width:600px;height:600px;background:var(--accent);top:-200px;right:-100px;}
.hs-2{width:300px;height:300px;background:#fff;bottom:100px;left:-80px;}
.hs-3{width:200px;height:200px;background:var(--accent);top:40%;left:35%;}
.hero-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(232,160,32,0.15);border:1px solid rgba(232,160,32,0.3);color:var(--accent);font-size:0.82rem;font-weight:600;padding:8px 18px;border-radius:50px;margin-bottom:25px;}
.hero-title{font-size:3rem;font-weight:800;color:#fff;line-height:1.15;margin-bottom:20px;}
.hero-highlight{color:var(--accent);}
.hero-subtitle{font-size:1rem;color:rgba(255,255,255,0.72);line-height:1.8;margin-bottom:35px;max-width:500px;}
.btn-hero-primary{display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,var(--accent),var(--accent-dark));color:var(--dark) !important;font-weight:700;padding:13px 28px;border-radius:10px;font-size:0.92rem;box-shadow:0 5px 20px rgba(232,160,32,0.35);transition:all 0.3s;}
.btn-hero-primary:hover{transform:translateY(-2px);}
.btn-hero-outline{display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,0.1);border:2px solid rgba(255,255,255,0.3);color:#fff !important;font-weight:600;padding:12px 26px;border-radius:10px;font-size:0.92rem;transition:all 0.3s;}
.btn-hero-outline:hover{background:rgba(255,255,255,0.18);color:#fff !important;}
.hero-stats-bar{display:inline-flex;align-items:center;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:14px;padding:18px 28px;backdrop-filter:blur(10px);}
.hsb-item{text-align:center;padding:0 18px;}
.hsb-number{font-size:1.5rem;font-weight:800;color:var(--accent);line-height:1;}
.hsb-label{font-size:0.7rem;color:rgba(255,255,255,0.55);margin-top:4px;text-transform:uppercase;letter-spacing:0.5px;}
.hsb-divider{width:1px;height:38px;background:rgba(255,255,255,0.15);}
.hero-visual{position:relative;width:420px;height:420px;display:flex;align-items:center;justify-content:center;}
.hv-center{width:150px;height:150px;border-radius:50%;background:rgba(255,255,255,0.1);border:2px solid rgba(255,255,255,0.2);display:flex;flex-direction:column;align-items:center;justify-content:center;backdrop-filter:blur(20px);z-index:2;}
.hvc-logo{font-size:1.7rem;font-weight:800;color:var(--accent);font-family:'Poppins',sans-serif;}
.hvc-name{font-size:0.72rem;color:#fff;font-weight:600;margin-top:2px;}
.hvc-sub{font-size:0.62rem;color:rgba(255,255,255,0.5);}
.hv-float{position:absolute;background:rgba(255,255,255,0.95);border-radius:14px;padding:13px 16px;display:flex;align-items:center;gap:11px;box-shadow:0 10px 40px rgba(0,0,0,0.2);z-index:3;}
.hv-f1{top:30px;right:0;animation:fl1 3s ease-in-out infinite;}
.hv-f2{bottom:80px;right:-10px;animation:fl2 3.5s ease-in-out infinite;}
.hv-f3{top:130px;left:0;animation:fl3 4s ease-in-out infinite;}
@keyframes fl1{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}
@keyframes fl2{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
@keyframes fl3{0%,100%{transform:translateY(0)}50%{transform:translateY(-15px)}}
.hvf-icon{width:38px;height:38px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0;}
.hvf-title{font-size:0.82rem;font-weight:700;color:#0d1b2a;}
.hvf-sub{font-size:0.68rem;color:#6c7a89;margin-top:2px;}
.hero-wave{position:absolute;bottom:-1px;left:0;right:0;}
.hero-wave svg{display:block;}
.trust-pill{display:inline-flex;align-items:center;gap:7px;font-size:0.83rem;font-weight:600;color:var(--primary);padding:8px 18px;border-radius:25px;background:var(--light-bg);}
.trust-pill i{color:var(--accent);font-size:1rem;}
.svc-card{background:#fff;border-radius:18px;overflow:hidden;box-shadow:0 4px 25px rgba(0,0,0,0.07);transition:all 0.35s;position:relative;height:100%;}
.svc-card:hover{transform:translateY(-8px);box-shadow:0 20px 50px rgba(26,60,110,0.14);}
.featured-svc{border:2px solid rgba(232,160,32,0.35);}
.svc-popular{position:absolute;top:14px;right:14px;background:rgba(255,255,255,0.22);color:#fff;font-size:0.65rem;font-weight:700;padding:3px 12px;border-radius:20px;text-transform:uppercase;z-index:2;}
.svc-header{padding:26px 22px 20px;display:flex;align-items:center;gap:14px;position:relative;overflow:hidden;}
.svc-icon{width:52px;height:52px;background:rgba(255,255,255,0.2);border-radius:13px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;color:#fff;flex-shrink:0;}
.svc-tag{font-size:0.65rem;color:rgba(255,255,255,0.65);text-transform:uppercase;letter-spacing:0.8px;font-weight:600;}
.svc-name{font-size:1.1rem;font-weight:700;color:#fff;margin-top:3px;}
.svc-num{position:absolute;right:18px;bottom:6px;font-size:2.8rem;font-weight:800;color:rgba(255,255,255,0.1);font-family:'Poppins',sans-serif;line-height:1;}
.svc-body{padding:24px;}
.svc-desc{font-size:0.87rem;color:#6c7a89;line-height:1.7;margin-bottom:16px;}
.svc-list{list-style:none;padding:0;margin-bottom:20px;}
.svc-list li{font-size:0.84rem;color:#2d3748;padding:4px 0;display:flex;align-items:center;gap:9px;}
.svc-list li i{color:var(--accent);}
.svc-actions{display:flex;gap:9px;}
.svc-btn-main{flex:1;background:var(--primary);color:#fff !important;font-size:0.82rem;font-weight:600;padding:9px 16px;border-radius:8px;display:inline-flex;align-items:center;justify-content:center;gap:6px;transition:all 0.3s;}
.svc-btn-main:hover{background:var(--primary-light);}
.svc-btn-alt{background:var(--light-bg);color:var(--primary) !important;font-size:0.82rem;font-weight:600;padding:9px 13px;border-radius:8px;display:inline-flex;align-items:center;gap:5px;transition:all 0.3s;}
.svc-btn-alt:hover{background:var(--primary);color:#fff !important;}
.why-item{display:flex;align-items:flex-start;gap:14px;margin-bottom:20px;}
.why-icon{width:44px;height:44px;flex-shrink:0;background:linear-gradient(135deg,var(--primary),var(--primary-light));border-radius:12px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.1rem;}
.why-item h6{font-size:0.9rem;font-weight:700;color:var(--primary);margin-bottom:4px;}
.why-item p{font-size:0.82rem;color:#6c7a89;margin:0;line-height:1.6;}
.stat-block{border-radius:16px;padding:28px 22px;position:relative;overflow:hidden;color:#fff;transition:all 0.3s;}
.stat-block:hover{transform:translateY(-4px);}
.sb-number{font-size:2.3rem;font-weight:800;font-family:'Poppins',sans-serif;line-height:1;}
.sb-label{font-size:0.8rem;color:rgba(255,255,255,0.72);margin-top:6px;}
.sb-icon{position:absolute;bottom:-10px;right:-5px;font-size:4rem;color:rgba(255,255,255,0.1);}
.btn-primary-custom{background:var(--primary);color:#fff !important;padding:12px 26px;border-radius:10px;font-weight:600;font-size:0.9rem;display:inline-flex;align-items:center;gap:8px;transition:all 0.3s;}
.btn-primary-custom:hover{background:var(--primary-light);}
.visa-dark-section{background:linear-gradient(135deg,#0d1b2a 0%,#1a3c6e 100%);position:relative;overflow:hidden;}
.country-card{background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:18px;padding:35px 26px;text-align:center;transition:all 0.35s;height:100%;}
.country-card:hover{background:rgba(255,255,255,0.09);transform:translateY(-6px);border-color:rgba(232,160,32,0.3);}
.cc-flag{font-size:3.2rem;margin-bottom:12px;}
.cc-name{font-size:1.25rem;font-weight:700;color:#fff;margin-bottom:14px;}
.cc-tags{display:flex;flex-wrap:wrap;justify-content:center;gap:6px;margin-bottom:16px;}
.cc-tags span{background:rgba(232,160,32,0.14);border:1px solid rgba(232,160,32,0.25);color:var(--accent);font-size:0.7rem;font-weight:600;padding:4px 12px;border-radius:20px;}
.cc-desc{font-size:0.84rem;color:rgba(255,255,255,0.58);line-height:1.7;margin-bottom:22px;}
.cc-btn{display:inline-flex;align-items:center;gap:7px;background:linear-gradient(135deg,var(--accent),var(--accent-dark));color:var(--dark) !important;font-weight:700;font-size:0.83rem;padding:10px 22px;border-radius:8px;transition:all 0.3s;}
.cc-btn:hover{transform:translateY(-2px);}
.step-card{background:#fff;border-radius:16px;padding:32px 22px;text-align:center;position:relative;box-shadow:0 4px 20px rgba(0,0,0,0.06);transition:all 0.3s;height:100%;}
.step-card:hover{transform:translateY(-5px);}
.step-num{position:absolute;top:14px;right:18px;font-size:2.4rem;font-weight:800;color:rgba(26,60,110,0.06);font-family:'Poppins',sans-serif;line-height:1;}
.step-icon-wrap{width:62px;height:62px;border-radius:17px;background:linear-gradient(135deg,var(--primary),var(--primary-light));display:flex;align-items:center;justify-content:center;font-size:1.5rem;color:#fff;margin:0 auto 18px;box-shadow:0 5px 20px rgba(26,60,110,0.25);}
.step-title{font-size:0.97rem;font-weight:700;color:var(--primary);margin-bottom:10px;}
.step-desc{font-size:0.84rem;color:#6c7a89;line-height:1.7;margin:0;}
.city-section-label{display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff;font-size:0.8rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;padding:7px 20px;border-radius:25px;margin-bottom:20px;}
.center-card{background:#fff;border:2px solid rgba(0,0,0,0.06);border-radius:16px;padding:26px 20px;text-align:center;transition:all 0.3s;height:100%;position:relative;}
.center-card:hover{border-color:var(--primary);transform:translateY(-4px);box-shadow:0 12px 35px rgba(26,60,110,0.1);}
.hq-card{border-color:var(--accent);background:linear-gradient(135deg,#fffdf5,#fff);}
.cc-hq-badge{position:absolute;top:-12px;left:50%;transform:translateX(-50%);background:linear-gradient(135deg,var(--accent),var(--accent-dark));color:var(--dark);font-size:0.62rem;font-weight:800;text-transform:uppercase;letter-spacing:0.5px;padding:4px 16px;border-radius:20px;white-space:nowrap;}
.cc-icon{width:52px;height:52px;background:var(--light-bg);border-radius:13px;display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:var(--primary);margin:10px auto 12px;}
.cc-title{font-size:0.97rem;font-weight:700;color:var(--primary);margin-bottom:4px;}
.cc-city{font-size:0.77rem;color:#6c7a89;margin-bottom:12px;}
.cc-services-tags{display:flex;flex-wrap:wrap;justify-content:center;gap:5px;margin-bottom:14px;}
.cc-services-tags span{background:var(--light-bg);color:var(--primary);font-size:0.65rem;font-weight:600;padding:3px 10px;border-radius:10px;}
.cc-link{font-size:0.8rem;font-weight:600;color:var(--primary);display:inline-flex;align-items:center;gap:5px;}
.cc-link:hover{color:var(--accent);}
.cta-box{background:linear-gradient(135deg,#0d1b2a,#1a3c6e);border-radius:24px;padding:55px 48px;position:relative;overflow:hidden;}
@media(max-width:991.98px){
    .hero-title{font-size:2.1rem;}
    .hero-stats-bar{flex-wrap:wrap;gap:10px;}
    .hsb-divider{display:none;}
    .cta-box{padding:35px 24px;}
}
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\GENERAL STORES\Downloads\IzzyLink-app\resources\views/home.blade.php ENDPATH**/ ?>