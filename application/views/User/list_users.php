<!-- Konten -->
<div class="page-wrapper">
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
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
                                            <input type="text" class="form-control rounded-3" placeholder="Masukkan Nama" name="nama">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control rounded-3" placeholder="Masukkan Username" name="username">
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary rounded-3 me-2" name="cari_submit" value="Cari">
                                <button class="btn btn-secondary rounded-3" type="reset">Reset</button>
                                <!-- <button class="btn btn-primary rounded-3 mt-3" type="submit">Cari</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row mt-4">
                <div class="col-md">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="col">
                                    <h2 class="page-title">
                                        Inputter
                                    </h2>
                                </div>
                            </div>
                            <div id="table-default" class="table-responsive">
                                <table class="table table-striped mb-5" id="datatable1">
                                    <thead>
                                        <tr>
                                            <th width="50%"><button class="table-sort" data-sort="sort-nama">Nama</button></th>
                                            <th><button class="table-sort" data-sort="sort-username">Username</button></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">
                                        <?php foreach ($user as $u) : ?>
                                            <tr>
                                                <td class="sort-nama"><?= $u->nama ?></td>
                                                <td class="sort-username"><?= $u->username ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>