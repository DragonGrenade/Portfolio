<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Terms & Conditions</title>

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

<!-- HERO TITLE -->
<section class="terms-hero">
  <div class="terms-hero-inner">

    <h1>TERMS & CONDITIONS</h1>
    <p class="hero-subtitle">Your use of our website is subject to these terms</p>
    <div class="hero-divider"></div>

  </div>
</section>

<!-- ================= TERMS CONTENT ================= -->
<section class="terms-section">
  <div class="terms-inner">

    <div class="terms-block">
      <h2>Acceptance of Terms</h2>
      <p>By accessing and using our website, you agree to be bound by these Terms & Conditions. If you do not agree, please do not use our site.</p>
    </div>

    <div class="terms-block">
      <h2>Use of the Website</h2>
      <p>You agree to use our website for lawful purposes only. Any unauthorized use, including copying, distribution, or modification of content without permission, is strictly prohibited.</p>
    </div>

    <div class="terms-block">
      <h2>Products and Services</h2>
      <p>All products and services listed on the site are subject to availability. We reserve the right to modify, discontinue, or limit any product at any time without prior notice.</p>
    </div>

    <div class="terms-block">
      <h2>Payment & Billing</h2>
      <p>All orders must be paid in full before shipment. We accept the payment methods displayed on our checkout page. Pricing is subject to change without notice.</p>
    </div>

    <div class="terms-block">
      <h2>Shipping & Returns</h2>
      <p>Shipping policies, delivery times, and return procedures are outlined on our dedicated pages. It is your responsibility to review these policies before placing an order.</p>
    </div>

    <div class="terms-block">
      <h2>Intellectual Property</h2>
      <p>All content, logos, images, and designs on the website are our intellectual property. No part of the website may be reproduced without our written consent.</p>
    </div>

    <div class="terms-block">
      <h2>Limitation of Liability</h2>
      <p>We are not liable for any indirect, incidental, or consequential damages resulting from the use or inability to use our website or products.</p>
    </div>

    <div class="terms-block">
      <h2>Governing Law</h2>
      <p>These terms are governed by the laws of the jurisdiction in which our company is registered, without regard to conflict of laws principles.</p>
    </div>

    <div class="terms-block">
      <h2>Contact Us</h2>
      <p>If you have questions regarding these Terms & Conditions, please contact us via the Contact page or at legal@yourbrand.com.</p>
    </div>

  </div>
</section>

<!-- ================= FOOTER ================= -->
<?php include("includes/footer.php"); ?>

</body>
</html>


<style>
    /* ================= HERO ================= */
.terms-hero {
  background: linear-gradient(to bottom, #FF5F01 0%, #FF9A1F 100%);
  color: #000; /* high contrast */
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 160px 40px 100px;
}

.terms-hero-inner h1 {
  font-family: 'Bebas Neue';
  font-size: 9vw;
  line-height: 1;
  letter-spacing: 2px;
  margin-bottom: 16px;
}

.terms-hero-inner .hero-subtitle {
  font-size: 16px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 500;
  opacity: 0.85;
}

.terms-hero-inner .hero-divider {
  width: 120px;
  height: 2px;
  background: #000;
  margin: 32px auto 0;
  opacity: 0.8;
}

/* ================= TERMS SECTION ================= */
.terms-section {
  background: #0D0301; /* dark, but text is white for contrast */
  padding: 120px 40px;
  color: #fff;
}

.terms-inner {
  max-width: 900px; /* limits width for readability */
  margin: auto;
  display: grid;
  gap: 64px;
}

/* Blocks */
.terms-block h2 {
  font-family: 'Bebas Neue';
  font-size: 48px;
  margin-bottom: 24px;
  color: #fff;
}

.terms-block p {
  font-size: 16px;
  line-height: 2;
  opacity: 0.9;
}

/* Optional: subtle divider between blocks */
.terms-block:not(:last-child) {
  border-bottom: 1px solid rgba(255,255,255,0.15);
  padding-bottom: 48px;
}

</style>