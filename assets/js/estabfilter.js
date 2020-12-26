let myurl = new URL(location.href);
let baseUrl = document.getElementById('url').dataset.url;
let  fSearch = $('.fSearch');
let  ctgCh = $('.ctgCh');
let  cityCh = $('.cityCh');

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
            data.forEach((estab) => {
                let div = document.createElement('div');
                div.classList.add('row');
                div.classList.add('trending-place-item');
                div.innerHTML = `<div class="col-md-6 no-pad-lr">
                                        <div class="trending-img">
                                            <img src="${baseUrl}uploads/establishments/${estab.img}" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-md-6 no-pad-lr">
                                        <div class="trending-title-box">
                                            <h4><a href="${baseUrl}establishment-single/${estab.user_id}">${estab.estab}</a></h4>
                                            <ul class="trending-address">
                                                <li><i class="ion-ios-location"></i>
                                                    <p>${estab.city}, ${estab.address}</p>
                                                </li>
                                                <li><i class="ion-ios-telephone"></i>
                                                    <p>${estab.mobile}</p>
                                                </li>
                                                <li><i class="ion-social-facebook"></i>
                                                    <p>${estab.facebook}</p>
                                                </li>
                                                <li><i class="ion-social-instagram"></i>
                                                    <p>${estab.instagram}</p>
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
    let requestURL = baseUrl+'estabs_load?'+myurl.searchParams;
    getCafes(requestURL)
}





