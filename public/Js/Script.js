
var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 50,
  // freeMode: true,
  centerSlide:'true',
  fade: 'true',
  grabCursor:'true',
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets:true,
  },
  breakpoints:{
    0:{
      slidesPerView:1,
    },
    520:{
      slidesPerView:2,
    },
    950:{
      slidesPerView:3,
    },
  },
});

// carousel detail modul

// const carouselSlide = document.getElementById('carouselSlide');
// const carouselItems = carouselSlide.getElementsByClassName('carousel-item');
// let currentIndex = 0;

// function moveCarousel(){
//   const slidePosition = -currentIndex * (carouselItems[0].offsetWidth +10);
//   carouselSlide.style.transform = `translateX(${slidePosition}px)`;
// }

// function nextSlide(){
//   currentIndex++;
//   if(currentIndex >= carouselItems.length - 1) {
//     currentIndex = 0;
//   }
//   moveCarousel();
// }

// //mengatur interval slide 
// setInterval(nextSlide, 3000);
const carouselSlide = document.getElementById('carouselSlide');
const carouselItems = carouselSlide.getElementsByClassName('carousel-item-2');
let currentIndex = 0;

function moveCarousel() {
  const slidePosition = -currentIndex * (carouselItems[0].offsetWidth + 10);
  carouselSlide.style.transform = `translateX(${slidePosition}px)`;
}

function nextSlide() {
  currentIndex++;
  if (currentIndex >= carouselItems.length - 1) {
    currentIndex = 0;
  }
  moveCarousel();
}

// Mengatur interval untuk berganti slide setiap 3 detik
setInterval(nextSlide, 3000);

var swiper = new Swiper(".swiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});