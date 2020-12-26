<!--Breadcrumb section starts-->
<div class="breadcrumb-section" style="background-image: url(<?php echo base_url("assets/")?>images/breadcrumb/breadcrumb-6.jpg)">
    <div class="overlay op-1"></div>
    <div class="container">
        <div class="row align-items-center  pad-top-80">
            <div class="col-md-6 col-12">
                <div class="breadcrumb-menu">
                    <h2 class="page-title">Listings</h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="breadcrumb-menu text-right sm-left">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Listings</a></li>
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


                            <?php foreach ($providers as $item){?>
                                <div class="row trending-place-item">
                                    <div class="col-md-6 no-pad-lr">
                                        <div class="trending-img">
                                            <img src="<?php echo base_url("assets/")?>images/category/places/place-1.jpg" alt="#">
                                            <span class="trending-rating-green">7</span>
                                            <span class="save-btn"><i class="icofont-heart"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 no-pad-lr">
                                        <div class="trending-title-box">
                                            <h4><a href="single-listing-one.html">Four Seasons Resort</a></h4>
                                            <div class="customer-review">
                                                <div class="rating-summary float-left">
                                                    <div class="rating-result" title="60%">
                                                        <ul class="product-rating">
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li><i class="ion-android-star-half"></i></li>
                                                            <li><i class="ion-android-star-half"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="review-summury float-right">
                                                    <p><a href="#">3 Reviews</a></p>
                                                </div>
                                            </div>
                                            <ul class="trending-address">
                                                <li><i class="ion-ios-location"></i>
                                                    <p>4210 Khale Street,Florence,USA</p>
                                                </li>
                                                <li><i class="ion-ios-telephone"></i>
                                                    <p>+843-600-2040</p>
                                                </li>
                                                <li><i class="ion-android-globe"></i>
                                                    <p>www.laresorta.com</p>
                                                </li>
                                            </ul>
                                            <div class="trending-bottom mar-top-15 pad-bot-30">
                                                <div class="trend-left float-left">
                                                    <span class="round-bg pink"><i class="icofont-hotel"></i></span>
                                                    <p><a href="#">Hotel</a></p>

                                                </div>
                                                <div class="trend-right float-right">
                                                    <div class="trend-open"><i class="ion-clock"></i>
                                                        Open <p>till 11.00pm</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>


                        </div>

                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-lg-12 option-box style1">
                <div class="filter-box style1 right">
                    <div class="sidebar-title">
                        <h2>Filter Listing</h2>
                    </div>
                    <form>
                        <div class="form-group filter-group">
                            <input type="text" class="form-control filter-input" id="search-filter" name="search-bar" placeholder="I'm looking for . . .">
                            <input type="text" class="form-control filter-input" id="location-filter" name="search-bar" placeholder="Location">
                            <select class="filter-input" id="option-select">
                                <option>Select Categories</option>
                                <option>Art's</option>
                                <option>Health</option>
                                <option>Hotels</option>
                                <option>Real Estate</option>
                                <option>Rentals</option>
                            </select>
                        </div>
                        <div class="filter-sub-area style1">
                            <div class="filter-title  mar-top-20 mar-bot-15">
                                <p>Choose distance : <span><input type="text" id="amount"></span></p>
                            </div>
                            <div id="slider-range" class="price-range mar-bot-30"></div>
                        </div>
                        <div class="filter-sub-menu style1 mar-bot-20">
                            <ul>
                                <li class="has-sub"><a href="# ">More Filters</a>
                                    <ul class="explore__form-checkbox-list half-filter">
                                        <div class="filter-checkbox">
                                            <p>Sort By Features</p>
                                            <li><input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Open Now</label></li>
                                            <li> <input id="check-b" type="checkbox" name="check">
                                                <label for="check-b">Near me</label></li>
                                            <li><input id="check-c" type="checkbox" name="check">
                                                <label for="check-c">Child Friendly</label></li>
                                            <li><input id="check-d" type="checkbox" name="check">
                                                <label for="check-d">Free Parking</label></li>
                                            <li><input id="check-f" type="checkbox" name="check">
                                                <label for="check-f">Events</label></li>
                                            <li><input id="check-e" type="checkbox" name="check">
                                                <label for="check-e">Free Wifi</label></li>
                                        </div>
                                        <div class="filter-checkbox">
                                            <p>Sort By Ratings</p>
                                            <div>
                                                <input id="check-w" type="checkbox" name="check">
                                                <label for="check-w">
                                                </label>
                                                <div class="list-ratings">
                                                    <span class="ion-android-star"></span>
                                                    <span class="ion-android-star"></span>
                                                    <span class="ion-android-star"></span>
                                                    <span class="ion-android-star"></span>
                                                    <span class="ion-android-star"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <input id="check-x" type="checkbox" name="check">
                                                <label for="check-x">
                                                </label>
                                                <div class="list-ratings">
                                                    <span class="ion-android-star"></span>
                                                    <span class="ion-android-star"></span>
                                                    <span class="ion-android-star"></span>
                                                    <span class="ion-android-star"></span>
                                                    <span class="ion-android-star-outline"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <input id="check-y" type="checkbox" name="check">
                                                <label for="check-y">
                                                </label>
                                                <div class="list-ratings">
                                                    <span class="ion-android-star"></span>
                                                    <span class="ion-android-star"></span>
                                                    <span class="ion-android-star"></span>
                                                    <span class="ion-android-star-outline"></span>
                                                    <span class="ion-android-star-outline"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <input id="check-z" type="checkbox" name="check">
                                                <label for="check-z">
                                                </label>
                                                <div class="list-ratings">
                                                    <span class="ion-android-star"></span>
                                                    <span class="ion-android-star"></span>
                                                    <span class="ion-android-star-outline"></span>
                                                    <span class="ion-android-star-outline"></span>
                                                    <span class="ion-android-star-outline"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-checkbox">
                                            <p>Sort By tags</p>
                                            <input id="check-ab" type="checkbox" name="check">
                                            <label for="check-ab">Hotel</label>
                                            <input id="check-bc" type="checkbox" name="check">
                                            <label for="check-bc">Restaurant</label>
                                            <input id="check-cd" type="checkbox" name="check">
                                            <label for="check-cd">sports</label>
                                            <input id="check-df" type="checkbox" name="check">
                                            <label for="check-df">travel </label>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <button type="submit" class="btn v1">Apply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Listing Filter ends-->


<script>
    let myurl = new URL(location.href);
    let baseUrl = document.getElementById('url').dataset.url;
    let  amcheck = $('.amcheck');
    let  ctgcheck = $('.ctgcheck');
    let  fSearch = $('.fSearch');
    let  fTypes = $('.fTypes');

    amcheck.change(() => {
        let urlParams;
        $('.amcheck:checked').each((a,b) => {
            if (typeof b != 'undefined'){
                if (typeof urlParams != 'undefined') {
                    urlParams = urlParams + ' ' + b.value;
                }else{
                    urlParams = b.value;
                }
            }else {
                urlParams = 'undefined';
            }
        })
        setUrl(urlParams,'amenities')
    });


    ctgcheck.change(() => {
        let urlParams;
        $('.ctgcheck:checked').each((a,b) => {
            if (typeof b != 'undefined'){
                if (typeof urlParams != 'undefined') {
                    urlParams = urlParams + ' ' + b.value;
                }else{
                    urlParams = b.value;
                }
            }else {
                urlParams = undefined;
            }
        });
        setUrl(urlParams,'menu')
    });

    fTypes.change(() => {
        let urlParam = fTypes.val();
        if (urlParam == '0'){
            urlParam = undefined;
        }
        setUrl(urlParam,'type')
    });



    fSearch.change(() => {
        let urlParam = fSearch.val();
        if (urlParam == ''){
            urlParam = undefined;
        }
        setUrl(urlParam,'search')
    });

    function setUrl(urlParam, key){
        if (typeof urlParam != 'undefined') {
            myurl.searchParams.set(key, urlParam);
            myurl.toString();
        }else {
            myurl.searchParams.delete(key);
            myurl.toString();
        }
        let finalURL = myurl.toString();
        window.history.pushState("", "", finalURL);
        setRequestUrl()
    }


    function getCafes(url) {
        $.ajax({
            type: 'GET',  // http method
            url: url,
            // data: { myData: 'This is my data.' },  // data to submit
            success: function (data, status, xhr) {
                data = JSON.parse(data);
            }
        })
    }

    window.onload = () => {
        let menuParams = myurl.searchParams.get('menu');
        let amenityParams = myurl.searchParams.get('amenities');
        let searchParams = myurl.searchParams.get('search');
        if (menuParams != null){
            checkBoxes('ctg',menuParams.split(' '))
        }
        if (amenityParams != null){
            checkBoxes('am',amenityParams.split(' '))
        }
        if (searchParams != null){
            fSearch.val(searchParams);
        }
        setRequestUrl()
    }

    function checkBoxes(boxType, names) {
        Array.prototype.forEach.call(names, n => {
            let boxToCheck = document.getElementById(n+boxType);
            if (boxToCheck != null){
                boxToCheck.checked = true;
            }
        });
    }

    function setRequestUrl() {
        let requestURL = myurl.protocol+'//'+myurl.host+myurl.pathname+'_act?'+myurl.searchParams
        getCafes(requestURL)
    }






</script>