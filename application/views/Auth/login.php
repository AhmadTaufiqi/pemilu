<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Relawan - Login</title>
    <!-- CSS files -->
    <link href="<?= base_url('assets/'); ?>dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>dist/css/demo.min.css" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="<?= base_url('assets/'); ?>dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <!-- <img src="<?= base_url('assets/'); ?>static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                    <h1>Relawan Dapil</h1>
                </a>
            </div>
            <?= $this->session->flashdata('message'); ?>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Silahkan Login</h2>
                    <form action="<?= base_url('auth'); ?>" method="POST" autocomplete="off" novalidate>

                        <?php if (form_error('username')) : ?>
                            <div class="mb-3">
                                <label class="form-label">
                                    Username
                                </label>
                                <div class="input-group input-group-flat">
                                    <input type="text" name="username" id="username" class="form-control is-invalid" autocomplete="off" value="<?= set_value('username'); ?>">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                                            <path d="M15 19l2 2l4 -4" />
                                        </svg>
                                    </span>
                                </div>
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        <?php else : ?>
                            <div class="mb-3">
                                <label class="form-label">
                                    Username
                                </label>
                                <div class="input-group input-group-flat">
                                    <input type="text" name="username" id="username" class="form-control" autocomplete="off" value="<?= set_value('username'); ?>">
                                    <span class="input-group-text">
                                        <svg xmlns=" http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                                            <path d="M15 19l2 2l4 -4" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if (form_error('password')) : ?>
                            <div class="mb-4">
                                <label class="form-label">
                                    Password
                                </label>
                                <div class="input-group input-group-flat">
                                    <input type="password" name="password" id="password" class="form-control is-invalid" autocomplete="off">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                        </svg>
                                    </span>
                                </div>
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        <?php else : ?>
                            <div class="mb-4">
                                <label class="form-label">
                                    Password
                                </label>
                                <div class="input-group input-group-flat">
                                    <input type="password" name="password" id="password" class="form-control" autocomplete="off">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="mb-2">
                            <label class="form-check">
                                <input type="checkbox" name="remember" class="form-check-input" checked />
                                <span class="form-check-label">Remember me</span>
                            </label>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center text-secondary mt-3">
                Belum punya akun? <a href="<?= base_url('auth/register'); ?>" tabindex="-1">Daftar</a>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="<?= base_url('assets/'); ?>dist/js/tabler.min.js?1692870487" defer></script>
    <script src="<?= base_url('assets/'); ?>dist/js/demo.min.js?1692870487" defer></script>
</body>

</html>