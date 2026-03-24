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

    // Redirect back to current page instead of index.php
    $currentPage = $_SERVER['PHP_SELF'];
    $query = $_SERVER['QUERY_STRING'];
    parse_str($query, $queryArray);
    unset($queryArray['toggle_lang']);
    $queryString = http_build_query($queryArray);
    $redirectURL = $currentPage . ($queryString ? '?' . $queryString : '');
    header("Location: $redirectURL");
    exit();
}

// Load language file dynamically
$langFile = __DIR__ . "/lang/" . $_SESSION['lang'] . ".php";
if (!file_exists($langFile)) {
    die("Language file not found: " . $langFile);
}
include $langFile;
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['lang']; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $lang['title']; ?></title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;600&family=Noto+Sans&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #fff;
      color: #222;
      line-height: 1.6;
    }

    header {
    
      padding: 4rem clamp(1rem, 5vw, 3rem);
      text-align: center;
    }

    h1 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    h2 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 1.5rem;
      margin-top: 2rem;
      margin-bottom: 1rem;
    }

    p {
      margin-bottom: 1rem;
      font-size: 1rem;
    }

    ul {
      margin: 1rem 0 1rem 1.5rem;
      padding: 0;
      list-style: disc;
    }

    a {
      color: #c94c05;
      text-decoration: none;
      font-weight: 600;
    }

    a:hover {
      text-decoration: underline;
    }

    .highlight {
      background: linear-gradient(135deg, #e65100, #ff7043);
      color: #fff;
      padding: 1rem;
      margin: 2rem 0;
    }

    .back-link {
      display: inline-block;
      margin-top: 2rem;
      padding: 0.7rem 1.5rem;
      font-size: 14px;
      font-weight: 600;
      font-family: 'Poppins', sans-serif;
      border: 1px solid #c94c05;
      background: #c94c05;
      color: #fff;
      text-decoration: none;
      transition: background 0.2s;
    }
    .back-link:hover {
      background: #a53300;
    }

    .container {
      max-width: 760px;
      margin: 0 auto;
      padding: clamp(1rem, 5vw, 3rem);
    }

    /* ===== Greek text adjustments ===== */
    html[lang="gr"] h1,
    html[lang="gr"] h2,
    html[lang="gr"] p,
    html[lang="gr"] ul li,
    html[lang="gr"] a {
      font-family: 'Noto Sans', sans-serif;
      font-size: clamp(0.9rem, 1.8vw, 1rem);
      line-height: 1.5;
    }

    html[lang="gr"] h1,
    html[lang="gr"] h2 {
      font-size: clamp(1.4rem, 2.2vw, 2rem);
    }
  </style>

          <link rel="stylesheet" href="https://chriswebdesign.wasmer.app/css\nav_styles.css">

</head>

<body>
<?php include("https://chriswebdesign.wasmer.app/includes/nav_include.php"); ?>
  <header>
    <h1><?= $lang['heading_main']; ?></h1>
  </header>

  <main class="container">
    <h2><?= $lang['how_it_works']; ?></h2>
    <p><?= $lang['how_text']; ?></p>

    <h2><?= $lang['what_you_provide']; ?></h2>
    <ul>
      <li><?= $lang['provide_1']; ?></li>
      <li><?= $lang['provide_2']; ?></li>
      <li><?= $lang['provide_3']; ?></li>
    </ul>

    <h2><?= $lang['why_i_do']; ?></h2>
    <p><?= $lang['why_intro']; ?></p>
    <ul>
      <li><?= $lang['why_1']; ?></li>
      <li><?= $lang['why_2']; ?></li>
      <li><?= $lang['why_3']; ?></li>
    </ul>

    <h2><?= $lang['what_you_get']; ?></h2>
    <p><?= $lang['get_intro']; ?></p>
    <ul>
      <li><?= $lang['get_1']; ?></li>
      <li><?= $lang['get_2']; ?></li>
      <li><?= $lang['get_3']; ?></li>
    </ul>

    <div class="highlight">
      <strong><?= $lang['important']; ?></strong> <?= $lang['spots_notice']; ?>
    </div>

    <a href="https://chriswebdesign.wasmer.app/index.php" class="back-link">← <?= $lang['back']; ?></a>
  </main>

  <footer>
    <p>© 2025 Bayonet. All rights reserved.</p>
  </footer>

<script src="https://chriswebdesign.wasmer.app/javascript\nav_script.js" async></script>
  <script src="https://chriswebdesign.wasmer.app/javascript/lang_script.js" async></script>
</body>
</html>
