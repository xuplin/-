
var google;

var redIcon = 'https://maps.google.com/mapfiles/ms/icons/red-dot.png';

// 初始化地圖
function initMap() {
    var mapOptions = {
        zoom: 17,
        center: {lat: 23.562095642089844, lng: 120.47745513916016} 
    };
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    // 這是一個示例位置，你可以根據自己的需求調整
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(23.5619403, 120.47755) , 
        map: map,
        title: '這裡是紅色標記的位置'
    });

    
}

