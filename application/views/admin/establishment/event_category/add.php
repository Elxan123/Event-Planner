<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5><i class="ion-ios-information"></i> Event Category Management</h5>
                    </div>
                    <div class="db-add-listing">
                        <div class="row">

                            <form action="<?php echo base_url("establishment/add-event-category-action")?>" method="post" style="width: 100%;">
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
                                        <label>Event Category</label>

                                        <select class="nice-select filter-input" name="category_id">

                                            <?php foreach ($categories as $item) { ?>
                                                <option value="<?php echo $item["id"]?>">
                                                    <?php echo $item["name_en"]?> - <?php echo $item["type"]?>
                                                </option>
                                            <?php }?>

                                        </select>

                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <button type="submit" class="btn v7 mar-top-20">Add Category</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>