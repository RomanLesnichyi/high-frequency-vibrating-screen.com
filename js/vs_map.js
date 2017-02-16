// скрипт который создаст и отобразит карту Google Maps на странице.

// Определяем переменную map
var map;

// Функция initMap которая отрисует карту на странице
function initMap() {

    // В переменной map создаем объект карты GoogleMaps и вешаем эту переменную на <div id="map"></div>
    map = new google.maps.Map(document.getElementById('map'), {
        // При создании объекта карты необходимо указать его свойства
        // center - определяем точку на которой карта будет центрироваться
        center: {lat: 48.606226, lng: 37.9932682},
        // zoom - определяет масштаб. 0 - видно всю платнеу. 18 - видно дома и улицы города.
        zoom: 14,

        // Добавляем свои стили для отображения карты https://snazzymaps.com
        styles:[{"featureType":"all","elementType":"geometry.fill","stylers":[{"weight":"2.00"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"color":"#9c9c9c"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"all","stylers":[{"lightness":"3"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#29407e"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#c8cddd"},{"weight":"0.50"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"},{"weight":"0.63"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3daec"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#29407e"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]}]
       // styles:[{"featureType":"all","elementType":"geometry.fill","stylers":[{"weight":"2.00"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"color":"#9c9c9c"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"all","stylers":[{"lightness":"3"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#4d6ab8"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#c8cddd"},{"weight":"0.50"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"},{"weight":"0.63"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3daec"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#070707"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]}]
       //styles: [{"featureType":"all","elementType":"labels.text","stylers":[{"saturation":"100"},{"lightness":"92"},{"color":"#002147"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"color":"#002c77"},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#cae2f9"},{"visibility":"on"}]}]
       //styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#8ebfd3"},{"visibility":"on"}]}]
       //styles: [{"featureType":"all","elementType":"geometry.fill","stylers":[{"weight":"2.00"},{"visibility":"on"},{"hue":"#00cbff"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"color":"#9c9c9c"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"hue":"#00c2ff"},{"visibility":"on"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#00ff10"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#00ffcb"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#398cec"},{"visibility":"on"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#000000"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#171717"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#555555"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"hue":"#eeff00"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"on"},{"color":"#cccccc"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#c8d7d4"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#070707"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]}]
       //styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#8eb1e2"},{"visibility":"on"}]}]
       //styles:[{"featureType":"all","elementType":"all","stylers":[{"visibility":"simplified"},{"lightness":"8"}]},{"featureType":"all","elementType":"geometry.fill","stylers":[{"weight":"2.00"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"color":"#9c9c9c"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#c8d7d4"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#070707"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]}]
    });

    // Создаем маркер на карте
    var marker = new google.maps.Marker({

        // Определяем позицию маркера
        position: {lat: 48.606226, lng: 37.9932682},

        // Указываем на какой карте он должен появится. (На странице ведь может быть больше одной карты)
        map: map,

        // Пишем название маркера - появится если навести на него курсор и немного подождать
        title: 'Артемовский Машиностроительный завод "Проммаш"',

        // Укажем свою иконку для маркера
        icon: '/images/ico_map_marker.png'
    });

    // Создаем наполнение для информационного окна
    var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h4 id="firstHeading" class="firstHeading">Проммаш</h4>'+
        '<div id="bodyContent">'+
        '<p>Завод специализируется на производстве промышленного оборудования ' +
        'для переработки и обогащения полезных ископаемых.</p>'+
        '<p><b>Веб-сайт:</b> <a href="http://amz-prommash.com/" target="_blank">amz-prommash.com</a>'+
        '</p>'+
        '</div>'+
        '</div>';

    // Создаем информационное окно
    var infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 320
    });

    // Создаем прослушивание, по клику на маркер - открыть инфо-окно infowindow
    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });

}
