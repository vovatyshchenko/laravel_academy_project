document.addEventListener("DOMContentLoaded", function(event) {
    let slids = document.querySelectorAll('.carousel-item');
    let slids_dot = document.querySelectorAll('.target');
    for (i = 1; i <= slids.length; i++){
        slids[i].classList.remove('active');
        slids_dot[i].classList.remove('active');
    }
});

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
