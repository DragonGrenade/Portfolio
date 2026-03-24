<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Returns & Refunds</title>

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
<section class="returns-hero">
  <div class="returns-hero-inner">
    <h1>RETURNS & REFUNDS</h1>
    <p class="hero-subtitle">Easy and hassle-free returns for your peace of mind</p>
    <div class="hero-divider"></div>
  </div>
</section>

<!-- ================= RETURNS CONTENT ================= -->
<section class="returns-section">
  <div class="returns-inner">

    <div class="returns-block">
      <h2>Eligibility</h2>
      <p>We accept returns for items purchased within 30 days. Products must be unused, in their original packaging, and accompanied by a receipt or proof of purchase. Certain limited-edition or custom products may not be eligible.</p>
    </div>

    <div class="returns-block">
      <h2>Return Process</h2>
      <p>To initiate a return, please contact our customer support team via the Contact page. You will receive instructions and a return authorization number to include with your shipment. This ensures your return is processed quickly and efficiently.</p>
    </div>

    <div class="returns-block">
      <h2>Refunds</h2>
      <p>Once we receive and inspect your returned item, refunds will be issued to the original payment method. Please allow 5–7 business days for the transaction to reflect in your account. Shipping costs are non-refundable unless the return was due to an error on our part.</p>
    </div>

    <div class="returns-block">
      <h2>Exchanges</h2>
      <p>If you wish to exchange an item, contact us to check availability. Exchanges will be processed once the original item has been received and inspected.</p>
    </div>

    <div class="returns-block">
      <h2>Contact Us</h2>
      <p>If you have any questions about our returns policy or need assistance, reach out to our support team via the Contact page or email at <a href="mailto:hello@yourbrand.com">hello@yourbrand.com</a>.</p>
    </div>

  </div>
</section>

<!-- ================= FOOTER ================= -->
<?php include("https://chriswebdesign.wasmer.app/includes/footer.php"); ?>

</body>
</html>


<style>
    /* ================= HERO ================= */
.returns-hero {
  background: linear-gradient(to bottom, #FF5F01 0%, #FF9A1F 100%);
  color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 160px 40px 100px;
}

.returns-hero-inner h1 {
  font-family: 'Bebas Neue';
  font-size: 9vw;
  letter-spacing: 2px;
  margin-bottom: 16px;
}

.returns-hero-inner .hero-subtitle {
  font-size: 16px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 500;
  opacity: 0.85;
}

.returns-hero-inner .hero-divider {
  width: 120px;
  height: 2px;
  background: #000;
  margin: 32px auto 0;
  opacity: 0.8;
}

/* ================= RETURNS SECTION ================= */
.returns-section {
  background: #0D0301;
  padding: 120px 40px;
  color: #fff;
}

.returns-inner {
  max-width: 900px;
  margin: auto;
  display: grid;
  gap: 64px;
}

/* Blocks */
.returns-block h2 {
  font-family: 'Bebas Neue';
  font-size: 48px;
  margin-bottom: 24px;
  color: #fff;
}

.returns-block p {
  font-size: 16px;
  line-height: 2;
  opacity: 0.9;
}

/* Optional divider between blocks */
.returns-block:not(:last-child) {
  border-bottom: 1px solid rgba(255,255,255,0.15);
  padding-bottom: 48px;
}

/* Links inside text */
.returns-block p a {
  color: #FF9A1F;
  text-decoration: none;
}

.returns-block p a:hover {
  text-decoration: underline;
}

</style>
