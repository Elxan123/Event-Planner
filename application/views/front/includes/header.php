
<!--establehment single ucun header-->
<?php if($page_info["name"] == "establishment_single_event_booking" || $page_info["name"] == "establishment_single" || $page_info["name"] == "provider_single_event_booking" || $page_info["name"] == "provider_single"){ ?>
    <header class="transparent scroll-hide">
        <!--Main Menu starts-->
        <div class="site-navbar-wrap v1">
            <div class="container">
                <div class="site-navbar">
                    <div class="row align-items-center">
                        <div class="col-md-2 col-6">
                            <a class="navbar-brand" href="<?php echo base_url("")?>">
                                Logo
                            </a>
                        </div>
                        <div class="col-md-10 col-6">
                            <nav class="site-navigation float-left">
                                <div class="container">
                                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                                        <li style="font-size: 14px">
                                            <a href="<?php echo base_url("")?>">Home</a>
                                        </li>

                                        <li style="font-size: 14px">
                                            <a href="<?php echo base_url("event-organize-services")?>">Service Providers</a>
                                        </li>

                                        <li style="font-size: 14px">
                                            <a href="<?php echo base_url("event-organize-establishments")?>">Establishment</a>
                                        </li>

                                        <li style="font-size: 14px">
                                            <a href="<?php echo base_url("")?>">Events</a>
                                        </li>

                                        <?php if (isset($_SESSION['user_id'])){ ?>
                                            <li class="has-children" style="font-size: 14px">
                                                <a href="#">
                                                    Hi <?php echo $_SESSION["user_name"]?>
                                                </a>
                                                <ul class="dropdown">
                                                    <li><a href="<?php echo base_url("admin/dashboard")?>">Dashboard</a></li>
                                                    <li><a href="<?php echo base_url("logout")?>">Logout</a></li>
                                                </ul>
                                            </li>

                                        <?php } ?>
                                    </ul>
                                </div>
                            </nav>
                            <div class="d-lg-none sm-right">
                                <a href="#" class="mobile-bar js-menu-toggle">
                                    <span class="ion-android-menu"></span>
                                </a>
                            </div>
                            <div class="add-list float-right">

                                <?php if (!isset($_SESSION['user_id'])){ ?>
                                    <a class="btn v3" href="<?php echo base_url("become-partner")?>">Become Partner</a>

                                    <a style="margin-left: 10px" href="<?php echo base_url("login")?>"><span><i class="icofont-login"></i></span> Login/Register</a>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!--mobile-menu starts -->
                <div class="site-mobile-menu">
                    <div class="site-mobile-menu-header">
                        <div class="site-mobile-menu-close  js-menu-toggle">
                            <span class="ion-ios-close-empty"></span>
                        </div>
                    </div>
                    <div class="site-mobile-menu-body"></div>
                </div>
                <!--mobile-menu ends-->
            </div>
        </div>
        <!--Main Menu ends-->
    </header>
<?php }else{ ?>
    <!--header starts-->
    <header class="header transparent scroll-hide">
        <!--Main Menu starts-->
        <div class="site-navbar-wrap v2">
            <div class="container">
                <div class="site-navbar">
                    <div class="row align-items-center">
                        <div class="col-md-2 col-6">
                            <a class="navbar-brand" href="<?php echo base_url("")?>">
                                Logo
                            </a>
                        </div>
                        <div class="col-md-10 col-6">
                            <nav class="site-navigation float-left">
                                <div class="container">
                                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                                        <li style="font-size: 14px">
                                            <a href="<?php echo base_url("")?>">Home</a>
                                        </li>

                                        <li style="font-size: 14px">
                                            <a href="<?php echo base_url("event-organize-services")?>">Service Providers</a>
                                        </li>

                                        <li style="font-size: 14px">
                                            <a href="<?php echo base_url("event-organize-establishments")?>">Establishment</a>
                                        </li>

                                        <li style="font-size: 14px">
                                            <a href="<?php echo base_url("")?>">Events</a>
                                        </li>

                                        <?php if (isset($_SESSION['user_id'])){ ?>
                                            <li class="has-children" style="font-size: 14px">
                                                <a href="#">
                                                    Hi <?php echo $_SESSION["user_name"]?>
                                                </a>
                                                <ul class="dropdown">
                                                    <li><a href="<?php echo base_url("admin/dashboard")?>">Dashboard</a></li>
                                                    <li><a href="<?php echo base_url("logout")?>">Logout</a></li>
                                                </ul>
                                            </li>

                                        <?php } ?>

                                    </ul>
                                </div>
                            </nav>
                            <div class="d-lg-none sm-right">
                                <a href="#" class="mobile-bar js-menu-toggle">
                                    <span class="ion-android-menu"></span>
                                </a>
                            </div>

                            <div class="add-list float-right">


                                <?php if (!isset($_SESSION['user_id'])){ ?>
                                    <a class="btn v3" href="<?php echo base_url("become-partner")?>">Become Partner</a>

                                    <a style="margin-left: 10px" href="<?php echo base_url("login")?>"><span><i class="icofont-login"></i></span> Login/Register</a>

                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>

                <!--mobile-menu starts -->
                <div class="site-mobile-menu">
                    <div class="site-mobile-menu-header">
                        <div class="site-mobile-menu-close  js-menu-toggle">
                            <span class="ion-ios-close-empty"></span>
                        </div>
                    </div>
                    <div class="site-mobile-menu-body"></div>
                </div>
                <!--mobile-menu ends-->
            </div>
        </div>
        <!--Main Menu ends-->
    </header>
    <!--Header ends-->
<?php }?>
<!--establehment single ucun header-->


