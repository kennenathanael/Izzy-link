<?php $__env->startSection('title', $tr['login_title'] ?? 'Login'); ?>

<?php $__env->startSection('content'); ?>

<section style="background:linear-gradient(135deg,#0d1b2a,#1a3c6e);
                min-height:100vh;display:flex;align-items:center;padding:60px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="auth-card" data-aos="fade-up">
                    <div class="auth-logo">
                        <div class="auth-logo-icon">EG</div>
                        <div class="auth-logo-text">Easy-Group</div>
                    </div>
                    <h3 class="auth-title"><?php echo e($tr['login_title']); ?></h3>
                    <p class="auth-sub"><?php echo e($tr['login_sub']); ?></p>

                    <?php if(session('error')): ?>
                        <div class="auth-alert-error">
                            <i class="bi bi-exclamation-circle-fill"></i>
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label class="auth-label"><?php echo e($tr['login_email']); ?></label>
                            <input type="email" name="email"
                                   class="auth-input" required
                                   placeholder="you@email.com"
                                   value="<?php echo e(old('email')); ?>"/>
                        </div>
                        <div class="mb-4">
                            <label class="auth-label"><?php echo e($tr['login_password']); ?></label>
                            <input type="password" name="password"
                                   class="auth-input" required
                                   placeholder="••••••••"/>
                        </div>
                        <button type="submit" class="auth-btn">
                            <i class="bi bi-box-arrow-in-right"></i>
                            <?php echo e($tr['login_btn']); ?>

                        </button>
                    </form>

                    <p class="auth-switch">
                        <?php echo e($tr['login_no_account']); ?>

                        <a href="<?php echo e(url('/register')); ?>"><?php echo e($tr['login_register']); ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
.auth-card {
    background:#fff;border-radius:24px;padding:44px 40px;
    box-shadow:0 30px 80px rgba(0,0,0,0.25);
}
.auth-logo {
    display:flex;align-items:center;gap:12px;
    margin-bottom:28px;justify-content:center;
}
.auth-logo-icon {
    width:46px;height:46px;border-radius:12px;
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    color:#fff;font-size:1rem;font-weight:800;
    display:flex;align-items:center;justify-content:center;
    font-family:'Poppins',sans-serif;
}
.auth-logo-text { font-size:1.2rem;font-weight:800;color:var(--primary); }
.auth-title { font-size:1.5rem;font-weight:800;color:var(--primary);text-align:center;margin:0 0 6px; }
.auth-sub { font-size:0.85rem;color:#6c7a89;text-align:center;margin-bottom:28px; }
.auth-label {
    display:block;font-size:0.83rem;font-weight:600;
    color:#2d3748;margin-bottom:7px;
}
.auth-input {
    width:100%;padding:12px 15px;font-size:0.9rem;
    border:2px solid #e8ecf0;border-radius:11px;
    color:#2d3748;background:#fff;outline:none;
    transition:all 0.3s;font-family:'Inter',sans-serif;
}
.auth-input:focus { border-color:var(--primary);box-shadow:0 0 0 3px rgba(26,60,110,0.08); }
.auth-btn {
    width:100%;padding:13px;border:none;border-radius:12px;
    background:linear-gradient(135deg,var(--primary),var(--primary-light));
    color:#fff;font-weight:700;font-size:0.95rem;cursor:pointer;
    display:flex;align-items:center;justify-content:center;gap:8px;
    transition:all 0.3s;box-shadow:0 5px 20px rgba(26,60,110,0.3);
    font-family:'Inter',sans-serif;
}
.auth-btn:hover { transform:translateY(-2px); }
.auth-switch { text-align:center;margin-top:20px;font-size:0.85rem;color:#6c7a89; }
.auth-switch a { color:var(--primary);font-weight:600; }
.auth-alert-error {
    background:rgba(220,53,69,0.08);border:1px solid rgba(220,53,69,0.2);
    color:#721c24;border-radius:10px;padding:12px 16px;margin-bottom:20px;
    font-size:0.85rem;display:flex;align-items:center;gap:9px;
}
</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\GENERAL STORES\Downloads\IzzyLink-app\resources\views/auth/login.blade.php ENDPATH**/ ?>