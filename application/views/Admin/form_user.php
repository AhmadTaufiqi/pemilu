<!-- Konten -->
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header mt-2">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        <?= $action ?> User
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

                            <form action="<?= base_url($form) ?>" method="POST">
                                <div class="row row-cards">
                                    <input type="hidden" name="user_id" id="user_id" value="">
                                    <div class="col-md">
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Nama Lengkap</label>
                                            <div class="col">
                                                <input type="text" name="nama" id="nama" class="form-control rounded-3" placeholder="Masukkan Nama">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label required">Username</label>
                                            <div class="col">
                                                <input type="text" name="username" id="username" class="form-control rounded-3" placeholder="Masukkan Username">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label <?= $action == 'Edit' ? '' : 'required' ?>">Password</label>
                                            <div class="col">
                                                <input type="password" name="password" id="password" class="form-control rounded-3" placeholder="Masukkan Password" pattern="(?=.*\d)(?=.*[a-z]).{5,}" title="Must contain at least one number and letter, and at least 8 or more characters" <?= $action == 'Edit' ? '' : 'required' ?>>
                                                <small class="form-hint">Password harus berisi minimal 5 karakter</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label <?= $action == 'Edit' ? '' : 'required' ?>">Konfirmasi Password</label>
                                            <div class="col">
                                                <input type="password" name="password1" id="confirm_password" class="form-control rounded-3" placeholder="Masukkan Konfirmasi Password">
                                            </div>
                                        </div>

                                        <a class="btn btn-secondary mt-3 float-end" href="<?= base_url() ?>user">Batal</a>
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
    <?php if (isset($user)) : ?>
        <script>
            var row_user = <?= json_encode($user) ?>;
            console.log(row_user)
            $('#user_id').val(row_user.id)
            $('#nama').val(row_user.nama)
            $('#username').val(row_user.username)
            $('#password').val('')
        </script>
    <?php endif; ?>

    <script>
        var base_url = '<?= base_url() ?>'
        var id = '<?= $this->input->get('user_id') ?>';
        var username = $('#username')
        username.on('keyup', function() {
            $.ajax({
                url: base_url + 'user/checkusername',
                method: "POST",
                data: {
                    id: id,
                    username: username.val()
                },
                success: function(data) {
                    console.log(data)
                    if (data == 1) {
                        username[0].setCustomValidity('username sudah tersedia!');
                    } else {
                        username[0].setCustomValidity('');
                        console.log('aman');
                    }
                }
            })
        })
    </script>
    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            console.log('tes')
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("password tidak cocok!");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>