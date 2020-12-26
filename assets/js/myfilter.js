let myurl = new URL(location.href);
let baseUrl = document.getElementById('url').dataset.url;
let  serviceCh = $('.serviceCh');
let  fSearch = $('.fSearch');
let  ctgCh = $('.ctgCh');
let  cityCh = $('.cityCh');

serviceCh.change(() => {
    let urlParams;
    $('.serviceCh:checked').each((a,b) => {
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
    setUrl(urlParams,'services')
})

cityCh.change(() => {
    let urlParam = cityCh.val();
    if (urlParam == '0'){
        urlParam = undefined;
    }
    setUrl(urlParam,'city')
})

ctgCh.change(() => {
    let urlParam = ctgCh.val();
    if (urlParam == '0'){
        urlParam = undefined;
    }
    setUrl(urlParam,'ctg')
})

fSearch.change(() => {
    let urlParam = fSearch.val();
    if (urlParam == ''){
        urlParam = undefined;
    }
    setUrl(urlParam,'search')
})

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
            let list = document.getElementById('list-view');
            list.innerHTML = "";
            data.forEach((provider) => {
                let div = document.createElement('div');
                div.classList.add('row');
                div.classList.add('trending-place-item');
                div.innerHTML = `<div class="col-md-6 no-pad-lr">
                                        <div class="trending-img">
                                            <img src="${baseUrl}uploads/providers/${provider.img}" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-md-6 no-pad-lr">
                                        <div class="trending-title-box">
                                            <h4><a href="single-listing-one.html">${provider.name} ${provider.surname}</a></h4>
                                            <ul class="trending-address">
                                                <li><i class="ion-ios-location"></i>
                                                    <p>${provider.city}</p>
                                                </li>
                                                <li><i class="ion-ios-telephone"></i>
                                                    <p>${provider.mobile}</p>
                                                </li>
                                                <li><i class="ion-social-facebook"></i>
                                                    <p>${provider.facebook}</p>
                                                </li>
                                                <li><i class="ion-social-instagram"></i>
                                                    <p>${provider.instagram}</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>`;
                list.appendChild(div);
            })
        }
    })
}

window.onload = () => {
    let serviceParams = myurl.searchParams.get('services');
    let searchParams = myurl.searchParams.get('search');
    if (serviceParams != null){
        checkBoxes('srv',serviceParams.split(' '))
    }
    if (searchParams != null){
        fSearch.val(searchParams);
    }
    setRequestUrl()
}

function checkBoxes(boxType, names) {
    Array.prototype.forEach.call(names, n => {
        let boxToCheck = document.getElementsByClassName(n+boxType)[0];
        if (boxToCheck != null){
            boxToCheck.checked = true;
        }
    });
}

function setRequestUrl() {
    let requestURL = baseUrl+'services_load?'+myurl.searchParams;
    getCafes(requestURL)
}





