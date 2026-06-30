const carousel = document.querySelector('#carouselExample');

const bsCarousel = new bootstrap.Carousel(carousel,{

interval:4000,

ride:'carousel',

pause:false,

wrap:true

});