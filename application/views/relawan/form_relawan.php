<!-- Konten -->
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header mt-2">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Tambah Data Relawan
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body mt-2">
        <div class="container-xl">
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <div class="card-status-top bg-primary"></div>
                        <div class="card-body">

                            <form action="<?= base_url() ?>relawan/addrelawan" method="POST">
                                <div class="row row-cards">
                                    <div class="col-md">
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">NIK</label>
                                            <div class="col">
                                                <input type="text" name="nik" id="nik" class="form-control rounded-3" placeholder="Masukkan NIK" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Nama</label>
                                            <div class="col">
                                                <input type="text" name="nama" id="nama" class="form-control rounded-3" placeholder="Masukkan Nama" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Handphone</label>
                                            <div class="col">
                                                <input type="text" name="telepon" id="telepon" class="form-control rounded-3" placeholder="Masukkan No Handphone" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Jenis Kelamin</label>
                                            <div class="col">
                                                <select class="form-select rounded-3" name="gender" required>
                                                    <option value="">Pilih Jenis Kelamin</option>
                                                    <option value="L">Laki-Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Provinsi</label>
                                            <div class="col">
                                                <select class="form-select rounded-3" name="provinsi" id="select_prov" required>
                                                    <option value="">Pilih Provinsi</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Kabupaten/Kota</label>
                                            <div class="col">
                                                <select class="form-select rounded-3" name="kabupaten" id="select_kab" required>
                                                    <option value="">Pilih Kabupaten/Kota</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Kecamatan</label>
                                            <div class="col">
                                                <select class="form-select rounded-3" name="kecamatan" id="select_cam" required>
                                                    <option value="">Pilih Kecamatan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Desa/Kelurahan</label>
                                            <div class="col">
                                                <select class="form-select rounded-3" name="desa" id="select_kel" required>
                                                    <option value="">Pilih Kelurahan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">RT</label>
                                            <div class="col">
                                                <input type="text" name="rt" id="rt" class="form-control rounded-3" placeholder="Masukkan Nomor RT" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">RW</label>
                                            <div class="col">
                                                <input type="text" name="rw" id="rw" class="form-control rounded-3" placeholder="Masukkan Nomor RW" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">TPS</label>
                                            <div class="col">
                                                <input type="text" name="tps" id="tps" class="form-control rounded-3" placeholder="Masukkan Nomor TPS" required>
                                            </div>
                                        </div>

                                        <a class="btn btn-secondary mt-3 float-end" href="<?= base_url('user/relawan'); ?>">Batal</a>
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