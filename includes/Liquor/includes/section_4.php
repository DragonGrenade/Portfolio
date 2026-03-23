<!-- ================= COMMITMENT SECTION ================= -->
<section class="commitment-section">
  <div class="commitment-inner">

    <!-- Text Group -->
    <div class="commitment-text">
      <h2>THIS AIN’T A HOBBY – IT’S A COMMITMENT</h2>
      <p>Dedicated to excellence, sustainable sourcing, and unforgettable experiences.</p>
    </div>

    <!-- Button -->
    <a href="about.php" class="commitment-btn">ABOUT US</a>

  </div>
</section>


<style>
    /* ================= COMMITMENT SECTION ================= */
.commitment-section {
  background: #000;
  color: #fff;
  padding: 140px 40px;
}

.commitment-inner {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 48px;
}

/* Grouped Heading + Paragraph */
.commitment-text {
  display: flex;
  flex-direction: column;
  gap: 16px;
  max-width: 720px;
}

.commitment-text h2 {
  font-family: 'Bebas Neue', sans-serif;
  font-size: 48px;
  letter-spacing: 0.12em;
  margin: 0;
}

.commitment-text p {
  font-family: 'Inter', sans-serif;
  font-size: 18px;
  line-height: 1.8;
  margin: 0;
  opacity: 0.9;
}

/* ABOUT US Button */
.commitment-btn {
  font-family: 'Bebas Neue', sans-serif;
  font-size: 14px;
  letter-spacing: 0.2em;
  color: #fff;
  text-decoration: none;
  padding: 14px 36px;
  border: 1px solid #fff;
  background: transparent;
  transition: all 0.25s ease;
  cursor: url("images/pointinghand.svg") 2 2, pointer;
}

.commitment-btn:hover {
  background: #fff;
  color: #000;
}

/* Responsive */
@media screen and (max-width: 900px) {
  .commitment-text h2 {
    font-size: 36px;
  }

  .commitment-text p {
    font-size: 16px;
  }
}

</style>