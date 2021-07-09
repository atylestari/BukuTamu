<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div>
                    <h3 class="card-title font-weight-bold"><?= $judul; ?></h3>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive" style="margin-right: -33vw;">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center" id="dataTable">
                                                <thead class="table-primary">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama</th>
                                                        <th>Instansi</th>
                                                        <th>Email</th>
                                                        <th>Nomor Telepon</th>
                                                        <?php if (session()->get('level') == 'Site Administrator') { ?>
                                                            <th>Bertemu Dengan</th>
                                                            <th>Lainnya</th>
                                                        <?php } ?>
                                                        <th>Keperluan</th>
                                                        <th>Waktu Bertemu</th>
                                                        <th>Tanggal Bertemu</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($form as $key => $value) { ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $value['nama']; ?></td>
                                                            <td><?= $value['instansi']; ?></td>
                                                            <td><?= $value['email']; ?></td>
                                                            <td><?= $value['kontak']; ?></td>
                                                            <?php if (session()->get('level') == 'Site Administrator') { ?>
                                                                <td><?= $value['bertemu']; ?></td>
                                                                <td><?= $value['lainnya']; ?></td>
                                                            <?php } ?>
                                                            <td><?= $value['keperluan']; ?></td>
                                                            <td><?= $value['waktu']; ?></td>
                                                            <td><?= $value['tanggal']; ?></td>
                                                            <td>
                                                                <button onclick="window.location.href='<?= base_url('admin/edit_tamu') ?>';" class="btn btn-primary ti-pencil-alt">
                                                                </button>
                                                                <button class="btn btn-danger ti-trash">
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>