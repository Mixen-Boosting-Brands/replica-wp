// core version + navigation, pagination modules:
import Swiper from "swiper";
import {
    Navigation,
    Pagination,
    Autoplay,
    Mousewheel,
    Scrollbar,
    Thumbs,
} from "swiper/modules";

// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

document.addEventListener("DOMContentLoaded", function () {
    // init Swiper:
    const swiperClientes = new Swiper(".swiper-clientes", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination, Autoplay],

        // Optional parameters
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        loop: false,
        allowTouchMove: true,
        slidesPerView: 2,
        spaceBetween: 15,
        grabCursor: true,

        // breakpoints
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
        },

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },
    });

    // init Swiper:
    const swiperTestimonios = new Swiper(".swiper-testimonios", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination, Autoplay],

        // Optional parameters
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        allowTouchMove: true,
        spaceBetween: 40,
        loop: false,
        grabCursor: true,
        keyboard: {
            enabled: false,
        },
        mousewheel: false,
        slidesPerView: 1,

        breakpoints: {
            576: {
                slidesPerView: 1,
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            992: {
                slidesPerView: 2.5,
                spaceBetween: 40,
                centeredSlides: true,
            },
        },

        on: {
            init: function () {
                if (this.params.slidesPerView === 3) {
                    // Add active class to the central slide on initialization
                    const centerIndex = this.activeIndex + 1;
                    this.slides[centerIndex].classList.add("active");
                }
            },
            slideChange: function () {
                // Only apply the active class when slidesPerView is 3 or more
                if (this.params.slidesPerView === 3) {
                    // Remove active class from all slides
                    this.slides.forEach((slide) => {
                        slide.classList.remove("active");
                    });

                    // Add active class to the central slide
                    const centerIndex = this.activeIndex + 1;
                    this.slides[centerIndex].classList.add("active");
                }
            },
            resize: function () {
                // When the viewport is resized, reset the active class based on the new slidesPerView
                if (this.params.slidesPerView === 3) {
                    const centerIndex = this.activeIndex + 1;
                    this.slides.forEach((slide) => {
                        slide.classList.remove("active");
                    });
                    this.slides[centerIndex].classList.add("active");
                } else {
                    // Remove all active classes if not in 3 slides view
                    this.slides.forEach((slide) => {
                        slide.classList.remove("active");
                    });
                }
            },
        },

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },
    });

    // init Swiper:
    const swiperBlog = new Swiper(".swiper-blog", {
        // configure Swiper to use modules
        modules: [Navigation, Pagination, Autoplay],

        // Optional parameters
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        allowTouchMove: true,
        spaceBetween: 40,
        loop: false,
        grabCursor: true,
        keyboard: {
            enabled: false,
        },
        mousewheel: false,
        slidesPerView: 1,

        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 40,
                centeredSlides: false,
            },
        },

        /*
        on: {
            init: function () {
                if (this.params.slidesPerView === 3) {
                    // Add active class to the central slide on initialization
                    const centerIndex = this.activeIndex + 1;
                    this.slides[centerIndex].classList.add("active");
                }
            },
            slideChange: function () {
                // Only apply the active class when slidesPerView is 3 or more
                if (this.params.slidesPerView === 3) {
                    // Remove active class from all slides
                    this.slides.forEach((slide) => {
                        slide.classList.remove("active");
                    });

                    // Add active class to the central slide
                    const centerIndex = this.activeIndex + 1;
                    this.slides[centerIndex].classList.add("active");
                }
            },
            resize: function () {
                // When the viewport is resized, reset the active class based on the new slidesPerView
                if (this.params.slidesPerView === 3) {
                    const centerIndex = this.activeIndex + 1;
                    this.slides.forEach((slide) => {
                        slide.classList.remove("active");
                    });
                    this.slides[centerIndex].classList.add("active");
                } else {
                    // Remove all active classes if not in 3 slides view
                    this.slides.forEach((slide) => {
                        slide.classList.remove("active");
                    });
                }
            },
        },
         */

        // if we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },
    });
});
