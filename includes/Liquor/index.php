<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Top Bar</title>

  <!-- Inter font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/top_bar_styles.css">
    <link rel="stylesheet" href="css/general_styles.css">
    <link rel="stylesheet" href="css/abovefold_styles.css">

    <link rel="stylesheet" href="css/nav_styles.css">


    <link rel="stylesheet" href="css/footer_styles.css">


  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <!-- Icons (Font Awesome) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>

<?php include("includes/top_bar.php"); ?>

<section class="hero-section">  <!-- nav is part of hero section which is why nav goes below hero section opening. -->


<?php include("includes/nav.php"); ?>



<?php include("includes/hero.php"); ?>














</section>

<?php include("includes/section_5.php"); ?>

<?php include("includes/section_4.php"); ?>



<?php include("includes/section_2.php"); ?>

<?php include("includes/section_3.php"); ?>


<?php include("includes/section_1.php"); ?>

<?php include("includes/footer.php"); ?>


</body>
</html>