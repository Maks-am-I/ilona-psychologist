const buttonOpenPopUpConsulting = document.querySelectorAll(".type-consulting__button-open");
const buttonClosePopUpConsulting = document.querySelectorAll(".type-consulting__button-close");
const popUpConsulting = document.querySelectorAll('.type-consulting__pop-up');
const buttonToForm1 = document.getElementById('button-to-form-1');
const buttonToForm2 = document.getElementById('button-to-form-2');
const body = document.body;

buttonClosePopUpConsulting.forEach((item, index) => {
    item.addEventListener('click', () => {
        body.classList.toggle('not-scroll');
        popUpConsulting[index].classList.toggle('visible');
    })
});

[buttonToForm1, buttonToForm2].forEach((item, index) => {
    item.addEventListener('click', () => {
        body.classList.toggle('not-scroll');
        popUpConsulting[index].classList.toggle('visible');
    })
});

buttonOpenPopUpConsulting.forEach((item, index) => {
    item.addEventListener('click', () => {
        body.classList.toggle('not-scroll');
        popUpConsulting[index].classList.toggle('visible');
    })
});