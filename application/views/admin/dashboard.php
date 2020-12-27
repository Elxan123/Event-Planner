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
    </div>
</div>
<!-- Dashboard Statistics ends-->
