$(window).on('load', function () {
    // remove preloader class when the page is actually loaded
    $('.preloader').addClass('loaded');

    // preloaded when links are clicked
    $('a').click(function () {
        event.preventDefault();
        var url = $(this).attr('href');
        $('.preloader').removeClass('loaded');
        setTimeout(function(){
            location.href = url
        },1000)
    })
})