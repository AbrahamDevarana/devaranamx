window.addEventListener('scroll', function(e){
    let yPos = window.scrollY
    const bgHead = document.querySelector("#bgHead")
    const bgBuilding = document.querySelector("#bgBuilding")
    if(yPos > 10){
        bgHead.classList.remove("scale-110", yPos > 10)
        bgBuilding.classList.add("scale-110", yPos > 10 )
    }else{
        bgHead.classList.add("scale-110", yPos > 10)
        bgBuilding.classList.remove("scale-110", yPos > 10 )
    }

    const sizeHead = document.querySelector("#header").offsetWidth
    const picsSomos = document.querySelectorAll(".somosPic")
    
    if(yPos > (sizeHead - (sizeHead * .80 ))){
        picsSomos.forEach( item => item.classList.add('translate-y-6'))
    }else{
        picsSomos.forEach( item => item.classList.remove('translate-y-6'))
    }
})


const swiperColaboradores = new Swiper(".mySwiper", {
  slidesPerView: 3,
  initialSlide: 1,
  centeredSlides: true,
  // autoplay: true,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {

    1024: {
      slidesPerView: 5,
      initialSlide: 3,
    }
    
  }
});
