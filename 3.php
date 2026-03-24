<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Footer Design</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      background: #fff;
      color: #111;
      font-family: 'Poppins', sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      justify-content: space-between;
    }

    .content {
      flex: 1;
      padding: clamp(1rem, 5vw, 3rem);
      display: flex;
      gap: 60px; /* space between columns */
    }

    /* Left column for links */
    .links-column {
      flex: 1;
    }

    .links-column p {
      margin: 0 0 10px;
      font-size: 14px;
      cursor: pointer;
    }

    .links-column p:hover {
      text-decoration: underline;
    }

    /* Right column */
    .collaborate-column {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 20px;
      align-items: flex-start;
    }

    .collaborate-box {
      border: 1px solid #ddd;
      max-width: 360px;
      width: 100%;
    }

    /* Orange header box */
    .collaborate-header {
      background: linear-gradient(135deg, #c94c05, #a93226);
      color: #fff;
      padding: 20px;
    }

    .collaborate-header h2 {
      margin: 0;
      font-family: 'Bebas Neue', sans-serif;
      font-size: 22px;
      letter-spacing: 1px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .collaborate-header h2 img {
      cursor: pointer;
      width: 20px;
      height: 20px;
    }

    .collaborate-header p {
      margin: 5px 0;
      font-size: 14px;
      font-family: 'Poppins', sans-serif;
    }

    .collaborate-header ul {
      margin: 10px 0 0 18px;
      padding: 0;
    }

    .collaborate-header li {
      margin-bottom: 6px;
      font-size: 13px;
    }

    /* Case studies box */
    .case-studies {
      background: #fff;
      color: #111;
      padding: 20px;
    }

    .case-studies h3 {
      margin: 0 0 10px;
      font-family: 'Bebas Neue', sans-serif;
      font-size: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .case-studies h3 img {
      width: 20px;
      height: 20px;
      cursor: pointer;
    }

    .case-studies ul {
      margin: 0 0 10px 18px;
      padding: 0;
    }

    .case-studies li {
      margin-bottom: 6px;
      font-size: 13px;
    }

    .case-studies p {
      margin: 8px 0;
      font-size: 13px;
      line-height: 1.5em;
    }

    /* Footer */
    footer {
      border-top: 1px solid #111;
      text-align: center;
      padding: 20px;
    }

    .local-time {
      font-weight: bold;
      font-size: 24px;
      margin-bottom: 10px;
      font-family: 'Bebas Neue', sans-serif;
      letter-spacing: 1px;
    }

    .clock {
      display: inline-flex;
      gap: 10px;
      align-items: center;
      margin-bottom: 15px;
    }

    .clock .time-box {
      border: 1px solid #111;
      padding: 10px 20px;
      font-size: 24px;
      font-weight: bold;
      font-family: 'Bebas Neue', sans-serif;
    }

    .social {
      font-size: 22px;
      margin: 10px 0;
    }

    .social a {
      text-decoration: none;
      color: #111;
      margin: 0 8px;
    }

    .tagline {
      font-size: 14px;
      margin-top: 10px;
    }

    .copyright {
      font-size: 12px;
      margin-top: 5px;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="content">
    <!-- Left Column -->
    <div class="links-column">
      <p>Insights</p>
      <p>Web Design Samples (Figma)</p>
    </div>

    <!-- Right Column -->
    <div class="collaborate-column">
      <!-- Collaborate Box -->
      <div class="collaborate-box">
        <div class="collaborate-header">
          <h2>
            COLLABORATE WITH ME
            <img src="https://chriswebdesign.wasmer.app/images/container_arrow_white.svg" alt="arrow">
          </h2>
          <p><b>For freelancers, creatives, or marketers</b></p>
          <p><b>Why join my circle?</b></p>
          <ul>
            <li>Get referrals when your skills fit a client’s needs.</li>
            <li>Earn credits on published work.</li>
            <li>Potential % revenue splits for joint projects.</li>
          </ul>
        </div>
      </div>

      <!-- Case Studies Box -->
      <div class="collaborate-box">
        <div class="case-studies">
          <h3>
            FREE PROJECTS / CASE STUDIES
            <img src="https://chriswebdesign.wasmer.app/images/container_arrow_black.svg" alt="arrow">
          </h3>
          <p>→ A few times a month, I take on select projects at no cost in exchange for:</p>
          <ul>
            <li>Permission to run a full case study</li>
            <li>Access to analytics during the trial period</li>
            <li>Temporary full control to optimize the site</li>
          </ul>
          <p><b>Why I do this:</b><br>
            It lets me test bold strategies and prove results.<br>
            What your business gets: A fully functional, conversion-focused website — free.<br>
            Spots available: Only 1–2 per month.
          </p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="local-time">MY LOCAL TIME</div>
    <div class="clock">
      <div id="hours" class="time-box">00</div>
      <div id="minutes" class="time-box">00</div>
    </div>
    <div class="social">
      <a href="#">X</a>
      <a href="#">IG</a>
    </div>
    <div class="tagline">Crafting web experiences dedicated to consumer needs.</div>
    <div class="copyright">© 2025 Bayonet</div>
  </footer>

</body>
</html>
