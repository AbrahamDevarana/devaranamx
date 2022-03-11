

const tabsToggler = document.querySelectorAll(".tabs-button")
    tabsToggler.forEach( element => {
        element.addEventListener("click", function(e) {

            e.preventDefault()
            // Clean border
            sibilings = element.parentNode.children            
            for (let i = 0; i < sibilings.length; i++) {
                sibilings[i].classList.remove("border-b-devarana-pink")
            }

            // Ocultar Elementos
            const tab = this.dataset.id
            const tabDivs = document.querySelectorAll(".tabs-div")
            tabDivs.forEach(element => {
                element.classList.add("hidden")
                element.classList.add("opacity-0")
            });
            // Mostrar Elemento Seleccionado
            const selectedTab = document.querySelector(`#${tab}-div`)
            selectedTab.classList.remove("hidden")
            setTimeout(() => {
                selectedTab.classList.remove("opacity-0") 
                this.classList.add("border-b-devarana-pink")
            }, 100);
            
        }) 
    });

    
const valores = document.querySelectorAll(".valores")
const arrayImg = ['bg-oficinas-devarana-1','bg-oficinas-devarana-2','bg-oficinas-devarana-3','bg-oficinas-devarana-4','bg-oficinas-devarana-5','bg-oficinas-devarana-6','bg-oficinas-devarana-7']
const bgGeneral = document.querySelector("#bgGeneral")
    valores.forEach( (element, index) => {{
        element.addEventListener('mouseenter', function(e){
            // bgGeneral.classList.remove(`${arrayImg[index]}`)
            arrayImg.forEach( element => {
                bgGeneral.classList.remove(element)
            })
            bgGeneral.classList.add(`${arrayImg[index]}`)
        })
        bgGeneral.addEventListener('mouseleave', function(e){
            bgGeneral.classList.add(`${arrayImg[0]}`)
            bgGeneral.classList.remove(`${arrayImg[index]}`)
        })
    }})



const Swipe = new Swiper('.mySwiper', {
    scrollbar: {
        el: ".swiper-scrollbar",
        },
    effect: "fade",
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },

});
    