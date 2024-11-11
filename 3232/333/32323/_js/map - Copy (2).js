$(document).ready(function() {


if($(".main_map").length > 0){
    mainMap();
}

if($(".map2").length > 0){
    Map2();
}



   function mainMap(){
        ymaps.ready(function () {

        var map = new ymaps.Map('map', {
            center: [55.753484, 37.616768],
            controls: [],
            behaviors: ['default', 'scrollZoom'],  
            zoom: 10,
        }),


        // создадим массив геообъектов
        myGeoObjects = [];
        myGeoObjects[0] = new ymaps.GeoObject({
            geometry: {type: "Point", coordinates: [55.757932, 37.616697]},
            properties: {
                clusterCaption: 'Геообъект №1',
                 balloonContentBody: document.getElementById("infobox1")
            }
        });
        myGeoObjects[1] = new ymaps.GeoObject({
            geometry: {type: "Point", coordinates: [55.758518, 37.618510]},
            properties: {
                clusterCaption: 'Геообъект №2',
                balloonContentBody: document.getElementById("infobox2")
            }
        });
        myGeoObjects[2] = new ymaps.GeoObject({
            geometry: {type: "Point", coordinates: [55.758868, 37.617383]},
            properties: {
                clusterCaption: 'Геообъект №3',
                balloonContentBody:document.getElementById("infobox3")
            }
        });

        myGeoObjects[3] = new ymaps.GeoObject({
            geometry: {type: "Point", coordinates: [55.800085, 37.575292]},
            properties: {
                clusterCaption: 'Геообъект №4',
                balloonContentBody:document.getElementById("infobox4")
            }
        });

        myGeoObjects[4] = new ymaps.GeoObject({
            geometry: {type: "Point", coordinates: [55.786688, 37.516632]},
            properties: {
                clusterCaption: 'Геообъект №5',
                balloonContentBody:document.getElementById("infobox5")
            }
        });

        myGeoObjects[5] = new ymaps.GeoObject({
            geometry: {type: "Point", coordinates: [55.822747, 37.467137]},
            properties: {
                clusterCaption: 'Геообъект №6',
                balloonContentBody:document.getElementById("infobox6")
            }
        });

         myGeoObjects[6] = new ymaps.GeoObject({
            geometry: {type: "Point", coordinates: [55.846424, 37.586290]},
            properties: {
                clusterCaption: 'Геообъект №7',
                balloonContentBody:document.getElementById("infobox7")
            }
        });

          myGeoObjects[7] = new ymaps.GeoObject({
            geometry: {type: "Point", coordinates: [55.821717, 37.663282]},
            properties: {
                clusterCaption: 'Геообъект №8',
                balloonContentBody:document.getElementById("infobox8")
            }
        });
        myGeoObjects[8] = new ymaps.GeoObject({
            geometry: {type: "Point", coordinates: [55.776798, 37.845205] },
            properties: {
                clusterCaption: 'Геообъект №9',
                balloonContentBody:document.getElementById("infobox9"),
                iconImageHref: '_i/_icons/marker_icon2.png',
            }
        });

        

        
        //конец массив геообъектов
        //иконка кластеров
        var clusterIcons = [
         {
             href: '_i/_icons/cluster_icon1.png',
             size: [30, 30],
             offset: [0, 0],
             hideIcon: false
         },
         ],
        //иконка кластеров
        clusterer = new ymaps.Clusterer({
            clusterIcons: clusterIcons,
            clusterHideIconOnBalloonOpen: false,
            geoObjectHideIconOnBalloonOpen: false
        });

        clusterer.options.set({
            gridSize: 100,
            maxZoom :12,
            iconImageHref: '_i/_icons/marker_icon1.png',
            iconImageSize: [20, 20],
            iconImageOffset: [0, 0]
        });
        clusterer.add(myGeoObjects);

       
        map.geoObjects.add(clusterer);
        map.controls.add('zoomControl');


        });
    }
 
/* function Map2(){
        ymaps.ready(function () {
        var map = new ymaps.Map('map2', {
            center: [55.830977, 37.629796],
            controls: [],
            behaviors: ['default', 'scrollZoom'],  
            zoom: 16,
        }),

        // создадим массив геообъектов
        myGeoObjects = [];
        myGeoObjects[0] = new ymaps.GeoObject({
            geometry: {type: "Point", coordinates: [55.830977, 37.629796]},
            properties: {
                clusterCaption: 'Геообъект №1',
                 balloonContentBody: document.getElementById("infobox1")
            }
        });
        
        //конец массив геообъектов
        //иконка кластеров
        var clusterIcons = [
         {
             href: '_i/_icons/cluster_icon1.png',
             size: [30, 30],
             offset: [0, 0],
             hideIcon: false
         },
         ],
        //иконка кластеров
        clusterer = new ymaps.Clusterer({
            clusterIcons: clusterIcons,
            clusterHideIconOnBalloonOpen: false,
            geoObjectHideIconOnBalloonOpen: false
        });

        clusterer.options.set({
            gridSize: 100,
            maxZoom :12,
            iconImageHref: '_i/_icons/marker_big.png',
            iconImageSize: [128, 117],
            iconImageOffset: [0, 0]
        });
        clusterer.add(myGeoObjects);


        map.geoObjects.add(clusterer);
        map.controls.add('zoomControl');

        });
    }   

*/
    

});