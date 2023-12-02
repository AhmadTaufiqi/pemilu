<!-- Konten -->
<div class="page-wrapper">
    <!-- Page body -->
    <div class="page-body">
        <div class="mx-6">
            <div class="row">
                <div class="col-md">
                    <div class="accordion" id="accordion-example">
                        <div class="accordion-item bg-white">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button py-2 " type="button" data-bs-toggle="collapse" data-bs-target="#pencarian" aria-expanded="true">
                                    <span class="text-black"> Filters</span>
                                </button>
                            </h2>

                            <div id="pencarian" class="accordion-collapse collapse show" data-bs-parent="#accordion-example">
                                <div class="accordion-body pt-0">
                                    <form action="" method="POST">
                                        <div class="row row-cards">
                                            <div class="col-md-4">
                                                <div class="mb-2">
                                                    <input type="text" name="filter_nik" class="form-control rounded-3" placeholder="Masukkan NIK">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-4">
                                                <div class="mb-2">
                                                    <input type="text" name="filter_nama" class="form-control rounded-3" placeholder="Masukkan Nama">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-4">
                                                <div class="mb-2">
                                                    <select type="text" class="form-select rounded-3" id="select_inputter" name="filter_inputter" value="">
                                                        <option value="">Masukkan Inputter</option>
                                                        <?php foreach ($qinputter as $i) : ?>
                                                            <option value="<?= $i->id ?>"><?= $i->username ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-2">
                                                    <select type="text" class="form-select rounded-3" id="select_kel" name="filter_kelurahan" value="">
                                                        <option value="1">Pilih Desa/Kelurahan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="mb-2">
                                                    <select type="text" class="form-select rounded-3" id="select_cam" name="filter_cam" value="" disabled>
                                                        <option value="1">Kecamatan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="mb-2">
                                                    <select type="text" class="form-select rounded-3" id="select_kab" name="filter_kabupaten" value="" disabled>
                                                        <option value="1">Pilih Kabupaten/Kota</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="mb-2">
                                                    <select type="text" class="form-select rounded-3" id="select_prov" name="filter_provinsi" value="" disabled>
                                                        <option value="1">Pilih Provinsi</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <input class="btn btn-primary rounded-3" name="submit_filter" value="Cari" type="submit">
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
                                <div class="col-2">
                                    <h2 class="page-title">
                                        Relawan
                                    </h2>
                                </div>
                                <div class="col text-end">
                                    <?php if ($user_role == 2) : ?>
                                        <a class="btn btn-primary rounded-3 me-2" href="<?= base_url('relawan/addRelawan'); ?>">Tambah Relawan</a>
                                    <?php endif; ?>
                                    <a href="<?= base_url('Relawan/exportExcel') ?>" class="btn btn-light btn-excel rounded-15">
                                        <i class="fas fa-file-excel" style="font-size:20px;color:#2e7943;"></i>
                                        <span class="text-success">&nbsp;&nbsp;Export Excel</span>
                                    </a>
                                </div>
                            </div>
                            <div id="table-default" class="table-responsive">
                                <table id="datatable1" class="table table-striped mb-5">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>Telepon</th>
                                            <!--<th><button class="table-sort" data-sort="sort-prov">Provinsi</button></th>-->
                                            <th>Kabupaten/Kota</th>
                                            <th>Kecamatan</th>
                                            <th>Kelurahan</th>
                                            <th>RT</th>
                                            <th>RW</th>
                                            <th>TPS</th>
                                            <th>Inputter</th>
                                            <?php if ($user_role == 2) : ?>
                                                <th width="7%"></th>
                                            <?php else: ?>
                                                <th>Created At</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">
                                        <?php foreach ($qrelawan as $r) : ?>
                                            <tr>
                                                <td><?= $r->nik ?></td>
                                                <td><?= $r->nama ?></td>
                                                <td><?= $r->gender == 'L' ? 'Laki - Laki' : 'Perempuan' ?></td>
                                                <td><?= $r->telepon ?></td>
                                                <!--<td class="sort-prov"><?= $r->provinsi ?></td>-->
                                                <td><?= $r->kabupaten ?></td>
                                                <td><?= $r->kecamatan ?></td>
                                                <td><?= $r->kelurahan ?></td>
                                                <td><?= $r->rt ?></td>
                                                <td><?= $r->rw ?></td>
                                                <td><?= $r->tps ?></td>
                                                <td><?= $r->inputter ?></td>
                                                <?php if ($user_role == 2) : ?>
                                                    <td class="text-end">
                                                        <a href="<?= base_url('relawan/editRelawan?id=') . $r->id ?>" class="px-2 divider_right"><i class="fas fa-edit"></i></a>
                                                        <a role="button" class="text-primary" data-bs-toggle="modal" data-bs-target="#detail_relawan" onclick="showDetailRelawan(<?= $r->id ?>)"><i class="fas fa-eye"></i></a>
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <?= $r->created_at ?>
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


    <!-- modal detail jukir start -->
    <div class="modal fade" id="detail_relawan" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center">
                    <h4 class="modal-title" id="verticalModalTitle">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--material-symbols mr-2" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="material-symbols:edit-document-outline" data-width="25" style="color: #0054a6;">
                            <path fill="currentColor" d="M14 22v-3.075l5.525-5.5q.225-.225.5-.325t.55-.1q.3 0 .575.113t.5.337l.925.925q.2.225.313.5t.112.55q0 .275-.1.563t-.325.512l-5.5 5.5H14Zm7.5-6.575l-.925-.925l.925.925Zm-6 5.075h.95l3.025-3.05l-.45-.475l-.475-.45l-3.05 3.025v.95ZM6 22q-.825 0-1.413-.588T4 20V4q0-.825.588-1.413T6 2h8l6 6v3h-2V9h-5V4H6v16h6v2H6Zm7-10Zm6.025 4.975l-.475-.45l.925.925l-.45-.475Z"></path>
                        </svg>
                        Detail Informasi Relawan
                    </h4>
                    <button type="button" class="btn bg-light p-1" data-bs-dismiss="modal">
                        <span class="fe fe-x" aria-hidden="true" style="font-size:21px;"></span>
                    </button>
                </div>
                <div class="modal-body pt-0">
                    <div class="row px-3 pb-4">
                        <div class="col">
                            <div class="d-flex">
                                <span class="name-title text-primary pb-1 mb-1" id="detail_nama">Nama Relawan</span>
                            </div>
                            <div class="d-flex">
                                <span class="text-muted small">Created:&nbsp;</span>
                                <span class="small" id="detail_created_at"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col divider_right">
                            <div class="row px-3 mb-3">
                                <div class="col-5">
                                    <span class="text-muted">NIK</span>
                                </div>
                                :
                                <div class="col">
                                    <span id="detail_nik"></span>
                                </div>
                            </div>
                            <div class="row px-3 mb-3">
                                <div class="col-5">
                                    <span class="text-muted">Jenis Kelamin</span>
                                </div>
                                :
                                <div class="col">
                                    <span id="detail_gender"></span>
                                </div>
                            </div>
                            <div class="row px-3 mb-3">
                                <div class="col-5">
                                    <span class="text-muted">No. Telepon</span>
                                </div>
                                :
                                <div class="col">
                                    <span id="detail_hp"></span>
                                </div>
                            </div>
                            <div class="row px-3 mb-3">
                                <div class="col-5">
                                    <span class="text-muted">Inputter</span>
                                </div>
                                :
                                <div class="col">
                                    <span id="detail_inputter"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row px-3 mb-3">
                                <div class="col-4">
                                    <span class="text-muted">Kelurahan</span>
                                </div>
                                :
                                <div class="col">
                                    <span id="detail_kelurahan"></span>
                                </div>
                            </div>
                            <div class="row px-3 mb-3">
                                <div class="col-4">
                                    <span class="text-muted">Kecamatan</span>
                                </div>
                                :
                                <div class="col">
                                    <span id="detail_cam"></span>
                                </div>
                            </div>
                            <div class="row px-3 mb-3">
                                <div class="col-4">
                                    <span class="text-muted">Kabupaten</span>
                                </div>
                                :
                                <div class="col">
                                    <span id="detail_kab"></span>
                                </div>
                            </div>
                            <div class="row px-3 mb-3">
                                <div class="col-4">
                                    <span class="text-muted">Provinsi</span>
                                </div>
                                :
                                <div class="col">
                                    <span id="detail_prov"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- modal detail jukir end -->

    <script>
        const base_url = '<?= base_url() ?>';
        $(function() {
            new TomSelect("#select_kel", {
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
            new TomSelect("#select_inputter", {
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
        })

        $.post({
            url: base_url + 'resWilayah/getKelurahan',
            method: "post",
            dataType: 'JSON',
            success: function(data) {
                // data
                $('#select_kel').html('')
                $('#select_kel').append('<option value="">Pilih Kelurahan</option>')
                $.each(data, function(index, value) {
                    $('#select_kel').append('<option value="' + value.kelurahan_id + '">' + value.kelurahan + '</option>')
                });
            }
        })

        $('#select_kel').on('change', function() {
            const kel_id = $(this).val()
            setFormWil(kel_id)
        })

        function setFormWil(kel_id) {
            $.post({
                url: base_url + 'resWilayah/getKelurahan',
                method: "post",
                data: {
                    kel_id
                },
                dataType: 'JSON',
                success: function(data) {
                    var value = data[0]
                    $('#select_prov,#select_kab,#select_cam').html('')
                    $('#select_prov').append('<option value="' + value.provinsi_id + '">' + value.provinsi + '</option>')
                    $('#select_kab').append('<option value="' + value.kabupaten_id + '">' + value.kabupaten + '</option>')
                    $('#select_cam').append('<option value="' + value.kecamatan_id + '">' + value.kecamatan + '</option>')

                }
            })
        }

        function showDetailRelawan(id) {
            console.log(id)
            $.post({
                url: base_url + 'relawan/detail',
                data: {
                    id
                },
                dataType: "JSON",
                success: function(data) {
                    value = data
                    console.log(data)
                    $('#detail_nama').html(value.nama)
                    $('#detail_created_at').html(value.created_at)
                    $('#detail_nik').html(value.created_at)
                    $('#detail_gender').html(value.gender)
                    $('#detail_hp').html(value.telepon)
                    $('#detail_inputter').html(value.inputter)
                    $('#detail_kelurahan').html(value.kelurahan)
                    $('#detail_cam').html(value.kecamatan)
                    $('#detail_kab').html(value.kabupaten)
                    $('#detail_prov').html(value.provinsi)
                }
            })
        }
    </script>