<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="recent-activity my-listing">
                    <div class="act-title">
                        <h5><i class="ion-social-buffer-outline"></i> Services</h5>
                    </div>

                    <div class="viewd-item-wrap">
                        <?php if(isset($_SESSION['suc'])){ ?>
                            <div class="alert alert-info">
                                <p><?php echo $_SESSION['suc'] ?></p>
                            </div>
                        <?php } ?>
                        <?php foreach ($services as $item){ ?>
                        <div class="most-viewed-item">
                            <div class="most-viewed-detail">
                                <h3><?php echo $item['name']?></h3>
                            </div>
                            <div class="listing-button" style="top: 12%!important;">
                                <a href="<?php echo base_url('service_update/'.$item['id'])?>" class="btn v2"><i class="ion-edit"></i> Edit</a>
                                <a href="<?php echo base_url('service_delete/'.$item['id'])?>" class="btn v5"><i class="ion-android-delete"></i> Delete</a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
