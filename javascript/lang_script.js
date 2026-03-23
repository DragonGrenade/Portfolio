// lang_toggle.js

// Select the toggle link
const langToggle = document.querySelector('.lang-toggle');

// If the toggle exists
if (langToggle) {
  langToggle.addEventListener('click', e => {
    e.preventDefault(); // prevent default link behavior if needed

    // Redirect to toggle language
    window.location.href = langToggle.getAttribute('href');
  });
}
