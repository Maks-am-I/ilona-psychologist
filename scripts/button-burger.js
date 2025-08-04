const button = document.getElementById('button-burger');
const menu = document.getElementById('nav-menu');

button.addEventListener('click', () => {
    button.classList.toggle('active');
    menu.classList.toggle('active');

    console.log('hello')
})

document.addEventListener('click', (e) => {
    if (!menu.contains(e.target) && !button.contains(e.target)) {
      menu.classList.remove('active');
      button.classList.remove('active');
    }
});