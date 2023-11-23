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
                                <input type="hidden" name="id" value="<?= $menu['id']; ?>">
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">Nama Menu</label>
                                    <div class="col">
                                        <input type="text" name="menu" id="menu" class="form-control" value="<?= $menu['menu']; ?>">
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-3 me-2" type="submit">Update</button>
                                <a href="<?= base_url('admin/menu'); ?>" class="btn btn-secondary mt-3" type="submit">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>