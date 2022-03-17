

const tabsToggler = document.querySelectorAll(".tabs-button")
    tabsToggler.forEach( element => {
        element.addEventListener("click", function(e) {

            e.preventDefault()
            // Clean border
            sibilings = element.parentNode.children            
            for (let i = 0; i < sibilings.length; i++) {
                sibilings[i].classList.remove("border-b-devarana-pink")
                sibilings[i].classList.add("opacity-40")
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
                this.classList.remove("opacity-40")
            }, 100);
            
        }) 
    });

    
const valores = document.querySelectorAll(".valores")
const arrayImg = ['OFICINAS-DEVARANA-1','OFICINAS-DEVARANA-2','OFICINAS-DEVARANA-3','OFICINAS-DEVARANA-4','OFICINAS-DEVARANA-5','OFICINAS-DEVARANA-6','OFICINAS-DEVARANA-7']
// const arrayImg = ['bg-oficinas-devarana-1','bg-oficinas-devarana-2','bg-oficinas-devarana-3','bg-oficinas-devarana-4','bg-oficinas-devarana-5','bg-oficinas-devarana-6','bg-oficinas-devarana-7']
const bgGeneral = document.querySelector("#bgGeneral")
    valores.forEach( (element, index) => {{
        element.addEventListener('mouseenter', function(e){
            // bgGeneral.classList.remove(`${arrayImg[index]}`)
            arrayImg.forEach( element => {
                bgGeneral.classList.remove(element)
            })
            // bgGeneral.classList.add(`${arrayImg[index]}`)
            bgGeneral.style.backgroundImage = `url("img/quienes-somos/${arrayImg[index]}.jpg")`
        })
        bgGeneral.addEventListener('mouseleave', function(e){
            // bgGeneral.classList.add(`${arrayImg[0]}`)
            bgGeneral.style.backgroundImage = ``
            bgGeneral.style.backgroundImage = `url("img/quienes-somos/${arrayImg[0]}.jpg")`
            // bgGeneral.classList.remove(`${arrayImg[index]}`)

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
    