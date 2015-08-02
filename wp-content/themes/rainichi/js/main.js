$(document).ready(function() {
    var swiper = new Swiper('.slides', {
        autoplay: 10000,
        pagination: '.swiper-pagination',
        autoplayDisableOnInteraction: false
    });

    var swiper = new Swiper('.swiper-container', {
        pagination: '.info-pagination',
        autoplayDisableOnInteraction: true
    });

});


//$(window).resize(function(){
    if ($(window).width() <= 768){
        $(document).ready(function() {
            $('.content').insertBefore('.sidebar');
        });
    }

    if ($(window).width() <= 480){
        $(document).ready(function() {
            $('.teacher-img-2').insertBefore('.teacher-info-2');
            $('.share-img-2').insertBefore('.share-info-2');
        });
    }
//});