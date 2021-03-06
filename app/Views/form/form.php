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
                            <div class="col py-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="brand-logo">
                                            <img src="<?= base_url(); ?>/images/koi.png" class="mx-auto d-block" alt="logo">
                                        </div>
                                        <h3 class="text-center font-weight-bolder">FORM BUKU TAMU</h4>
                                            <br>
                                            <?= form_open('home/kirim'); ?>
                                            <form class="forms-sample">
                                                <?= csrf_field(); ?>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg" id="nama" name="nama" placeholder="Nama" autofocus required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg" id="instansi" name="instansi" placeholder="Instansi" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="tel" class="form-control form-control-lg" id="nomer" name="nomer" placeholder="Nomor Telepon" required>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control" id="bertemu" name="bertemu" placeholder="Bertemu Dengan" required>
                                                        <option disabled>Bertemu dengan</option>
                                                        <option value="Ketua Umum">Ketua Umum</option>
                                                        <option value="Sekretaris Jenderal">Sekretaris Jenderal</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                                <div id="jikalain" class="form-group">
                                                    <input type="text" class="form-control form-control-lg" id="jikalain" name="jikalain" placeholder="Sebutkan (jika lainnya)">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg" id="keperluan" name="keperluan" placeholder="Keperluan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="waktu">Waktu Bertemu</label>
                                                    <input type="time" class="form-control form-control-lg" id="waktu" name="waktu" placeholder="Waktu Bertemu" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal">Tanggal Bertemu</label>
                                                    <input type="date" class="form-control form-control-lg" id="tanggal" name="tanggal" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block" name="submit" value="Kirim">Kirim</button>
                                            </form>
                                            <?= form_close(); ?>
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