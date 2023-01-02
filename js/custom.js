
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

$('#menu-bar').click(function () {
    $('.nav-wrapper').addClass('toggle');
})

$('.nav-wrapper .close').click(function () {
    $('.nav-wrapper').removeClass('toggle');
})
$(document).ready(function () {
    $('.select').niceSelect();

    $('.select').on('change', function () {
        $(this).siblings('.nice-select').find('.current').css({
            'color': 'black',
            'opacity': '1'
        });
    })

});
// Owl carousel testimonial 6th
$('.product_s.owl-carousel').owlCarousel({
    items: 1,
    autoplay: true,
    margin: 50,
    loop: true,
    dots: false,
    nav: true,
    center: true,
    navText: [
        "<span class='fa fa-chevron-left'></span>",
        "<span class='fa fa-chevron-right'></span>",
    ],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        768: {
            items: 1,
        },
        1000: {
            items: 3,
        }
    }
});

const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage() {
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);

const rangeInput = document.querySelectorAll(".range-input input"),
    priceInput = document.querySelectorAll(".price-input input"),
    range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
    input.addEventListener("input", (e) => {
        let minPrice = parseInt(priceInput[0].value),
            maxPrice = parseInt(priceInput[1].value);

        if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
            if (e.target.className === "input-min") {
                rangeInput[0].value = minPrice;
                range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
            } else {
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
            }
        }
    });
});

rangeInput.forEach((input) => {
    input.addEventListener("input", (e) => {
        let minVal = parseInt(rangeInput[0].value),
            maxVal = parseInt(rangeInput[1].value);

        if (maxVal - minVal < priceGap) {
            if (e.target.className === "range-min") {
                rangeInput[0].value = maxVal - priceGap;
            } else {
                rangeInput[1].value = minVal + priceGap;
            }
        } else {
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }
    });
});

function decrease(){
    var qty = $(".qty-input").val();
    if (qty > 1) {
        var new_qty = parseInt(qty) - 1;
        $(".qty-input").val(new_qty);
    }
}

function increase(){
    var qty = $(".qty-input").val();
    var new_qty = parseInt(qty) + 1;
    $(".qty-input").val(new_qty);
}