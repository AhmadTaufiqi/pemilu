<!-- Menu Bar -->
<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="vertnav navbar">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item <?= ($this->uri->segment(1) == 'relawan') && $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('relawan/dashboard') ?>">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fas fa-home"></i>
                            </span>
                            <span class="nav-link-title">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav-item <?= (($this->uri->segment(1) == 'relawan') && ($this->uri->segment(2) == '')) || ($this->uri->segment(2) == 'addRelawan') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url() ?>relawan">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fas fa-users"></i>
                            </span>
                            <span class="nav-link-title">
                                Relawan
                            </span>
                        </a>
                    </li>
                    <li class="nav-item <?= $this->uri->segment(1) == 'user' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url() ?>user">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fas fa-user"></i>
                            </span>
                            <span class="nav-link-title">
                                Inputter
                            </span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</header>