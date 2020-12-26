<!-- Top header starts-->
<header class="db-top-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-9 col-sm-6 col-4" style="padding-top: 71px;">



            </div>
            <div class="col-md-3 col-sm-6 col-8">
                <div class="header-button">
                    <div class="header-button-item js-sidebar-btn">
                        <img src="<?php

                        if (empty($provider_profile) && !empty($estab_profile)){
                            echo base_url("uploads/establishments/$estab_profile[img]");
                        }elseif (!empty($provider_profile) && empty($estab_profile)){
                            echo base_url("uploads/providers/$provider_profile[img]");
                        }else{
                            echo base_url("uploads/default.png");
                        }

                        ?>" alt="...">
                        <span><?php echo $profile["name"]?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Top header ends-->
