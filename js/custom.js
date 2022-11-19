
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


// $('#choose_srv_Modal, #choose_loc_Modal, #forgot_psw_Modal, #user_login_Modal, #cart_view_Modal, #checkout_Modal').on('show.bs.modal', function () {
//     $('body').addClass('hide-overflow');
// });

// $('#choose_srv_Modal, #forgot_psw_Modal, #user_login_Modal, #cart_view_Modal, #checkout_Modal').on('hide.bs.modal', function () {
//     $('body').removeClass('hide-overflow');
// });

// $('#choose_loc_Modal').on('hidden.bs.modal', function () {
//     $('body').addClass('modal-open');
// })


// $('#choose_srv_Modal .service_head').on('click', function () {
//     $('#choose_srv_Modal .service_head').removeClass('active');
//     $(this).addClass('active');
//     $('#choose_srv_Modal .col-12 .append-box').removeClass('d-block');
//     $($(this).attr("data-target")).addClass('d-block');
//     $('#choose_srv_Modal .service_subhead').removeClass('active');
//     $('#choose_srv_Modal .append-subbox').removeClass('d-block');

// });

// $($('#choose_srv_Modal .service_head.active').attr("data-target")).addClass('d-block');

// $('#choose_srv_Modal .service_subhead').on('click', function () {
//     $('#choose_srv_Modal .service_subhead').removeClass('active');
//     $(this).addClass('active');
//     $('#choose_srv_Modal .col-12 .append-subbox').removeClass('d-block');
//     $($(this).attr("data-target")).addClass('d-block');


// });

// $($('#choose_srv_Modal .service_subhead.active').attr("data-target")).addClass('d-block');


// $('.tip-wrapper .tips button').on('click', function () {
//     $(this).addClass('active');
//     $(this).siblings('button').removeClass('active');
// });

// $('.tip-wrapper input').on('focus', function () {
//     $(this).parents('.tip-wrapper').find('button').removeClass('active')
// })

// $('.redeem input').on('click', function () {
//     if ($(this).prop('checked')) {
//         $(this).parents('.redeem').find('.redeem-text').slideDown()
//     } else {
//         $(this).parents('.redeem').find('.redeem-text').slideUp()
//     }
// })


// $(".payment-card input").on("click", function () {
//     if ($(this).hasClass('has-input')) {
//         $('#card-input-box').slideDown();
//     } else {
//         $('#card-input-box').slideUp();
//     }
// });




// // add to cart modal 

// $('.toppings-drop .drop-head').on('click', function () {
//     $(this).next('.drop-content').slideToggle();
//     $(this).find('.icon i').toggleClass('rotate-180');
// })

// $('.qty-count .add-btn').on('click', function () {
//     incrementValue();
// });

// $('.qty-count .minus-btn').on('click', function () {
//     decrementValue();
// });

// function incrementValue() {
//     var value = parseInt(document.getElementById('cart_value').value, 10);
//     value = isNaN(value) ? 0 : value;
//     if (value < 10) {
//         value++;
//         document.getElementById('cart_value').value = value;
//     }
// }
// function decrementValue() {
//     var value = parseInt(document.getElementById('cart_value').value, 10);
//     value = isNaN(value) ? 0 : value;
//     if (value > 1) {
//         value--;
//         document.getElementById('cart_value').value = value;
//     }

// };

