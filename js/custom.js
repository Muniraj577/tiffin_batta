
$(window).scroll(function () {
    if ($(this).scrollTop() >= 300) {
        $('.scroll-to-top').addClass('top-arrow');
        $('.sticky-cart-icon').fadeIn();
        $('.nav-section').addClass('onscroll');
    } else {
        $('.scroll-to-top').removeClass('top-arrow');
        $('.sticky-cart-icon').fadeOut();
        $('.nav-section').removeClass('onscroll');
    }
});
$('.scroll-to-top').on('click', function () {
    $('body,html').animate({
        scrollTop: 0
    }, 2000, 'easeInOutQuint');
});


// aos animation
AOS.init();

// wow animate

new WOW().init();


// tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip({ delay: { "show": 500, "hide": 100 } })
});


// end counter
// Owl carousel of user review Section
$('.testi.owl-carousel').owlCarousel({
    items: 1,
    autoplay: true,
    margin: 10,
    loop: true,
    dots: true,
    nav: true,
    center: true,
    navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        768: {
            items: 1,
        },
        1000: {
            items: 1,
        }
    }
});


// mobile nav
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


// show and hide password
$('.psw-show-btn').on('click', function () {

    if ($(this).hasClass('hide-psw')) {

        $(this).addClass('show-psw').removeClass('hide-psw');
        $(this).prev('input').attr('type', 'text');
        $(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');

    } else if ($(this).hasClass('show-psw')) {

        $(this).prev('input').attr('type', 'password');
        $(this).find('i').addClass('fa-eye-slash');
        $(this).removeClass('show-psw').addClass('hide-psw');
    }

});


// sticky cart

$('.sticky-cart-content .close, .sticky-cart-content .change-order-type').on('click', function () {
    $(this).parents('.sticky-cart-content').removeClass('toggle')
})

$('.cart-icon').on('click', function (e) {
    console.log('clicked');
    e.preventDefault();
    $('.sticky-cart-content').addClass('toggle')
})
$('.cart-counter .qty-btn').on('click', function () {
    $(this).closest('tr').addClass('blocker');
    setTimeout(function () {
        $('tr').removeClass('blocker');
    }, 2000)
})
