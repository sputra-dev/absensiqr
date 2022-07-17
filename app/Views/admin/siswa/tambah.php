<?= $this->extend('layout/app'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/navbar/admin'); ?>
<?= session()->getFlashdata('pesan'); ?>

<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Add Pegawai</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">AbsensiQR</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/admlist'); ?>">Admin</a></li>
                        <li class="breadcrumb-item active">Add Pegawai</li>
                    </ol>
                </div>
            </div>
            <!-- end row -->
        </div>
        <div class="row col-md-5">
            <div class="card m-b-30">
                <div class="card-body">
                    <h3 class="card-title font-16 mt-0">PERINGATAN!</h3>
                    <p>Mohon Untuk Mengisi Data dengan benar, terutama data yang sensitif seperti Nomor Induk Kerja. Ini bertujuan untuk mencegah malfunction atau error kedepannya</p>
                    <span class="blockquote-footer">Developer</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <!-- <h3 class="card-title font-16 mt-0">Form Add Pegawai</h3> -->
                        <button type="button" class="btn btn-outline-primary mt-2 mb-3 tambah-baris-siswa">Tambah Baris</button>
                        <form action="<?= base_url('admin/addstudent_'); ?>" method="POST">
                            <input type="hidden" name="additional" value="additional">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive nowrap">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="th">NIK</th>
                                            <th class="th">NAMA</th>
                                            <th class="th">KELAS</th>
                                            <th class="th">JENIS KELAMIN</th>
                                            <th class="th">OPTION</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody-data-siswa">
                                        <tr>
                                            <td><input type="text" name="nim[]" placeholder="Nomor Induk Kerja" style="border: none; background: transparent; text-align: center;" autocomplete="off" required></td>
                                            <td><input type="text" name="nama_siswa[]" placeholder="Nama lengkap" style="border: none; background: transparent; text-align: center;" autocomplete="off" required></td>
                                            <td>
                                                <select name="kelas_kode[]" style="border: none; background: transparent; text-align: center;">
                                                    <option value="">Kelas</option>
                                                    <?php
                                                    foreach ($kelas as $key) : ?>
                                                        <option value="<?= $key->kode_kelas; ?>"><?= $key->nama_kelas; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="jenis_kelamin[]" style="border: none; background: transparent; text-align: center;">
                                                    <option value="">Jenis Kelamin</option>
                                                    <option value="L">Laki - Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </td>
                                            <!-- <td><input type="date" name="tanggal_lahir[]" placeholder="nama" style="border: none; background: transparent; text-align: center;" autocomplete="off" required></td>
                                            <td><input type="text" name="tempat_lahir[]" placeholder="nama" style="border: none; background: transparent; text-align: center;" autocomplete="off" required></td>
                                            <td><input type="email" name="email[]" placeholder="email" style="border: none; background: transparent; text-align: center;" autocomplete="off" required></td> -->
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="<?= base_url('admin/students'); ?>" class="btn btn-outline-warning mt-3">Kembali</a>
                                <button type=" submit" class="btn btn-outline-success mt-3 ml-1">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->
</div>

<?= $this->endSection(); ?>