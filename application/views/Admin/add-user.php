<!-- Konten -->
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Tambah Data User
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
                                            <label class="col-3 col-form-label required">Nama Lengkap</label>
                                            <div class="col">
                                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Username</label>
                                            <div class="col">
                                                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Akses</label>
                                            <div class="col">
                                                <select class="form-select" name="jk">
                                                    <option value="Pilih">Pilih Akses</option>
                                                    <option value="1">Administrator</option>
                                                    <option value="2">User</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Password</label>
                                            <div class="col">
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
                                                <small class="form-hint">Password harus berisi minimal 5 karakter</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Konfirmasi Password</label>
                                            <div class="col">
                                                <input type="password" name="password1" id="password1" class="form-control" placeholder="Masukkan Konfirmasi Password">
                                            </div>
                                        </div>

                                        <a class="btn btn-secondary mt-3 float-end" href="<?= base_url('user/useracc'); ?>">Batal</a>
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