window.onload = function() {
	console.log('js is running');

	// add uk-scroll attribute to links in header menu
	const menuLinks = document.querySelectorAll( '.navbar-header-links li a' );
	menuLinks.forEach( setScroll );

	function setScroll( anchorLink ) {
		anchorLink.setAttribute( 'uk-scroll', '' );
	}

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

	const target = document.querySelector( '.home-hero' );
	const scrollTopBtn = document.querySelector( '.scroll-to-top' );

	let options = {
		rootMargin: '0px',
		threshold: [ 0, 0.5, 1 ]
	};

	let callback = function( entries) {
		entries.forEach( function( entry ) {
			if( entry.intersectionRatio > 0.5 ) {
				scrollTopBtn.classList.remove( 'show-scroll-btn' );
			} else {
				scrollTopBtn.classList.add( 'show-scroll-btn' );
			}
		});
	}

	const observer = new IntersectionObserver(callback, options);
	observer.observe(target);


};