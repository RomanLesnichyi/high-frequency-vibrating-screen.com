
 $(document).ready(function() {
///////////////////////////////////////////////////////////////
//-----------------------------------------------------------//


     ///////////////////////////////////////////////////////////////
     function randomColor () {
         return ('#' + ((Math.random() * 0x1000000) | 0x1000000).toString(16).substr(1));
     }

     $(".rc").each(function(){
         $(this).css({"border":"2px solid "+randomColor() , "background-color": randomColor(), "color": randomColor(),  })
     });
     ///////////////////////////////////////////////////////////////


     ///////////////////////////////////////////////////////////////
     function fileName(fullPath) {
         return ('' + fullPath).replace(/^.*[\\\/]/, '');
     }

     ///////////////////////////////////////////////////////////////
     /* при нажатии на ссылку, содержащую Thumbnail открытие модального окна
     $(function() {
         //при нажатии на ссылку, содержащую Thumbnail
         $('.wrapper-panel-photos a.thumbnail').click(function(e) {
             //отменить стандартное действие браузера
             e.preventDefault();
             //присвоить атрибуту scr элемента img модального окна
             //значение атрибута scr изображения, которое обёрнуто
             //вокруг элемента a, на который нажал пользователь
             $('#image-modal .modal-body img').attr('src', $(this).find('img').attr('src'));
             //открыть модальное окно
             $("#image-modal").modal('show');
         });
         //при нажатию на изображение внутри модального окна
         //закрыть его (модальное окно)
         $('#image-modal .modal-body img').on('click', function() {
             $("#image-modal").modal('hide')
         });
     });
    */

     ///////////////////////////////////////////////////////////////
     /* при нажатии на ссылку, содержащую Thumbnail открытие модального окна*/
     $('.wrapper-panel-photos a.thumbnail').click(function(e) {
         //отменить стандартное действие браузера
         e.preventDefault();

         var pathImg = $(this).find('img').attr('src') ;
         var fileNameImg = pathImg.substring(pathImg.lastIndexOf('/')+1,pathImg.length);
         var pathPart1Img = pathImg.substring(0,pathImg.lastIndexOf('/')+1);
         var fileNameFullImg = fileNameImg.substring(0,fileNameImg.lastIndexOf('_')+1) + '1152.jpg';

         $('#image-modal .modal-body img').attr('src', pathPart1Img+fileNameFullImg);
         //открыть модальное окно
         $("#image-modal").modal('show');
     });
     //при нажатию на изображение внутри модального окна
     //закрыть его (модальное окно)
     $('#image-modal .modal-body img').on('click', function() {
         $("#image-modal").modal('hide')
     });
     ///////////////////////////////////////////////////////////////


     ///////////////////////////////////////////////////////////////
     // анимация  animate.css при наведение
     function animate(elem){
         var effect = elem.data("effect");
         if(!effect || elem.hasClass(effect)) return false;
         elem.addClass(effect);
         setTimeout( function(){
             elem.removeClass(effect);
         }, 1000);
     }
     $(".animated").mouseenter(function() {
         animate($(this));
     });

     ///////////////////////////////////////////////////////////////




     ///////////////////////////////////////////////////////////////
     //  плейер на видео
     // Video.js - делаем видео адаптивным
     // https://blogpost.pp.ua/css_jquery/114
        /*
         (function ($) {
         // Добавляем переменные
         var myPlayer = $('#video_1'),  // Наше видео
         aspectRatio = 4 / 3;  // Сечение плеера (коэффициент соотношения сторон)

         // Функция, меняющая соотношение
         function resizeVideoJS() {
         var myPlayerWidth = myPlayer.parent().outerWidth(), // Требуемая ширина
         myPlayerHeight = myPlayerWidth * aspectRatio; // Требуемая высота

         myPlayer.width(myPlayerWidth).height(myPlayerHeight); // Устанавливаем размеры
         }

         // При загрузке видео
         myPlayer.ready(function () {
         resizeVideoJS(); // Инициируем функцию
         });

         // При изменении ширины окна
         $(window).resize(function () {
         resizeVideoJS(); // Инициируем функцию
         });
         })(jQuery);
        */

     ///////////////////////////////////////////////////////////////



     Royal_Preloader.config({
         mode:           'number',
         showProgress: true,
         showPercentage: true,
         background:     '#f4f6f9'
     });

     ///////////////////////////////////////////////////////////////


     $(function(){
         var hash = window.location.hash;
         hash && $('ul.nav a[href="' + hash + '"]').tab('show');

         $('.nav-tabs a').click(function (e) {
             $(this).tab('show');
             var scrollmem = $('body').scrollTop();
             window.location.hash = this.hash;
             $('html,body').scrollTop(scrollmem);
         });
     });




//-----------------------------------------------------------//
///////////////////////////////////////////////////////////////
 });