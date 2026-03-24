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

    header("Location: index.php"); // reload page
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
    <title>CHRISDESIGNWEB</title>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Greek&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="https://chriswebdesign.wasmer.app/css/portfolio_pieces_styles.css">
    <link rel="stylesheet" href="https://chriswebdesign.wasmer.app/css/contact_styles.css">
    <link rel="stylesheet" href="https://chriswebdesign.wasmer.app/css/styles.css">
    <link rel="stylesheet" href="https://chriswebdesign.wasmer.app/css/footer.css">
    <link rel="stylesheet" href="https://chriswebdesign.wasmer.app/css/offers_section_styles.css">
    <link rel="stylesheet" href="https://chriswebdesign.wasmer.app/css/services_section_01.css">
    <link rel="stylesheet" href="https://chriswebdesign.wasmer.app/css/lang_button_styles.css">


        <link rel="stylesheet" href="css\nav_styles.css">

    <!-- JS -->
    

        <script src="javascript/email_script.js" async></script>

</head>
<body>
<?php include("includes/nav_include.php"); ?>

<?php include("includes/services_include.php"); ?>
<?php include("includes/portfolio_pieces_include.php"); ?>
<?php include("includes/PortfolioProj4/includes/include_bg_section_01.php"); ?>
<?php include("includes/include_offers.php"); ?>
<?php include("includes/include_bg_section_01.php"); ?>
<?php include("includes/contact_include.php"); ?>
<?php include("includes/include_footer_02.php"); ?>


<script src="javascript\nav_script.js" async></script>

<script src="javascript/clock.js" async></script>
</body>
</html>
