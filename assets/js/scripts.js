window.onload = function() {
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

  let swiper = new Swiper('.swiper-container',  {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // observer: true,
    // observeParents: true,
    // slidesPerView: 1,
    // cssMode: true,


    // loop: true,
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },
    // pagination: {
    //   el: '.swiper-pagination',
    //   clickable: true
    // },
    // mousewheel: false,
    // keyboard: true,
   
  });
  console.log('swiper', swiper);

  let heroContainer = document.querySelector( '.home-site-title' );
  let logo = document.querySelector('header .site-branding');

  let ioOptions =  {
    rootMargin: '0px',
    threshold: 0
  }

  let observer = new IntersectionObserver(navScrollDisplay, ioOptions);

  observer.observe(heroContainer)
  console.log('hero', heroContainer);

  function navScrollDisplay(){
    console.log('observer activated')
    logo.classList.toggle('top');
  }
};