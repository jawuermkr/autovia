const heroSlides = document.querySelectorAll(".heroCarousel-slide");
const heroDots = document.querySelectorAll(".heroCarousel-dot");

let heroIndex = 0;

function heroShowSlide(index){

    heroSlides.forEach(slide=>slide.classList.remove("active"));
    heroDots.forEach(dot=>dot.classList.remove("active"));

    heroSlides[index].classList.add("active");
    heroDots[index].classList.add("active");
}

document.querySelector(".heroCarousel-next").onclick=function(){

    heroIndex++;
    if(heroIndex>=heroSlides.length) heroIndex=0;

    heroShowSlide(heroIndex);

}

document.querySelector(".heroCarousel-prev").onclick=function(){

    heroIndex--;
    if(heroIndex<0) heroIndex=heroSlides.length-1;

    heroShowSlide(heroIndex);

}

heroDots.forEach((dot,i)=>{

    dot.onclick=function(){

        heroIndex=i;
        heroShowSlide(heroIndex);

    }

});

setInterval(function(){

    heroIndex++;

    if(heroIndex>=heroSlides.length)
        heroIndex=0;

    heroShowSlide(heroIndex);

},5000);
