<!-- BLOG LISTING PAGE (blog.html) -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Blog</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
   
    .blog-section {
      
      margin: 2rem auto;
      padding: clamp(1rem, 5vw, 3rem);
      text-align: center;
    }
    .blog-header {
      font-size: 2.5rem;
      margin-bottom: 2.5rem;
      font-weight: 700;
    }
    .blog-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 1.5rem;
    }
    .blog-post {
      background: #fafafa;
      border: 1px solid #eee;
      padding: 1.5rem;
      text-align: left;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .blog-post:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }
    .blog-category {
      font-size: 0.85rem;
      font-weight: 600;
      color: #c94c05;
      margin-bottom: 0.5rem;
      display: inline-block;
    }
    .blog-title {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 1.8rem;
      margin: 0.25rem 0;
      letter-spacing: 0.5px;
    }
    .blog-subtitle {
      font-size: 14px;
      font-weight: 400;
      color: #555;
      margin-bottom: 1rem;
    }
    .blog-points {
      list-style: none;
      padding: 0;
      margin: 0 0 1.5rem 0;
    }
    .blog-points li {
      font-weight: 600; /* Poppins SemiBold */
      font-size: 14px;
      display: flex;
      align-items: center;
      margin-bottom: 0.75rem;
    }
    .blog-points li img {
      width: 16px;
      height: 16px;
      margin-right: 0.5rem;
    }
    .read-more {
      display: inline-block;
      padding: 0.6rem 1.2rem;
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      background-color: #c94c05;
      border: 1px solid #c94c05;
      text-decoration: none;
      text-align: center;
    }
    .read-more:hover {
      background-color: #c94c05;
    }
  </style>
<link rel="stylesheet" href="css\styles.css">

      <link rel="stylesheet" href="css\back_button_styles.css">
        <link rel="stylesheet" href="css\nav_styles.css">

</head>
<body>
<?php include("includes/nav_include.php"); ?>



  <section class="blog-section">
    <h1 class="blog-header">INSIGHTS</h1>

    <div class="blog-grid">

      <!-- Post 1 -->
      <article class="blog-post">
        <span class="blog-category">#conversions</span>
        <h3 class="blog-title">How Slow Kills Sales</h3>
        <h4 class="blog-subtitle">Why a 3-second delay can lose you real money.</h4>
        <ul class="blog-points">
          <li><img src="images/Vector_approve.svg" alt=""> Site speed isn’t just tech — it’s business.</li>
          <li><img src="images/Vector_approve.svg" alt=""> Mobile users bounce fast.</li>
          <li><img src="images/Vector_approve.svg" alt=""> Slow sites = Google penalty.</li>
        </ul>
        <a href="blog-post1.html" class="read-more">Read More</a>
      </article>

      <!-- Post 2 -->
      <article class="blog-post">
        <span class="blog-category">#strategy</span>
        <h3 class="blog-title">DIY Website Builders: The Hidden Costs</h3>
        <h4 class="blog-subtitle">Why “free” platforms cost you more than you think.</h4>
        <ul class="blog-points">
          <li><img src="images/Vector_approve.svg" alt=""> Generic templates = forgettable brand.</li>
          <li><img src="images/Vector_approve.svg" alt=""> Locked features unless you upgrade.</li>
          <li><img src="images/Vector_approve.svg" alt=""> What’s “free” now may cost you clients later.</li>
        </ul>
        <a href="blog-post2.html" class="read-more">Read More</a>
      </article>

      <!-- Post 3 -->
      <article class="blog-post">
        <span class="blog-category">#sales</span>
        <h3 class="blog-title">The Homepage Trap</h3>
        <h4 class="blog-subtitle">Why your homepage isn’t your most important page.</h4>
        <ul class="blog-points">
          <li><img src="images/Vector_approve.svg" alt=""> Most traffic lands somewhere else.</li>
          <li><img src="images/Vector_approve.svg" alt=""> Homepages are often just noise & where the real gold lies.</li>
          <li><img src="images/Vector_approve.svg" alt=""> Design your site for intent, not just looks.</li>
          <li><img src="images/Vector_approve.svg" alt=""> Turn every page into a sales machine.</li>
        </ul>
        <a href="blog-post3.html" class="read-more">Read More</a>
      </article>

      <!-- Post 4 -->
      <article class="blog-post">
        <span class="blog-category">#ux</span>
        <h3 class="blog-title">Design Mistakes That Kill Trust</h3>
        <h4 class="blog-subtitle">Why cluttered sites scare buyers away.</h4>
        <ul class="blog-points">
          <li><img src="images/Vector_approve.svg" alt=""> Too many pop-ups = instant exit.</li>
          <li><img src="images/Vector_approve.svg" alt=""> Bad visuals = low credibility.</li>
          <li><img src="images/Vector_approve.svg" alt=""> Clear design builds trust fast.</li>
        </ul>
        <a href="blog-post4.html" class="read-more">Read More</a>
      </article>

      <!-- Post 5 -->
      <article class="blog-post">
        <span class="blog-category">#seo</span>
        <h3 class="blog-title">Content Without Strategy</h3>
        <h4 class="blog-subtitle">Why random blogging won’t bring traffic.</h4>
        <ul class="blog-points">
          <li><img src="images/Vector_approve.svg" alt=""> Keywords still matter.</li>
          <li><img src="images/Vector_approve.svg" alt=""> Quality beats quantity.</li>
          <li><img src="images/Vector_approve.svg" alt=""> Content needs a sales goal.</li>
        </ul>
        <a href="blog-post5.html" class="read-more">Read More</a>
      </article>

      <!-- Post 6 -->
      <article class="blog-post">
        <span class="blog-category">#branding</span>
        <h3 class="blog-title">What’s the difference between a €300 website and a €5,000 website?</h3>
        <h4 class="blog-subtitle">Do designers spin random digits or it goes deeper?</h4>
        <ul class="blog-points">
          <li><img src="images/Vector_approve.svg" alt=""> Consistency builds memory.</li>
          <li><img src="images/Vector_approve.svg" alt=""> Story > logo.</li>
          <li><img src="images/Vector_approve.svg" alt=""> Good brands charge more.</li>
        </ul>
        <a href="bg1.php" class="read-more">Read More</a>
      </article>

    </div>
  </section>



  <script src="javascript\nav_script.js" async></script>

</body>
</html>
