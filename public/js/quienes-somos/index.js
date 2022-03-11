

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

    