<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title; ?></title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('/stisla/modules/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('/stisla/modules/fontawesome/css/all.min.css'); ?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('/stisla/modules/datatables/datatables.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('/stisla/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('/stisla/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css'); ?>">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('/stisla/modules/bootstrap-social/bootstrap-social.css'); ?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('/stisla/css/style.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('/stisla/css/components.css'); ?>">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>

  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <?= $this->include('Templates/navbar'); ?>
      <?= $this->include('Templates/sidebar'); ?>
      <div class="main-content">
        <?= $this->renderSection('contentPage'); ?>
      </div>
      <?= $this->include('Templates/footer'); ?>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="<?= base_url('/stisla/modules/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('/stisla/modules/popper.js'); ?>"></script>
  <script src="<?= base_url('/stisla/modules/tooltip.js'); ?>"></script>
  <script src="<?= base_url('/stisla/modules/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url('/stisla/modules/nicescroll/jquery.nicescroll.min.js'); ?>"></script>
  <script src="<?= base_url('/stisla/modules/moment.min.js'); ?>"></script>
  <script src="<?= base_url('/stisla/js/stisla.js'); ?>"></script>


  <script src="<?= base_url('/stisla/modules/datatables/datatables.min.js'); ?>"></script>
  <script src="<?= base_url('/stisla/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js'); ?>"></script>
  <script src="<?= base_url('/stisla/modules/datatables/Select-1.2.4/js/dataTables.select.min.js'); ?>"></script>
  <script src="<?= base_url('/stisla/modules/jquery-ui/jquery-ui.min.js'); ?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url('/stisla/js/page/modules-datatables.js'); ?>"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="<?= base_url('/stisla/js/scripts.js'); ?>"></script>
  <script src="<?= base_url('/stisla/js/custom.js'); ?>"></script>
</body>

</html>