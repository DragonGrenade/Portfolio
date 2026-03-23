<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exclusive</title>

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
<section class="exclusive-hero">
  <div class="exclusive-hero-inner">
    <h1>EXCLUSIVE COLLECTION</h1>
    <p class="hero-subtitle">Handpicked. Premium. Limited Edition.</p>
    <div class="hero-divider"></div>
  </div>
</section>

<!-- ================= EXCLUSIVE PRODUCTS ================= -->
<section class="exclusive-section">
  <div class="exclusive-inner">

    <!-- Exclusive Items Grid -->
    <div class="exclusive-grid">

      <div class="exclusive-item animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1600180758895-42f7a77f4a3d?w=600&q=80" alt="Exclusive Item 1">
        <div class="exclusive-content">
          <h3>Signature Leather Jacket</h3>
          <p>Classic design meets modern luxury.</p>
          <a href="#" class="cta-box">Shop Now</a>
        </div>
      </div>

      <div class="exclusive-item animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1581579180656-579e1b1d79fc?w=600&q=80" alt="Exclusive Item 2">
        <div class="exclusive-content">
          <h3>Limited Edition Watch</h3>
          <p>Precision engineering and elegant craftsmanship.</p>
          <a href="#" class="cta-box">Shop Now</a>
        </div>
      </div>

      <div class="exclusive-item animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1616628188236-88de5f36df2b?w=600&q=80" alt="Exclusive Item 3">
        <div class="exclusive-content">
          <h3>Premium Leather Bag</h3>
          <p>Durable, stylish, and functional.</p>
          <a href="#" class="cta-box">Shop Now</a>
        </div>
      </div>

      <div class="exclusive-item animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1616628041033-9bb1f2f96297?w=600&q=80" alt="Exclusive Item 4">
        <div class="exclusive-content">
          <h3>Luxury Sunglasses</h3>
          <p>Bold statement with refined design.</p>
          <a href="#" class="cta-box">Shop Now</a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ================= FOOTER ================= -->
<?php include("includes/footer.php"); ?>

<!-- ================= JS FOR SCROLL ANIMATION ================= -->
<script>
  const animateElements = document.querySelectorAll('.animate-on-scroll');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('in-view');
      }
    });
  }, { threshold: 0.15 });

  animateElements.forEach(el => observer.observe(el));
</script>

</body>
</html>


<style>
    /* ================= HERO ================= */
.exclusive-hero {
  background: linear-gradient(to bottom, #FF5F01 0%, #FFB74D 100%);
  color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 160px 40px 100px;
}

.exclusive-hero-inner h1 {
  font-family: 'Bebas Neue';
  font-size: 9vw;
  letter-spacing: 2px;
  margin-bottom: 16px;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.8s forwards;
}

.exclusive-hero-inner .hero-subtitle {
  font-size: 16px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 500;
  opacity: 0;
  margin-top: 16px;
  transform: translateY(20px);
  animation: fadeInUp 0.8s 0.3s forwards;
}

.exclusive-hero-inner .hero-divider {
  width: 120px;
  height: 2px;
  background: #000;
  margin: 32px auto 0;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.8s 0.6s forwards;
}

/* ================= EXCLUSIVE SECTION ================= */
.exclusive-section {
  background: #0D0301;
  padding: 120px 40px;
  color: #fff;
}

.exclusive-inner {
  max-width: 1200px;
  margin: auto;
}

/* Grid */
.exclusive-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 48px;
}

/* Item */
.exclusive-item {
  display: flex;
  flex-direction: column;
  gap: 16px;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.8s ease;
}

.exclusive-item.in-view {
  opacity: 1;
  transform: translateY(0);
}

.exclusive-item img {
  width: 100%;
  border-radius: 12px;
  object-fit: cover;
}

.exclusive-content {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.exclusive-content h3 {
  font-family: 'Bebas Neue';
  font-size: 28px;
  margin: 0;
}

.exclusive-content p {
  font-size: 14px;
  line-height: 1.8;
  opacity: 0.9;
  margin: 0;
}

/* CTA */
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

/* ================= ANIMATION ================= */
@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

</style>