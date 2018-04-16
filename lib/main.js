const current = document.querySelector('#current');
const imgs = document.querySelectorAll('.imgs img');
// const dot = document.querySelectorAll('.dot');
const prevArrow = document.querySelector('.prev');
const nextArrow = document.querySelector('.next');
const currentImg = document.querySelector('#current');
const imgURIs = ["img/1.jpg", "img/2.jpg", "img/3.jpg", "img/4.jpg", "img/5.jpg", "img/6.jpg" , "img/7.jpg", "img/8.jpg", "img/9.jpg"];
const opacity = 0.6;

//set first image opacity
// imgs[0].style.opacity = opacity;

//alternate ES6 way: const[current, imgs] = [document.querySelector('#current'), document.querySelectorAll('.imgs img')];

imgs.forEach(img => img.addEventListener('click', imgClick));
prevArrow.addEventListener('click', prevClick);
nextArrow.addEventListener('click', nextClick);
// dot.addEventListener('click', currentSlide);

function imgClick(e){
    
    if(current.src != e.target.src){
        //clear previously selected image
        imgs.forEach(img => (img.style.opacity = 1));

        //assign clicked image to display
        current.src = e.target.src

        //add fade-in class
        current.classList.add('fade-in');

        //remove fade-in class after few seconds
        setTimeout(() => current.classList.remove('fade-in'), 500)

        //change opacity to var
        // e.target.style.opacity = opacity;
    }
}

function prevClick(){
    const currentIndex = imgURIs.indexOf(current.attributes.src.textContent);
    if(currentIndex > 0){
        current.src = imgURIs[currentIndex - 1];
    }else{
        current.src = imgURIs[imgURIs.length - 1];
    }
    // current.style.opacity = opacity;
}

function nextClick(){
    const currentIndex = imgURIs.indexOf(current.attributes.src.textContent);
    if(currentIndex < (imgURIs.length - 1)){
        current.src = imgURIs[currentIndex + 1];
    }else{
        current.src = imgURIs[0];
    }

    //change opacity to var
    // current.style.opacity = opacity;
}

// // Thumbnail image controls
// function currentSlide(n) {
//     showSlides(slideIndex = n);
//   }
  
//   function showSlides(n) {
//     var i;
//     var dots = document.getElementsByClassName("dot");
//     if (n > imgs.length) {slideIndex = 1}
//     if (n < 1) {slideIndex = slides.length}
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
//     }
//     slides[slideIndex-1].style.display = "block";
//     dots[slideIndex-1].className += " active";
//   } 