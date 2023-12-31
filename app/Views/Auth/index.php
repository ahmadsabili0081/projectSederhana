<?= $this->extend('Templates/templates_auth'); ?>

<?= $this->section('contentAuth'); ?>
<div class="row">
  <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
    <div class="login-brand">
      <img src="<?= base_url('stisla/img/stisla-fill.svg'); ?>" alt="logo" width="100" class="shadow-light rounded-circle">
    </div>

    <div class="card card-primary">
      <div class="card-header">
        <h4><?= lang('Auth.loginTitle') ?></h4>
      </div>
      <div class="card-body">
        <?= view('Myth\Auth\Views\_message_block') ?>
        <form method="POST" action="<?= url_to('login') ?>" class="needs-validation" novalidate="">
          <?= csrf_field(); ?>
          <?php if ($config->validFields === ['email']) : ?>
            <div class="form-group">
              <label for="login"><?= lang('Auth.email') ?></label>
              <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
              <div class="invalid-feedback">
                <?= session('errors.login') ?>
              </div>
            </div>
          <?php else : ?>
            <div class="form-group">
              <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
              <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
              <div class="invalid-feedback">
                <?= session('errors.login') ?>
              </div>
            </div>
          <?php endif; ?>

          <div class="form-group">
            <label for="password"><?= lang('Auth.password') ?></label>
            <input id="password" type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>">
            <small class="text-danger"><?= session('errors.password'); ?></small>
          </div>

          <?php if ($config->allowRemembering) : ?>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                <?= lang('Auth.rememberMe') ?>
              </label>
            </div>
          <?php endif; ?>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
          </div>
        </form>
        <div class="text-center mt-4 mb-3">
          <div class="text-job text-muted">Login With Social</div>
        </div>
        <div class="row sm-gutters">
          <div class="col">
            <a class="btn btn-block btn-social btn-facebook">
              <span class="fab fa-google"></span> Google+
            </a>
          </div>
        </div>

      </div>

    </div>
    <?php if ($config->allowRegistration) : ?>
      <div class="text-muted text-center">
        <p><a href="<?= url_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
      </div>
    <?php endif; ?>
    <?php if ($config->activeResetter) : ?>
      <div class="text-muted text-center">
        <p><a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
      </div>
    <?php endif; ?>
    <div class="simple-footer">
      Copyright &copy; Auth | Project Sederhana <?= date('Y'); ?>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>