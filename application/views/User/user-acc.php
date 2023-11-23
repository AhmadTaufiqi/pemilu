<!-- Konten -->
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        User
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <?php if ($user['role_id'] == 1) : ?>
                <a class="btn btn-primary mb-3" href="<?= base_url('admin/adduser'); ?>">Tambah User</a>
            <?php else : ?>
                <!-- <a class="btn btn-primary disabled mb-3" href="">Tambah User</a> -->
            <?php endif; ?>
            <div class="row row-deck row-cards">

                <div class="col-md">
                    <div class="card">
                        <div class="card-status-top bg-primary"></div>
                        <div class="card-header">
                            <span style="font-size: 18px;">Filters</span>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row row-cards">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Username">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-3" type="submit">Cari</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row mt-4">
                <div class="col-md">
                    <div class="card">
                        <div class="card-status-top bg-primary">
                            <div class="card-body">
                                <div id="table-default" class="table-responsive">
                                    <table class="table mb-5">
                                        <thead>
                                            <tr>
                                                <th><button class="table-sort" data-sort="sort-name">Username</button></th>
                                                <th><button class="table-sort" data-sort="sort-city">Name</button></th>
                                                <th><button class="table-sort" data-sort="sort-type">Jumlah</button></th>

                                            </tr>
                                        </thead>
                                        <tbody class="table-body">
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
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