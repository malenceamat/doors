<section class="map-section relative">

    <div class="map-wrapper">
        <script src="https://api-maps.yandex.ru/2.1/?load=package.full&amp;lang=ru-RU"></script>
        <div id="mapexMap" style="width:100%;height:100%;"></div>
        <script type="text/javascript">
            ymaps.ready(function () {
                var mapexMap = new ymaps.Map('mapexMap', {
                        center: [55.658069447568, 37.54007454993],
                        zoom: 16,
                        controls: ['zoomControl']
                    }),


                    myPlacemark = new ymaps.Placemark(
                        [55.658081578467, 37.540117465274],
                        {
                            "iconContent": "",
                            "balloonContentBody": "\u041c\u043e\u0441\u043a\u0432\u0430 \u0443\u043b. \u041a\u0430\u043b\u0443\u0436\u0441\u043a\u0430\u044f, 80",
                            "balloonContentHeader": ""
                        }, {
                            // Опции.
                            // Необходимо указать данный тип макета.
                            iconLayout: 'default#image',
                            // Своё изображение иконки метки.
                            iconImageHref: '/assets/template/images/marker.png',
                            // Размеры метки.
                            iconImageSize: [39, 56],
                            // Смещение левого верхнего угла иконки относительно
                            // её "ножки" (точки привязки).
                            iconImageOffset: [-20, -56]
                        });
                mapexMap.behaviors.disable('scrollZoom');
                mapexMap.geoObjects.add(myPlacemark);


            });
        </script>
    </div>

</section>
