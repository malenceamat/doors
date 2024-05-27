$(document).ready(function() {
    // Получаем данные из атрибута data-gallery-images
    var galleryImages = $('.fotorama').data('galleryImages');
    // Преобразуем данные в формат, подходящий для fotorama
    var fotoramaData = galleryImages.map(function (image, index) {
        return {
            img: image.src,
        };
    });

    $('.fotorama').fotorama({
        data: fotoramaData,
        nav: 'thumbs' // Добавляем настройку nav: 'thumbs' в fotorama
    });
});

$(document).ready(function() {
    var $fotorama = $('.fotorama').fotorama({
        nav: 'thumbs'
    }).data('fotorama'); // Получаем экземпляр Fotorama

    var thumbnails = $('.color-element'); // Получаем все миниатюры

    thumbnails.each(function(index) {
        $(this).on('click', function() {
            $fotorama.show(index); // Отображаем слайд с индексом, соответствующим индексу миниатюры
        });
    });
});
