<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div>
                    <h3 class="card-title font-weight-bold">DAFTAR TAMU NOC INDONESIA</h3>
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
                                                        <th>Bertemu Dengan</th>
                                                        <th>Lainnya</th>
                                                        <th>Keperluan</th>
                                                        <th>Waktu Bertemu</th>
                                                        <th>Tanggal Bertemu</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Tiger Nixon</td>
                                                        <td>COC</td>
                                                        <td>tiger@gmail.com</td>
                                                        <td>085336251765</td>
                                                        <td>Ketua Umum</td>
                                                        <td></td>
                                                        <td>Tender</td>
                                                        <td>13.00 PM</td>
                                                        <td>2021/06/28</td>
                                                        <td>
                                                            <button class="btn btn-primary ti-pencil-alt">
                                                            </button>
                                                            <button class="btn btn-danger ti-trash">
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Harry Potter</td>
                                                        <td>Griffyndor</td>
                                                        <td>harry@gmail.com</td>
                                                        <td>081324562776</td>
                                                        <td>Sekretaris Jenderal</td>
                                                        <td></td>
                                                        <td>Webinar</td>
                                                        <td>10.00 PM</td>
                                                        <td>2021/06/29</td>
                                                        <td>
                                                            <button onclick="window.location.href='<?= base_url('admin/edit_tamu') ?>';" class="btn btn-primary ti-pencil-alt">
                                                            </button>
                                                            <button class="btn btn-danger ti-trash">
                                                            </button>
                                                        </td>
                                                    </tr>
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