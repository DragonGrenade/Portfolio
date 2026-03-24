<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQ</title>

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
<section class="faq-hero">
  <div class="faq-hero-inner">
    <h1>FAQ</h1>
    <p class="hero-subtitle">Find answers to our most common questions</p>
    <div class="hero-divider"></div>
  </div>
</section>

<!-- ================= FAQ SECTION ================= -->
<section class="faq-section">
  <div class="faq-inner">

    <!-- Question / Answer Item -->
    <div class="faq-item">
      <h2 class="faq-question">How long does shipping take?</h2>
      <p class="faq-answer">Shipping times vary by location. Standard shipping typically takes 5–10 business days. Expedited options are available at checkout.</p>
    </div>

    <div class="faq-item">
      <h2 class="faq-question">What is your return policy?</h2>
      <p class="faq-answer">Returns are accepted within 30 days of purchase. Items must be unused and in original packaging. Some exclusions may apply.</p>
    </div>

    <div class="faq-item">
      <h2 class="faq-question">Do you ship internationally?</h2>
      <p class="faq-answer">Yes, we ship worldwide. International shipping fees and customs duties may apply depending on the destination country.</p>
    </div>

    <div class="faq-item">
      <h2 class="faq-question">How can I contact customer service?</h2>
      <p class="faq-answer">You can contact us via our Contact page, by email at <a href="mailto:hello@yourbrand.com">hello@yourbrand.com</a>, or by phone at +1 234 567 890.</p>
    </div>

  </div>
</section>

<!-- ================= FOOTER ================= -->
<?php include("https://chriswebdesign.wasmer.app/includes/footer.php"); ?>

</body>
</html>


<style>
    /* ================= HERO ================= */
.faq-hero {
  background: linear-gradient(to bottom, #FF5F01 0%, #FF9A1F 100%);
  color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 160px 40px 100px;
}

.faq-hero-inner h1 {
  font-family: 'Bebas Neue';
  font-size: 9vw;
  letter-spacing: 2px;
  margin-bottom: 16px;
}

.faq-hero-inner .hero-subtitle {
  font-size: 16px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 500;
  opacity: 0.85;
}

.faq-hero-inner .hero-divider {
  width: 120px;
  height: 2px;
  background: #000;
  margin: 32px auto 0;
  opacity: 0.8;
}

/* ================= FAQ SECTION ================= */
.faq-section {
  background: #0D0301;
  padding: 120px 40px;
  color: #fff;
}

.faq-inner {
  max-width: 900px;
  margin: auto;
  display: grid;
  gap: 48px;
}

/* FAQ Item */
.faq-item h2.faq-question {
  font-family: 'Bebas Neue';
  font-size: 36px;
  margin-bottom: 16px;
  cursor: pointer;
  transition: color 0.3s ease;
}

.faq-item h2.faq-question:hover {
  color: #FF9A1F;
}

.faq-item p.faq-answer {
  font-size: 16px;
  line-height: 2;
  opacity: 0.9;
  margin-left: 12px;
}

/* Links in answers */
.faq-item p a {
  color: #FF9A1F;
  text-decoration: none;
}

.faq-item p a:hover {
  text-decoration: underline;
}

</style>
