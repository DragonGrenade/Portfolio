<!-- BLOG SECTION -->
<section class="blog-section">
  <h2 class="blog-title">From Our Blog</h2>
  <div class="blog-container">
    <article class="blog-post">
      <h3>Post 1 Title</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <a href="#">Read More →</a>
    </article>
    <article class="blog-post">
      <h3>Post 2 Title</h3>
      <p>Praesent tincidunt, sapien at suscipit porta, elit ipsum blandit odio.</p>
      <a href="#">Read More →</a>
    </article>
    <article class="blog-post">
      <h3>Post 3 Title</h3>
      <p>Donec posuere, nulla ac consequat fermentum, lorem justo fermentum elit.</p>
      <a href="#">Read More →</a>
    </article>
    <!-- Hidden posts -->
    <article class="blog-post hidden">
      <h3>Post 4 Title</h3>
      <p>Aliquam erat volutpat. Duis bibendum sapien at arcu tristique.</p>
      <a href="#">Read More →</a>
    </article>
    <article class="blog-post hidden">
      <h3>Post 5 Title</h3>
      <p>Sed nec eros vel erat ullamcorper consequat non nec justo.</p>
      <a href="#">Read More →</a>
    </article>
  </div>
  <button id="loadMoreBtn">Load More</button>
</section>

<style>
.blog-section {
  max-width: 800px;
  margin: 3rem auto;
  padding: 0 1rem;
  text-align: center;
}
.blog-title {
  font-size: 2rem;
  margin-bottom: 2rem;
}
.blog-container {
  display: grid;
  gap: 1.5rem;
}
.blog-post {
  border: 1px solid #eee;
  padding: 1.2rem;
  border-radius: 8px;
  text-align: left;
  background: #fafafa;
}
.blog-post h3 {
  margin-top: 0;
}
.blog-post a {
  color: #0073e6;
  text-decoration: none;
  font-weight: 500;
}
.hidden {
  display: none;
}
#loadMoreBtn {
  margin-top: 2rem;
  padding: 0.75rem 1.5rem;
  font-size: 1rem;
  border: none;
  border-radius: 6px;
  background-color: #0073e6;
  color: #fff;
  cursor: pointer;
}
#loadMoreBtn:hover {
  background-color: #005bb5;
}
</style>

<script>
document.getElementById("loadMoreBtn").addEventListener("click", function() {
  const hiddenPosts = document.querySelectorAll(".blog-post.hidden");
  hiddenPosts.forEach(post => post.classList.remove("hidden"));
  this.style.display = "none"; // hide button after loading
});
</script>
