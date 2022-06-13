<?php
$this->db->where('username', $this->session->userdata('username'));
$user = $this->db->get('user')->row();
?>
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="<?= base_url() ?>assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
        <img src="<?= base_url() ?>assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

        <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0"><?= $user->nama ?></h6>
            <span class="pro-user-desc">Administrator</span>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
            <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">
                <!-- <a href="pages-profile.html" class="dropdown-item notify-item">
                    <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                    <span>My Account</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                    <span>Settings</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="help-circle" class="icon-dual icon-xs mr-2"></i>
                    <span>Support</span>
                </a>

                <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                    <i data-feather="lock" class="icon-dual icon-xs mr-2"></i>
                    <span>Lock Screen</span>
                </a> 

                <div class="dropdown-divider"></div> -->

                <a href="<?= base_url('Auth/Logout') ?>" class="dropdown-item notify-item">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <?php
                // Title 
                $this->db->where('isActive', '1');
                $titleMenu = $this->db->get('menu_title')->result();
                foreach ($titleMenu as $row) :
                    echo '<li class="menu-title">' . $row->title . '</li>';
                    $idUs = $this->session->userdata('idUser');
                    $sql = "SELECT * FROM `menu_main` WHERE idMenu in(SELECT idMenu FROM menu_rule WHERE idUser='$idUs') AND `idTitle` = '$row->idTitle' AND `isMainMenu` = '0'";
                    $menu = $this->db->query($sql)->result();
                    foreach ($menu as $menu) :
                        $sql = "SELECT * FROM `menu_main` WHERE idMenu in(SELECT idMenu FROM menu_rule WHERE idUser='$idUs') AND `isMainMenu` = '$menu->idMenu'";
                        $subMenu = $this->db->query($sql);
                        if ($subMenu->num_rows() > 0) : ?>
                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="<?= $menu->icon ?>"></i>
                                    <span> <?= $menu->label ?> </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <?php foreach ($subMenu->result() as $sub) : ?>
                                        <?php
                                        $sql = "SELECT * FROM `menu_main`  WHERE idMenu in(SELECT idMenu FROM menu_rule WHERE idUser='$idUs') AND `isSubMenu` = '$sub->idMenu'";
                                        $sub2Menu = $this->db->query($sql);
                                        if ($sub2Menu->num_rows() > 0) :
                                        ?>
                                            <li>
                                                <!-- <a href="javascript: void(0);">
                                                    <span> Reviewer </span>
                                                    <span class="menu-arrow"></span>
                                                </a> -->
                                                <ul class="nav-second-level" aria-expanded="false">
                                                    <?php foreach ($sub2Menu->result() as $sub2) : ?>
                                                        <li>
                                                            <a href="<?= base_url($sub2->link) ?>"><?= $sub2->label ?> </a>
                                                        </li>
                                                    <?php endforeach ?>
                                                </ul>
                                            </li>
                                        <?php else : ?>
                                            <li>
                                                <a href="<?= base_url($sub->link) ?>"><?= $sub->label ?> </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="<?= base_url($menu->link) ?>">
                                    <i data-feather="<?= $menu->icon ?>"></i>
                                    <span> <?= $menu->label ?> </span>
                                </a>
                            </li>
                        <?php endif; ?>
                <?php endforeach;
                endforeach;
                ?>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->