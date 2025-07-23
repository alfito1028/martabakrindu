<?= $this->include('layout/header') ?>

<style>
    .login-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        padding: 40px 30px;
    }
    .form-label {
        font-weight: 600;
    }
    .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 153, 0, 0.25);
        border-color: #ff9900;
    }
    .btn-orange {
        background-color: #ff9900;
        color: #fff;
        font-weight: bold;
    }
    .btn-orange:hover {
        background-color: #e67e00;
    }
</style>

<div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="login-card w-100" style="max-width: 400px;">
        <h3 class="text-center text-orange mb-4">Login Admin</h3>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <form method="post" action="/do-login">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input type="text" name="username" class="form-control" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" name="password" class="form-control" required>
                </div>
            </div>
            <button class="btn btn-orange w-100 mt-3">Login</button>
        </form>
    </div>
</div>


