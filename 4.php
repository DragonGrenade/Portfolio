<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fold by Fold Approach – Existing Website</title>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
      color: #333;
      line-height: 1.6;
    }

    .page-container {
      max-width: 900px;
      margin: 0 auto;
      padding: 3rem 1.5rem;
    }

    .back-link {
      display: inline-block;
      margin-bottom: 2rem;
      font-size: 14px;
      color: #c94c05;
      text-decoration: none;
      border-bottom: 1px solid transparent;
      transition: border-color 0.2s;
    }
    .back-link:hover {
      border-color: #c94c05;
    }

    .offer-label {
      font-size: 13px;
      font-weight: 600;
      color: #c94c05;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 0.5rem;
    }

    .page-title {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 2.2rem;
      letter-spacing: 0.08em;
      margin-bottom: 1.5rem;
      color: #111;
    }

    .intro-text {
      font-size: 15px;
      color: #555;
      margin-bottom: 2rem;
    }

    .section {
      margin-bottom: 2.5rem;
    }

    .section h2 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 1.6rem;
      letter-spacing: 0.05em;
      margin-bottom: 1rem;
      color: #222;
    }

    .section p {
      font-size: 14px;
      color: #555;
      margin-bottom: 1rem;
    }

    .benefits-list {
      list-style: none;
      padding: 0;
      margin: 1rem 0 2rem;
    }

    .benefits-list li {
      font-size: 14px;
      margin-bottom: 0.7rem;
      padding-left: 1.4rem;
      position: relative;
    }

    .benefits-list li::before {
      content: "✔";
      color: #c94c05;
      font-size: 14px;
      position: absolute;
      left: 0;
      top: 0;
    }

    .cta-box {
      background: #fff;
      border: 1px solid #ddd;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      margin-bottom: 3rem;
    }

    .cta-box h3 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 1.6rem;
      margin-bottom: 1rem;
      color: #111;
    }

    .cta-box p {
      font-size: 14px;
      margin-bottom: 1.2rem;
      color: #222;
    }

    .cta-btn {
      display: inline-block;
      padding: 0.7rem 1.4rem;
      font-size: 14px;
      font-weight: 600;
      text-decoration: none;
      color: #fff;
      background-color: #c94c05;
      border-radius: 6px;
      transition: background-color 0.2s;
    }

    .cta-btn:hover {
      background-color: #c94c05;
    }

    /* Pricing */
    .pricing-cards {
      display: flex;
      gap: 2rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .pricing-card {
      flex: 1 1 250px;
      background: #fff;
      border: 1px solid #ddd;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .pricing-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }

    .pricing-card.popular {
      border: 2px solid #c94c05;
    }

    .pricing-card h3 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 1.5rem;
      margin-bottom: 1rem;
    }

    .price {
      font-size: 1.4rem;
      font-weight: 600;
      color: #c94c05;
      margin-bottom: 1rem;
    }

    .pricing-description {
      font-size: 14px;
      color: #555;
    }

    /* Process steps */
    .process-steps {
      max-width: 700px;
      margin: 0 auto;
      padding: 0;
      list-style: none;
      counter-reset: step;
    }

    .process-steps li {
      font-size: 14px;
      margin-bottom: 1.5rem;
      color: #333;
      position: relative;
      padding-left: 2rem;
    }

    .process-steps li::before {
      counter-increment: step;
      content: counter(step) ".";
      position: absolute;
      left: 0;
      font-weight: 600;
      color: #c94c05;
    }
  </style>
</head>
<body>
  <div class="page-container">
    
    <a href="http://localhost/Portfolio%20Website/" class="back-link">← Back to Offers</a>
    
    <p class="offer-label">– Already have a website?</p>
    <h1 class="page-title">Fold by Fold Approach</h1>

    <p class="intro-text">
      You don’t need a full redesign to get results. With the <strong>Fold by Fold Approach</strong>, 
      we focus only on the sections that truly matter. Faster, leaner, and always on your terms.
    </p>

    <div class="section">
      <h2>Why This Works</h2>
      <p>Most websites don’t fail because the entire design is broken. They fail because certain sections don’t deliver clarity, trust, or action. By improving one fold at a time, you can:</p>
      <ul class="benefits-list">
        <li>Pay only for the improvements you need</li>
        <li>Stay in full control of the project scope</li>
        <li>See quick wins that build long-term trust</li>
        <li>Test, approve, and publish in days – not months</li>
      </ul>
    </div>

    <div class="section">
      <h2>What Can Be Improved or Added?</h2>
      <p>Here are the most common areas where a small tweak can have a massive impact:</p>
      <ul class="benefits-list">
        <li>Homepage hero fold – clarity of your message</li>
        <li>Service descriptions – simplified and focused</li>
        <li>Benefit section – highlight audience wins</li>
        <li>Gallery – showcase authenticity</li>
        <li>Contact fold – stronger calls-to-action</li>
        <li>Navigation and flow – smoother user experience</li>
      </ul>
    </div>

    <div class="section">
      <h2>Timeline</h2>
      <p>Each fold typically takes <strong>2–3 days</strong> from design approval to coded HTML/CSS delivery. As long as you have your domain, we can publish fold-by-fold. That means you can see results almost immediately, without waiting weeks for a “big launch.”</p>
    </div>

    <div class="section">
      <h2>Simple, Transparent Pricing</h2>
      <p>You only pay for the folds you actually need.</p>
      <div class="pricing-cards">
        <div class="pricing-card">
          <h3>Single Fold</h3>
          <p class="price">€25-€50</p>
          <p class="pricing-description">Perfect for small tweaks or adding a new section. Quick turnaround in 2–3 days.</p>
        </div>
      </div>
    </div>

    <div class="section">
      <h2>How Do We Work?</h2>
      <p>Clear, collaborative, and always in your control.</p>
      <img src="images/process_img.png" alt="" style="width: 900px;">
    </div>

    <div class="section">
      <h2>FAQ – What Do You Need to Provide?</h2>
      <ul class="process-steps">
        <li><strong>Do I need to send all content upfront?</strong><br>
        No. Each fold is self-contained. You only provide the content relevant to the fold we’re working on.</li>

        <li><strong>What if I don’t have photos ready?</strong><br>
        No problem. I can design the section with placeholders. You can add your own photos later, or I can suggest stock options.</li>

        <li><strong>What if I don’t have text?</strong><br>
        You can send me rough notes (bullet points, old descriptions). I’ll refine and structure them into clear website copy.</li>

        <li><strong>What do you need for an above-the-fold redesign?</strong><br>
        Your logo (if you have one), your main headline idea (or I’ll suggest one), and your call-to-action (what you want visitors to do).</li>

        <li><strong>Do I need to give you access to my site?</strong><br>
        Not right away. I’ll deliver clean HTML/CSS for each fold. You can implement it yourself or let me handle integration when you’re ready.</li>

        <li><strong>Can I change the fold later?</strong><br>
        Absolutely. Each fold is modular. You can swap text, photos, or buttons anytime without breaking the rest of your site.</li>
      </ul>
    </div>


    <div class="cta-box">
      <h3>Ready to Restructure Your Website?</h3>
      <p><strong>First fold is on us.</strong>  
      We’ll design and deliver your first section for free, so you can see the impact before investing a cent.</p>
      <p>If you love it, we keep going. Fold-by-fold. If not, you walk away with no cost, no risk.</p>
      <a href="contact.html" class="cta-btn">Claim Your Free Fold</a>
    </div>


    


  </div>
</body>
</html>
