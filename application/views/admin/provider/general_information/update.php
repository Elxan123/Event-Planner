


<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5><i class="ion-ios-information"></i> Establishment Profile</h5>
                    </div>
                    <div class="db-add-listing">

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

                            <form action="<?php echo base_url("providers/general-info-update")?>" method="post" enctype="multipart/form-data">
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

                                        <?php

                                            $name = $profile["name"];
                                            $surname = $profile["surname"];
                                            $email = $profile["email"];
                                            $mobile = $profile["mobile"];
                                            $password = $profile["password"];
                                            $birthday = $profile["birthday"];

                                            $img = $provider_profile["img"];
                                            $about_az = $provider_profile["about_az"];
                                            $about_en = $provider_profile["about_en"];
                                            $about_ru = $provider_profile["about_ru"];
                                            $instagram  = $provider_profile["instagram"];
                                            $facebook = $provider_profile["facebook"];

                                        ?>

                                        <h4> <i class="ion-ios-information"></i> General Information :</h4>
                                        <div class="row">

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
                                                    <label>Your Picture (Optional)</label>
                                                    <div type="text" class="form-control filter-input" onclick="input_click()">Your Profil Picture</div>
                                                    <input id="c_img_input" type="file" hidden name="img">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group" style="text-align: center">
                                                    <img width="200px" height="200px" src="<?php echo base_url("uploads/providers/$provider_profile[img]")?>" alt="">
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



                                            <div class="col-md-12" style="margin-top: 20px">
                                                <div class="row">

                                                    <div class="col-md-6 text-right sm-left">
                                                        <button class="btn v8" type="submit">Submit</button>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>



                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDopLgciSKlfdFSkZlDfBQZyPSLI1BOwxU&libraries=places"></script>

<script>

    //marker delete
    var markersArray = [];
    function clearOverlays() {
        for (var i = 0; i < markersArray.length; i++ ) {
            markersArray[i].setMap(null);
        }
        markersArray.length = 0;
    }
    //marker delete



    //map properties

    <?php if (empty($lat) || empty($lon)){ ?>
    var librariesMapCenter = new google.maps.LatLng(40.4033692,49.8807417);
    <?php }else{?>
    var librariesMapCenter = new google.maps.LatLng(<?php echo $lat?>, <?php echo $lon?>);
    <?php }?>

    var librariesMapZoom = 16;
    var librariesMapZoomMax = 22;
    var librariesMapZoomMin = 8;
    var librariesMapOptions = {
        center: librariesMapCenter,
        zoom: librariesMapZoom,
        maxZoom: librariesMapZoomMax,
        minZoom: librariesMapZoomMin,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        panControl: true,
        rotateControl: true,
        mapTypeIds: [ 'mapStylesLibraries']
    };
    //map properties



    //initialize google map
    var librariesMap;
    librariesMap = new google.maps.Map(document.getElementById("c_map"), librariesMapOptions);
    //initialize google map



    //default db marker
    <?php if (!empty($lat) && !empty($lon)){ ?>
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(<?php echo $lat?>, <?php echo $lon?>),
        map: librariesMap
    });
    markersArray.push(marker);
    <?php }?>
    //default db marker




    //when clicked map marker set and push to array
    google.maps.event.addListener(librariesMap, 'click', function(event) {
        placeMarker(event.latLng);
        // alert(event.latLng)
        $("#lattitude").val(event.latLng.lat());
        $("#longtude").val(event.latLng.lng());
    });
    function placeMarker(location) {
        clearOverlays();
        var marker = new google.maps.Marker({
            position: location,
            map: librariesMap
        });
        markersArray.push(marker);
    }
    //when clicked map marker set and push to array


</script>
