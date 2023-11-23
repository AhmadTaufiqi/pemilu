<!-- Konten -->
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Management Menu Navbar
                    </h2>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <?= form_error('menu-nav', '<small class="text-danger pl-3">', '</small>'); ?>
                <?= form_error('menu_id', '<small class="text-danger pl-3">', '</small>'); ?>
                <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>

            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <!-- Navbar Menu -->
                <div class="col-md">
                    <div class="card">
                        <div class="card-status-top bg-primary"></div>
                        <div class="card-header">Menu Navbar</div>
                        <div class="card-body">
                            <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah-menu-nav" href="#">Tambah Menu</a>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Link URL</th>
                                        <th scope="col">Ikon</th>
                                        <th scope="col">Active</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($submenu as $sm) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $sm['title']; ?></td>
                                            <td><?= $sm['menu']; ?></td>
                                            <td><?= $sm['url']; ?></td>
                                            <td><?= $sm['icon']; ?></td>
                                            <td><?= $sm['is_active']; ?></td>
                                            <td>
                                                <a class="badge badge-sm bg-green" href="<?= base_url('admin/updatenavbarmenu/') ?><?= $sm['id']; ?>">Edit</a>
                                                <a class="badge badge-ssm bg-red" href="<?= base_url('admin/hapusmenunavbar/') ?><?= $sm['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Menu Navbar -->

    <div class="modal modal-blur fade" id="tambah-menu-nav" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/navbarmenu'); ?>" method="POST">
                        <div class="row mb-3 align-items-end">
                            <div class="col">
                                <label class="form-label">Nama Menu</label>
                                <input type="text" name="menu-nav" id="menu-nav" class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-3 align-items-end">
                            <label class="form-label">Role</label>
                            <div class="col">
                                <select class="form-select" name="menu_id">
                                    <option value="Pilih"> -- Pilih Role Akses -- </option>
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>


                        <div class="row mb-3 align-items-end">
                            <div class="col">
                                <label class="form-label">Link URL</label>
                                <input type="text" name="url" id="url" class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-3 align-items-end">
                            <div class="col">
                                <label class="form-label">Icon</label>
                                <input type="text" name="icon" id="icon" class="form-control" />
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-check">
                                <input type="checkbox" name="is_active" id="is_active" value="1" class="form-check-input" checked />
                                <span class="form-check-label">Active</span>
                            </label>
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