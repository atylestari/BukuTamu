<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title; ?></title>

    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>/images/koi.png">

    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/js/select.dataTables.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/dataTables.bootstrap4.min.css">

</head>

<body>

    <div class="container-scroller">
        <?= $this->include('templates/topbar'); ?>
        <div class="container-fluid page-body-wrapper">
            <?= $this->include('templates/sidebar'); ?>
            <?= $this->renderSection('page-content'); ?>
        </div>
    </div>

    <script src="<?= base_url(); ?>/vendors/vendor.bundle.base.js"></script>
    <script src="<?= base_url(); ?>/js/template.js"></script>

    <script src="<?= base_url(); ?>/vendors/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/datatables-demo.js"></script>

</body>

</html>