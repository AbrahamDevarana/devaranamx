const Swipe = new Swiper('.mySwiper', {
    effect: "fade",
    autoplay: {
        delay: 5000,
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
        delay: 5000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


const royal_view = document.getElementById("royal-view")
const desarrollos = document.getElementById("desarrollos")
const pics = document.querySelectorAll(".parall")


window.addEventListener('scroll', function(e){
    let yPos = window.scrollY 
    pics[0].classList.remove("translate-x-4")
    pics[0].classList.remove("-translate-y-4")
    if(yPos > royal_view.offsetTop && yPos < desarrollos.offsetTop ){
        pics[0].classList.add("translate-x-4")
        pics[0].classList.add("-translate-y-4")
            
    }

    pics[1].classList.remove("scale-y-90")
    pics[1].classList.remove("scale-x-105")
    if(yPos > royal_view.offsetTop && yPos < desarrollos.offsetTop ){
        pics[1].classList.add("scale-y-90")
        pics[1].classList.add("scale-x-105")
            
    }
    pics[2].classList.remove("-translate-x-4")
    pics[2].classList.remove("translate-y-4")
    if(yPos > royal_view.offsetTop && yPos < desarrollos.offsetTop ){
        pics[2].classList.add("-translate-x-4")
        pics[2].classList.add("translate-y-4")
            
    }

})


