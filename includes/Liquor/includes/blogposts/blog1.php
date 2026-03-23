<?php
// blog1.php
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <!-- Icons (Font Awesome) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <meta charset="UTF-8">
  <title>The Art of Craft Spirits | Jericho Spirits Journal</title>
  <meta name="description" content="Discover the craftsmanship, heritage, and passion behind premium spirits. From grain to glass, explore what defines true quality liquor.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../css/top_bar_styles.css">
    <link rel="stylesheet" href="../../css/general_styles.css">


 <link rel="stylesheet" href="../../css/footer_styles.css">

<link rel="stylesheet" href="../../css/nav_styles.css">
  <!-- Fonts assumed already loaded globally -->
</head>

<body>

<!-- ================= TOP BAR ================= -->
<?php include("../top_bar.php"); ?>

<?php include("../nav.php"); ?>

<section class="blog-hero">
    
  <div class="blog-hero-inner">
    <span class="blog-category">INSIDER JOURNAL</span>
    <h1>The Art of Craft Spirits</h1>
    <p class="blog-subtitle">
      From grain to glass — what truly defines premium liquor
    </p>
  </div>
</section>

<section class="blog-content">
  <div class="blog-container">

    <p class="blog-intro">
      In a world of mass production and shortcuts, true craft spirits stand apart.
      At Jericho, we believe great liquor isn’t rushed — it’s earned through patience,
      precision, and respect for tradition.
    </p>

    <h2>Craft Begins With Intention</h2>
    <p>
      Every exceptional spirit starts long before the bottle is sealed.
      It begins with the selection of grains, botanicals, or agave — sourced responsibly
      and chosen for character, not convenience.
    </p>

    <p>
      Unlike industrial distilling, craft producers focus on smaller batches,
      allowing greater control over flavor development and consistency.
    </p>

    <h2>Time Is the Missing Ingredient</h2>
    <p>
      Aging isn’t just a process — it’s a philosophy.
      Whether it’s whiskey resting in oak barrels or tequila maturing under the Jalisco sun,
      time shapes complexity, depth, and balance.
    </p>

    <p>
      Rushing this stage sacrifices nuance. Great spirits demand patience —
      and the reward is unmistakable in every sip.
    </p>

    <blockquote class="blog-quote">
      “You can’t fake character. It’s built slowly — just like great spirits.”
    </blockquote>

    <h2>Why Craft Spirits Matter</h2>
    <p>
      Choosing craft liquor supports independent distillers, sustainable practices,
      and innovation rooted in heritage.
      It’s not just about drinking better — it’s about respecting the journey behind the bottle.
    </p>

    <p>
      At Jericho, we curate spirits that reflect these values —
      bold, honest, and unforgettable.
    </p>

    <div class="blog-cta">
      <a href="http://localhost/LIQUOR%20STORE%20WEBSITE/exclusive.php" class="blog-button">EXPLORE THE COLLECTION</a>
    </div>

  </div>
</section>




<?php include("http://localhost/LIQUOR%20STORE%20WEBSITE/includes/footer.php"); ?>


</body>
</html>


<style>
/* ================= DESIGN TOKENS ================= */
:root {
  /* Colors */
  --color-black: #000;
  --color-dark: #0D0301;
  --color-white: #fff;
  --color-text-muted: rgba(255,255,255,0.85);
  --color-text-soft: rgba(255,255,255,0.7);

  --gradient-accent: linear-gradient(90deg, #FF8000, #FF5900);
  --gradient-hero: linear-gradient(to bottom, #FF5F01 0%, #FF9A1F 100%);

  /* Fonts */
  --font-heading: 'Bebas Neue', sans-serif;
  --font-body: 'Inter', sans-serif;

  /* Spacing */
  --section-padding: 120px 40px;
}

/* ================= BLOG HERO ================= */
.blog-hero {
  background: var(--gradient-hero);
  color: var(--color-black);
  text-align: center;
  padding: 160px 40px 100px;
}

.blog-category {
  font-family: var(--font-heading);
  font-size: 14px;
  letter-spacing: 0.35em;
  text-transform: uppercase;
}

.blog-hero h1 {
  font-family: var(--font-heading);
  font-size: 9vw;
  letter-spacing: 0.14em;
  margin: 28px 0 18px;
}

.blog-subtitle {
  font-family: var(--font-body);
  font-size: 16px;
  letter-spacing: 2px;
  text-transform: uppercase;
  opacity: 0.85;
}

.blog-hero::after {
  content: "";
  width: 120px;
  height: 2px;
  background: var(--color-black);
  margin: 32px auto 0;
  display: block;
  opacity: 0.8;
}

/* ================= BLOG CONTENT ================= */
.blog-content {
  background: var(--color-dark);
  padding: var(--section-padding);
  color: var(--color-white);
}

.blog-container {
  max-width: 900px;
  margin: auto;
}

/* INTRO */
.blog-intro {
  font-family: var(--font-body);
  font-size: 20px;
  line-height: 1.9;
  color: var(--color-text-muted);
  margin-bottom: 72px;
}

/* SECTION HEADINGS */
.blog-content h2 {
  font-family: var(--font-heading);
  font-size: 48px;
  margin-bottom: 24px;
  position: relative;
}

.blog-content h2::before {
  content: "";
  width: 32px;
  height: 2px;
  background: var(--gradient-accent);
  position: absolute;
  left: -48px;
  top: 50%;
}

/* BODY TEXT */
.blog-content p {
  font-family: var(--font-body);
  font-size: 16px;
  line-height: 2;
  color: var(--color-text-muted);
  margin-bottom: 24px;
}

/* QUOTE */
.blog-quote {
  margin: 80px 0;
  padding: 32px 40px;
  border-left: 3px solid;
  border-image: linear-gradient(180deg, #FF8000, #FF5900) 1;
  background: rgba(255,255,255,0.04);
  font-style: italic;
  font-size: 18px;
  color: var(--color-text-muted);
}

/* ================= CTA ================= */
.blog-cta {
  margin-top: 100px;
  text-align: center;
}

.blog-button {
  display: inline-block;
  padding: 16px 48px;
  font-family: var(--font-heading);
  letter-spacing: 0.3em;
  text-decoration: none;
  color: var(--color-white);
  cursor: url("http://localhost/LIQUOR%20STORE%20WEBSITE/images/pointinghand.svg") 2 2, pointer;

  border: 1px solid rgba(255,255,255,0.6);
  transition: all 0.35s ease;
}

.blog-button:hover {
  background: var(--gradient-accent);
  color: var(--color-black);
  border-color: transparent;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 900px) {
  .blog-hero h1 {
    font-size: 46px;
  }

  .blog-content h2::before {
    display: none;
  }

  .blog-quote {
    padding: 24px;
  }
}


</style>