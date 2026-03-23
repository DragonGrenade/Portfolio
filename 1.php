<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer Section</title>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #071423;
      color: white;
    }

    footer {
      padding: 40px 20px;
      display: flex;
      flex-direction: column;
      gap: 40px;
    }

    .footer-top {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .subscribe {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
    }

    .subscribe input {
      padding: 10px 12px;
      border-radius: 6px;
      border: none;
      font-size: 16px;
      flex: 1;
    }

    .subscribe button {
      padding: 10px 16px;
      border-radius: 6px;
      border: none;
      background-color: #f1eae5;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
    }

    .footer-links a {
      display: block;
      margin-top: 10px;
      font-size: 16px;
      text-decoration: none;
      color: white;
    }

    .footer-links a:hover {
      text-decoration: underline;
    }

    .footer-boxes {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .box {
      background: linear-gradient(135deg, #081f48, #0b235f);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 12px;
      padding: 20px;
    }

    .box-title {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 24px;
      letter-spacing: 0.12em;
      margin-bottom: 10px;
    }

    .box p,
    .box ul {
      font-size: 16px;
      margin: 0;
      padding: 0;
    }

    .box ul {
      list-style: disc;
      padding-left: 18px;
    }

    /* Clock section */
    .clock-section {
      text-align: center;
    }

    .clock-title {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 24px;
      letter-spacing: .0.8em;
      margin-bottom: 10px;
    }

    .clock {
      display: flex;
      justify-content: center;
      gap: 8px;
    }

    .clock div {
      padding: 10px 20px;
      border: 1px solid white;
      border-radius: 6px;
      font-size: 24px;
      font-weight: 700;
    }

    /* Footer bottom */
    .footer-bottom {
      text-align: center;
      font-size: 14px;
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      padding-top: 20px;
    }

    /* Tablet */
    @media (min-width: 810px) {
      .footer-top {
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
      }
      .footer-boxes {
        flex-direction: row;
      }
      .box {
        flex: 1;
      }
    }

    /* Desktop */
    @media (min-width: 1200px) {
      footer {
        padding: 60px 80px;
      }
    }
  </style>
</head>
<body>

<footer>
  <div class="footer-top">
    <div>
      <div class="subscribe">
        <input type="email" placeholder="Enter your email">
        <button>Subscribe</button>
      </div>
      <div class="footer-links">
        <a href="#">Insights [ section not yet ready ]</a>
        <a href="#">Web Design Samples (Figma)</a>
      </div>
    </div>

    <div class="footer-boxes">
      <div class="box">
        <div class="box-title">COLLABORATE WITH ME</div>
        <ul>
          <li>Invite to join as collaborators</li>
          <li>Skillsets you're open to (copywriters, illustrators, SEOs, etc.)</li>
          <li>Benefit of being part of the team (referrals, credits, potential % splits)</li>
        </ul>
      </div>
      <div class="box">
        <div class="box-title">FREE PROJECTS / CASE STUDIES</div>
        <ul>
          <li>Overlay explaining your side-gig offer</li>
          <li>Why you’re offering this</li>
          <li>What the business gets</li>
          <li>What you ask in return (case study, access to analytics, full control)</li>
          <li>How to apply</li>
          <li>Scarcity: “Spots open 1–2 times per month max”</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="clock-section">
    <div class="clock-title">MY LOCAL TIME</div>
    <div class="clock">
      <div id="hours">00</div>
      <div id="minutes">00</div>
    </div>
  </div>

  <div class="footer-bottom">
    Crafting web experiences dedicated to consumer needs.<br>
    © 2025 Bayonet
  </div>
</footer>

<script>
  function updateClock() {
    const now = new Date();
    let hours = String(now.getHours()).padStart(2, '0');
    let minutes = String(now.getMinutes()).padStart(2, '0');
    document.getElementById('hours').textContent = hours;
    document.getElementById('minutes').textContent = minutes;
  }
  setInterval(updateClock, 1000);
  updateClock();
</script>

</body>
</html>
