(function() {
  console.log('js is running');

  // let slideIndex = 0;

  // Get Elements
  // const leftArrow = document.getElementsByClassName('arrow-left')[0];
  // const rightArrow = document.getElementsByClassName('arrow-right')[0];
  // const slides = document.getElementsByClassName('testimonial-card-container');

  // Event listener
  // leftArrow.addEventListener("click", onLeftArrowClick);
  // rightArrow.addEventListener("click", onRightArrowClick);

  // function onLeftArrowClick(e) {
  //   e.preventDefault();
  //   console.log("left click");
  // }

  // function onRightArrowClick(e) {
  //   e.preventDefault();
  //   console.log("right click");
  // }

  var swiper = new Swiper('.swiper-container',  {
    // observer: true,
    // observeParents: true,
    // slidesPerView: 1,
    // cssMode: true,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    mousewheel: false,
    keyboard: true,
   
  });
  console.log(swiper);
})();