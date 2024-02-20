import vars from './_vars';

// Helper functions:
// import {throttle} from './functions/throttle';

// Plugins (NPM modules and uploaded files):
import Swiper, {Navigation, Pagination, Autoplay, Thumbs} from 'swiper/bundle'; // import Swiper bundle with all modules installed
// available Swiper.js modules = [Virtual, Keyboard, Mousewheel, Navigation, Pagination, Scrollbar, Parallax, Zoom, Lazy, Controller, A11y, History, HashNavigation, Autoplay, Thumbs, FreeMode, Grid, Manipulation, EffectFade, EffectCube, EffectFlip, EffectCoverflow, EffectCreative, EffectCards]
import './vendors/jquery.nice-select.min.js'; // jQuery Nice Select
import {Fancybox} from "@fancyapps/ui"; // Fancybox

jQuery(document).ready(function ($) {
	"use strict";

	/**
	 * Tweak for mobiles (full height)
	 */
	// const fixFullheight = () => {
	// 	const vh = window.innerHeight * 0.01;
	// 	vars.htmlEl.style.setProperty('--vh', `${vh}px`);
	// };
	//
	// fixFullheight();
	// const fixHeight = throttle(fixFullheight);
	// window.addEventListener('resize', fixHeight);


	/**
	 * Force load of all lazy-loading images
	 */
	setTimeout(function () {
		$('.lazyload.loading').removeClass('loading').addClass('loaded');
	}, 3000);


	/**
	 * Nice select
	 */
	// do not activate NiceSelect on those pages, where it might conflict with Select2
	if (!$('body').hasClass('woocommerce-account')) {
		$('select').niceSelect();
	}


	/**
	 * Trigger NiceSelect update after Woocommerce Update variations
	 */
	if ($(".variations_form").length > 0) {
		$(".variations_form").on("woocommerce_variation_has_changed", function () {
			$('.variations_form select').niceSelect('update');
		});
	}


	/**
	 * Slider Images
	 */
	document.querySelectorAll('.slider-partners').forEach(slider => {
		const wrapper = slider.closest('.partners-wrapper');
		const swiper = new Swiper(slider, {
			loop: true,
			slidesPerView: 3,
			spaceBetween: 30,
			pagination: {
				el: slider.querySelector('.swiper-pagination'),
				clickable: true,
			},
			breakpoints: {
				640: {
					slidesPerView: 4,
					spaceBetween: 20,
				},
				768: {
					slidesPerView: 6,
					spaceBetween: 30,
				},
				1024: {
					slidesPerView: 10,
				},
			},
			navigation: {
				nextEl: wrapper.querySelector('.swiper-button-next'),
				prevEl: wrapper.querySelector('.swiper-button-prev'),
			},
			on: {
				// lazy load images
				slideChange: function () {
					try {
						lazyLoadInstance.update();
					} catch (e) {
					}
				}
			}
		});

	});
	/**
	 * Slider reviews
	 */
	document.querySelectorAll('.reviews-slider').forEach(slider => {
		const swiper = new Swiper(slider, {

			slidesPerView: 1,
			spaceBetween: 30,
			pagination: {
				el: slider.querySelector('.swiper-pagination'),
				clickable: true,
			},
			breakpoints: {
				768: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
			},
			navigation: {
				nextEl: slider.querySelector('.swiper-button-next'),
				prevEl: slider.querySelector('.swiper-button-prev'),
			},
			on: {
				// lazy load images
				slideChange: function () {
					try {
						lazyLoadInstance.update();
					} catch (e) {
					}
				}
			}
		});

	});
	// JS Lazyload fix for images on the first screen.
	// This code should run after all the code is initiated.
	// $(window).trigger('scroll');

	const i = 1;
	console.log(i);
	const words = 'orange';
	console.log(words);
	(function () {
		let admin, name;
		name = 'Vasilij';
		admin = name;
		console.log(admin);
	})();

	(function () {
		let planetName = [3.123, 4];
		let personName = 'Olga';
		console.log(planetName);
		console.log(typeof planetName);
	})();
	let userAge = '72' / '2';
	console.log(userAge);
	console.log(typeof userAge);
	let userAgeN = 72 / 0;
	console.log(userAgeN);
	console.log(typeof userAgeN);
	let userOleg = 26;
	let olegInfo = `Person : ${userOleg}`;
	console.log(olegInfo);

	// (function () {
	// 	let userName = prompt('what is you name?');
	// 	console.log(userName);
	// })();
	let random;
	const randomBtn = document.querySelector(".js-drink-button");
	const randomResult = document.querySelector(".ba-random-result");

	randomBtn.addEventListener('click', function () {
		// get random
		// random = Math.random() * 10;
		// console.log(random);
		// random = Math.floor(random) + 1;
		// // game
		// console.log(random);
		// if(Math.random(random) > 0.5) {
		// 	random = 'orel';
		// } else {
		// 	random = 'reshka';
		// }
		// Game Casino
		// var num1, num2;
		// num1 = Math.random() * 6;
		// num2 = Math.random() * 6;
		//
		// num1 = Math.ceil((num1));
		// num2 = Math.ceil((num2));
		// random = num1 + " : " + num2;
		// random = `Result is : ${num1} : ${num2}`;
		//
		// 	randomResult.textContent = random;

		// beetween_gray
		// const num1 = +prompt('Enter random number');
		// const num2 = +prompt('Enter random number');
		// let max , min;
		// if(num1 > num2){
		// 	max = num1;
		// 	min = num2;
		// } else {
		// 	max = num2;
		// 	min = num1;
		// }
		//
		// const randomArb = Math.random() * (max - min) + min;
		// randomResult.textContent = Math.floor(randomArb);

		// Термальный
		// оператор
// 		let result,
// 			a = 2,
// 			b = 7;
// 		// if (a + b > 4) {
// 		// 	result = 'Mnogo';
// 		// } else {
// 		// 	result = 'Malo';
// 		// }
//
// 		  result = (a + b > 4) ? 'Mnogo' : 'Malo';
// console.log(result);
	});
	// let userAnswer = prompt('Kakoe nazvanie JavaScript?') ;
	// if (userAnswer.toLowerCase() === 'ecmascript'){
	// 	alert('ty krut!');
	// }else {
	// 	alert('Idi uchi Js');
	// };


	function checkVisitor() {
		const userAnswer = prompt('Kto prishel?');
		console.log(userAnswer);

		if (typeof userAnswer !== 'string') {
			alert('otmena');
			return;
		}

		if (  typeof userAnswer === 'string' && userAnswer.toLowerCase() !== 'admin') {
			alert('ya vas ne znayu');
			return;
		}

		const passAnswer = prompt('password?');

		if (!passAnswer) {
			alert('otmena');
			return;
		}

		if (passAnswer !== 'Black vlastelin') {
			alert('password ne veren');
			return;
		}

		alert('Dobro pozalovat');
	}

	checkVisitor();


});
