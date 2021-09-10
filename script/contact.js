var mapContainer = document.getElementById("map"), // 지도를 표시할 div
    mapOption = {
        center: new kakao.maps.LatLng(33.240184816436255, 126.56234229851651), // 지도의 중심좌표
        level: 3, // 지도의 확대 레벨
    };

var map = new kakao.maps.Map(mapContainer, mapOption);

// 마커가 표시될 위치입니다
var markerPosition = new kakao.maps.LatLng(
    33.240184816436255,
    126.56234229851651
);

// 마커를 생성합니다
var marker = new kakao.maps.Marker({
    position: markerPosition,
});

// 마커가 지도 위에 표시되도록 설정합니다
marker.setMap(map);

var iwContent =
        '<div style="font-size: 13px; color: darkblue; font-weight: bold;">SURFARY GUEST HOUSE',
    iwPosition = new kakao.maps.LatLng(33.450701, 126.570667); //인포윈도우 표시 위치입니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    position: iwPosition,
    content: iwContent,
});

// 마커 위에 인포윈도우를 표시합니다. 두번째 파라미터인 marker를 넣어주지 않으면 지도 위에 표시됩니다
infowindow.open(map, marker);
