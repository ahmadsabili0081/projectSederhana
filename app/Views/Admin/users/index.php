<?= $this->extend('Templates/template'); ?>

<?= $this->section('contentPage'); ?>
<section class="section">
  <div class="section-header">
    <h1>Users</h1>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Table Users</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-2">
              <thead>
                <tr>
                  <th style="width: 30px;">No</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Role</th>
                  <th>Images</th>
                  <th style="width: 100px;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($userData as $user) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $user['fullname']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['addres']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td>
                      <img style="width: 80px;" class="img-thumbnail" src="<?= base_url('/images/' . $user['imagesUser']); ?>" alt="">
                    </td>
                    <td>
                      <a class="btn btn-sm btn-warning" href=""><i class="fas fa-edit"></i></a>
                      <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>