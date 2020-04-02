$(document).ready(function($) {
    "use strict";
    // Add class active
    let path = window.location.href;
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });
    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
});

//Use DataTable
/*  $(document).ready(function() {
  $('#dataTable').DataTable();
});*/
