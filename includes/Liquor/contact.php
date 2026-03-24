<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>

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
<section class="contact-hero">
  <div class="contact-hero-inner">
    <h1>CONTACT&nbsp;US</h1>
    <p class="hero-subtitle">We’re here to help and answer any questions</p>
    <div class="hero-divider"></div>
  </div>
</section>

<!-- ================= CONTACT SECTION ================= -->
<section class="contact-section">
  <div class="contact-inner">

    <!-- Contact Info -->
    <div class="contact-info">
      <h2>Get in Touch</h2>
      <p>Email us at: <a href="mailto:hello@yourbrand.com">jericholiquors@website.com</a></p>
      <p>Call us: <a href="tel:+1234567890">+1 234 567 890</a></p>
      <p>Visit us: 123 Premium Street, Malta</p>
    </div>

    <!-- Contact Form -->
    <div class="contact-form">
      <h2>Send a Message</h2>
      <form action="#" method="POST">
        <div class="form-group">
          <input type="text" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
          <input type="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
          <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="cta-box">Send Message</button>
      </form>
    </div>

  </div>
</section>

<!-- ================= FOOTER ================= -->
<?php include("https://chriswebdesign.wasmer.app/includes/footer.php"); ?>

</body>
</html>


<style>

    /* ================= HERO ================= */
.contact-hero {
  background: linear-gradient(to bottom, #FF5F01 0%, #FF9A1F 100%);
  color: #000; /* black text for contrast */
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 160px 40px 100px;
}

.contact-hero-inner h1 {
  font-family: 'Bebas Neue';
  font-size: 9vw;
  line-height: 1;
  letter-spacing: 2px;
  margin-bottom: 16px;
}

.contact-hero-inner .hero-subtitle {
  font-size: 16px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 500;
  opacity: 0.85;
}

.contact-hero-inner .hero-divider {
  width: 120px;
  height: 2px;
  background: #000;
  margin: 32px auto 0;
  opacity: 0.8;
}

/* ================= CONTACT SECTION ================= */
.contact-section {
  background: #0D0301;
  padding: 120px 40px;
  color: #fff;
}

.contact-inner {
  max-width: 1000px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: start;
}
    /* ================= HERO ================= */
.contact-hero {
  background: linear-gradient(to bottom, #FF5F01 0%, #FF9A1F 100%);
  color: #000; /* black text for contrast */
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 160px 40px 100px;
}

.contact-hero-inner h1 {
  font-family: 'Bebas Neue';
  font-size: 9vw;
  line-height: 1;
  letter-spacing: 2px;
  margin-bottom: 16px;
}

.contact-hero-inner .hero-subtitle {
  font-size: 16px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 500;
  opacity: 0.85;
}

.contact-hero-inner .hero-divider {
  width: 120px;
  height: 2px;
  background: #000;
  margin: 32px auto 0;
  opacity: 0.8;
}

/* ================= CONTACT SECTION ================= */
.contact-section {
  background: #0D0301;
  padding: 120px 40px;
  color: #fff;
}

.contact-inner {
  max-width: 1000px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: start;
}

/* Contact Info */
.contact-info h2 {
  font-family: 'Bebas Neue';
  font-size: 48px;
  margin-bottom: 24px;
}

.contact-info p {
  font-size: 16px;
  margin-bottom: 16px;
}

.contact-info a {
  color: #FF9A1F;
  text-decoration: none;
}

.contact-info a:hover {
  text-decoration: underline;
}

/* Contact Form */
.contact-form h2 {
  font-family: 'Bebas Neue';
  font-size: 48px;
  margin-bottom: 24px;
}

.contact-form form {
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.contact-form input,
.contact-form textarea {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.3);
  padding: 16px;
  font-size: 14px;
  color: #fff;
  outline: none;
  width: 100%;
  border-radius: 6px;
  transition: border-color 0.3s ease, background 0.3s ease;
}

.contact-form input:focus,
.contact-form textarea:focus {
  border-color: #FF9A1F;
  background: rgba(255,255,255,0.1);
}

.cta-box {
  background: #FF9A1F;
  color: #000;
  font-weight: 700;
  text-transform: uppercase;
  padding: 16px;
  border: none;
  cursor: pointer;
  transition: background 0.3s ease, color 0.3s ease;
}

.cta-box:hover {
  background: #000;
  color: #FF9A1F;
}

/* Responsive */
@media screen and (max-width: 900px) {
  .contact-inner {
    grid-template-columns: 1fr;
  }
}

</style>
