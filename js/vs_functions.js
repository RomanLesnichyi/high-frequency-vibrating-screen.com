
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



/*

     $('.MultiFile-fileUpload').wrapAll("<div class='wrapper-MultiFile-fileUpload MultiFile-applied'></div>");
     $('.wrapper-MultiFile-fileUpload').append('<span class="MultiFile-title"> Прикрепить файл к письму</span>');
     $('#UpTo3Files').MultiFile(5);


*/




     ///////////////////////////////////////////////////////////////
     //  плейер на видео
     // Video.js - делаем видео адаптивным
     // https://blogpost.pp.ua/css_jquery/114
        /*
         (function ($) {
         // Добавляем переменные
         var myPlayer = $('#my-video'),  // Наше видео
         aspectRatio = 9 / 16;  // Сечение плеера (коэффициент соотношения сторон)

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









//-----------------------------------------------------------//
///////////////////////////////////////////////////////////////
 });





/*
$(document).ready(function() {
    alert("Метод ready()");
});


<!--  Contact Form 7
================================================== -->

    jQuery(document).ready(function($){


    });


<!--  Tab
================================================== -->
$(document).ready(function() {
    $('#mytab a[href="#tab1"]').tab('show');
});
*/