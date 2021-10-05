var myMap;
ymaps.ready(init);

function init() {
    myMap = new ymaps.Map('map', {
        center: [55.5387148243105, 37.57338345608881],
        zoom: 10
    }, {
        searchControlProvider: 'yandex#search'
    });

    var myPlacemark = new ymaps.GeoObject({
        geometry: {
            type: "Point",
            coordinates: [55.5387148243105, 37.57338345608881]
        }
    });
    myMap.geoObjects
        .add(myPlacemark)

}