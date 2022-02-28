// Grab HTML Elements
const btn = document.querySelector("#btnResponsiveMenu");
const menu = document.querySelector(".mobile-menu");

const imgOpen = document.querySelector("#imgOpen");
const imgClose = document.querySelector("#imgClose");

// Add Event Listeners
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