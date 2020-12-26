<!--Listing Details Hero starts-->
<div class="listing-details-wrapper bg-h" style="background-image: url(<?php echo base_url("uploads/providers/$provider[img]")?>)">
    <div class="overlay op-3"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-details-title v1">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-12">
                            <div class="single-listing-title float-left">
                                <p><a href="#" class="btn v6">Event Provider</a></p>
                                <h2>

                                    <?php echo $user["name"]?> <?php echo $user["surname"]?>

                                    <i class="icofont-tick-boxed"></i>

                                </h2>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-12">
                            <div class="list-details-btn text-right sm-left">
                                <div class="save-btn">
                                    <a href="<?php echo base_url("provider-single-register/$provider_id")?>" class="btn v3 white"><i class="ion-ios-briefcase"></i>
                                        Event Organize
                                    </a>
                                </div>

                                <div class="share-btn">
                                    <a href="#" class="btn v3 white"><i class="ion-android-share-alt"></i> Share</a>
                                    <ul class="social-share">
                                        <li class="bg-fb"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li class="bg-tt"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li class="bg-ig"><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Listing Details Hero ends-->


<!--Listing Details Info starts-->
<div class="list-details-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div id="list-menu" class="list_menu">
                    <ul class="list-details-tab fixed_nav">
                        <li class="nav-item active"><a href="#overview" class="active">Overview</a></li>
                        <li class="nav-item"><a href="#gallery">Gallery</a></li>
                        <li class="nav-item"><a href="#events">Events</a></li>
                    </ul>
                </div>
                <!--Listing Details starts-->
                <div class="list-details-wrap">

                    <div id="overview" class="list-details-section">
                        <h4>Overview</h4>
                        <div class="overview-content">
                            <?php echo $provider["about_en"]?>
                        </div>


                        <div id="price" class="list-details-section mar-top-80">
                            <h4>Services</h4>
                            <div class="room-type-wrapper">


                                <?php foreach ($services as $item) { ?>
                                    <div class="room-type-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="feature-left float-left">
                                                <h3 style="color: #1CBBB4;"><?php echo $item["name_en"]?></h3>
                                                <small ><span> <?php echo $item["desc_en"]?></span>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-right float-right">
                                                <span class="price-amt">$<?php echo $item["price"]?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>

                            </div>
                        </div>

                    </div>

                    <div id="gallery" class="list-details-section">
                        <h4>Gallery</h4>
                        <!--Carousel Wrapper-->
                        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails list-gallery" data-ride="carousel">
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">

                                <?php
                                $num = 0;
                                foreach ($gallery as $item){?>

                                    <div style="width:730px; height:390px;" class="carousel-item <?php echo ($num==0) ? "active" : ""?>">
                                        <img style="width:100%; height:100%;object-fit: cover" class="d-block w-100" src="<?php echo base_url("uploads/providers/$item[img]")?>" alt="slide">
                                    </div>

                                <?php $num++; }?>

                            </div>
                            <!--Controls starts-->
                            <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                <span class="ion-arrow-left-c" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                <span class="ion-arrow-right-c" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--Controls ends-->
                            <ol class="carousel-indicators  list-gallery-thumb">

                                <?php
                                 $num = 0;
                                 foreach ($gallery as $item){?>
                                    <li  data-target="#carousel-thumb" data-slide-to="<?php echo $num?>">
                                        <img style="height:70px; object-fit: cover" class="img-fluid d-block w-100" src="<?php echo base_url("uploads/providers/$item[img]")?>" alt="...">
                                    </li>
                                <?php $num++; }?>

                            </ol>
                        </div>
                        <!--/.Carousel Wrapper-->
                    </div>

                    <div id="events" class="list-details-section mar-top-75">
                        <h4>Events</h4>
                        <div class="room-type-wrapper">

                            <?php foreach ($event_categories as $item) { ?>
                                <div class="room-type-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="<?php echo base_url("uploads/event_categories/$item[img]")?>" data-lightbox="single-1">
                                                <img src="<?php echo base_url("uploads/event_categories/$item[img]")?>" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="feature-left float-left">
                                                        <h3>
                                                            <?php echo $item["name_en"]?>
                                                        </h3>
                                                        <p>
                                                            <span> <?php echo $item["type"]?></span>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>

                        </div>
                    </div>

                </div>
                <!--Listing Details ends-->

            </div>
            <div class="col-lg-4 col-md-12">
                <div class="listing-sidebar">


                    <div class="sidebar-widget follow">
                        <div class="follow-img">
                            <img src="<?php echo base_url("uploads/providers/$provider[img]")?>" class="img-fluid" alt="#">
                            <h6>
                                <?php echo $user["name"]?> <?php echo $user["surname"]?>
                            </h6>
                            <span>Event Organizer</span>
                        </div>

                        <ul class="social-counts">
                            <li>
                                <h6>26</h6>
                                <span>Listings</span>
                            </li>
                            <li>
                                <h6>326</h6>
                                <span>Followers</span>
                            </li>
                            <li>
                                <h6>12</h6>
                                <span>Following</span>
                            </li>
                        </ul>

                    </div>

                    <div class="sidebar-widget">

                        <div class="address">
                            <span class="ion-ios-telephone"></span>
                            <p> <?php echo $user["mobile"]?></p>
                        </div>

                        <div class="address">
                            <span class="ion-android-globe"></span>
                            <p>
                                <?php echo $user["email"]?>
                            </p>
                        </div>
                    </div>

                    <div class="sidebar-widget">

                        <div class="address">
                            <span class="ion-social-facebook"></span>
                            <p> <?php echo $provider["facebook"]?></p>
                        </div>

                        <div class="address">
                            <span class="ion-social-instagram"></span>
                            <p>
                                <?php echo $provider["instagram"]?>
                            </p>
                        </div>

                        <div class="address">
                            <span class="ion-android-calendar"></span>
                            <p>
                                <?php echo $user["birthday"]?>
                            </p>
                        </div>

                    </div>

                    <div class="sidebar-widget listing-tags">
                        <h4>Tags</h4>
                        <ul class="list-tags">


                            <?php foreach ($services as $item) { ?>
                                <li><a href="#" class="btn v6 dark"><?php echo $item["name_en"]?></a></li>
                            <?php }?>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--Listing Details Info ends-->