

function showHeatMap(pointsArr) {

    initLat = (pointsArr.length > 0) ? pointsArr[0].latitude : 24.974067;
    initLng = (pointsArr.length > 0) ? pointsArr[0].longitude : 45.394897;
    heatMapData = [];
    myLatLng = new google.maps.LatLng(initLat, initLng);

    map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 6,
        //mapTypeId: 'satellite'
    });

    for (let i=0; i<pointsArr.length; i++){
        latlng = new google.maps.LatLng(pointsArr[i].latitude, pointsArr[i].longitude);
        heatMapData.push(latlng)
    }

    var heatmap = new google.maps.visualization.HeatmapLayer({
        data: heatMapData
    });
    heatmap.setMap(map);

}
