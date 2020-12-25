<!--Breadcrumb section starts-->
<div class="breadcrumb-section" style="background-image: url(<?php echo base_url("assets/")?>images/breadcrumb/breadcrumb-1.jpg)">
    <div class="overlay op-5"></div>
    <div class="container">
        <div class="row align-items-center  pad-top-80">
            <div class="col-md-6 col-12">
                <div class="breadcrumb-menu">
                    <h2 class="page-title">Become Partner</h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="breadcrumb-menu text-right sm-left">
                    <ul>
                        <li class="active"><a href="">Home</a></li>
                        <li><a href="#">Become Partner</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb section ends-->

<!--Add Listing starts-->
<div class="list-details-section section-padding add_list pad-top-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs list-details-tab">
                    <li class="nav-item active">
                        <a data-toggle="tab" href="#general_info">General Information</a>
                    </li>
                    <li class="nav-item ">
                        <a data-toggle="tab" href="#about">About You</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#contact">Location /Contacts<span class="text-grey"></span></a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#social_network">Social Networks <span class="text-grey"></span></a>
                    </li>
                </ul>

                <form action="<?php echo base_url("become-partner-provider-submit")?>" method="post" enctype="multipart/form-data">
                    <div class="tab-content mar-tb-30 add_list_content">


                        <?php if (!empty($this->session->flashdata("register_alert"))){ ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <?php echo $this->session->flashdata("register_alert");?>
                            </div>

                        <?php }?>


                        <div class="tab-pane fade show active" id="general_info">
                            <h4> <i class="ion-ios-information"></i> General Information :</h4>
                            <div class="row">

                                <?php

                                    $data = ($this->session->userdata("form_data")) ?  $this->session->userdata("form_data") : array(
                                            "name" => "",
                                            "surname" => "",
                                            "password" => "",
                                            "img" => "",
                                            "about_az" => "",
                                            "about_en" => "",
                                            "about_ru" => "",
                                            "mobile" => "",
                                            "birthday" => "",
                                            "email" => "",
                                            "facebook" => "",
                                            "instagram" => "",
                                            "remember" => "",
                                    );

                                    $name = $data["name"];
                                    $surname = $data["surname"];
                                    $password = $data["password"];
                                    $img = $data["img"];
                                    $about_az = $data["about_az"];
                                    $about_en = $data["about_en"];
                                    $about_ru = $data["about_ru"];
                                    $mobile = $data["mobile"];
                                    $birthday = $data["birthday"];
                                    $email = $data["email"];
                                    $facebook = $data["facebook"];
                                    $instagram  = $data["instagram"];
                                    $remember  = $data["remember"];

                                ?>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control filter-input" placeholder="Your Name" name="name" value="<?php echo $name?>">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Surname</label>
                                        <input type="text" class="form-control filter-input" placeholder="Your Surname" name="surname" value="<?php echo $surname?>">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control filter-input" placeholder="Your Password" name="password">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Profile Picture (Optional)</label>
                                        <div type="text" class="form-control filter-input" placeholder="Your picture" onclick="input_click()">Your Picture</div>
                                        <input id="c_img_input" type="file" hidden name="img">
                                    </div>
                                </div>

                                <script>
                                    function input_click() {
                                        document.getElementById("c_img_input").click();
                                    }
                                </script>


                            </div>
                        </div>



                        <div class="tab-pane fade" id="about">
                            <h4> <i class="ion-ios-information"></i> About you :</h4>

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="list_info">About : Azerbaijan (Optional)</label>
                                    <textarea class="form-control" id="list_info" rows="4" placeholder="Enter your text here" name="about_az"><?php echo $about_az?></textarea>
                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="list_info">About : English (Optional)</label>
                                    <textarea class="form-control" id="list_info" rows="4" placeholder="Enter your text here" name="about_en"><?php echo $about_en?></textarea>
                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="list_info">About : Russian (Optional)</label>
                                    <textarea class="form-control" id="list_info" rows="4" placeholder="Enter your text here" name="about_ru"><?php echo $about_ru?></textarea>
                                </div>

                            </div>

                        </div>



                        <div class="tab-pane fade" id="contact">
                            <h4><i class="ion-ios-location"></i> Location /Contacts :</h4>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Select City</label>
                                        <select name="city_id" class="nice-select filter-input">

                                            <?php foreach ($city as $item){ ?>
                                                <option value="<?php echo $item["id"]?>">
                                                    <?php echo $item["name_az"]?>
                                                </option>
                                            <?php }?>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control filter-input" placeholder="+994557777777" name="mobile" value="<?php echo $mobile?>">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label>Birth date</label>
                                    <div id="datepicker-from" class="input-group date" >
                                        <input class="form-control" type="text" placeholder="Select date" name="birthday" value="<?php echo $birthday?>">
                                        <span class="input-group-addon"><i class="icofont-ui-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane fade" id="social_network">
                            <h4><i class="icofont-ui-social-link"></i>Social Networks:</h4>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email (Optional)</label>
                                        <input type="text" class="form-control filter-input" placeholder="demo@gmail.com" name="email" value="<?php echo $email?>">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Facebook (Optional)</label>
                                        <input type="text" class="form-control filter-input" placeholder="Facebook url" name="facebook" value="<?php echo $facebook?>">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Instagram link (Optional)</label>
                                        <input type="text" class="form-control filter-input" placeholder="Instagram url" name="instagram" value="<?php echo $instagram?>">
                                    </div>
                                </div>

                                <div class="col-md-6 text-left">
                                    <div class="res-box mar-top-10">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember" <?php echo (!empty($remember)) ? "checked" : ""?>>
                                        <label for="remember">I've read and accept <a href="terms.html">terms &amp; conditions</a></label>
                                    </div>
                                </div>

                                <div class="col-md-6 text-right sm-left">
                                    <button class="btn v8" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>



                </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!--Add Listing ends-->