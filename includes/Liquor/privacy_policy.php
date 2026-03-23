<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Privacy Policy</title>

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
<section class="privacy-hero">
  <div class="privacy-hero-inner">

    <h1>PRIVACY&nbsp;POLICY</h1>
    <p class="hero-subtitle">Your privacy is our top priority</p>
    <div class="hero-divider"></div>

  </div>
</section>

<!-- ================= PRIVACY CONTENT ================= -->
<section class="privacy-section">
  <div class="privacy-inner">

    <div class="privacy-block">
      <h2>Information We Collect</h2>
      <p>We collect information you provide directly when interacting with our site, including your name, email, and purchase details. We also collect information automatically through cookies and analytics tools to enhance your experience.</p>
    </div>

    <div class="privacy-block">
      <h2>Use of Information</h2>
      <p>Your information is used to provide and improve our services, process orders, communicate updates, and personalize your experience. We never sell your personal information to third parties.</p>
    </div>

    <div class="privacy-block">
      <h2>Data Protection</h2>
      <p>We use industry-standard security measures to protect your data. Your information is stored securely and access is restricted to authorized personnel only.</p>
    </div>

    <div class="privacy-block">
      <h2>Cookies</h2>
      <p>Our website uses cookies to analyze traffic, remember preferences, and improve functionality. You can manage cookie settings through your browser.</p>
    </div>

    <div class="privacy-block">
      <h2>Third-Party Services</h2>
      <p>We may use trusted third-party services to facilitate operations, analytics, and payments. These services adhere to strict privacy guidelines.</p>
    </div>

    <div class="privacy-block">
      <h2>Changes to Policy</h2>
      <p>We reserve the right to update our Privacy Policy. Changes will be posted on this page with an updated effective date.</p>
    </div>

    <div class="privacy-block">
      <h2>Contact Us</h2>
      <p>If you have questions or concerns about your data, please contact us via the Contact page or at privacy@yourbrand.com.</p>
    </div>

  </div>
</section>


<!-- ================= FOOTER ================= -->
<?php include("includes/footer.php"); ?>

</body>
</html>


<style>
    /* ================= HERO ================= */
.privacy-hero {
  background: linear-gradient(to bottom, #FF5F01 0%, #FF9A1F 100%);
  color: #000; /* black text for contrast */
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 160px 40px 100px;
}

.privacy-hero-inner h1 {
  font-family: 'Bebas Neue';
  font-size: 9vw; /* scales with screen */
  line-height: 1;
  letter-spacing: 2px;
  margin-bottom: 16px;
}

.privacy-hero-inner .hero-subtitle {
  font-size: 16px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 500;
  opacity: 0.85;
}

.privacy-hero-inner .hero-divider {
  width: 120px;
  height: 2px;
  background: #000;
  margin: 32px auto 0;
  opacity: 0.8;
}

/* ================= PRIVACY SECTION ================= */
.privacy-section {
  background: #0D0301; /* dark, but text is white for contrast */
  padding: 120px 40px;
  color: #fff;
}

.privacy-inner {
  max-width: 900px; /* limits width for better readability */
  margin: auto;
  display: grid;
  gap: 64px;
}

/* Blocks */
.privacy-block h2 {
  font-family: 'Bebas Neue';
  font-size: 48px;
  margin-bottom: 24px;
  color: #fff;
}

.privacy-block p {
  font-size: 16px;
  line-height: 2;
  opacity: 0.9;
}

/* Optional: subtle divider between blocks */
.privacy-block:not(:last-child) {
  border-bottom: 1px solid rgba(255,255,255,0.15);
  padding-bottom: 48px;
}


</style>