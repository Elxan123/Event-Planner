<!--Admin's Panel-->
<aside class="menu-sidebar js-right-sidebar d-block d-lg-none">
    <div class="logo">
        <a href="#">
            <img src="<?php echo base_url("assets")?>/images/logo-black.png" alt="Listagram" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar2">
        <div class="account-img">
            <img src="<?php echo base_url("assets")?>/images/clients/reviewer-4.png" alt="Steve Austin" />
        </div>
        <h4 class="name">Howdy, Steve!</h4>
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


