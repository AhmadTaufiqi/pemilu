 <!-- Navbar -->
 <header class="navbar navbar-expand-md d-print-none">
     <div class="container-xl">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
             <a href=".">
                 <img src="<?= base_url('assets/'); ?>dist/img/logo-brand-3.png" width="110" height="32" alt="" class="navbar-brand-image">
             </a>
         </h1>
         <div class="navbar-nav flex-row order-md-last">
             <div class="nav-item dropdown">
                 <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                     <span class="avatar avatar-sm">
                         <i class="form-icon fe fe-settings fe-16"></i>
                     </span>
                     <div class="d-none d-xl-block ps-2">
                         <div><?= $this->session->userdata('username') ?></div>
                         <?php if ($this->session->userdata('role_id') == 2) : ?>
                             <div class="mt-1 small text-secondary">User</div>
                         <?php else : ?>
                             <div class="mt-1 small text-secondary">Administrator</div>
                         <?php endif; ?>
                     </div>
                 </a>
                 <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <!--<span class="d-flex align-items-center px-2 border-bottom">-->
                     <!--    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">-->
                     <!--        <path stroke="none" d="M0 0h24v24H0z" fill="none" />-->
                     <!--        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />-->
                     <!--        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />-->
                     <!--        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />-->
                     <!--    </svg>-->
                     <!--    <a href="#" class="dropdown-item">Profile</a>-->
                     <!--</span>-->
                     <!-- <div class="dropdown-divider"></div> -->
                     <span class="d-flex align-items-center px-2">
                         <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                             <path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                             <path d="M15 12h-12l3 -3" />
                             <path d="M6 15l-3 -3" />
                         </svg>
                         <a href="<?= base_url('login/logout'); ?>" class="dropdown-item">Logout</a>
                     </span>
                 </div>
             </div>
         </div>
     </div>
 </header>