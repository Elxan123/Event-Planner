


<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5><i class="ion-ios-information"></i> Category Adder</h5>
                    </div>
                    <div class="db-add-listing">
                        <?php if(isset($_SESSION['err'])){ ?>
                            <div class="alert alert-danger">
                                <p><?php echo $_SESSION['err'] ?></p>
                            </div>
                        <?php } ?>
                        <form action="<?php echo base_url('category_add_act')?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category Name (az)</label>
                                        <input type="text" class="form-control filter-input" placeholder="name (az)" name="name_az">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category Name (en)</label>
                                        <input type="text" class="form-control filter-input" placeholder="name (en)" name="name_en">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category Name (ru)</label>
                                        <input type="text" class="form-control filter-input" placeholder="name (ru)" name="name_ru">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Type</label>
                                        <select class="nice-select filter-input" name="type">
                                                <?php foreach ($types as $type){ ?>
                                                    <option value="<?php echo $type['id'] ?>"><?php echo $type['type'] ?></option>
                                                <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Category Image</label>
                                        <div type="text" class="form-control filter-input" placeholder="Your picture" onclick="input_click()">Category Image</div>
                                        <input id="img_input" type="file" hidden name="img">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn v7 mar-top-20">Add Category</button>
                                </div>
                                <script>
                                    function input_click() {
                                        document.getElementById("img_input").click();
                                    }
                                </script>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



