$(window).scroll(function() {
    if ($(this).scrollTop() > 650){
        $('nav').addClass("fix");
    }
    else{
    $('nav').removeClass("fix");
    }
    $(".nav-item").on("click", function() {
        let $this = $(this)
        $(".nav-item a").removeClass("active");
        $this.addClass("active");
    });
});
