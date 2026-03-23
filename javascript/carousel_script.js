const carousel = document.getElementById('carousel');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const cards = carousel.children;

let cardWidth = cards[0].offsetWidth + 10; // card width + gap
let index = 0;
let visibleCards = Math.floor(document.querySelector('.carousel-wrapper').offsetWidth / cardWidth);

function updateButtons() {
  prevBtn.disabled = index === 0;
  nextBtn.disabled = index >= cards.length - visibleCards;
}

function updateCarousel() {
  carousel.style.transform = `translateX(-${index * cardWidth}px)`;
  updateButtons();
}

prevBtn.addEventListener('click', () => {
  if (index > 0) {
    index--;
    updateCarousel();
  }
});

nextBtn.addEventListener('click', () => {
  if (index < cards.length - visibleCards) {
    index++;
    updateCarousel();
  }
});

window.addEventListener('resize', () => {
  cardWidth = cards[0].offsetWidth + 10;
  visibleCards = Math.floor(document.querySelector('.carousel-wrapper').offsetWidth / cardWidth);
  updateCarousel();
});

updateButtons();