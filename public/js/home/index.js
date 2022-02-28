window.addEventListener('scroll', function(e){
    menuColors()
})


const menuColors = () => {
    const navigation = document.getElementById("navigation")
    const devaranaLogoBg = document.getElementById("devaranaLogoBg")

    let yPos = window.scrollY

    if(yPos > 100){
        navigation.classList.add("bg-devarana-gray")
        navigation.classList.remove("bg-transparent")
        navigation.classList.add("text-devarana-pearl")
        navigation.classList.remove("text-devarana-gray")

        devaranaLogoBg.style.width = "50px"
        devaranaLogoBg.style.height = "50px"
        devaranaLogoBg.style.backgroundImage  = "url(img/logos/Isotipo_blanco.png)"
      
    }else{
        navigation.classList.remove("bg-devarana-gray")
        navigation.classList.add("bg-transparent")
        navigation.classList.remove("text-devarana-pearl")
        navigation.classList.add("text-devarana-gray")

        devaranaLogoBg.style.backgroundImage  = "url(img/logos/DevaranaLogo.png)"
        devaranaLogoBg.style.width = "150px"
        devaranaLogoBg.style.height = "100px"
    }
}

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

const swiper = new Swiper('.mySwiper', {
    loop: true,
    // lazy: true,
    effect: "fade",
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
      },
});

const secondSwiper = new Swiper('.secondSwiper', {
    loop: true,
    // lazy: true,
    effect: "coverflow",
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
});

