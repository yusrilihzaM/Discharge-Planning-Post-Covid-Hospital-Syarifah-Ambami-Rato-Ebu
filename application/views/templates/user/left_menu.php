<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">RSUD Bangkalan</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RSUD</a>
        </div>

        <?php
            $season_user=$this->session->userdata('id_user');
            $season_patient=$this->session->userdata('id_patient');

            if($season_user){
                $role_id=$this->session->userdata('role_id');
            }
            else
            if($season_patient){
                $role_id=$this->session->userdata('role_id');
            }

            $menu=$this->db->query("SELECT * FROM user_menu NATURAL JOIN user_access_menu WHERE id_role=$role_id ORDER BY id_user_menu ASC")->result_array();
        ?>
        <ul class="sidebar-menu">
            <?php foreach ($menu as $m) : ?>
            <li class="menu-header"><?=$m['menu']?></li>

            <?php
            $menuId = $m['id_user_menu'];
            $querySubMenu = "SELECT * 
                                FROM `user_sub_menu` 
                                WHERE `id_user_menu` = $menuId
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
                <a href="<?= base_url($sm['url']); ?>" class="nav-link "><i class="<?= $sm['icon']; ?>"></i><span><?= $sm['title']; ?></span></a>

            </li>
            <?php endforeach; ?>
            <?php endforeach; ?>
            <!-- <li class="menu-header">Pengaturan</li>
            <li class="nav-item ">
                <a href="#" class="nav-link "><i class="far fa-user"></i><span>Profil</span></a>

            </li> -->
        </ul>


    </aside>
</div>