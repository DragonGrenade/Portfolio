<!-- BLOG SECTION -->
<section class="blog-section">
  <h2 class="blog-header">NEED INSIGHTS?</h2>

  <div class="blog-row">
    <!-- Blog Post 1 -->
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

    <!-- Blog Post 2 -->
    <article class="blog-post">
      <span class="blog-category">#strategy</span>
      <h3 class="blog-title">DIY Website Builders: The Hidden Costs</h3>
      <h4 class="blog-subtitle">Why “free” platforms cost you more than you think.</h4>
      <ul class="blog-points">
        <li><img src="images/Vector_approve.svg" alt=""> Generic templates = forgettable brand.</li>
        <li><img src="images/Vector_approve.svg" alt=""> Locked features unless you upgrade.</li>
        <li><img src="images/Vector_approve.svg" alt=""> “Free” now may cost you clients later.</li>
      </ul>
      <a href="blog-post2.html" class="read-more">Read More</a>
    </article>

    <!-- Blog Post 3 -->
    <article class="blog-post">
      <span class="blog-category">#sales</span>
      <h3 class="blog-title">The Homepage Trap</h3>
      <h4 class="blog-subtitle">Why your homepage isn’t your most important page.</h4>
      <ul class="blog-points">
        <li><img src="images/Vector_approve.svg" alt=""> Most traffic lands somewhere else.</li>
        <li><img src="images/Vector_approve.svg" alt=""> Homepages are often just noise — the real gold lies elsewhere.</li>
        <li><img src="images/Vector_approve.svg" alt=""> Design for intent, not just looks.</li>
        <li><img src="images/Vector_approve.svg" alt=""> Turn every page into a sales machine.</li>
      </ul>
      <a href="include_bg_page.php" class="read-more">Read More</a>
    </article>
  </div>

  <a href="include_bg_page.php" class="more-posts-btn">More Posts</a>
</section>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
/* ============================= */
/* BLOG SECTION BASE STYLES */
/* ============================= */
.blog-section {
  padding: 0 clamp(20px, 4vw, 50px);
  margin-top: 100px;
  font-family: 'Poppins', sans-serif;
  text-align: center;
}

.blog-header {
  font-family: 'Bebas Neue', sans-serif;
  font-size: clamp(28px, 4vw, 40px);
  font-weight: 400;
  letter-spacing: 1px;
  color: #000;
  margin-bottom: 50px;
}

.blog-row {
  display: flex;
  flex-direction: column;
  gap: 30px;
  align-items: stretch;
}

/* BLOG POST CARD */
.blog-post {
  background: #fafafa;
  border: 1px solid #eee;
  padding: clamp(20px, 3vw, 30px);
  text-align: left;
  transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.blog-post:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

.blog-category {
  display: inline-block;
  color: #c94c05;
  font-size: 0.9rem;
  font-weight: 600;
  margin-bottom: 8px;
}

.blog-title {
  font-family: 'Bebas Neue', sans-serif;
  font-size: clamp(22px, 2vw, 28px);
  margin: 4px 0;
  color: #000;
  letter-spacing: 0.5px;
}

.blog-subtitle {
  font-size: 15px;
  font-weight: 400;
  color: #555;
  margin-bottom: 16px;
  line-height: 1.4em;
}

.blog-points {
  list-style: none;
  padding: 0;
  margin: 0 0 20px 0;
}

.blog-points li {
  display: flex;
  align-items: flex-start;
  gap: 8px;
  font-size: 14px;
  font-weight: 600;
  color: #000;
  margin-bottom: 10px;
  line-height: 1.5em;
}

.blog-points li img {
  width: 16px;
  height: 16px;
  flex-shrink: 0;
  margin-top: 3px;
}

.read-more {
  display: inline-block;
  padding: 10px 22px;
  font-size: 14px;
  font-weight: 600;
  color: #fff;
  background: #c94c05;
  border: 1px solid #c94c05;
  text-decoration: none;
  transition: background 0.3s ease, transform 0.2s ease;
}
.read-more:hover {
  background: #a93226;
  transform: translateY(-2px);
}

/* MORE POSTS BUTTON */
.more-posts-btn {
  display: inline-block;
  margin-top: 50px;
  padding: 12px 28px;
  font-size: 15px;
  font-weight: 600;
  font-family: 'Poppins', sans-serif;
  color: #fff;
  background: #c94c05;
  border: 1px solid #c94c05;
  text-decoration: none;
  transition: background 0.3s ease, transform 0.2s ease;
}
.more-posts-btn:hover {
  background: #a93226;
  transform: translateY(-2px);
}

/* ============================= */
/* RESPONSIVE BREAKPOINTS */
/* ============================= */

/* Tablet (min-width: 810px) — 2 posts per row */
@media (min-width: 810px) {
  .blog-row {
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
  }
  .blog-post {
    flex: 1 1 calc(50% - 15px);
    max-width: calc(50% - 15px);
  }
}

/* Desktop (min-width: 1200px) — 3 posts per row */
@media (min-width: 1200px) {
  .blog-post {
    flex: 1 1 calc(33.33% - 20px);
    max-width: calc(33.33% - 20px);
  }
}

/* ============================= */
/* GREEK LANGUAGE ADJUSTMENT */
/* ============================= */
html[lang="gr"] .blog-header,
html[lang="gr"] .blog-title,
html[lang="gr"] .blog-subtitle,
html[lang="gr"] .blog-points li,
html[lang="gr"] .read-more,
html[lang="gr"] .more-posts-btn {
  font-family: 'Noto Sans Greek', 'Poppins', sans-serif;
}
</style>
