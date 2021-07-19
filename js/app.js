// Оверлэй

const filters = document.getElementById('getfilters');
const allContent = document.querySelector('body');
const divOfOverlay = document.querySelector('.overlay');
const closeOverlay = document.querySelector('.overlay-close');

filters.addEventListener('click', function(evt){
	evt.preventDefault();
	allContent.style.overflowY="hidden";
	divOfOverlay.classList.add('active')
});

closeOverlay.addEventListener('click', function(evt){
	allContent.style.overflowY="";
	divOfOverlay.classList.remove('active');
});

//=================

// Фильтры

const filterOvL = document.querySelector('.filter-buttons__type');
let autor, type;

let locS = JSON.parse(localStorage.getItem('Task2Render'));
console.log(locS);

if(locS === null){
	autor = 'all';
	type = 'all';
} else {
	autor = locS.autor;
	type = locS.type;
}

if (type === 'book'){
	document.querySelector('button[data-filter-type="book"]').classList.add('type-active');
} else if (type === 'cours'){
	document.querySelector('button[data-filter-type="cours"]').classList.add('type-active');
}

const options = document.querySelectorAll('option[data-filter-author]');
	options.forEach(option => {
		const textOption = option.textContent;
		if(textOption === autor){			
			option.setAttribute('selected', 'selected');
		}
	});


filterOvL.addEventListener('click', function(evt){
	const tagOfEl = evt.target.tagName.toLowerCase();
	if(tagOfEl === 'select'){
		autor = evt.target.options[evt.target.selectedIndex].textContent;
	} else if (tagOfEl === 'button') {		
			
			if(type !== 'all'){
				if (type === 'book' && evt.target.dataset.filterType === 'cours'){
					// При нажатии на "Курсы" - удаляются "Книги"
					document.querySelector('button[data-filter-type="book"]').classList.remove('type-active');
					evt.target.classList.add('type-active');
					type = evt.target.dataset.filterType;
				} else if (type === 'book' && evt.target.dataset.filterType === 'book'){
					evt.target.classList.remove('type-active');
					type = 'all';
				} else if (type === 'cours' && evt.target.dataset.filterType === 'book'){
					// При нажатии на "Книги" - удаляются "Курсы"
					document.querySelector('button[data-filter-type="cours"]').classList.remove('type-active');
					evt.target.classList.add('type-active');
					type = evt.target.dataset.filterType;					
				} else if (type === 'cours' && 
					evt.target.dataset.filterType === 'cours'){
					evt.target.classList.remove('type-active');
					type = 'all';
				}

			} else {
				evt.target.classList.add('type-active');	
				type = evt.target.dataset.filterType;	
			}		
		}
	let task2render = {autor, type};
	localStorage.setItem('Task2Render', JSON.stringify(task2render));
});

//=================

//Menu

let iconMenu = document.querySelector(".icon-menu");
if (iconMenu != null) {
	let delay = 500;
	let menuBody = document.querySelector(".menu__body");
	iconMenu.addEventListener("click", function (e) {
		if (unlock) {
			body_lock(delay);
			iconMenu.classList.toggle("_active");
			menuBody.classList.toggle("_active");
		}
	});
}
function menu_close() {
	iconMenu = document.querySelector(".icon-menu");
	let menuBody = document.querySelector(".menu__body");
	iconMenu.classList.remove("_active");
	menuBody.classList.remove("_active");
}

//=================

//BodyLock

function body_lock(delay) {
	let body = document.querySelector("body");
	if (body.classList.contains('_lock')) {
		body_lock_remove(delay);
	} else {
		body_lock_add(delay);
	}
}

function body_lock_remove(delay) {
	let body = document.querySelector("body");
	if (unlock) {
		let lock_padding = document.querySelectorAll("._lp");
		setTimeout(() => {
			for (let index = 0; index < lock_padding.length; index++) {
				const el = lock_padding[index];
				el.style.paddingRight = '0px';
			}
			body.style.paddingRight = '0px';
			body.classList.remove("_lock");
		}, delay);

		unlock = false;
		setTimeout(function () {
			unlock = true;
		}, delay);
	}
}

function body_lock_add(delay) {
	let body = document.querySelector("body");
	if (unlock) {
		let lock_padding = document.querySelectorAll("._lp");
		for (let index = 0; index < lock_padding.length; index++) {
			const el = lock_padding[index];
			el.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
		}
		body.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
		body.classList.add("_lock");

		unlock = false;
		setTimeout(function () {
			unlock = true;
		}, delay);
	}
}