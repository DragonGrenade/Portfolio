<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog</title>

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
<section class="blog-hero">
  <div class="blog-hero-inner">
    <h1>BLOG</h1>
    <p class="hero-subtitle">Insights, stories, and inspiration</p>
    <div class="hero-divider"></div>
  </div>
</section>

<!-- ================= BLOG POSTS ================= -->
<section class="blog-section">
  <div class="blog-inner">

    <!-- Featured Post -->
    <div class="blog-post featured animate-on-scroll">
      <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?w=1000&q=80" alt="Featured Post">
      <div class="blog-content-wrapper">
        <div class="blog-content">
          <h2>The Art of Craft Spirits</h2>
          <p>From grain to glass — what truly defines premium liquor.</p>
        </div>
        <a href="includes\blogposts\blog1.php" class="cta-box">Read More</a>
      </div>
    </div>

    <!-- Blog Grid -->
    <div class="blog-grid">

      <div class="blog-post animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80" alt="Blog Post 1">
        <div class="blog-content-wrapper">
          <div class="blog-content">
            <h3>The Art of Timeless Design</h3>
            <p>How we merge elegance with function to create products that last.</p>
          </div>
          <a href="includes\blogposts\blog2.php" class="cta-box">Read More</a>
        </div>
      </div>

      <div class="blog-post animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&q=80" alt="Blog Post 2">
        <div class="blog-content-wrapper">
          <div class="blog-content">
            <h3>Behind the Scenes</h3>
            <p>A look into our workshop and the meticulous process behind every piece.</p>
          </div>
          <a href="includes\blogposts\blog3.php" class="cta-box">Read More</a>
        </div>
      </div>

      <div class="blog-post animate-on-scroll">
        <img src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f?w=600&q=80" alt="Blog Post 3">
        <div class="blog-content-wrapper">
          <div class="blog-content">
            <h3>Quality Over Quantity</h3>
            <p>Why we prioritize craftsmanship over mass production in all our creations.</p>
          </div>
          <a href="includes\blogposts\blog4.php" class="cta-box">Read More</a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ================= FOOTER ================= -->
<?php include("includes/footer.php"); ?>

<!-- ================= JS FOR ANIMATION ================= -->
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
.blog-hero {
  background: linear-gradient(to bottom, #FF5F01 0%, #FF9A1F 100%);
  color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 160px 40px 100px;
}

.blog-hero-inner h1 {
  font-family: 'Bebas Neue';
  font-size: 9vw;
  letter-spacing: 2px;
  margin-bottom: 16px;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.8s forwards;
}

.blog-hero-inner .hero-subtitle {
  font-size: 16px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 500;
  opacity: 0.85;
  margin-top: 16px;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.8s 0.3s forwards;
}

.blog-hero-inner .hero-divider {
  width: 120px;
  height: 2px;
  background: #000;
  margin: 32px auto 0;
  opacity: 0.8;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.8s 0.6s forwards;
}

/* ================= BLOG SECTION ================= */
.blog-section {
  background: #0D0301;
  padding: 120px 40px;
  color: #fff;
}

.blog-inner {
  display: grid;
  gap: 64px;
}

/* Featured Post */
.blog-post.featured {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 32px;
  align-items: center;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.8s ease;
}

.blog-post.featured.in-view {
  opacity: 1;
  transform: translateY(0);
}

.blog-post.featured img {
  width: 100%;
  height: auto;
  border-radius: 12px;
  object-fit: cover;
}

.blog-post.featured .blog-content-wrapper {
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.blog-post.featured .blog-content-wrapper h2 {
  font-family: 'Bebas Neue';
  font-size: 48px;
  margin: 0;
}

.blog-post.featured .blog-content-wrapper p {
  font-size: 16px;
  line-height: 1.8;
  margin: 0;
}

/* Blog Grid */
.blog-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 48px;
}

/* Blog Post */
.blog-post {
  display: flex;
  flex-direction: column;
  gap: 16px;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.8s ease;
}

.blog-post.in-view {
  opacity: 1;
  transform: translateY(0);
}

/* Blog Content Wrapper */
.blog-content-wrapper {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

/* Title + Paragraph */
.blog-content h3 {
  font-family: 'Bebas Neue';
  font-size: 32px;
  margin: 0 0 8px 0;
}

.blog-content p {
  font-size: 14px;
  line-height: 1.8;
  opacity: 0.9;
  margin: 0;
}

/* Button */
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