<!-- Konten -->
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Relawan
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <a class="btn btn-primary mb-3" href="<?= base_url('user/addrelawan'); ?>">Tambah Relawan</a>
            <a style="margin-left: 10px;" class="btn btn-secondary mb-3" href="http://">Download</a>
            <div class="row">
                <div class="col-md">
                    <div class="accordion" id="accordion-example">
                        <div class="accordion-item bg-white">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#pencarian" aria-expanded="true">
                                    <span class="text-black"> Filters</span>
                                </button>
                            </h2>
                            <div id="pencarian" class="accordion-collapse collapse show" data-bs-parent="#accordion-example">
                                <div class="accordion-body pt-0">
                                    <form action="" method="POST">
                                        <div class="row row-cards">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" placeholder="Masukkan NIK">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-4">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" placeholder="Masukkan Nama">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-4">
                                                <div class="mb-3">
                                                    <select type="text" class="form-select" id="select-users4" value="">
                                                        <option value="1">Masukkan Inputter</option>
                                                        <option value="1">Chuck Tesla</option>
                                                        <option value="2">Elon Musk</option>
                                                        <option value="3">Paweł Kuna</option>
                                                        <option value="4">Nikola Tesla</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row row-cards">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <select type="text" class="form-select" id="select-users" value="">
                                                        <option value="1">Pilih Desa/Kelurahan</option>
                                                        <option value="1">Chuck Tesla</option>
                                                        <option value="2">Elon Musk</option>
                                                        <option value="3">Paweł Kuna</option>
                                                        <option value="4">Nikola Tesla</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-4">
                                                <div class="mb-3">
                                                    <div class="mb-3">
                                                        <select type="text" class="form-select" id="select-users2" value="">
                                                            <option value="1">Pilih Kecamatan</option>
                                                            <option value="1">Chuck Tesla</option>
                                                            <option value="2">Elon Musk</option>
                                                            <option value="3">Paweł Kuna</option>
                                                            <option value="4">Nikola Tesla</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-4">
                                                <div class="mb-3">
                                                    <div class="mb-3">
                                                        <select type="text" class="form-select" id="select-users3" value="">
                                                            <option value="1">Pilih Kabupaten</option>
                                                            <option value="1">Chuck Tesla</option>
                                                            <option value="2">Elon Musk</option>
                                                            <option value="3">Paweł Kuna</option>
                                                            <option value="4">Nikola Tesla</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row row-cards">
                                            <div class="col-sm-6 col-md-4">
                                                <div class="mb-3">
                                                    <select type="text" class="form-select" id="select-users5" value="">
                                                        <option value="1">Pilih Provinsi</option>
                                                        <option value="1">Chuck Tesla</option>
                                                        <option value="2">Elon Musk</option>
                                                        <option value="3">Paweł Kuna</option>
                                                        <option value="4">Nikola Tesla</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Cari</button>
                                    </form>
                                </div>
                            </div>
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
                                    <table id="example" class="table table-striped table-bordered mb-5">
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