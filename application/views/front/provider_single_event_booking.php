<style>
    .c_row .col-md-12{
        margin-top: 7px;
        margin-bottom: 7px;
    }
</style>

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

                <!--Booking info starts-->
                <div class="list-details-section section-padding  add_list">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="add_list_content">
                                    <h4> <i class="ion-ios-information-outline"></i> Event Information:</h4>

                                    <form action="<?php echo base_url("provider-single-register-action/$provider_id")?>" method="post">
                                        <div class="row c_row">

                                            <div class="col-md-12">

                                                <?php if (!empty($this->session->flashdata("register_alert"))){ ?>
                                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>

                                                        <?php echo $this->session->flashdata("register_alert");?>
                                                    </div>

                                                <?php }?>

                                                <div class="form-group">
                                                    <label for="fname">Event Title</label>
                                                    <input id="fname" type="text" class="form-control filter-input" name="title">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="fname">Event Description</label>
                                                    <textarea id="fname" type="text" class="form-control filter-input" name="description"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Select Event Category</label>
                                                    <select name="event_catg" class="nice-select filter-input">

                                                        <?php foreach ($event_categories as $item){ ?>
                                                            <option value="<?php echo $item["id"]?>">
                                                                <?php echo $item["name_en"]?> - <?php echo $item["type"]?>
                                                            </option>
                                                        <?php }?>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Services</label>
                                                    <div class="filter-checkbox">

                                                        <?php foreach ($services as $item) { ?>
                                                            <input id="check-<?php echo $item["name_en"]?>" type="checkbox" name="service_check[]" value="<?php echo $item["id"]?>">
                                                            <label for="check-<?php echo $item["name_en"]?>"><?php echo $item["name_en"]?> - $<?php echo $item["price"]?></label>
                                                        <?php }?>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 ">
                                                <label for="lname">Start Date</label>
                                                <div id="datepicker-from" class="input-group date" data-date-format="dd-mm-yyyy">
                                                    <input class="form-control" type="text" placeholder="Check In" name="event_start">
                                                    <span class="input-group-addon"><i class="icofont-ui-calendar"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label for="lname">End Date</label>
                                                <div id="datepicker-to" class="input-group date" data-date-format="dd-mm-yyyy">
                                                    <input class="form-control" type="text" placeholder="Check Out" name="event_end">
                                                    <span class="input-group-addon"><i class="icofont-ui-calendar"></i></span>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="payment-options">
                                                    <h4> <i class="icofont-pay"></i>Payment Method :</h4>
                                                    <label class="custom-checkbox">
                                                        <input type="radio" name="bank-transfer" checked>
                                                        <span class="sm-heading">Direct Pay Transfer</span>
                                                    </label>

                                                    <label class="custom-checkbox">
                                                        <input type="radio" name="bank-transfer">
                                                        <span class="sm-heading">Credit card</span>
                                                        <span class="card-options"><img src="<?php echo base_url("assets/")?>images/payment/payment-1.png" alt="..."></span>
                                                        <span class="card-options pad-right-5"><img src="<?php echo base_url("assets/")?>images/payment/payment-2.png" alt="..."></span>
                                                        <span class="card-options pad-right-5"><img src="<?php echo base_url("assets/")?>images/payment/payment-3.png" alt="..."></span>

                                                    </label>
                                                    <label class="custom-checkbox">
                                                        <input type="radio" name="bank-transfer">
                                                        <span class="sm-heading">Paypal</span>
                                                        <span class="card-options"><img src="<?php echo base_url("assets/")?>images/payment/payment-2.png" alt="..."></span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>



                                        <div class="row mar-top-20">
                                            <div class="col-sm-4  text-right">
                                                <div class="res-box sm-left">
                                                    <button class="btn v7" type="submit">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>



                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Booking info ends-->

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

