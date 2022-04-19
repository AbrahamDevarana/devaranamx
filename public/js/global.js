
const btn = document.querySelector("#btnResponsiveMenu");
const menu = document.querySelector(".mobile-menu");

const imgOpen = document.querySelector("#imgOpen");
const imgClose = document.querySelector("#imgClose");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    imgOpen.classList.toggle("hidden")
    imgClose.classList.toggle("hidden")

    setTimeout(() => {
        menu.classList.toggle("opacity-0"); 
    }, 200);
});


const socialBtn = document.querySelector('#social')
const socialGroup = document.querySelectorAll(".socialGroup")

socialBtn.addEventListener("click", () => {
    socialGroup.forEach( item => {
        // item.classList.toggle("hidden")
        item.classList.toggle("-right-96")
        item.classList.toggle("right-4")
        setTimeout(() => {
        }, 100);
    })

})

window.addEventListener('scroll', function(e){
    menuColors()
})

window.onload = function() {
    menuColors()
  };

const menuColors = () => {
    const navigation = document.getElementById("navigation")
    const homeIcon = document.getElementById("homeIcon")
    const devaranaLogoBg = document.getElementById("devaranaLogoBg")
    const headerSize = document.getElementById("header")
    const headLink = document.querySelectorAll(".headLink")
    let yPos = window.scrollY

    const urlPath = window.document.location.pathname
    if(headerSize){
        if(yPos > headerSize.offsetHeight - 120){
            navigation.classList.add("bg-devarana-pearl")
            navigation.classList.remove("bg-devarana-blue")
            navigation.classList.add("text-devarana-graph")
            navigation.classList.remove("text-devarana-pearl")
            homeIcon.classList.add("sm:fill-devarana-blue")
            homeIcon.classList.remove("sm:fill-devarana-pearl")
            if ( urlPath === "/" ){
                navigation.classList.remove("bg-transparent")
                navigation.classList.add("bg-devarana-pearl")
            }

            headLink.forEach(item => {
                if(!item.classList.contains('after:bg-devarana-salmon')){
                    item.classList.add("after:bg-devarana-blue")
                }
                if(item.classList.contains('after:bg-devarana-pearl')){
                    item.classList.remove("after:bg-devarana-pearl")
                    item.classList.add("after:bg-devarana-blue")
                }
            })
            
            
            devaranaLogoBg.style.width = "150px"
            devaranaLogoBg.style.height = "65px"
            devaranaLogoBg.style.backgroundImage = "url(img/logos/DevaranaLogo.png)"
          
        }else{
            navigation.classList.remove("bg-devarana-pearl")

            if ( urlPath === "/" ){
                navigation.classList.remove("bg-transparent")
            }else {
                navigation.classList.add("bg-devarana-blue")
            }

            navigation.classList.remove("text-devarana-graph")
            navigation.classList.add("text-devarana-pearl")
            homeIcon.classList.remove("sm:fill-devarana-blue")
            homeIcon.classList.add("sm:fill-devarana-pearl")

            headLink.forEach(item => {
                if(!item.classList.contains('after:bg-devarana-salmon')){
                    item.classList.remove("after:bg-devarana-blue")
                    item.classList.add("after:bg-devarana-pearl")
                }
                    item.classList.remove("after:bg-devarana-blue")
                    
              
                
            })    
            devaranaLogoBg.style.backgroundImage = "url(img/logos/Isotipo_blanco.png)"
            devaranaLogoBg.style.width = "50px"
            devaranaLogoBg.style.height = "50px"
            
        }
    }
}