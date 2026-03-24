<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shipping Information</title>

  <link rel="stylesheet" href="https://chriswebdesign.wasmer.app/css/top_bar_styles.css">
  <link rel="stylesheet" href="https://chriswebdesign.wasmer.app/css/nav_styles.css">
  <link rel="stylesheet" href="https://chriswebdesign.wasmer.app/css/general_styles.css">
  <link rel="stylesheet" href="https://chriswebdesign.wasmer.app/css/footer_styles.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>

<body>

<!-- ================= TOP BAR ================= -->
<?php include("https://chriswebdesign.wasmer.app/includes/top_bar.php"); ?>

<!-- ================= HERO / NAV ================= -->
<?php include("https://chriswebdesign.wasmer.app/includes/nav.php"); ?>

<!-- HERO TITLE -->
<section class="shipping-hero">
  <div class="shipping-hero-inner">
    <h1>SHIPPING INFORMATION</h1>
    <p class="hero-subtitle">Fast, reliable delivery worldwide</p>
    <div class="hero-divider"></div>
  </div>
</section>

<!-- ================= SHIPPING CONTENT ================= -->
<section class="shipping-section">
  <div class="shipping-inner">

    <div class="shipping-block">
      <h2>Domestic Shipping</h2>
      <p>We offer fast and reliable domestic shipping across Malta. Standard delivery typically takes 3–5 business days. Expedited shipping options are available at checkout for faster delivery.</p>
    </div>

    <div class="shipping-block">
      <h2>International Shipping</h2>
      <p>We ship globally. Delivery times vary depending on your location and customs processing. International shipping fees may apply. Please allow 7–15 business days for delivery depending on your country.</p>
    </div>

    <div class="shipping-block">
      <h2>Order Tracking</h2>
      <p>Once your order has shipped, you will receive a tracking number via email. Use this tracking number to follow your package until it arrives at your door.</p>
    </div>

    <div class="shipping-block">
      <h2>Shipping Charges</h2>
      <p>Shipping fees are calculated based on your location and the total weight of your order. Occasionally, we may offer promotions with free shipping.</p>
    </div>

    <div class="shipping-block">
      <h2>Delivery Issues</h2>
      <p>If your order is delayed, damaged, or lost during shipment, contact our customer support team immediately via the Contact page. We will assist in resolving the issue promptly.</p>
    </div>

  </div>
</section>

<!-- ================= FOOTER ================= -->
<?php include("https://chriswebdesign.wasmer.app/includes/footer.php"); ?>

</body>
</html>


<style>
    /* ================= HERO ================= */
.shipping-hero {
  background: linear-gradient(to bottom, #FF5F01 0%, #FF9A1F 100%);
  color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 160px 40px 100px;
}

.shipping-hero-inner h1 {
  font-family: 'Bebas Neue';
  font-size: 9vw;
  letter-spacing: 2px;
  margin-bottom: 16px;
}

.shipping-hero-inner .hero-subtitle {
  font-size: 16px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 500;
  opacity: 0.85;
}

.shipping-hero-inner .hero-divider {
  width: 120px;
  height: 2px;
  background: #000;
  margin: 32px auto 0;
  opacity: 0.8;
}

/* ================= SHIPPING SECTION ================= */
.shipping-section {
  background: #0D0301;
  padding: 120px 40px;
  color: #fff;
}

.shipping-inner {
  max-width: 900px;
  margin: auto;
  display: grid;
  gap: 64px;
}

/* Blocks */
.shipping-block h2 {
  font-family: 'Bebas Neue';
  font-size: 48px;
  margin-bottom: 24px;
  color: #fff;
}

.shipping-block p {
  font-size: 16px;
  line-height: 2;
  opacity: 0.9;
}

/* Optional divider between blocks */
.shipping-block:not(:last-child) {
  border-bottom: 1px solid rgba(255,255,255,0.15);
  padding-bottom: 48px;
}

</style>
