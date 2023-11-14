<?= $this->extend('Templates/templates_auth'); ?>

<?= $this->section('contentAuth'); ?>
<div class="row">
  <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
    <div class="login-brand">
      <img src="<?= base_url('stisla/img/stisla-fill.svg'); ?>" alt="logo" width="100" class="shadow-light rounded-circle">
    </div>

    <div class="card card-primary">
      <div class="card-header">
        <h4><?= lang('Auth.register') ?></h4>
      </div>
      <?= view('Myth\Auth\Views\_message_block') ?>
      <div class="card-body">
        <form action="<?= url_to('register') ?>" method="post">
          <?= csrf_field(); ?>
          <div class="form-group">
            <label for="email"><?= lang('Auth.email') ?></label>
            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
            <small class="text-danger"><?= session('errors.email'); ?></small>
          </div>

          <div class="form-group">
            <label for="username"><?= lang('Auth.username') ?></label>
            <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
            <small class="text-danger"><?= session('errors.username'); ?></small>
          </div>
          <div class="form-group">
            <label for="fullname">Fullname</label>
            <input type="text" class="form-control <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?>" name="fullname" placeholder="Ahmad Sabili Alghifari" value="<?= old('fullname') ?>">
            <small class="text-danger"><?= session('errors.fullname'); ?></small>
          </div>

          <div class="form-group">
            <label for="alamat">Addres</label>
            <textarea name="addres" class="form-control" placeholder="Jl.Kerta Jaya II"></textarea>
            <small class="text-danger"><?= session('errors.addres'); ?></small>
          </div>

          <div class="form-group">
            <label for="password"><?= lang('Auth.password') ?></label>
            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
            <small class="text-danger"><?= session('errors.password'); ?></small>
          </div>

          <div class="form-group">
            <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
            <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
            <small class="text-danger"><?= session('errors.pass_confirm'); ?></small>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
          </div>
        </form>
      </div>
    </div>
    <div class="simple-footer">
      Copyright &copy; Project Sederhana <?= date('Y'); ?>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>