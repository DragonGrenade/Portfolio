const hamburger = document.getElementById("hamburger");
const sideNav = document.getElementById("sideNav");
const overlay = document.getElementById("navOverlay");
const links = Array.from(document.querySelectorAll("#navLinks li"));

function openNav() {
  hamburger.classList.add("active");
  sideNav.classList.add("open");
  overlay.classList.add("visible");

  links.forEach((li, i) => {
    li.style.transitionDelay = `${i * 0.1}s`;
    li.classList.add("visible");
  });
}

function closeNav() {
  hamburger.classList.remove("active");
  sideNav.classList.remove("open");
  overlay.classList.remove("visible");

  links.forEach(li => {
    li.classList.remove("visible");
    li.style.transitionDelay = "0s";
  });
}

hamburger.addEventListener("click", () => {
  if (sideNav.classList.contains("open")) closeNav();
  else openNav();
});

overlay.addEventListener("click", closeNav);