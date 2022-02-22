let header__burger = document.querySelector('.header__burger');
let header_menu = document.querySelector('.header__nav');
let back = document.querySelector('body');
let header__list = document.querySelector('.nav__list');


header__burger.onclick = () => {
    header__burger.classList.toggle('active');
    header_menu.classList.toggle('active');

    back.classList.toggle('lock');
}

header__list.onclick = () => {
    header__list.classList.remove('active');
    
    back.classList.toggle('lock');
}