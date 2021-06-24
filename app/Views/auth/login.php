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
                <div class="row w-100">
                    <div class="col-lg-6 mx-auto">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card my-3 py-2">
                                    <div class="card-body py-4 px-5">
                                        <div class="brand-logo">
                                            <img src="<?= base_url(); ?>/images/koi.png" class="mx-auto d-block" alt="logo">
                                        </div>
                                        <h3 class="text-center font-weight-bolder">LOGIN BUKU TAMU</h3>
                                        <br><br>
                                        <form class="forms-sample">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                            </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="remember">
                                                    Remember me
                                                </label>
                                            </div>
                                            <div class="mt-3">
                                                <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="LOGIN">
                                            </div>
                                        </form>
                                    </div>
                                </div>
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