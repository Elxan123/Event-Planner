<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="dash-bookings">
                    <div class="act-title">
                        <h5><i class="ion-ios-copy-outline"></i> Appeals - Establishers</h5>
                    </div>
                    <?php if(isset($_SESSION['suc'])){ ?>
                        <div style="margin: 1% 2% 0px" class="alert alert-success">
                            <p><?php echo $_SESSION['suc'] ?></p>
                        </div>
                    <?php } ?>
                    <div class="db-booking-wrap">
                        <?php foreach ($events as $item){ ?>
                            <div class="db-booking-item">
                                <h4><?php echo $item['title']?>


                                <?php if ($item['provider_status'] == 0){ ?>
                                    <span class="book-pending">Pending</span></h4>
                                <?php } ?>
                                <?php if ($item['provider_status'] == 1){ ?>
                                    <span class="book-approved">Approved</span></h4>
                                    <?php if ($item['estab_id'] == 0){ ?>
                                        <a style="margin-bottom: 10px" href="<?php echo base_url('estab-choose/'.$item['id'])?>" class="btn btn-sm btn-success">Choose Establisher</a>
                                    <?php }else{ ?>
                                        <?php if ($item['estab_status'] == 0){ ?>
                                            <span class="book-pending">Pending Establisher</span></h4>
                                        <?php } ?>
                                        <?php if ($item['estab_status'] == 1){ ?>
                                            <span class="book-approved">Event Ready</span></h4>
                                        <?php } if ($item['estab_status'] == 2){ ?>
                                            <span class="book-cancel">Establisher Cancelled</span></h4>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } if ($item['provider_status'] == 2){ ?>
                                    <span class="book-cancel">Cancelled</span></h4>
                                <?php } ?>

                                <div class="booking-info">
                                    <h6>Description: </h6>
                                    <ul class="booking_list">
                                        <li><span><?php echo $item['description'] ?></span></li>
                                    </ul>
                                </div>
                            <ul class="buttons">
                                <?php if ($item['provider_status'] == 0){ ?>
                                    <li><a href="<?php echo base_url('event_approve/'.$item['id']) ?>" class="btn v2"><i class="ion-ios-checkmark-outline"></i> Approve</a></li>
                                    <li><a href="<?php echo base_url('event_reject/'.$item['id']) ?>" class="btn v5"><i class="ion-ios-close-outline"></i> Reject</a></li>
                                <?php }elseif ($item['provider_status'] == 1){ ?>
                                    <li><a href="<?php echo base_url('event_reject/'.$item['id']) ?>" class="btn v5"><i class="ion-ios-close-outline"></i> Reject</a></li>
                                <?php }elseif ($item['provider_status'] == 2){ ?>
                                    <li><a href="<?php echo base_url('event_approve/'.$item['id']) ?>" class="btn v2"><i class="ion-ios-checkmark-outline"></i> Approve</a></li>
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
