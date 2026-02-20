import "swiper/css/bundle";
import Swiper from "swiper/bundle";

const swiper = () => {
    //PRODUCTION SWIPER
    const swiper = new Swiper(".production__swiper ", {
        slidesPerView: 1.4,
        spaceBetween: 16,
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 3.5,
                spaceBetween: 20,
            },
        },
        navigation: {
            nextEl: ".production__navigation_next",
            prevEl: ".production__navigation_prev",
        },
    });

    //CERTIFICATES SWIPER
    const certificates = new Swiper(".production__certificates ", {
        slidesPerView: 1.5,
        spaceBetween: 16,
        pagination: {
            el: ".production__pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    });
    //DELIVERY SWIPER
    const cases = new Swiper(".cases__swiper", {
        navigation: {
            nextEl: ".cases__navigation_next",
            prevEl: ".cases__navigation_prev",
        },
        pagination: {
            el: ".cases__pagination",
            clickable: true,
        },
        spaceBetween: 16,
        slidesPerView: 1.4,
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
                pagination: {
                    el: ".cases__pagination",
                    enabled: false,
                },
            },
            1024: {
                slidesPerView: 4.5,
                spaceBetween: 20,
            },
        },
    });
};

export default swiper;
