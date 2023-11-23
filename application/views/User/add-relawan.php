<!-- Konten -->
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Tambah Data Relawan
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <div class="card-status-top bg-primary"></div>
                        <div class="card-body">

                            <form action="" method="POST">
                                <div class="row row-cards">
                                    <div class="col-md">
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">NIK</label>
                                            <div class="col">
                                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Nama</label>
                                            <div class="col">
                                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Handphone</label>
                                            <div class="col">
                                                <input type="text" name="nohp" id="nohp" class="form-control" placeholder="Masukkan No Handphone">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Jenis Kelamin</label>
                                            <div class="col">
                                                <select class="form-select" name="jk">
                                                    <option value="Pilih">Pilih Jenis Kelamin</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Desa/Kelurahan</label>
                                            <div class="col">
                                                <select class="form-select" name="desa" id="select-users">
                                                    <option value="Pilih">Pilih Kelurahan</option>
                                                    <option value="1">Chuck Tesla</option>
                                                    <option value="2">Elon Musk</option>
                                                    <option value="3">Paweł Kuna</option>
                                                    <option value="4">Nikola Tesla</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Kecamatan</label>
                                            <div class="col">
                                                <select class="form-select" name="kecamatan" id="select-users2">
                                                    <option value="Pilih">Pilih Kecamatan</option>
                                                    <option value="1">Chuck Tesla</option>
                                                    <option value="2">Elon Musk</option>
                                                    <option value="3">Paweł Kuna</option>
                                                    <option value="4">Nikola Tesla</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Kabupaten/Kota</label>
                                            <div class="col">
                                                <select class="form-select" name="kabupaten" id="select-users3">
                                                    <option value="Pilih">Pilih Kabupaten/Kota</option>
                                                    <option value="1">Chuck Tesla</option>
                                                    <option value="2">Elon Musk</option>
                                                    <option value="3">Paweł Kuna</option>
                                                    <option value="4">Nikola Tesla</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Provinsi</label>
                                            <div class="col">
                                                <select class="form-select" name="provinsi" id="select-users5">
                                                    <option value="Pilih">Pilih Provinsi</option>
                                                    <option value="1">Chuck Tesla</option>
                                                    <option value="2">Elon Musk</option>
                                                    <option value="3">Paweł Kuna</option>
                                                    <option value="4">Nikola Tesla</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">RT</label>
                                            <div class="col">
                                                <input type="text" name="rt" id="rt" class="form-control" placeholder="Masukkan Nomor RT">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">RW</label>
                                            <div class="col">
                                                <input type="text" name="rw" id="rw" class="form-control" placeholder="Masukkan Nomor RW">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">TPS</label>
                                            <div class="col">
                                                <input type="text" name="tps" id="tps" class="form-control" placeholder="Masukkan Nomor TPS">
                                            </div>
                                        </div>

                                        <a class="btn btn-secondary mt-3 float-end" href="<?= base_url('user/relawan'); ?>">Batal</a>
                                        <button class="btn btn-warning mt-3 me-3 float-end" type="reset">Reset</button>
                                        <button class="btn btn-primary mt-3 me-3 float-end" type="submit">Tambah</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>