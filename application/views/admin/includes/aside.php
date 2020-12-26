<!--Admin's Panel-->
<aside class="menu-sidebar js-right-sidebar d-block d-lg-none">
    <div class="logo">
        <a href="#">
            <p style="font-size: 17px">Event Planner Logo</p>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar2">
        <div class="account-img">
            <img src="<?php

            if (empty($provider_profile) && !empty($estab_profile)){
                echo base_url("uploads/establishments/$estab_profile[img]");
            }elseif (!empty($provider_profile) && empty($estab_profile)){
                echo base_url("uploads/providers/$provider_profile[img]");
            }else{
                echo base_url("uploads/default.png");
            }

            ?>" alt="..." />
        </div>
        <h4 class="name">
            <?php echo $profile["name"]?> - <?php echo $profile["surname"]?>
        </h4>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <?php $this->load->view('admin/includes/asides/'.$this->session->userdata('user_type')); ?>
                <li>
                    <a href="<?php echo base_url('logout')?>">
                        <i class="ion-ios-upload-outline"></i>Logout</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>


