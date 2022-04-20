export default () => {
    const yMap = document.querySelector('.map');

    if (yMap) {
        ymaps.ready(function () {
            var myMap = new ymaps.Map(
                'map',
                {
                    center: [55.762738, 37.751278],
                    zoom: 16,
                    controls: [],
                    behaviors: [
                        'drag',
                        'dblClickZoom',
                        'rightMouseButtonMagnifier',
                        'multiTouch',
                    ],
                },
                {
                    searchControlProvider: 'yandex#search',
                }
            );

            myMap.geoObjects.add(
                new ymaps.Placemark(
                    [55.762738, 37.751278],
                    {
                        // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
                        balloonContentHeader: 'StenbergPro',
                        balloonContentBody:
                            'г. Москва, Электродный проезд, 6с1, 6 этаж, офис 18',
                        balloonContentFooter:
                            'Телефон: <a href="88003014632">8 (800) 301-46-32</a> <br> Для москвы: <a href="84951252579">8 (495) 125-25-79</a>, Доп.телефон: <a href="+79104867070">+7 (910) 486-70-70</a><br> E-mail: <a href="mailto:info@sbpaneli.ru">info@sbpaneli.ru</a>',
                        hintContent: 'StenbergPro',
                    },
                    {
                        // Опции.
                        // Необходимо указать данный тип макета.
                        iconLayout: 'default#image',
                        // Своё изображение иконки метки.
                        iconImageHref:
                            '/wp-content/themes/stenberg/assets/files/icons/svg/icon--pin.svg',
                        // Размеры метки.
                        iconImageSize: [50, 62.16],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).
                        iconImageOffset: [-25, -58],
                    }
                )
            );
        });
    }
};
