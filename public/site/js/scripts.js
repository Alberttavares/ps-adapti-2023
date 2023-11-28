const perfilBtn = document.getElementById('perfil-bt');
    perfilBtn.addEventListener('click', function() {
        window.location.href = 'http://127.0.0.1:8000/dashboard'
})

const darkModeButton = document.querySelector('.b-darkmode');
const body = document.querySelector('body');

darkModeButton.addEventListener('click', () => {
  body.classList.toggle('dark-mode');
});
