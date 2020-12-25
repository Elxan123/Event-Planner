


<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5><i class="ion-ios-information"></i> Service Adder</h5>
                    </div>
                    <div class="db-add-listing">
                        <?php if(isset($_SESSION['err'])){ ?>
                            <div class="alert alert-danger">
                                <p><?php echo $_SESSION['err'] ?></p>
                            </div>
                        <?php } ?>
                        <form action="<?php echo base_url('service_update_act/'.$service['id'])?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Service Name (az)</label>
                                        <input value="<?php echo $service['name_az'] ?>" type="text" class="form-control filter-input" placeholder="name (az)" name="name_az">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Service Name (en)</label>
                                        <input value="<?php echo $service['name_en'] ?>" type="text" class="form-control filter-input" placeholder="name (en)" name="name_en">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Service Name (ru)</label>
                                        <input value="<?php echo $service['name_ru'] ?>" type="text" class="form-control filter-input" placeholder="Description (ru)" name="name_ru">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Service Description (az)</label>
                                        <textarea type="text" class="form-control filter-input" placeholder="Description (az)" name="desc_az"><?php echo $service['desc_az'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Service Description (en)</label>
                                        <textarea type="text" class="form-control filter-input" placeholder="Description (en)" name="desc_en"><?php echo $service['desc_en'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Service Description (ru)</label>
                                        <textarea type="text" class="form-control filter-input" placeholder="Description (ru)" name="desc_ru"><?php echo $service['desc_ru'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn v7 mar-top-20">Update Service</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



