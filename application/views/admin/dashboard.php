<!-- Dashboard Statistics starts-->
<div class="statistic-wrap">
    <div class="container-fluid">


        <div class="row">
            <?php foreach ($dashes as $key => $value) { ?>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="statistic__item item--orange">
                    <h2 class="counter-value"><?php echo $value ?></h2>
                    <span class="desc"><?php echo $key ?></span>
                    <div class="icon">
                        <img src="<?php echo base_url("assets")?>/images/dashboard/review.png" alt="...">
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <div class="recent-activity">
            <div class="act-title">
                <h5><i class="ion-person"></i>Profile Details</h5>
            </div>
            <div class="profile-wrap">
                <div class="row">
                    <div class="col-md-8 offset-md-2 py-4">
                        <div class="edit-profile-photo text-center" style="margin-bottom: 0!important">
                            <img src="<?php

                            if (empty($provider_profile) && !empty($estab_profile)){
                                echo base_url("uploads/establishments/$estab_profile[img]");
                            }elseif (!empty($provider_profile) && empty($estab_profile)){
                                echo base_url("uploads/providers/$provider_profile[img]");
                            }else{
                                echo base_url("uploads/default.png");
                            }

                            ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="my-profile">
                            <ul class="db-profile-info">
                                <li>
                                    <h6>First Name :</h6>
                                    <span>
                                        <?php echo $profile["name"]?>
                                    </span>
                                </li>
                                <li>
                                    <h6>Last Name :</h6>
                                    <span> <?php echo $profile["surname"]?></span>
                                </li>
                                <li>
                                    <h6>Email Id :</h6>
                                    <span> <?php echo $profile["email"]?></span>
                                </li>
                                <li>
                                    <h6>Phone :</h6>
                                    <span> <?php echo $profile["mobile"]?></span>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- Dashboard Statistics ends-->
