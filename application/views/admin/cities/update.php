


<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5><i class="ion-ios-information"></i> City Adder</h5>
                    </div>
                    <div class="db-add-listing">
                        <?php if(isset($_SESSION['err'])){ ?>
                            <div class="alert alert-danger">
                                <p><?php echo $_SESSION['err'] ?></p>
                            </div>
                        <?php } ?>
                        <form action="<?php echo base_url('city_update_act/'.$city['id'])?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City Name (az)</label>
                                        <input value="<?php echo $city['name_az'] ?>" type="text" class="form-control filter-input" placeholder="name (az)" name="name_az">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City Name (en)</label>
                                        <input value="<?php echo $city['name_en'] ?>" type="text" class="form-control filter-input" placeholder="name (en)" name="name_en">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City Name (ru)</label>
                                        <input value="<?php echo $city['name_ru'] ?>" type="text" class="form-control filter-input" placeholder="name (ru)" name="name_ru">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn v7 mar-top-20">Update City</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



