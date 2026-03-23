<section class="product-section">
  <div class="product-container">

    <aside class="left-panel">
      <h2>CURATED SELECTION</h2>
      <blockquote>
        “Best quality liquor I've ever had. Fast delivery and exceptional service!”
        <footer>— J. Rogan</footer>
      </blockquote>
      <button class="btn-browse">BROWSE LIQUOR →</button>
    </aside>

    <div class="carousel-area">
      <button class="nav-arrow nav-prev" id="prevBtn" disabled>
        <img src="images/left-button_1.png" alt="Previous">
      </button>

      <div class="carousel-viewport">
        <div class="carousel-track" id="carousel">

          <!-- CARD -->
          <article class="card">
            <img src="images/Glenmorangie_bottle.png" alt="">
            <div class="bottle_info">
              <h3>GLENMORE<br>HIGHLAND SINGLE MALT</h3>
              <span>2013: Scotland</span>
              <span>ABV: 43%</span>
            </div>
          </article>

          <article class="card">
            <img src="images/oldkentucky.png" alt="">
            <div class="bottle_info">
              <h3>OLD KENTUCKY<br>BOURBON</h3>
              <span>2019: Kentucky, USA</span>
              <span>ABV: 45%</span>
            </div>
          </article>

          <article class="card">
            <img src="images/Golden_Snow.png" alt="">
            <div class="bottle_info">
              <h3>IMPERIAL<br>GOLDEN SNOW<br>VODKA</h3>
              <span>2021: Moscow</span>
              <span>ABV: 40%</span>
            </div>
          </article>

          <article class="card">
            <img src="images/Don_Diego.png" alt="">
            <div class="bottle_info">
              <h3>DON DIEGO<br>REPOSADO</h3>
              <span>2020: Jalisco</span>
              <span>ABV: 38%</span>
            </div>
          </article>

        </div>
      </div>

      <button class="nav-arrow nav-next" id="nextBtn">
        <img src="images/right-button_1.png" alt="Next">
      </button>
    </div>

  </div>
</section>

<script>
  const track = document.getElementById('carousel');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const viewport = document.querySelector('.carousel-viewport');

  const card = track.querySelector('.card');
  const gap = 32;

  const step = (card.offsetWidth + gap) / 3; // 👈 HALF CARD STEP
  let position = 0;

  function updateButtons() {
    const maxTranslate =
      track.scrollWidth - viewport.offsetWidth;

    prevBtn.disabled = position <= 0;
    nextBtn.disabled = position >= maxTranslate - 1;
  }

  function moveCarousel() {
    track.style.transform = `translateX(-${position}px)`;
    updateButtons();
  }

  nextBtn.addEventListener('click', () => {
    position += step;
    moveCarousel();
  });

  prevBtn.addEventListener('click', () => {
    position -= step;
    if (position < 0) position = 0;
    moveCarousel();
  });

  window.addEventListener('resize', () => {
    position = 0;
    moveCarousel();
  });

  updateButtons();
</script>





<style>
 /* ================= PRODUCT CAROUSEL SECTION ================= */
/* SECTION */
.product-section {
  background: #000;
  padding: 60px 40px;
}

.product-container {
  
 
  
  display: flex;

  align-items: center;
}

/* LEFT PANEL */
.left-panel {
  max-width: 350px;
  color: #fff;
  
}

.left-panel h2 {
  font-family: Bebas Neue;
  font-size: 36px;
  letter-spacing: 0.25em;
  margin-bottom: 24px;
}

.left-panel blockquote {
  font-family: Inter;
  line-height: 1.8;
  opacity: 0.85;
}

.btn-browse {
  margin-top: 32px;
  background: none;
  border: 1px solid #fff;
  color: #fff;
  padding: 12px 28px;
  font-family: Bebas Neue;
  letter-spacing: 0.2em;
  cursor: pointer;
  cursor: url("images/pointinghand.svg") 2 2, pointer;
}
.btn-browse:hover {
    background-color: #fff;
    color: #000;
    transition: all 0.4s ease;

}

/* CAROUSEL AREA */
.carousel-area {
  position: relative;
  flex: 1;
  display: flex;
  align-items: center;
  max-width: 800px;
}

.carousel-viewport {
  overflow: hidden;
  width: 100%;
}

.carousel-track {
  display: flex;
  gap: 32px;
  transition: transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
}

/* CARD */
.card {
  width: 180px;
  flex-shrink: 0;
  color: #fff;
  text-align: center;
}

.card img {
  height: 220px;
  object-fit: contain;
  margin-bottom: 20px;
}

.bottle_info h3 {
  font-family: Bebas Neue;
  font-size: 20px;
  letter-spacing: 0.1em;
}

.bottle_info span {
  display: block;
  font-family: Inter;
  font-size: 13px;
  opacity: 0.7;
}

/* ARROWS */
.nav-arrow {
  background: none;
  border: none;
  cursor: pointer;
  opacity: 0.7;
}

.nav-arrow:disabled {
  opacity: 0.3;
  cursor: default;
}

.nav-prev {
  margin-right: 24px;
}

.nav-next {
  margin-left: 24px;
    cursor: url("images/pointinghand.svg") 2 2, pointer;

}

.nav-arrow img {
  width: 42px;  
  cursor: url("images/pointinghand.svg") 2 2, pointer;

}

/* RESPONSIVE */
@media (max-width: 900px) {
  .product-container {
    flex-direction: column;
  }

  .carousel-area {
    width: 100%;
  }
}


</style>