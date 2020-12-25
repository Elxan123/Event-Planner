<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="recent-activity my-listing">
                    <div class="act-title">
                        <h5><i class="ion-social-buffer-outline"></i> Categories</h5>
                    </div>

                    <div class="viewd-item-wrap">
                        <?php if(isset($_SESSION['suc'])){ ?>
                            <div class="alert alert-info">
                                <p><?php echo $_SESSION['suc'] ?></p>
                            </div>
                        <?php } ?>
                        <?php foreach ($ctgs as $ctg){ ?>
                        <div class="most-viewed-item">
                            <div class="most-viewed-img">
                                <a href="#"><img src="<?php echo base_url('uploads/event_categories/'.$ctg['img'])?>" alt="..."></a>
                            </div>
                            <div class="most-viewed-detail">
                                <a class="category" href="#"><span class="list-bg aqua"><i class="icofont-typo3"></i></span><?php echo $ctg['type']?></a>
                                <h3><?php echo $ctg['name']?></h3>
                            </div>
                            <div class="listing-button">
                                <a href="<?php echo base_url('category_update/'.$ctg['id'])?>" class="btn v2"><i class="ion-edit"></i> Edit</a>
                                <a href="<?php echo base_url('category_delete/'.$ctg['id'])?>" class="btn v5"><i class="ion-android-delete"></i> Delete</a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
