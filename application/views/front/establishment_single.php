<!--Listing Details Hero starts-->
<div class="listing-details-wrapper bg-h" style="background-image: url(<?php

$gl = (!empty($gallery)) ? $gallery[0] : array("img" => "");

echo base_url("uploads/establishments/$gl[img]")?>)">

    <div class="overlay op-3"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-details-title v1">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-12">
                            <div class="single-listing-title float-left">
                                <p><a href="#" class="btn v6">Establishment</a></p>
                                <h2>

                                    <?php echo $estab["name"]?>

                                    <i class="icofont-tick-boxed"></i>

                                </h2>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-12">
                            <div class="list-details-btn text-right sm-left">
                                <div class="save-btn">

                                    <?php $this->session->set_userdata("estabch_event", 10)?>

                                    <?php if (!empty($this->session->userdata("estabch_event")) && $this->session->userdata("user_type") == 2) { ?>

                                        <a href="<?php echo base_url("choose-establishment-for-provider/$estab_id")?>" class="btn v3 white"><i class="ion-ios-briefcase"></i>
                                            Choose Establishment
                                        </a>

                                    <?php }elseif ($this->session->userdata("user_type") == 4 || empty($this->session->userdata("user_type"))){ ?>

                                        <a href="<?php echo base_url("establishment-single-register/$estab_id")?>" class="btn v3 white"><i class="ion-ios-briefcase"></i>
                                            Event Organize
                                        </a>

                                    <?php }?>

                                </div>

                                <div class="share-btn">
                                    <a href="#" class="btn v3 white"><i class="ion-android-share-alt"></i> Share</a>
                                    <ul class="social-share">
                                        <li class="bg-fb"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url("establishment-single/$estab_id")?>" target="_blank""><i class="ion-social-facebook"></i></a></li>
                                        <li class="bg-tt"><a href="https://twitter.com/intent/tweet?url=<?php echo base_url("establishment-single/$estab_id")?>" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                        <li class="bg-ig"><a href="https://www.instagram.com/?url=<?php echo base_url("establishment-single/$estab_id")?>" target="_blank"><i class="ion-social-instagram"></i></a></li>
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
                            <?php echo $estab["about_en"]?>
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
                                        <img style="width:100%; height:100%;object-fit: cover" class="d-block w-100" src="<?php echo base_url("uploads/establishments/$item[img]")?>" alt="slide">
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
                                        <img style="height:70px; object-fit: cover" class="img-fluid d-block w-100" src="<?php echo base_url("uploads/establishments/$item[img]")?>" alt="...">
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

                    <h4>Addresss on map</h4>
                    <div id="c_map" style=" height: 400px; cursor: pointer!important;"></div>


                </div>
                <!--Listing Details ends-->



            </div>
            <div class="col-lg-4 col-md-12">
                <div class="listing-sidebar">


                    <div class="sidebar-widget follow">
                        <div class="follow-img">
                            <img src="<?php echo base_url("uploads/establishments/$estab[img]")?>" class="img-fluid" alt="#">
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
                            <span class="ion-ios-location"></span>
                            <p>
                                <?php echo $estab["address_en"]?>
                            </p>
                        </div>

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
                            <p> <?php echo $estab["facebook"]?></p>
                        </div>

                        <div class="address">
                            <span class="ion-social-instagram"></span>
                            <p>
                                <?php echo $estab["instagram"]?>
                            </p>
                        </div>

                        <div class="address">
                            <span class="ion-android-calendar"></span>
                            <p>
                                <?php echo $user["birthday"]?>
                            </p>
                        </div>

                    </div>

                   

                </div>
            </div>
        </div>
    </div>
</div>
<!--Listing Details Info ends-->



<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDopLgciSKlfdFSkZlDfBQZyPSLI1BOwxU&libraries=places"></script>

<script>

    //marker delete
    var markersArray = [];
    function clearOverlays() {
        for (var i = 0; i < markersArray.length; i++ ) {
            markersArray[i].setMap(null);
        }
        markersArray.length = 0;
    }
    //marker delete



    //map properties

    <?php if (empty($estab["lat"]) || empty($estab["lon"])){ ?>
    var librariesMapCenter = new google.maps.LatLng(40.4033692,49.8807417);
    <?php }else{?>
    var librariesMapCenter = new google.maps.LatLng(<?php echo $estab["lat"]?>, <?php echo $estab["lon"]?>);
    <?php }?>

    var librariesMapZoom = 15;
    var librariesMapZoomMax = 22;
    var librariesMapZoomMin = 8;
    var librariesMapOptions = {
        center: librariesMapCenter,
        zoom: librariesMapZoom,
        maxZoom: librariesMapZoomMax,
        minZoom: librariesMapZoomMin,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        panControl: true,
        rotateControl: true,
        mapTypeIds: [ 'mapStylesLibraries']
    };
    //map properties



    //initialize google map
    var librariesMap;
    librariesMap = new google.maps.Map(document.getElementById("c_map"), librariesMapOptions);
    //initialize google map



    //default db marker
    <?php if (!empty($estab["lat"]) && !empty($estab["lon"])){ ?>
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(<?php echo $estab["lat"]?>, <?php echo $estab["lon"]?>),
        map: librariesMap
    });
    markersArray.push(marker);
    <?php }?>
    //default db marker


</script>