<!-- Konten -->
<div class="page-wrapper">
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-md">
                    <div class="accordion" id="accordion-example">
                        <div class="accordion-item bg-white">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button py-2 " type="button" data-bs-toggle="collapse" data-bs-target="#pencarian" aria-expanded="true">
                                    <span class="text-black"> Filters</span>
                                </button>
                            </h2>
                            <?= $this->session->flashdata('msg') ?>

                            <div id="pencarian" class="accordion-collapse collapse show" data-bs-parent="#accordion-example">
                                <div class="accordion-body pt-0">
                                    <form action="" method="POST">
                                        <div class="row row-cards">
                                            <div class="col-md-4">
                                                <div class="mb-2">
                                                    <input type="text" class="form-control rounded-3" placeholder="Masukkan NIK">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-4">
                                                <div class="mb-2">
                                                    <input type="text" name="filter_nama" class="form-control rounded-3" placeholder="Masukkan Nama">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-4">
                                                <div class="mb-2">
                                                    <select type="text" class="form-select rounded-3" id="select_inputter" value="">
                                                        <option value="1">Masukkan Inputter</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="mb-2">
                                                    <select type="text" class="form-select rounded-3" id="select_prov" name="filter_provinsi" value="">
                                                        <option value="1">Pilih Provinsi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="mb-2">
                                                    <select type="text" class="form-select rounded-3" id="select_kab" name="filter_kabupaten" value="">
                                                        <option value="1">Pilih Kabupaten</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="mb-2">
                                                    <select type="text" class="form-select rounded-3" id="select_cam" name="filter_cam" value="">
                                                        <option value="1">Pilih Kecamatan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-2">
                                                    <select type="text" class="form-select rounded-3" id="select_kel" name="filter_kelurahan" value="">
                                                        <option value="1">Pilih Desa/Kelurahan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary rounded-3" type="submit">Cari</button>
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
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h2 class="page-title">
                                        Relawan
                                    </h2>
                                </div>
                                <div class="col text-end">
                                    <?php if ($user_role == 2) : ?>
                                        <a class="btn btn-primary rounded-3" href="<?= base_url('relawan/addRelawan'); ?>">Tambah Relawan</a>
                                    <?php endif; ?>
                                    <a href="<?= base_url('Relawan/exportExcel')?>" class="btn btn-light btn-excel rounded-15">
                                        <i class="fas fa-file-excel" style="font-size:20px;color:#2e7943;"></i>
                                        <span class="text-success">&nbsp;&nbsp;Export Excel</span>
                                    </a>
                                </div>
                            </div>
                            <div id="table-default" class="table-responsive">
                                <table id="datatable1" class="table table-striped mb-5">
                                    <thead>
                                        <tr>
                                            <th><button class="table-sort" data-sort="sort-nik">NIK</button></th>
                                            <th><button class="table-sort" data-sort="sort-city">Nama</button></th>
                                            <th><button class="table-sort" data-sort="sort-gender">Gender</button></th>
                                            <th><button class="table-sort" data-sort="sort-telp">Telepon</button></th>
                                            <th><button class="table-sort" data-sort="sort-prov">Provinsi</button></th>
                                            <th><button class="table-sort" data-sort="sort-kab">Kabupaten</button></th>
                                            <th><button class="table-sort" data-sort="sort-tps">TPS</button></th>
                                            <th><button class="table-sort" data-sort="sort-inputter">Inputter</button></th>
                                            <?php if ($user_role == 2) : ?>
                                                <th></th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">
                                        <?php foreach ($qrelawan as $r) : ?>
                                            <tr>
                                                <td class="sort-nik"><?= $r->nik ?></td>
                                                <td class="sort-name"><?= $r->nama ?></td>
                                                <td class="sort-gender"><?= $r->gender == 'L' ? 'Laki - Laki' : 'Perempuan' ?></td>
                                                <td class="sort-telp"><?= $r->telepon ?></td>
                                                <td class="sort-prov"><?= $r->provinsi ?></td>
                                                <td class="sort-kab"><?= $r->kabupaten ?></td>
                                                <td class="sort-tps"><?= $r->tps ?></td>
                                                <td class="sort-inputter"><?= $r->inputter ?></td>
                                                <?php if ($user_role == 2) : ?>
                                                    <td>
                                                        <a href="<?= base_url('relawan/editRelawan?id=') . $r->id ?>"><i class="fas fa-edit"></i>&nbsp;Edit</a>
                                                    </td>
                                                <?php endif; ?>
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
    <script>
        const base_url = '<?= base_url() ?>';
        $.post({
            url: base_url + 'resWilayah/getProv',
            method: "post",
            dataType: 'JSON',
            success: function(data) {
                // data
                console.log(data)
                $.each(data, function(index, value) {
                    $('#select_prov').append(new Option(value.name, value.id))
                });
            }
        })


        $('#select_prov').on('change', function() {
            var prov_id = $(this).val();
            console.log(prov_id)
            $.post({
                url: base_url + 'resWilayah/getKab',
                method: "post",
                data: {
                    prov_id
                },
                dataType: 'JSON',
                success: function(data) {
                    // data
                    $('#select_kab').html('')
                    $('#select_kab').append('<option value="">Pilih Kabupaten/Kota</option>')
                    $.each(data, function(index, value) {
                        $('#select_kab').append('<option value="' + value.id + '">' + value.name + '</option>')
                    });
                }
            })
        })

        $('#select_kab').on('change', function() {
            var kab_id = $(this).val();
            console.log(kab_id)
            $.post({
                url: base_url + 'resWilayah/getCam',
                method: "post",
                data: {
                    kab_id
                },
                dataType: 'JSON',
                success: function(data) {
                    // data
                    $('#select_cam').html('')
                    $('#select_cam').append('<option value="">Pilih Kecamatan</option>')
                    $.each(data, function(index, value) {
                        $('#select_cam').append('<option value="' + value.id + '">' + value.name + '</option>')
                    });
                }
            })
        })

        $('#select_cam').on('change', function() {
            var cam_id = $(this).val();
            console.log(cam_id)
            $.post({
                url: base_url + 'resWilayah/getKelurahan',
                method: "post",
                data: {
                    cam_id
                },
                dataType: 'JSON',
                success: function(data) {
                    // data
                    $('#select_kel').html('')
                    $('#select_kel').append('<option value="">Pilih Kecamatan</option>')
                    $.each(data, function(index, value) {
                        $('#select_kel').append('<option value="' + value.id + '">' + value.name + '</option>')
                    });
                }
            })
        })
    </script>