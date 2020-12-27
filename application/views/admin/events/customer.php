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


                                <?php if ($item['provider_id'] != 0){ ?>
                                        <?php if ($item['provider_status'] == 0){ ?>
                                           <span class="book-pending">Pending Organizer</span></h4>
                                        <?php } ?>
                                        <?php if ($item['provider_status'] == 1){ ?>
                                            <span class="book-approved">Organizer Approved</span></h4>
                                            <br>
                                        <?php if ($item['estab_status'] == 0){ ?>
                                            <span class="book-pending">Pending Establisher</span></h4>
                                        <?php } ?>
                                        <?php if ($item['estab_status'] == 1){ ?>
                                            <span class="book-approved">Event Ready</span></h4>
                                        <?php } if ($item['estab_status'] == 2){ ?>
                                            <span class="book-cancel">Establisher Cancelled</span></h4>
                                        <?php } ?>
                                        <?php } if ($item['provider_status'] == 2){ ?>
                                            <span class="book-cancel">Organizer Cancelled</span></h4>
                                        <?php } ?>
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

                            <div class="booking-info">
                                <h6>Description: </h6>
                                <ul class="booking_list">
                                    <li><span><?php echo $item['description'] ?></span></li>
                                </ul>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
