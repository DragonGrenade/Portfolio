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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINEMA THEATER</title>

    <link rel="stylesheet" href="css\images_styles.css">
    <link rel="stylesheet" href="css\back_button_styles.css">
    <link rel="stylesheet" href="css\footer.css">

<link rel="stylesheet" href="css\styles.css">


    <script src="javascript/email_script.js" async></script>


</head>
<body>
<a href="http://localhost/Portfolio%20Website/" class="back-button"></a>

<section class="images_section">
    <div class="flex-box_container">
      <div class="image-container">
        <img src="images/Img_Liquor_01.png" alt="Image 1">
      </div>
      <div class="image-container">
        <img src="images/Img_Liquor_02.png" alt="Image 2">
      </div>
    </div>
</section>







<section class="brief">
  <div class="flex-box_container">
  <div class="brief-left">
  <div class="info-row">
    <span class="label">Category:</span>
    <span class="value">Web Design + Web Development</span>
  </div>
  <div class="info-row">
    <span class="label">Client:</span>
    <span class="value">NONE - SAMPLE WORK</span>
  </div>
  <div class="info-row">
    <span class="label">Duration:</span>
    <span class="value">2 DAYS</span>
  </div>


  <a href="../includes/Liquor" target="_blank" class="preview-button">
  PREVIEW WEBSIT
  <img src="images/arrow_button.svg" alt="Arrow Icon" class="arrow-icon">
</a>

</div>
    <div class="brief-right">
    <h2 class="main-heading">"WHO SAID YOU CANNOT WIN IMPRESSIONS WITH PLAIN BLACK & WHITE?"</h2>
      <p>     
      When the goal is to elevate taste, legacy, and exclusivity, clutter has no place. 
      The Jericho experience is designed to let the product speak for itself. 
      On the screen, as in the glass, less is more. The design is:</br>

      <ul>
        <li>Strikingly minimal.</li>
        <li>Premium photography paired with timeless copy.</li>
        <li>A bold above-the-fold presence (+ subtle animation) that makes a mark. </li>
        <li>Intuitive navigation for those ready to discover, taste, or join our exclusive membership.</li>
      </ul>
      </p>
    </div>
  </div>
</section>





<section class="challenges-section">
  <h2 class="main-heading">IN LUXURY, IT'S NOT JUST WHAT YOU ADD, BUT WHAT YOU LEAVE OUT.</h2>
  <div class="flex-box_container_challenges">
    <!-- First Column -->
    <div class="challenges-left">
      <div class="challenge">
      <h3>Clear Experience</h3>
        <p>Browse any liquor store online and you’ll see endless walls of bottles and generic product grids. But true connoisseurs don’t want a catalog—they want a curated journey. Jericho presents its core collection upfront: single malts, bourbons, tequilas, vodkas. No wandering, no noise—just the spirits you’re here to experience.</p>
      </div>
      <div class="challenge">
      <h3>Designed to Breathe. Like the Drink Itself.</h3>
        <p>Our spirits are aged, refined, and allowed to breathe before perfection is bottled. The site mirrors that philosophy—space, clarity, and flow that lets every bottle’s story unfold without distraction.</p>
       </div>
      <div class="challenge">
        <h3>No Flash Sales. No Gimmicks. Just Legacy.</h3>
        <p>The last thing an exclusive liquor brand should be is pushy. Jericho stands in quiet confidence. Authority comes not from shouting, but from presence. From grain to glass, we establish trust through heritage, sustainability, and mastery.
        </p>
        
      </div>
      <div class="challenge">
        <h3>Trust Is Built in the White Space.</h3>
        <p>Just as a spirit reveals its character sip by sip, Jericho reveals its brand in subtle layers. Minimal design leaves room for the essential—heritage, craftsmanship, quality. White space creates an atmosphere of prestige, making each collection feel rare, untouchable, and worth savoring.</p>
       
      </div>
      <div class="challenge">
        <h3>Connoisseurs Care About Tasting. Not Browsing.</h3>
        <p>Collectors and enthusiasts aren't here for clutter—they want what matters: provenance, tasting notes, limited batches, and how to secure their bottle. Jericho strips away the unnecessary, putting only the essentials in your hand, fast. </p>
        
        <span id="challenge_note">The usual tactic in e-commerce is to flood pages with options, 
            discounts, and pop-ups, hoping to trap attention. 
            But luxury is not about trapping—it's about inviting. 
            Jericho knows that a connoisseur's time is scarce. 
            By focusing on clarity and exclusivity, we don't just keep attention—we earn trust, sip by sip.
</span>  
      </div>
    </div>




    <!-- Second Column 
    <div class="challenges-right">
      <div class="challenge">
        <h3>Negative Testimonials & Reviews</h3>
        <p>As a result of people avoiding to use online booking due to distrust or unfamiliarity, there is frustration due to long waiting lines in person that could’ve been avoided with smoother online booking since more people would book online.</p>
        <p>Users sometimes blame the theater directly even if the fault lies with the third-party service for errors and inaccessibility around the booking platform.</p>
      </div>
      <div class="challenge">
        <h3>Lack of Real-Time Information</h3>
        <p>No clear, live updates on available seats, upcoming movies, or sold-out sessions.</p>
        <p>No notification system for booking confirmations, cancellations, or changes.</p>
      </div>
      <div class="challenge">
        <h3>Lack of Accessibility & Inclusivity</h3>
        <p>No accessible design (for screen readers, visually impaired, etc.).</p>
        <p>No clear info about subtitled movies, audio-described showings, or wheelchair-accessible seating.</p>
      </div>
      <div class="challenge">
        <h3>Poor “About Us” Page</h3>
        <p>No communication of the mission or their evolution.</p>
        <p>The cinema has a story and origins but lacks skills to communicate it to consumers. They have no compelling story.</p>
        <p>Feels way too generic and users have no emotional reason to care or remember the theater.</p>
        <p>Consumers don’t understand what sets them apart (e.g., indie-friendly, community-run, high-end experience).</p>
      </div>
    </div>
-->

  </div>
</section>








<?php include("../Portfolio Website/includes/contact_include.php"); ?>


<?php include("../Portfolio Website/includes/include_footer_02.php");?>


<script src="javascript/clock.js" async></script>


</body>
</html>
