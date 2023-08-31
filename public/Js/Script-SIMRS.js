// var swiper = new Swiper(".mySwiper", {
//   slidesPerView: 1,
//   spaceBetween: 30,
//   loop: true,
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
// });
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    centerSlide:'true',
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets:true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints:{
        0:{
          slidesPerView:1,
        },
        800:{
          slidesPerView:1,
        },
        900:{
          slidesPerView:2,
        },
        1100:{
            slidesPerView:2,
        }
      },
  });


  document.addEventListener('DOMContentLoaded', function() {
    let loadMoreBtn = document.querySelector('.button-pelajar-modul');
    let loadLessBtn = document.querySelector('.btn-less');
    let currentItem = 8;

    loadMoreBtn.addEventListener('click', () => {
        let boxes = document.querySelectorAll('.card-modul-container');

        for (var i = currentItem; i < currentItem + 8 && i < boxes.length; i++) {
            boxes[i].style.display = 'flex';
        }

        currentItem += 8;

        if (currentItem >= boxes.length) {
            loadMoreBtn.style.display = 'none';
            // loadLessBtn.style.display = 'inline-block';
        }
    });

    loadLessBtn.addEventListener('click', () => {
        let boxes = document.querySelectorAll('.card-modul-container');

        for (var i = boxes.length - 1; i >= currentItem - 8; i--) {
            boxes[i].style.display = 'none';
        }

        currentItem -= 8;

        if (currentItem <= 8) {
            loadMoreBtn.style.display = 'inline-block';
            // loadLessBtn.style.display = 'none';
        }
    });
});