$(document).ready(function(){
    $("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top,
            bottom = $(id).offset().bottom;
    $('body,html').animate({scrollTop: top}, 1000),
    $('body,html').animate({scrollBottom: bottom}, 500);
    });
});


