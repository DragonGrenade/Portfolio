<?php
session_start();

// Default language
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

// Toggle language on button click
if (isset($_GET['toggle_lang'])) {
    $_SESSION['lang'] = $_SESSION['lang'] === 'en' ? 'gr' : 'en';

    // Prevent caching issues
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");

    // Redirect back to current page (remove toggle_lang param)
    $currentPage = $_SERVER['PHP_SELF'];
    $query = $_SERVER['QUERY_STRING'];
    parse_str($query, $queryArray);
    unset($queryArray['toggle_lang']);
    $queryString = http_build_query($queryArray);
    $redirectURL = $currentPage . ($queryString ? '?' . $queryString : '');
    header("Location: $redirectURL");
    exit();
}

// Load language file (adjust path if your file sits in a subfolder)
$langFile = __DIR__ . "/lang/" . $_SESSION['lang'] . ".php";
if (!file_exists($langFile)) {
    die("Language file not found: " . $langFile);
}
include $langFile;
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($_SESSION['lang']); ?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($blog_title); ?></title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- Your CSS -->
  <link rel="stylesheet" href="css/styles.css">
 

  <style>
    /* small page-specific styles kept from your previous file */
    * { box-sizing: border-box; margin:0; padding:0; }
    body { font-family:'Poppins', sans-serif; background:#fff; color:#111; line-height:1.7; }
    .post-container { max-width:800px; margin:4rem auto; padding:clamp(1rem,5vw,3rem); }
    .blog-category { font-size:0.9rem; font-weight:600; color:#c94c05; display:inline-block; margin-bottom:.5rem; }
    .blog-title { font-family:'Bebas Neue', sans-serif; font-size:2.8rem; margin:.5rem 0 .75rem; letter-spacing:1px; }
    .blog-subtitle { font-size:14px; font-weight:400; color:#555; margin-bottom:2rem; }
    .post-content p { font-size:14px; margin-bottom:1.2rem; }
    .blog-points { list-style:none; padding:0; margin:2rem 0; }
    .blog-points li { font-weight:600; font-size:14px; display:flex; align-items:center; margin-bottom:.75rem; }
    .blog-points li img { width:16px; height:16px; margin-right:.5rem; }
    .back-btn { display:inline-block; margin-top:2rem; padding:.7rem 1.5rem; font-size:14px; font-weight:600; border:1px solid #c94c05; background:#c94c05; color:#fff; text-decoration:none; }
    .back-btn:hover { background:#a53300; }
    .highlight { background: linear-gradient(135deg,#e65100,#ff7043); color:#fff; padding:1rem; margin:2rem 0; border-radius:6px; }

    /* optional: slightly adjust Greek typography */
    html[lang="gr"] body { /* you can tweak sizes here if needed */
      /* font-size: 0.98rem; */
    }
  </style>

          <link rel="stylesheet" href="css\nav_styles.css">

</head>
<body>
<?php include("includes/nav_include.php"); ?>



  <main class="post-container">
    <div class="blog-category"><?= htmlspecialchars($blog_category); ?></div>

    <h1 class="blog-title"><?= $blog_title; ?></h1>

    <h2 class="blog-subtitle"><?= $blog_intro; ?></h2>

    <!-- Section 1 -->
    <section class="post-content">
      <p><?= $section1_p1; ?></p>
      <p><?= $section1_p2; ?></p>
      <p><?= $section1_p3; ?></p>
      <p><?= $section1_p4; ?></p>
    </section>

    <!-- Section 2 -->
    <h3 class="blog-subtitle"><?= $section2_title; ?></h3>
    <section class="post-content">
      <p><?= $section2_p1; ?></p>
      <p><?= $section2_p2; ?></p>
      <p><em><?= $section2_p3; ?></em></p>
      <p><strong><?= $section2_p4; ?></strong></p>
      <p><?= $section2_p5; ?></p>
      <p><?= $section2_p6; ?></p>
    </section>

    <!-- Section 3 -->
    <h3 class="blog-subtitle"><?= $section3_title; ?></h3>
    <ul class="blog-points">
      <?php foreach ($section3_points as $point): ?>
        <li><?= $point; ?></li>
      <?php endforeach; ?>
    </ul>

    <!-- Section 4 -->
    <h3 class="blog-subtitle"><?= $section4_title; ?></h3>
    <section class="post-content">
      <p><?= $section4_p1; ?></p>
      <p><?= $section4_p2; ?></p>
      <p><?= $section4_p3; ?></p>
      <p><?= $section4_p4; ?></p>
      <p><?= $section4_p5; ?></p>
    </section>

    <!-- Section 5 -->
    <h3 class="blog-subtitle"><?= $section5_title; ?></h3>
    <section class="post-content">
      <p><?= $section5_p1; ?></p>
      <p><?= $section5_p2; ?></p>
      <p><?= $section5_p3; ?></p>
      <p><?= $section5_p4; ?></p>
    </section>

    <div class="highlight">
      <p><strong><?= $final_p1; ?></strong></p>
      <p><?= $final_p2; ?></p>
    </div>

    <a href="include_bg_page.php" class="back-btn"><?= $back_to_blog; ?></a>
  </main>


<script src="javascript\nav_script.js" async></script>

</body>
</html>