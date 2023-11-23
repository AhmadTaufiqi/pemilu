<!-- Konten -->
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Management Akses Menu
                    </h2>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <?= form_error('menu', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <!-- menu akses -->
                <div class="col-md">
                    <div class="card">
                        <div class="card-status-top bg-primary"></div>
                        <div class="card-header">Menu akses</div>
                        <div class="card-body">
                            <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah-menu" href="#">Tambah Menu</a>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Menu Akses</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($menu as $m) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $m['menu']; ?></td>
                                            <td>
                                                <a class="badge badge-sm bg-green" href="<?= base_url('admin/updatemenu/') ?><?= $m['id']; ?>">Edit</a>
                                                <a class="badge badge-sm bg-red" href="<?= base_url('admin/hapusmenu/') ?><?= $m['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr class="mt-3">
            </div>
        </div>
    </div>

    <!-- Modal Menu Akses -->

    <div class="modal modal-blur fade" id="tambah-menu" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/menu'); ?>" method="POST">
                        <div class="row mb-3 align-items-end">
                            <div class="col">
                                <label class="form-label">Nama Menu</label>
                                <input type="text" name="menu" id="menu" class="form-control" />
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>