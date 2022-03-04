window.addEventListener('scroll', function(e){
    menuColors()
})

window.onload = function() {
    menuColors()
  };

const menuColors = () => {
    const navigation = document.getElementById("navigation")
    const devaranaLogoBg = document.getElementById("devaranaLogoBg")
    const headerSize = document.getElementById("header")

    let yPos = window.scrollY

    if(yPos > headerSize.offsetHeight - 30){
        navigation.classList.add("bg-devarana-pearl")
        navigation.classList.remove("bg-transparent")
        navigation.classList.add("text-devarana-gray")
        navigation.classList.remove("text-devarana-pearl")

        
        devaranaLogoBg.style.width = "100px"
        devaranaLogoBg.style.height = "80px"
        devaranaLogoBg.style.backgroundImage  = "url(img/logos/DevaranaLogo.png)"
      
    }else{
        navigation.classList.remove("bg-devarana-pearl")
        navigation.classList.add("bg-transparent")
        navigation.classList.remove("text-devarana-gray")
        navigation.classList.add("text-devarana-pearl")

        devaranaLogoBg.style.backgroundImage  = "url(img/logos/Isotipo_blanco.png)"
        devaranaLogoBg.style.width = "50px"
        devaranaLogoBg.style.height = "50px"
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

    const slider = document.querySelectorAll(".sliderShow")
    const count = slider.length
    let slide = 0
    const winSize = window.length

    if(winSize <= 769){
        
        slider[0].classList.remove("text-devarana-blue")
        slider[0].classList.add("text-devarana-pearl")
        
    }
    setInterval(() => {

        if(winSize <= 769){
            slider.forEach(element => {
                element.classList.remove("text-devarana-pearl")
                element.classList.add("text-devarana-blue")
            });
            slider[slide].classList.add("text-devarana-pearl")
            slider[slide].classList.remove("text-devarana-blue")
        }

        slider.forEach(element => {
            element.classList.remove("bg-devarana-blue")
        });
        slider[slide].classList.add("bg-devarana-blue")
        slider[slide].classList.remove("bg-transparent")
        
        slide++
        if(slide >= 3){
            slide = 0
        }
    }, 1500);

    
