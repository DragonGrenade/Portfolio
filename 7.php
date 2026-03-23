<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio Projects</title>
<link rel="stylesheet" href="css\styles.css">

<link rel="stylesheet" href="css\back_button_styles.css">
</head>
<body>
<a href="/Portfolio%20Website" class="back-button"></a>
<section class="see_more_section">
  <h1>PORTFOLIO PROJECTS</h1>

  <!-- FILTER -->
  <div class="filter_bar">
    <button class="filter_btn active" data-filter="all">All</button>
    <button class="filter_btn" data-filter="small">Small Projects</button>
    <button class="filter_btn" data-filter="large">Large Projects</button>
  </div>

  <!-- SMALL PROJECTS -->
  <div class="section_wrapper small_wrapper">
    <h2 class="section_title">Small Projects</h2>
    <div class="projects_container small_projects">
      <div class="project_item">
        <a href="project_1.php">
          <img src="images/portfolio_section_img_01.png" alt="Small Project 1">
          <div class="project_footer">
            <span>#CUSTOM CODE</span>
            <span>#PHOTOGRAPHY</span>
          </div>
        </a>
      </div>
      <div class="project_item">
        <a href="project_2.php">
          <img src="images/portfolio_section_img_02.png" alt="Small Project 2">
          <div class="project_footer">
            <span>#CUSTOM CODE</span>
            <span>#DRONE SHOP</span>
          </div>
        </a>
      </div>
      <div class="project_item">
        <a href="project_3.php">
          <img src="images/Piece_3.png" alt="Small Project 3">
          <div class="project_footer">
            <span>#CUSTOM CODE</span>
            <span>#PORTFOLIO</span>
          </div>
        </a>
      </div>
    </div>
  </div>

<!-- LARGE PROJECTS -->
<div class="section_wrapper large_wrapper">
  <h2 class="section_title">Large Projects</h2>
  <div class="projects_container">
    <div class="project_item large_project_item">
      <a href="#">
        <img src="images/Piece_4.png" alt="Large Project 1">
        <div class="overlay">PROJECT NOT COMPLETE YET</div>
        <div class="project_footer">
          <span>#CUSTOM CODE</span>
          <span>#CORPORATE WEBSITE</span>
        </div>
      </a>
    </div>
  </div>
</div>


    

      

</section>

<script src="script.js"></script>
</body>
</html>




<style>
 @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');

body {
  font-family: 'Oswald', sans-serif;
  margin: 0;
  padding: 0;
}

.see_more_section {
  padding: clamp(1rem, 5vw, 3rem);
}

.see_more_section h1 {
  font-size: clamp(1.6rem, 2.8vw, 2.8rem);
  margin-bottom: 20px;
  text-align: left;
}

/* SECTION TITLES */
.section_title {
  font-size: clamp(1.4rem, 2.2vw, 2rem);
  margin-bottom: 20px;
  text-align: left;
}

/* FILTER BAR */
.filter_bar {
  display: flex;
  gap: 15px;
  margin-bottom: 30px;
  flex-wrap: wrap;
}

.filter_btn {
  padding: 8px 20px;
  font-size: 1rem;
  font-weight: 600;
  border: 2px solid #111;
  background: none;
  cursor: pointer;
  transition: 0.3s;
}

.filter_btn.active,
.filter_btn:hover {
  background-color: #111;
  color: #fff;
}

/* PROJECTS GRID */
.projects_container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
}

.project_item {
  flex: 1 1 min(30%, 300px);
  display: flex;
  flex-direction: column;
}

.project_item img {
  width: 100%;
  aspect-ratio: 4/3;
  display: block;
  border-radius: 10px;
}

.project_item img:hover {
  opacity: 0.6;
}

.project_footer {
  display: flex;
  justify-content: space-between;
  padding: 5px 0;
  font-size: clamp(0.9rem, 1.2vw, 1.5rem);
  color: #000;
}

/* SECTION WRAPPER HIDDEN */
.section_wrapper.hidden {
  display: none;
}


/* Overlay for large projects */
.large_project_item {
  position: relative;
  overflow: hidden;
}

.large_project_item img {
  display: block;
  width: 100%;
  aspect-ratio: 4/3;
  transition: 0.3s ease;
}

/* Overlay text */
.large_project_item .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(200, 200, 200, 0.7); /* grey overlay */
  color: #111;
  font-weight: 700;
  font-size: clamp(1rem, 2vw, 2rem);
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s ease;
}

/* Hover effect */
.large_project_item:hover img {
  filter: brightness(50%);
}

.large_project_item:hover .overlay {
  opacity: 1;
}

/* Responsive */
@media (max-width: 768px) {
  .project_item {
    flex: 1 1 100%;
  }
}



</style>


<script>
const filterButtons = document.querySelectorAll(".filter_btn");
const smallWrapper = document.querySelector(".small_wrapper");
const largeWrapper = document.querySelector(".large_wrapper");

filterButtons.forEach(btn => {
  btn.addEventListener("click", () => {
    filterButtons.forEach(b => b.classList.remove("active"));
    btn.classList.add("active");

    const filter = btn.dataset.filter;

    if (filter === "all") {
      smallWrapper.classList.remove("hidden");
      largeWrapper.classList.remove("hidden");
    } else if (filter === "small") {
      smallWrapper.classList.remove("hidden");
      largeWrapper.classList.add("hidden");
    } else if (filter === "large") {
      smallWrapper.classList.add("hidden");
      largeWrapper.classList.remove("hidden");
    }
  });
});


</script>