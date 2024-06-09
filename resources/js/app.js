// Import Css
import '/resources/css/app.css'

// Import Js
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

//Opening navbars
window.onload = function() {
    var navbar = document.getElementById('LeftNavbar');
    var button = document.getElementById('ShowLeftNavbar');
    button.addEventListener('click', function() {
        navbar.classList.toggle('hidden');
    });
};

// theme switcher
const checkbox = document.getElementById('theme-switch');
let chosenTheme = localStorage.getItem('chosenTheme'); // Retrieve stored theme

// Check if chosenTheme is null, if so, check system preferences
if (!chosenTheme) {
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        chosenTheme = 'dark'; // Set chosen theme to dark if system prefers dark mode
    } else {
        chosenTheme = 'light'; // Set chosen theme to light if system prefers light mode
    }
}

// Set data-theme attribute to chosen theme
document.documentElement.setAttribute('data-theme', chosenTheme);

checkbox.checked = chosenTheme === 'dark'; // Set checkbox state based on chosen theme

checkbox.addEventListener('change', function() {
    if (this.checked) {
        chosenTheme = 'dark';
    } else {
        chosenTheme = 'light';
    }
    document.documentElement.setAttribute('data-theme', chosenTheme); // Set data-theme attribute based on checkbox state
    localStorage.setItem('chosenTheme', chosenTheme); // Store chosen theme in local storage
});


