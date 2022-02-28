const secondSwiper = new Swiper('.secondSwiper', {
    loop: true,
    // lazy: true,
    effect: "coverflow",
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
});