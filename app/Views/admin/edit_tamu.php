<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <h3 class="card-title font-weight-bold">Edit Data Tamu</h3>
            <br>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="<?= base_url('admin/ubah/' . $form['id']); ?>" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="nama" name="nama" value="<?= $form['nama']; ?>" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="instansi" name="instansi" value="<?= $form['instansi']; ?>" placeholder="Instansi" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="email" name="email" value="<?= $form['email']; ?>" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control form-control-lg" id="nomer" name="nomer" value="<?= $form['kontak']; ?>" placeholder="Nomor Telepon" required>
                            </div>
                            <?php if (session()->get('level') == 'Site Administrator') { ?>
                                <div class="form-group">
                                    <select class="form-control" id="bertemu" name="bertemu" value="<?= $form['bertemu']; ?> placeholder=" Bertemu Dengan" required>
                                        <option disabled>Bertemu dengan</option>
                                        <option value="ketum">Ketua Umum</option>
                                        <option value="sekjen">Sekertaris Jenderal</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div id="jikalain" class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="jikalain" name="jikalain" value="<?= $form['lainnya']; ?> placeholder=" Sebutkan (jika lainnya)" required>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="keperluan" name="keperluan" value="<?= $form['keperluan']; ?> placeholder=" Keperluan" required>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu Bertemu</label>
                                <input type="time" class="form-control form-control-lg" id="waktu" name="waktu" value="<?= $form['waktu']; ?> placeholder=" Waktu Bertemu" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Bertemu</label>
                                <input type="date" class="form-control form-control-lg" id="tanggal" name="tanggal" value="<?= $form['tanggal']; ?>" required>
                            </div>
                            <button class="btn btn-lg btn-primary" name="update" value="update">Update</button>
                        </form>
                        <br>
                        <button onclick="window.location.href='<?= base_url('admin/kembali/') ?>';" class="btn btn-secondary btn-lg" name="kembali" value="kembali" style="display:inline;">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>