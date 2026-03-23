<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>

  <link rel="stylesheet" href="css/top_bar_styles.css">
    <link rel="stylesheet" href="css/nav_styles.css">
    <link rel="stylesheet" href="css/general_styles.css">
    <link rel="stylesheet" href="css/about_page_styles/hero_styles.css">
    <link rel="stylesheet" href="css\about_page_styles\about_styles.css">

    <link rel="stylesheet" href="css\about_page_styles\philosophy_section_styles.css">


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
<!-- HERO TITLE -->
<div class="hero-text about-hero-text">
  <h1>ABOUT&nbsp;US</h1>
  <p class="hero-subtitle">Built on precision. Driven by quality.</p>
  <div class="hero-divider"></div>
</div>








<!-- ================= ABOUT CONTENT ================= -->
<section class="about-section">
  <div class="about-inner">

    <!-- LEFT CONTENT -->
    <div class="about-text">
      <span class="about-eyebrow">OUR STORY</span>
      <h2>CRAFTED WITH PURPOSE</h2>

      <p class="about-lead">
        We don’t follow trends. We refine essentials.
      </p>

      <p>
        Every product we create is driven by precision, restraint, and long-term value.
        From material selection to final detailing, nothing is accidental.
      </p>

      <p>
        Our goal is simple — to create pieces that feel deliberate, timeless,
        and unmistakably premium.
      </p>
    </div>

    <!-- RIGHT STATS -->
    <div class="about-stats">
      <div class="stat">
        <span>10+</span>
        <p>Years of Refinement</p>
      </div>

      <div class="stat">
        <span>50K+</span>
        <p>Global Clients</p>
      </div>

      <div class="stat">
        <span>100%</span>
        <p>Quality Control</p>
      </div>
    </div>

  </div>
</section>





<section class="philosophy-section">
  <div class="philosophy-inner">

    <div class="philosophy-title">
      <h2>OUR<br>PHILOSOPHY</h2>
    </div>

    <div class="philosophy-text">
      <p>
        Quality is not a feature — it’s the baseline.
        We believe restraint creates clarity, and clarity creates longevity.
      </p>

      <p>
        Every decision is intentional. Every material earns its place.
        Nothing exists without purpose.
      </p>
    </div>

  </div>
</section>





<section class="process-section">
  <div class="process-inner">

    <h2>FROM IDEA TO EXECUTION</h2>

    <div class="process-list">

      <div class="process-item">
        <span>01</span>
        <p>Concept & Design — clarity before complexity.</p>
      </div>

      <div class="process-item">
        <span>02</span>
        <p>Material Selection — only what performs.</p>
      </div>

      <div class="process-item">
        <span>03</span>
        <p>Refinement — remove until only the essential remains.</p>
      </div>

      <div class="process-item">
        <span>04</span>
        <p>Final Control — nothing leaves without approval.</p>
      </div>

    </div>

  </div>
</section>





<section class="values-section">
  <div class="values-inner">

    <h2>WHAT WE STAND FOR</h2>

    <div class="values-grid">
      <div class="value">PRECISION</div>
      <div class="value">RESTRAINT</div>
      <div class="value">CONSISTENCY</div>
      <div class="value">LONGEVITY</div>
      <div class="value">QUALITY</div>
      <div class="value">PURPOSE</div>
    </div>

  </div>
</section>


















<?php include("includes/footer.php"); ?>




</body>
</html>


<style>
  .process-section {
  background: #ccc;
  padding: 180px 60px;
}

.process-inner {
  }

.process-inner h2 {
  font-family: 'Bebas Neue';
  font-size: 64px;
  margin-bottom: 80px;
}

.process-list {
  display: flex;
  flex-direction: column;
  gap: 48px;
}

.process-item {
  display: grid;
  grid-template-columns: 80px 1fr;
  align-items: center;
  border-bottom: 1px solid rgba(255,255,255,0.2);
  padding-bottom: 24px;
}

.process-item span {
  font-family: 'Bebas Neue';
  font-size: 32px;
  opacity: 0.6;
}

.process-item p {
  font-size: 14px;
  letter-spacing: 1px;
}
















.values-section {
  background: #vvv;
  padding: 180px 60px;
  color: #fff;
}

.values-inner {
  max-width: 1200px;
  margin: auto;
}

.values-inner h2 {
  font-family: 'Bebas Neue';
  font-size: 64px;
  margin-bottom: 80px;
}

.values-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.value {
  border: 1px solid rgba(255,255,255,0.3);
  padding: 60px 20px;
  text-align: center;
  font-family: 'Bebas Neue';
  font-size: 28px;
  letter-spacing: 2px;
  transition: background 0.3s ease, color 0.3s ease;
}

.value:hover {
  background: #fff;
  color: #000;
}

</style>