const Swipe = new Swiper('.mySwiper', {
    scrollbar: {
        el: ".swiper-scrollbar",
      },
    effect: "fade",
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
});



const Swipe2 = new Swiper('.mySwiper2', {
    scrollbar: {
        el: ".swiper-scrollbar",
      },
    effect: "fade",
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
});
