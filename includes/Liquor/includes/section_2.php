<!-- ================= LEGACY SECTION ================= -->
<section class="legacy-section">
  <div class="legacy-inner">

    <!-- Left Column -->
    <div class="legacy-column legacy-text-column">

      <!-- Legacy Groups -->
      <div class="legacy-group">
        <h2>A Legacy in Every Bottle</h2>
        <p>Our journey started decades ago, perfecting the art of distilling with passion and dedication.</p>
      </div>

      <div class="legacy-group">
        <h2>Excellence from Grain to Glass</h2>
        <p>Every step, from sourcing premium ingredients to final packaging, reflects our unwavering commitment to quality.</p>
      </div>

      <!-- Centered Heading with SVG Lines -->
      <div class="centered-heading">
        <img src="images/Line.svg" alt="line left" class="line-svg">
        <h2>Why Our Customers Choose Us</h2>
        <img src="images/Line.svg" alt="line right" class="line-svg">
      </div>

      <!-- Legacy Points -->
      <div class="legacy-point">
        <img src="images/Character.svg" alt="Connoisseurs Icon" class="legacy-icon">
        <div class="legacy-point-text">
          <h2>Trusted by Connoisseurs Worldwide</h2>
          <p>Served 1.000s of customers worldwide.</p>
        </div>
      </div>

      <div class="legacy-point">
        <img src="images/delivery.svg" alt="Shipping Icon" class="legacy-icon">
        <div class="legacy-point-text">
          <h2>Fast & Reliable Shipping</h2>
          <p>We ensure every order reaches you safely and on time, no matter where you are.</p>
        </div>
      </div>

      <div class="legacy-point">
        <img src="images/Plant.svg" alt="Sustainability Icon" class="legacy-icon">
        <div class="legacy-point-text">
          <h2>Sustainability First</h2>
          <p>Eco-friendly production process, supporting a sustainable future for generations to come.</p>
        </div>
      </div>

    </div>

    <!-- Right Column -->
    <div class="legacy-column legacy-image-column">

      <div class="image-block">
        <img src="images/Picture_1.png" alt="Handcrafted" class="image-top">
        <div class="image-group">
          <h3>Handcrafted with Care</h3>
          <p>Each batch is meticulously crafted to deliver an unforgettable experience.</p>
        </div>
      </div>

      <div class="image-block">
        <div class="image-group">
          <h3>Award-Winning Spirits</h3>
          <p>Our liquors have won numerous international awards, recognized for their exceptional taste and quality.</p>
        </div>
        <img src="images/Picture_2.png" alt="Award-winning" class="image-top">
      </div>

    </div>

  </div>
</section>


<style>
    /* ================= LEGACY SECTION ================= */
.legacy-section {
  background: #000;
  color: #fff;
  padding: 120px 40px;
}

.legacy-inner {
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 40px;
}

/* Left Column */
.legacy-text-column {
  display: flex;
  flex-direction: column;
  gap: 24px; /* space between legacy groups and heading */
}

/* Grouped heading + paragraph */
.legacy-group {
  display: flex;
  flex-direction: column;
  gap: 8px; /* space between heading and paragraph */
}

.legacy-text-column h2 {
  font-family: 'Bebas Neue';
  font-size: 24px;
  letter-spacing: 0.12em;
  margin: 0;
}

.legacy-text-column p {
  font-family: 'Inter', sans-serif;
  font-size: 16px;
  line-height: 1.8;
  margin: 0;
}

/* Centered heading with lines */
.centered-heading {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 16px;
  
}

.centered-heading h2 {
  font-family: 'Bebas Neue';
  font-size: 18px;
  margin: 0;
  letter-spacing: 0.25em;
}

.centered-heading .line-svg {
  height: 2px;
  width: 90px;
  object-fit: contain;
}

/* Legacy Points */
.legacy-point {
  display: flex;
  gap: 24px;
  margin-top: 32px;
}

.legacy-point .legacy-icon {
  width: 64px;
  height: 64px;
  flex-shrink: 0;
}

.legacy-point-text {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.legacy-point-text h2 {
  font-family: 'Bebas Neue';
  font-size: 24px;
  margin: 0;
}

.legacy-point-text p {
  font-family: 'Inter', sans-serif;
  font-size: 16px;
  margin: 0;
}

/* Right Column */
.legacy-image-column {
  display: flex;
  flex-direction: column;
  gap: 48px;
}

.image-block {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.image-top {
  width: 100%;
  border-radius: 36px;
  object-fit: cover;
}

.image-group {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.image-group h3 {
  font-family: 'Bebas Neue';
  font-size: 24px;
  letter-spacing: 0.12em;
  margin: 0;
}

.image-group p {
  font-family: 'Inter', sans-serif;
  font-size: 16px;
  line-height: 1.6;
  margin: 0;
}

/* Responsive */
@media screen and (max-width: 900px) {

  .legacy-inner {
    flex-direction: column;
    gap: 60px;
  }

  .legacy-text-column, .legacy-image-column {
    align-items: center;
    text-align: center;
  }

  .legacy-point {
    flex-direction: column;
    align-items: center;
    gap: 16px;
  }

  .legacy-point-text h2,
  .legacy-point-text p,
  .legacy-group h2,
  .legacy-group p {
    text-align: center;
  }

  .centered-heading {
    flex-direction: column;
    gap: 12px;
  }

  .centered-heading .line-svg {
    width: 40px;
  }
}

</style>