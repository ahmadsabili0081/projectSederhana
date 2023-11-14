<?= $this->extend('Templates/template'); ?>

<?= $this->section('contentPage'); ?>
<section class="section">
  <div class="section-header">
    <h5>Profile</h5>
  </div>
  <div class="row">
    <div class="col">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img style="height: 100%;" class="img-fluid" src="<?= base_url('/images/' . $dataUser['imagesUser']); ?>" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $dataUser['fullname']; ?></h5>
              <p class="card-text"><?= $dataUser['addres']; ?></p>
              <div class="row">
                <div class="col-2 mr-4">
                  <span class="badge badge-<?= in_groups('Admin') ? 'primary' : 'success'; ?>"><?= $dataUser['name']; ?></span>
                </div>
                <div class="col-2">
                  <span class="badge badge-<?= in_groups('Admin') ? 'primary' : 'success'; ?>"><?= $dataUser['email']; ?></span>
                </div>
              </div>
              <p class="card-text mt-3"><small class="text-muted">Join at <?= $dataUser['created_at']; ?></small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>