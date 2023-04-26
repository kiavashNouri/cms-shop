import './bootstrap';
// import './management'
// import jQuery from "jquery";
// window.$ = jQuery;
//

import Swiper from 'swiper/bundle';

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".prev-button",
        prevEl: ".next-button",
    },

});



var swiperTwo = new Swiper(".specialOffersSlider", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        type: "fraction",
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        "@0.75": {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        "@1.00": {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        "@1.50": {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    },
    navigation: {
        nextEl: ".prev-button",
        prevEl: ".next-button",
    },
});
var swiper = new Swiper(".myThirdSwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: ".prev-button",
        prevEl: ".next-button",
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        "@0.75": {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        "@1.00": {
            slidesPerView: 4,
            spaceBetween: 10,
        },

        "@1.50": {
            slidesPerView: 5,
            spaceBetween: 10,
        },

    },
});
var swiper = new Swiper(".swiper-popularBrands", {
    watchSlidesProgress: true,
    slidesPerView: 3,
    navigation: {
        nextEl: ".prev-button",
        prevEl: ".next-button",
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        "@0.75": {
            slidesPerView: 5,
            spaceBetween: 10,
        },
        "@1.00": {
            slidesPerView: 7,
            spaceBetween: 40,
        },

        "@1.50": {
            slidesPerView: 9,
            spaceBetween: 50,
        },

    },
});
import zuck from 'zuck.js';




import Swal from 'sweetalert2'
window.Swal = Swal

