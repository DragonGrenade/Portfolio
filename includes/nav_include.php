<header class="site-header">
    <div class="brand"><a href="http://192.168.1.2/Portfolio%20Website">CHRISDESIGNWEB</a></div>
    <div class="hamburger" id="hamburger">
      <span></span>
    </div>
  </header>

  <div class="nav-overlay" id="navOverlay"></div>

  <aside class="side-nav" id="sideNav">
  <ul id="navLinks">
    <li><a href="http://192.168.1.2/Portfolio%20Website/7.php">Projects</a></li>
    <li><a href="http://192.168.1.2/Portfolio%20Website/include_bg_page.php">Insights</a></li>
    
    <li class="lang-toggle-item">
  <a href="?toggle_lang=1" class="lang-toggle">
    <!-- Left label -->
    <span class="lang-label">EN</span>

    <!-- Toggle switch -->
    <div class="lang-switch">
      <div class="lang-slider <?= $_SESSION['lang'] === 'en' ? 'left' : 'right'; ?>"></div>
    </div>

    <!-- Right label -->
    <span class="lang-label">GR</span>
  </a>
</li>


  </ul>
</aside>

<!--
  <main style="height:120vh; display:flex; align-items:center; justify-content:center;">
    <h1 style="font-size:3rem;">Main Content Area</h1>
  </main>

-->