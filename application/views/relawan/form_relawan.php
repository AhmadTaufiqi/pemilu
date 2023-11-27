<!-- Konten -->
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header mt-2">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        <?= $action ?>
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

                            <form action="" method="POST">
                                <div class="row row-cards">
                                    <div class="col-md">
                                        <input type="text" name="relawan_id" id="relawan_id">
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
                                                <select class="form-select rounded-3" name="gender" id="gender" required>
                                                    <option value="">Pilih Jenis Kelamin</option>
                                                    <option value="L">Laki-Laki</option>
                                                    <option value="P">Perempuan</option>
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
                                            <label class="col-3 col-form-label required">Kecamatan</label>
                                            <div class="col">
                                                <select class="form-select rounded-3" name="kecamatan" id="select_cam" required disabled>
                                                    <option value="">Pilih Kecamatan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Kabupaten/Kota</label>
                                            <div class="col">
                                                <select class="form-select rounded-3" name="kabupaten" id="select_kab" required disabled>
                                                    <option value="">Pilih Kabupaten/Kota</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Provinsi</label>
                                            <div class="col">
                                                <select class="form-select rounded-3" name="provinsi" id="select_prov" required disabled>
                                                    <option value="">Pilih Provinsi</option>
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

                                        <a class="btn btn-secondary mt-3 float-end" href="<?= base_url('relawan'); ?>">Batal</a>
                                        <button class="btn btn-warning mt-3 me-3 float-end" type="reset">Reset</button>
                                        <button class="btn btn-primary mt-3 me-3 float-end" type="submit">Simpan</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if ($row_relawan) : ?>
        <script>
            $(function() {
                const row_relawan = JSON.parse('<?= json_encode($row_relawan) ?>')
                console.log(row_relawan)
                $('#relawan_id').val(row_relawan.id)
                $('#nik').val(row_relawan.nik)
                $('#nama').val(row_relawan.nama)
                $('#telepon').val(row_relawan.telepon)
                $('#gender').val(row_relawan.gender)
                $('#nik').val(row_relawan.nik)
                $('#rt').val(row_relawan.rt)
                $('#rw').val(row_relawan.rw)
                $('#tps').val(row_relawan.tps)
                $('#select_kel').val(row_relawan.kelurahan)
                setFormWil(row_relawan.kelurahan)
            })
        </script>
    <?php endif; ?>
    <script>
        const base_url = '<?= base_url() ?>';

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
        $('#nik').on('keyup', function() {
            const nik = $(this).val()
            $.post({
                url: base_url + "relawan/nikCheck",
                method: "post",
                data: {
                    nik
                },
                dataType: "JSON",
                success: function(data) {
                    console.log(data)
                    if (data > 0) {
                        $('#nik')[0].setCustomValidity("nik sudah tersedia!");
                    } else {
                        $('#nik')[0].setCustomValidity("");
                    }
                }
            })
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
    </script>