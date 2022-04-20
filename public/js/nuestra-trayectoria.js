


(function($) {
 
    var SliceSlider = {
      
      /**
       * Settings Object
       */
      settings: {
        delta:              0,
        currentSlideIndex:  0,
        scrollThreshold:    2,
        slides:             $('.proSlide'),
        numSlides:          $('.proSlide').length,
        navPrev:            $('.js-prev'),
        navNext:            $('.js-next'),
      },
      
      /**
       * Init
       */
      init: function() {
        s = this.settings;
        this.bindEvents();
      },
      
      /**
       * Bind our click, scroll, key events
       */
      bindEvents: function(){
        
        // Scrollwheel & trackpad
        s.slides.on({
          'DOMMouseScroll mousewheel' : SliceSlider.handleScroll
        });
        // On click prev
        s.navPrev.on({
          'click' : SliceSlider.prevSlide
        });
        // On click next
        s.navNext.on({
          'click' : SliceSlider.nextSlide
        });
        // On Arrow keys
        $(document).keyup(function(e) {
          // Left or back arrows
          if ((e.which === 37) ||  (e.which === 38)){
            SliceSlider.prevSlide();
          }
          // Down or right
          if ((e.which === 39) ||  (e.which === 40)) {
            SliceSlider.nextSlide();
          }
        });
      },
      
      /** 
       * Interept scroll direction
       */
      handleScroll: function(e){
  
        // Scrolling up
        if (e.originalEvent.detail < 0 || e.originalEvent.wheelDelta > 0) { 
  
          s.delta--;
       
          if ( Math.abs(s.delta) >= s.scrollThreshold) {
            SliceSlider.prevSlide();
          }
        }
   
        // Scrolling Down
        else {
   
          s.delta++;
   
          if (s.delta >= s.scrollThreshold) {
            SliceSlider.nextSlide();
          }
        }
   
        // Prevent page from scrolling
        return false;
      },
  
      /**
       * Show Slide
       */
      showSlide: function(){ 
        // reset
        s.delta = 0;
        // Bail if we're already sliding
        if ($('body').hasClass('is-sliding')){
          return;
        }
        // Loop through our slides
        s.slides.each(function(i, slide) {
  
          // Toggle the is-active class to show slide
          $(slide).toggleClass('is-active', (i === s.currentSlideIndex)); 
          $(slide).toggleClass('is-prev', (i === s.currentSlideIndex - 1)); 
          $(slide).toggleClass('is-next', (i === s.currentSlideIndex + 1)); 
          
          // Add and remove is-sliding class
          $('body').addClass('is-sliding');
  
          setTimeout(function(){
              $('body').removeClass('is-sliding');
          }, 1000);
        });
      },
  
      /**
       * Previous Slide
       */
      prevSlide: function(){
        
        // If on first slide, loop to last
        if (s.currentSlideIndex <= 0) {
          s.currentSlideIndex = s.numSlides;
        }
        s.currentSlideIndex--;
        
        SliceSlider.showSlide();
      },
  
      /**
       * Next Slide
       */
      nextSlide: function(){
        
        s.currentSlideIndex++;
     
        // If on last slide, loop to first
        if (s.currentSlideIndex >= s.numSlides) { 
          s.currentSlideIndex = 0;
        }
   
        SliceSlider.showSlide();
      },
    };
    SliceSlider.init();
  })(jQuery);


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
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});

const Swipe3 = new Swiper('.mySwiper3', {
    effect: "fade",
    autoplay: {
        delay: 3000,
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
