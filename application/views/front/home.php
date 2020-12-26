<!--fullwidth Map starts-->
<div class="contact-map v2">
    <div class="container-fluid no-pad-lr">
        <div class="row">
            <div class="col-md-12 no-padding">
                <div id="map_right_listing"></div>
            </div>
        </div>
    </div>
    <div class="filter-wrapper style1 v2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('event-organize')?>" class="hero__form v2 filter mar-bot-30" method="get">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <input name="search" class="hero__form-input custom-select" type="text" id="place-event" placeholder="What are you looking for?">
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <select class="hero__form-input  custom-select" name="city">
                                    <option>Select City </option>
                                    <?php foreach ($cities as $item){ ?>
                                        <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                                    <?php } ?>
                                </select>

                            </div>
                            <div class="col-lg-3 col-md-12">

                                <select class="hero__form-input  custom-select" name="ctg">
                                    <option>Select Categories</option>
                                    <?php foreach ($ctgs as $item){ ?>
                                        <option value="<?php echo $item['id'] ?>"><?php echo $item['name']." - ".$item['type'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-12">
                                <div class="submit_btn text-right md-left">
                                    <button class="btn v3  mar-right-5" type="submit"><i class="ion-ios-search" aria-hidden="true"></i> Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fullwidth Map ends-->
<!--Category section starts-->
<div class="popular-catagory  mar-top-30 pad-bot-50 section-padding">
    <div class="container">
        <div class="row">
            <?php foreach ($ctgs as $item){ ?>
            <div class="col-md-4 col-sm-6 col-12">
                <a href="<?php echo base_url("event-organize?ctg=".$item['id'])?>">
                    <div class="popular-catagory-content v2">
                        <div class="popular-catagory-img">
                            <img src="<?php echo base_url("uploads/event_categories/".$item['img'])?>" alt="..." class="img_fluid">
                            <div class="overlay op-5"></div>
                        </div>
                        <div class="cat-content">
<!--                            <i class="icofont-travelling"></i>-->
                            <h4 class="title"><?php echo $item['name'].'<br>'.$item['type']?></h4>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!--Category section ends-->
<!--Trending Place starts-->
<div class="trending-places section-padding pad-bot-130 bg-pn">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h2 class="section-title v1">Trending Places</h2>
            </div>
            <div class="col-md-12">
                <div class="swiper-container trending-place-wrap">
                    <div class="swiper-wrapper">
                        <?php foreach ($estabs as $item){ ?>
                        <div class="swiper-slide trending-place-item">
                            <div class="trending-img">
                                <img src="<?php echo base_url("uploads/establishments/".$item['img'])?>" alt="#">
                                <span class="trending-rating-green">7</span>
                                <span class="save-btn"><i class="icofont-heart"></i></span>
                            </div>
                            <div class="trending-title-box">
                                <h4><a href="<?php echo base_url('establishment-single/'.$item['user_id'])?>"><?php echo $item['estab'] ?></a></h4>
                                <ul class="trending-address">
                                    <li><i class="ion-ios-location"></i>
                                        <p><?php echo $item['city'].", ".$item['address'] ?></p>
                                    </li>
                                    <li><i class="ion-ios-telephone"></i>
                                        <p><?php echo $item['mobile'] ?></p>
                                    </li>
                                    <li><i class="ion-android-globe"></i>
                                        <p><?php echo $item['email'] ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="trending-pagination"></div>
            </div>
        </div>
    </div>
</div>
<!--Trending Place ends-->

