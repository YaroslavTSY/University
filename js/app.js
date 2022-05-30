import * as functions from "./modules/functions.js";

functions.isWebp();
functions.isMobile;


//! Checking Mobile or PC device
if (functions.isMobile.any()) {
	document.body.classList.add('_touch');
	//! Opening second menu (add class "_active" while click on point) 
	let menuArrows = document.querySelectorAll('.menu__open-link')
	if (menuArrows.length > 0) {
		for (let index = 0; index < menuArrows.length; index++) {
			const menuArrow = menuArrows[index];
			menuArrow.addEventListener("click", function (e) {
				menuArrow.classList.toggle('_active');
			});
		}
	}
} else {
	document.body.classList.add('_pc');
}

//! Menu Burger
let iconMenu = document.querySelector('.menu__icon');
if (iconMenu) {
	const menu = document.querySelector('.menu__body');
	iconMenu.addEventListener('click', function (e) {
		document.body.classList.toggle('_lock')
		iconMenu.classList.toggle('_active');
		menu.classList.toggle('_active');
	});
}

//! Show/Hide more News
let newsItems = document.querySelectorAll('#item__hidden');
let buttonMore = document.querySelector('.body-news__more');
buttonMore.addEventListener('click', function () {
	newsItems.forEach(el => el.classList.toggle('_hidden'));
	buttonMore.classList.toggle('_active');
	if (buttonMore.contains(document.querySelector('.showed'))) {
		buttonMore.innerHTML = `<a href="##" class="body-news__show-more">
		Показати ще </a>`
	} else {
		buttonMore.innerHTML = `<a href="##" class="body-news__show-more showed">
		Приховати
	</a>`
	}

})
// if (newsItems.length > 0) {
// 	for (let index = 0; index < newsItems.length; index++) {
// 		const newsItem = newsItems[index];

// 		buttonMore.addEventListener('click') function(e) {
// 			buttonMore.classList.toggle('_active');
// 			newsItem.classList.toggle('item__hiden');
// 		}
// 	}
// }

// window.onload = function () {
// 	//Yandex map's imported from map.js
// 	map
// }







