

// Sélectionnez l'icône de menu et le menu
const menuIcon = document.querySelector('.menu-icon');
const menu = document.querySelector('.menu');

// Ajoutez un événement de clic à l'icône de menu
menuIcon.addEventListener('click', function() {
  // Basculez la classe 'open' sur l'icône de menu et le menu
  menuIcon.classList.toggle('open');
  menu.classList.toggle('open');
});
