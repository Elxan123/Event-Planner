<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="dash-bookings">
                    <div class="act-title">
                        <h5><i class="ion-ios-copy-outline"></i> Appeals - Providers</h5>
                    </div>
                    <?php if(isset($_SESSION['suc'])){ ?>
                        <div style="margin: 1% 2% 0px" class="alert alert-success">
                            <p><?php echo $_SESSION['suc'] ?></p>
                        </div>
                    <?php } ?>
                    <div class="db-booking-wrap">
                        <?php foreach ($appeals as $item){ ?>
                            <div class="db-booking-item">
                                <div class="booking-img">
                                    <img src="<?php echo base_url('uploads/providers/'.$item['img'])?>" alt="...">
                                </div>
                                <h4><?php echo $item['name']." ".$item['surname']?>


                                    <?php if ($item['status'] == 0){ ?>
                                    <span class="book-pending">Pending</span></h4>
                                <?php } ?>
                                <?php if ($item['status'] == 1){ ?>
                                    <span class="book-approved">Approved</span></h4>
                                <?php } if ($item['status'] == 2){ ?>
                                    <span class="book-cancel">Cancelled</span></h4>
                                <?php } ?>

                                <div class="booking-info">
                                    <h6>Mobile: </h6>
                                    <ul class="booking_list">
                                        <li><span><?php echo $item['mobile'] ?></span></li>
                                    </ul>
                                </div>
                                <?php if (!empty($item['email'])){ ?>
                                <div class="booking-info">
                                    <h6>Email: </h6>
                                    <ul class="booking_list">
                                        <li><span><?php echo $item['email'] ?></span></li>
                                    </ul>
                                </div>
                                <?php } ?>
                                <ul class="buttons">
                                    <?php if ($item['status'] == 0){ ?>
                                        <li><a href="<?php echo base_url('approve_appeal/'."2"."/".$item['id']) ?>" class="btn v2"><i class="ion-ios-checkmark-outline"></i> Approve</a></li>
                                        <li><a href="<?php echo base_url('reject_appeal/'."2"."/".$item['id']) ?>" class="btn v5"><i class="ion-ios-close-outline"></i> Reject</a></li>
                                    <?php }elseif ($item['status'] == 1){ ?>
                                        <li><a href="<?php echo base_url('reject_appeal/'."2"."/".$item['id']) ?>" class="btn v5"><i class="ion-ios-close-outline"></i> Reject</a></li>
                                    <?php }elseif ($item['status'] == 2){ ?>
                                        <li><a href="<?php echo base_url('approve_appeal/'."2"."/".$item['id']) ?>" class="btn v2"><i class="ion-ios-checkmark-outline"></i> Approve</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
