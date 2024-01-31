(function($) {
    "use strict"; // Start of use strict

    // // Toggle the side navigation
    // $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    //     $("body").toggleClass("sidebar-toggled");
    //     $(".sidebar").toggleClass("toggled");

    //     if ($(".sidebar").hasClass("toggled")) {
    //     $('.sidebar .collapse').collapse('hide');
    //     };
    // });

    // all #sidebar > nav a with .dropdown-item add <i class="fa-solid fa-chevron-left"></i>
    $("#sidebar > nav li.dropdown-item > a").prepend('<i class="fa-solid fa-chevron-left"></i>');

    $("#sidebar > nav li.dropdown-item > a").on('click', function(e) {
        e.preventDefault();
        var is_active = $(this).closest('li').hasClass('active');
        $('li').removeClass('active');
        if (!is_active) {
            $(this).closest('li').addClass('active');
        }else{
            $(this).closest('li').removeClass('active');
        }
    });


    $('#navbar .navbar-item-account img').on('click', function(e) {
        e.preventDefault();
        // toogle show to .account-menu child
        $(this).parent().children('.account-menu').toggleClass('show');
    });


    // DARK MODE /////////////////////////////////////////////////

    $('#navbar .toogle-mode-btn').on('click', function(e) {
        toogleDarkMode();
    });

    function toogleDarkMode() {
        var dark_mode = localStorage.getItem('dark_mode');
        if (dark_mode == 'true') {
            $('body').removeClass('dark-mode');
            $('#navbar .toogle-mode-btn').removeClass('right');
            localStorage.setItem('dark_mode', false);
        }else{
            $('body').addClass('dark-mode');
            $('#navbar .toogle-mode-btn').addClass('right');
            localStorage.setItem('dark_mode', true);
        }
    }

    function initDarkMode(){
        var dark_mode = localStorage.getItem('dark_mode');
        if (dark_mode == 'true') {
            $('body').addClass('dark-mode');
            $('#navbar .toogle-mode-btn').addClass('right');
        }
    }
    initDarkMode();


    // Mobile menu left /////////////////////////////////////////////////
    $('#navbar a.mobile-menu-toogle').on('click', function(e) {
        e.preventDefault();
        $('#sidebar').toggleClass('opened');
        $('#sidebar-secondary').removeClass('opened');
    });

    // Mobile sidebar right /////////////////////////////////////////////////
    $('#mobile-sidebar-secondary span').on('click', function(e) {
        e.preventDefault();
        console.log("click")
        $('#sidebar-secondary').toggleClass('opened');
        $('#sidebar').removeClass('opened');
    });

    $('#sidebar-secondary .mobile-close').on('click', function(e) {
        e.preventDefault();
        $('#sidebar-secondary').removeClass('opened');
    });

})(jQuery);
