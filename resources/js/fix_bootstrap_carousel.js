document.addEventListener("DOMContentLoaded", function(event) {
    let slids = document.querySelectorAll('.carousel-item');
    let slids_dot = document.querySelectorAll('.target');
    for (i = 1; i <= slids.length; i++){
        slids[i].classList.remove('active');
        slids_dot[i].classList.remove('active');
    }
});
