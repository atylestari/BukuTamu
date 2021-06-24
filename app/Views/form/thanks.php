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

    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/js/select.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/dataTables.bootstrap4.min.css">

    <link rel="shortcut icon" href="<?= base_url(); ?>/images/koi.png">

</head>

<body>

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper-blue full-page-wrapper">
            <div class="content-wrapper-blue align-items-center auth">
                <div class="row py-5">
                    <div class="col-lg-5 mx-auto" style="margin-bottom: 17%;">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?= base_url(); ?>/images/koi.png" class="brand-logo mx-auto d-block" width="15%" alt="logo">
                                <h2 class="text-center font-weight-bolder">THANK YOU</h2>
                                <br>
                                <h3 class="text-center">We will contact you soon!</h3>
                                <br><br>
                                <button onclick="window.location.href='<?= base_url('home') ?>';" class="btn btn-block btn-primary">Kembali ke Form</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url(); ?>/vendors/vendor.bundle.base.js"></script>
    <script src="<?= base_url(); ?>/js/template.js"></script>

    <script src="<?= base_url(); ?>/vendors/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/datatables-demo.js"></script>

</body>

</html>