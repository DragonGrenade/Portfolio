<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Store</title>

  <link rel="stylesheet" href="css/top_bar_styles.css">
  <link rel="stylesheet" href="css/nav_styles.css">
  <link rel="stylesheet" href="css/general_styles.css">
  <link rel="stylesheet" href="css/footer_styles.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>

<body>

<!-- ================= TOP BAR ================= -->
<?php include("includes/top_bar.php"); ?>

<!-- ================= HERO / NAV ================= -->
<?php include("includes/nav.php"); ?>

<!-- ================= HERO ================= -->
<section class="store-hero">
  <div class="store-hero-inner">
    <h1>STORE</h1>
    <p class="hero-subtitle">Premium essentials, handcrafted for you</p>
    <div class="hero-divider"></div>
  </div>
</section>

<!-- ================= PRODUCTS GRID ================= -->
<section class="store-section">
  <div class="store-inner">

    <div class="store-grid">

      <div class="store-item animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1593032465171-8b0d85c1746b?w=600&h=600&fit=crop" alt="Leather Jacket">
        <div class="store-content">
          <h3>Classic Leather Jacket</h3>
          <p>$349</p>
          <a href="#" class="cta-box">Add to Cart</a>
        </div>
      </div>

      <div class="store-item animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1600180758895-2b2b1b5c0e39?w=600&h=600&fit=crop" alt="Luxury Watch">
        <div class="store-content">
          <h3>Luxury Watch</h3>
          <p>$599</p>
          <a href="#" class="cta-box">Add to Cart</a>
        </div>
      </div>

      <div class="store-item animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1616628188236-c9b4b7f9c0a1?w=600&h=600&fit=crop" alt="Leather Bag">
        <div class="store-content">
          <h3>Leather Bag</h3>
          <p>$249</p>
          <a href="#" class="cta-box">Add to Cart</a>
        </div>
      </div>

      <div class="store-item animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1600180758721-2e3b6d6f3d84?w=600&h=600&fit=crop" alt="Sunglasses">
        <div class="store-content">
          <h3>Premium Sunglasses</h3>
          <p>$199</p>
          <a href="#" class="cta-box">Add to Cart</a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ================= FOOTER ================= -->
<?php include("includes/footer.php"); ?>

<!-- ================= JS FOR SCROLL ANIMATION ================= -->
<script>
  const storeItems = document.querySelectorAll('.animate-on-scroll');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('in-view');
      }
    });
  }, { threshold: 0.15 });

  storeItems.forEach(el => observer.observe(el));
</script>

</body>
</html>


<style>
    .store-hero {
  background: linear-gradient(to bottom, #FF5F01 0%, #FF9A1F 100%);
  color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 160px 40px 100px;
}

.store-hero-inner h1 {
  font-family: 'Bebas Neue';
  font-size: 9vw;
  letter-spacing: 2px;
  margin-bottom: 16px;
}

.store-hero-inner .hero-subtitle {
  font-size: 16px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 500;
  opacity: 0.85;
}

.store-hero-inner .hero-divider {
  width: 120px;
  height: 2px;
  background: #000;
  margin: 32px auto 0;
  opacity: 0.8;
}

.store-section {
  background: #0D0301;
  padding: 120px 40px;
  color: #fff;
}

.store-inner {
  max-width: 1200px;
  margin: auto;
}

.store-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 48px;
}

/* Individual Store Item */
.store-item {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.store-item img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  border-radius: 12px;
}

.store-content h3 {
  font-family: 'Bebas Neue';
  font-size: 28px;
  margin: 0 0 8px 0;
}

.store-content p {
  font-size: 16px;
  margin: 0 0 12px 0;
  opacity: 0.9;
}

.cta-box {
  align-self: flex-start;
  padding: 12px 24px;
  border: 1px solid #fff;
  background: rgba(217,217,217,0.1);
  color: #fff;
  font-weight: 800;
  font-size: 12px;
  text-decoration: none;
  transition: all 0.25s ease;
}

.cta-box:hover {
  background-color: #fff;
  color: #000;
}

/* Animate on scroll */
.animate-on-scroll {
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s ease-out;
}

.animate-on-scroll.in-view {
  opacity: 1;
  transform: translateY(0);
}

</style>