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

    // Redirect back to the current page
    $currentPage = $_SERVER['PHP_SELF']; // current script
    $query = $_SERVER['QUERY_STRING']; // preserve other GET params if needed
    // Remove toggle_lang from query
    parse_str($query, $queryArray);
    unset($queryArray['toggle_lang']);
    $queryString = http_build_query($queryArray);
    $redirectURL = $currentPage . ($queryString ? '?' . $queryString : '');

    header("Location: $redirectURL");
    exit();
}

// Load language file
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
    <title>CINEMA THEATER</title>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Greek&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css\images_styles.css">
    <link rel="stylesheet" href="css\contact_styles.css">
    <link rel="stylesheet" href="css\back_button_styles.css">
    <link rel="stylesheet" href="css\footer.css">
<link rel="stylesheet" href="css\nav_styles.css">
<link rel="stylesheet" href="css\styles.css">
<link rel="stylesheet" href="css/lang_button_styles.css">
    <script src="javascript/email_script.js" async></script>


</head>
<body>
<?php include("includes/nav_include.php"); ?>


<section class="images_section">
    <div class="flex-box_container">
      <div class="image-container">
        <img src="images/Image_1.png" alt="<?= $lang['image_alt_1']; ?>">
      </div>
      <div class="image-container">
        <img src="images/Image_2.png" alt="<?= $lang['image_alt_2']; ?>">
      </div>
    </div>
</section>

<section class="brief">
  <div class="flex-box_container">
    <div class="brief-left">
      <div class="info-row">
        <span class="label"><?= $lang['brief_category']; ?></span>
        <span class="value"><?= $lang['brief_category_val']; ?></span>
      </div>
      <div class="info-row">
        <span class="label"><?= $lang['brief_client']; ?></span>
        <span class="value"><?= $lang['brief_client_val']; ?></span>
      </div>
      <div class="info-row">
        <span class="label"><?= $lang['brief_duration']; ?></span>
        <span class="value"><?= $lang['brief_duration_val']; ?></span>
      </div>

      <a href="https://kiyopractice.webflow.io/" class="preview-button">
        <?= $lang['brief_preview_btn']; ?>
        <img src="images/arrow_button.svg" alt="Arrow Icon" class="arrow-icon">
      </a>
    </div>

    <div class="brief-right">
      <h2 class="main-heading"><?= $lang['brief_heading']; ?></h2>
      <p><?= $lang['brief_paragraph']; ?>
        <ul>
          <li><?= $lang['brief_ul_1']; ?></li>
          <li><?= $lang['brief_ul_2']; ?></li>
          <li><?= $lang['brief_ul_3']; ?></li>
          <li><?= $lang['brief_ul_4']; ?></li>
        </ul>
      </p>
    </div>
  </div>
</section>

<section class="challenges-section">
  <h2 class="main-heading"><?= $lang['challenges_heading']; ?></h2>
  <div class="flex-box_container_challenges">
    <div class="challenges-left">
      <div class="challenge">
        <h3><?= $lang['challenge1_title']; ?></h3>
        <p><?= $lang['challenge1_text']; ?></p>
      </div>
      <div class="challenge">
        <h3><?= $lang['challenge2_title']; ?></h3>
        <p><?= $lang['challenge2_text']; ?></p>
      </div>
      <div class="challenge">
        <h3><?= $lang['challenge3_title']; ?></h3>
        <p><?= $lang['challenge3_text']; ?></p>
      </div>
      <div class="challenge">
        <h3><?= $lang['challenge4_title']; ?></h3>
        <p><?= $lang['challenge4_text']; ?></p>
      </div>
      <div class="challenge">
        <h3><?= $lang['challenge5_title']; ?></h3>
        <p><?= $lang['challenge5_text']; ?></p>
        <span id="challenge_note"><?= $lang['challenge5_note']; ?></span>
      </div>
    </div>
  </div>
</section>


<?php include("includes/contact_include.php"); ?>
<?php include("includes/include_footer_02.php"); ?>


<script src="javascript\nav_script.js" async></script>
<script src="javascript/lang_script.js" async></script>
<script src="javascript/clock.js" async></script>
</body>

</html>