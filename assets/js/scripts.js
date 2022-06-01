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

	// Intersection observer

	const target = document.querySelector('.home-video');
	const topTarget = document.querySelector('.home-hero');
	const scrollTopBtn = document.querySelector('.scroll-to-top');

	let options = {
		rootMargin: '0px',
		threshold: 1.0
	};

	let displayObserver = new IntersectionObserver(displayScrollToTop, options);
	displayObserver.observe(target);

	let hideObserver = new IntersectionObserver(hideScrollToTop, {threshold: 1});
	hideObserver.observe(topTarget);

	function hideScrollToTop() {
		console.log('hiding the scroll button');
		scrollTopBtn.classList.remove('show-scroll-btn');
	}

	function displayScrollToTop() {
		console.log('observer activated');
		scrollTopBtn.classList.add('show-scroll-btn');
	}

	// window.onscroll = function() {
	// 	scrollFunction()
	// }

	// function scrollFunction() {
	// 	const targetElement = document.querySelector('.home-video');
	// 	const scrollButton = document.querySelector( '.scroll-to-top' );
	// 	console.log('running scroll');
	// 	if (targetElement.scrollTop > 100) {
	// 		scrollButton.classList.remove( 'hide-scroll' );
	// 		console.log('show scroll');
	// 	} else {
	// 		console.log('hide scroll');
	// 		scrollButton.classList.add( 'hide-scroll' );
	// 	}
	// }


};