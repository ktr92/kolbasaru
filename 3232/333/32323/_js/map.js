$(function(){


if($(".main_map").length > 0){
   // mainMap();
}

if($(".map2").length > 0){
    //Map2();
}



   function mainMap(){

       ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                center: [55.751574, 37.573856],
                zoom: 9,
                controls: [],
                behaviors: ['default', 'scrollZoom'],
            }),

			//myMap.setCenter( myMap.getGeoPoint(), 9);
            clusterer = new ymaps.Clusterer({

                clusterHideIconOnBalloonOpen: false,
                geoObjectHideIconOnBalloonOpen: false
            });
            clusterer.createCluster = function (center, geoObjectsNew) {
            // Создаем метку-кластер с помощью стандартной реализации метода.
                var clusterPlacemark = ymaps.Clusterer.prototype.createCluster.call(this, center, geoObjectsNew),
                presets = {};

                console.log(geoObjectsNew);

                for (var i = 0, l = geoObjectsNew.length; i < l; i++) {
                    var placemarkPreset = geoObjectsNew[i].options.get('preset');
                    presets[placemarkPreset] = presets[placemarkPreset] ? presets[placemarkPreset] + 1 : 1;
                }


                var popularPreset;
                for (var preset in presets) {
                    if (!popularPreset || presets[popularPreset] < presets[preset]) {
                        popularPreset = preset;
                    }
                }
                console.log(popularPreset.replace('Icon', 'ClusterIcons'));
                clusterPlacemark.options.set('preset', popularPreset.replace('Icon', 'ClusterIcons'));
                return clusterPlacemark;
            };


            var test = [
                document.getElementById("infobox1").innerHTM, document.getElementById("infobox2").innerHTM,
                document.getElementById("infobox3").innerHTM, document.getElementById("infobox4").innerHTM,
                document.getElementById("infobox5").innerHTML, document.getElementById("infobox6").innerHTML,
                 document.getElementById("infobox1").innerHTM, document.getElementById("infobox2").innerHTM,
                document.getElementById("infobox3").innerHTM, document.getElementById("infobox4").innerHTM,
                document.getElementById("infobox5").innerHTML, document.getElementById("infobox6").innerHTML,
                 document.getElementById("infobox1").innerHTM, document.getElementById("infobox2").innerHTM,
                document.getElementById("infobox3").innerHTM, document.getElementById("infobox4").innerHTM,
                document.getElementById("infobox5").innerHTML, document.getElementById("infobox6").innerHTML,
                 document.getElementById("infobox1").innerHTM, document.getElementById("infobox2").innerHTM,
                document.getElementById("infobox3").innerHTM, document.getElementById("infobox4").innerHTM,
                document.getElementById("infobox5").innerHTML, document.getElementById("infobox6").innerHTML,
                document.getElementById("infobox1").innerHTM, document.getElementById("infobox2").innerHTM,
                document.getElementById("infobox3").innerHTM, document.getElementById("infobox4").innerHTM,
                document.getElementById("infobox5").innerHTML,

            ]

            var getPointData = function (index, test) {
                console.log(index);
                return {
                    balloonContentBody: "<div class='infobox'>" + test[index] + "</div>" ,
                    clusterCaption: 'метка <strong>' + test + '</strong>',
                };
            },
            allowColorsRed = ['red'],
            allowColorsGreen = ['green'],
            getPointOptions = function () {
                return {
                    preset : 'islands#' + allowColorsRed + 'Icon',
                    iconLayout: 'default#image',
                    iconImageHref: '_i/_icons/marker_icon1.png',
                    iconImageSize: [20, 20],
                    iconImageOffset: [0, 0]
                };
            },
            getPointOptionsNew = function () {
                return {
                    preset: 'islands#' + allowColorsGreen + 'Icon',
                    iconLayout: 'default#image',
                    iconImageHref: '_i/_icons/marker_icon2.png',
                    iconImageSize: [20, 20],
                    iconImageOffset: [0, 0]
                };
            },



            points = [

                [55.664352,37.689397], [55.679195,37.600961], [55.673873,37.658425],
                [55.681006,37.605126], [55.876327,37.431744], [55.843363,37.778445],
                [55.875445,37.549348], [55.662903,37.702087], [55.746099,37.434113],
                [55.838660,37.712326], [55.774838,37.415725], [55.871539,37.630223],
                [55.657037,37.571271], [55.691046,37.711026], [55.803972,37.659610],
                [55.616448,37.452759], [55.781329,37.442781], [55.844708,37.748870],
                [55.723123,37.406067], [55.858585,37.484980]
            ],
            pointsNew = [
                [55.831903,37.411961], [55.763338,37.565466], [55.763338,37.565466],
                [55.744522,37.616378], [55.780898,37.642889], [55.793559,37.435983],
                [55.800584,37.675638], [55.716733,37.589988], [55.775724,37.560840],
                [55.822144,37.433781], [55.874170,37.669838], [55.716770,37.482338],
                [55.780850,37.750210], [55.810906,37.654142], [55.865386,37.713329],
                [55.847121,37.525797], [55.778655,37.710743], [55.623415,37.717934],
                [55.863193,37.737000], [55.866770,37.760113], [55.698261,37.730838],
                [55.633800,37.564769], [55.639996,37.539400], [55.690230,37.405853],
                [55.775970,37.512900], [55.775777,37.442180], [55.811814,37.440448],
                [55.751841,37.404853], [55.627303,37.728976], [55.816515,37.597163],

            ],

            geoObjects = [];
            geoObjectsNew = [];


            for(var i=0 , len = points.length; i<len; i++){
                geoObjects[i] = new ymaps.Placemark(points[i], getPointData(i,test),getPointOptions());
            }
            for(var i=0 , len = pointsNew.length; i<len; i++){
                geoObjectsNew[i] = new ymaps.Placemark(pointsNew[i], getPointData(i,test),getPointOptionsNew());
            }

            clusterer.add(geoObjects);
            clusterer.add(geoObjectsNew);
            myMap.geoObjects.add(clusterer);
        });



       /* ymaps.ready(function () {

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


        });*/
    }

  function Map2(){
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


});