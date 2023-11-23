<!-- Konten -->
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Edit Menu
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
                <div class="col-md">
                    <div class="card">
                        <div class="card-status-top bg-primary"></div>
                        <div class="card-header">Edit Menu Akses</div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= $submenu['id']; ?>">
                                <div class="row mb-3 align-items-end">
                                    <div class="col">
                                        <label class="form-label">Nama Menu</label>
                                        <input type="text" name="menu-nav" id="menu-nav" class="form-control" value="<?= $submenu['title']; ?>" />
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-end">
                                    <label class="form-label">Role</label>
                                    <div class="col">
                                        <select class="form-select" name="menu_id">
                                            <option value="Pilih"> -- Pilih Role Akses -- </option>
                                            <?php foreach ($submenu as $m) : ?>
                                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                            <?php endforeach; ?>

                                        </select>
                                    </div>
                                </div>


                                <div class="row mb-3 align-items-end">
                                    <div class="col">
                                        <label class="form-label">Link URL</label>
                                        <input type="text" name="url" id="url" class="form-control" value="<?= $submenu['url']; ?> />
                                    </div>
                                </div>

                                <div class=" row mb-3 align-items-end">
                                        <div class="col">
                                            <label class="form-label">Icon</label>
                                            <input type="text" name="icon" id="icon" class="form-control" value="<?= $submenu['icon']; ?> />
                                    </div>
                                </div>
                                <div class=" mb-2">
                                            <label class="form-check">
                                                <input type="checkbox" name="is_active" id="is_active" value="1" class="form-check-input" checked />
                                                <span class="form-check-label">Active</span>
                                            </label>
                                        </div>

                                    </div>
                                    <div>
                                        <button type="button" class="btn me-auto">batal</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>