<div class="breadcrumb-section" style="background-image: url(<?php echo base_url("assets/")?>images/breadcrumb/breadcrumb-6.jpg)">
    <div class="overlay op-1"></div>
    <div class="container">
        <div class="row align-items-center  pad-top-80">
            <div class="col-md-6 col-12">
                <div class="breadcrumb-menu">
                    <h2 class="page-title">Establishment Listings</h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="breadcrumb-menu text-right sm-left">
                    <ul>
                        <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li id="url" data-url="<?php echo base_url(); ?>"><a href="#">Listings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb section ends-->
<!--Listing Filter starts-->
<div class="filter-wrapper style1 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-12">

                <div class="item-wrapper">
                    <div class="tab-content">

                        <div id="list-view" class="tab-pane active product-list">
                            <div class="row trending-place-item">
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-lg-12 option-box style1">
                <div class="filter-box style1 right">
                    <div class="sidebar-title">
                        <h2>Filter Listing</h2>
                    </div>
                        <div class="form-group filter-group">
                            <input type="text" class="form-control filter-input fSearch" id="search-filter" name="search-bar" placeholder="I'm looking for . . .">
                            <select class="filter-input cityCh" id="option-select">

                                <option value="0">Select City</option>
                                <?php foreach ($cities as $item){  ?>
                                    <option <?php if (isset($selectedCity)){if($selectedCity == $item['id']){ echo 'selected'; }} ?> value="<?php echo $item['id']?>"><?php echo $item['name']?></option>
                                <?php } ?>
                            </select>
                            <select class="filter-input ctgCh" id="option-select">
                                <option value="0">Select Category</option>
                                <optgroup label="personal">
                                    <?php foreach ($ctgs as $item){ if ($item['type'] == 'personal'){ ?>
                                        <option <?php if (isset($selectedCtg)){if($selectedCtg == $item['id']){ echo 'selected'; }} ?> value="<?php echo $item['id']?>"><?php echo $item['name']?></option>
                                    <?php }} ?>
                                </optgroup>
                                <optgroup label="corporate">
                                    <?php foreach ($ctgs as $item){ if ($item['type'] == 'corporate'){ ?>
                                        <option <?php if (isset($selectedCtg)){if($selectedCtg == $item['id']){ echo 'selected'; }} ?> value="<?php echo $item['id']?>"><?php echo $item['name']?></option>
                                    <?php }} ?>
                                </optgroup>
                            </select>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

