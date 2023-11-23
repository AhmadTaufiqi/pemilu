<!-- Menu Bar -->
<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <!-- Query Menu -->
                    <?php
                    $role_id = $this->session->userdata('role_id');
                    $queryMenu = "SELECT   `user_menu`.`id` , `menu`
                                  FROM     `user_menu` JOIN `user_access_menu`
                                  ON       `user_menu`.`id` = `user_access_menu`.`menu_id`
                                  WHERE    `user_access_menu`.`role_id` = $role_id
                                  ORDER BY `user_access_menu`.`menu_id` DESC
                        ";
                    $menu = $this->db->query($queryMenu)->result_array();
                    ?>

                    <!-- Looping Menu -->
                    <?php foreach ($menu as $m) : ?>

                        <?php
                        $menu_id = $m['id'];
                        $querySubMenu = " SELECT * FROM `user_sub_menu`
                                          WHERE `menu_id` = $menu_id
                                          AND `is_active` = 1
                                     ";
                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>

                        <?php foreach ($subMenu as $sm) : ?>
                            <?php if ($title == $sm['title']) : ?>
                                <li class="nav-item active">
                                <?php else : ?>
                                <li class="nav-item">
                                <?php endif; ?>
                                <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="<?= $sm['icon']; ?>"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        <?= $sm['title']; ?>
                                    </span>
                                </a>
                                </li>

                            <?php endforeach; ?>
                        <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </div>
</header>