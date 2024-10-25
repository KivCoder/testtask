
<head>
  <script src="https://api-maps.yandex.ru/v3/?apikey=8736f74d-00ea-4630-bad2-f16665306da1&lang=ru_RU"></script>
</head>
<body>
    <div id="map" style="width: 600px; height: 400px"></div>
</body>
<script>
//testemplate
//vety nice comment
// ymaps.findOrganization('1019991834').then(
// function (orgGeoObject) {
// console.log('Структура данных огранизации:');
// console.log(orgGeoObject.properties);
// console.log('-------------------------------');

// myMap.geoObjects.add(orgGeoObject);
// orgGeoObject.balloon.open();
// var rating = orgGeoObject.properties.get('rating');
// console.log('Рейтинг:');
// console.log('Оценок: ' + rating.ratings);
// console.log('Обзоров: ' + rating.reviews);
// console.log('Балл: ' + rating.score);
// }
// )
</script>
<script type="text/javascript">
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [55.76, 37.64],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 7
        });
    }
</script>