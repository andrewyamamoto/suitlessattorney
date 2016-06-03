$(document).ready(function(){
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1){
            $('#navigation').addClass("sticky");
        }
        else{
            $('#navigation').removeClass("sticky");
        }
    });

    $('.carousel').carousel({
        interval: 7000
    });
});
