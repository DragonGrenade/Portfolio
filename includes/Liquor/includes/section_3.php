<!-- ================= JERICHO EXCLUSIVES SECTION ================= -->
<section class="jericho-exclusives">
  <div class="jericho-inner">

    <!-- Headings -->
    <h2 class="jericho-title">JERICHO EXCLUSIVES</h2>
    <p class="jericho-subtitle">Join Our Community</p>

    <!-- Subscription Box -->
    <div class="newsletter-box">
      <img src="images/newsletter_icon.svg" alt="Newsletter Icon" class="newsletter-icon">
      <input type="email" placeholder="Your email" class="newsletter-input">
      <button class="newsletter-btn">SUBSCRIBE NOW</button>
    </div>

    <!-- Description Text -->
    <p class="newsletter-desc">
      Sign up for insider access to rare collections, special releases, and members-only events. 
      Discover what’s next in the world of fine spirits.
    </p>

  </div>
</section>


<style>
    /* ================= JERICHO EXCLUSIVES SECTION ================= */
.jericho-exclusives {
  background: #000; /* dark background for contrast */
  color: #fff;
  padding: 100px 40px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 24px;
  
}
.jericho-inner{
  width: 100%;
}
.jericho-title {
  font-family: 'Bebas Neue', sans-serif;
  font-size: 32px;
  letter-spacing: 0.25em;
  margin-bottom: 12px;
  font-weight: 500;
}

.jericho-subtitle {
  font-family: 'Inter', sans-serif;
  font-size: 16px;
  margin-bottom: 24px;
  font-weight: 400;

}

/* Newsletter Box */
.newsletter-box {
  background: #fff;
  border-radius: 24px;
  padding: 45px 26px;
  display: flex;
  align-items: center;
  justify-content: space-around;

  gap: 16px;
  
  width: 100%;
}

.newsletter-icon {
  width: 160px;
  height: 48px;

  flex-shrink: 0;
}

.newsletter-input {
  flex: 0.81;
  padding: 12px 16px;
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  border: none;
  cursor: url("images/pointinghand.svg") 2 2, pointer;
  border-bottom: 1px solid #000;
  font-weight: 500;
  outline: none;
}

.newsletter-btn {
  display: flex;
  align-items: center;
  gap: 8px;
  letter-spacing: 0.12em;
  padding: 12px 64px;
  font-family: 'Bebas Neue', sans-serif;
  font-size: 16px;
  font-weight: 600;
  color: #000;
  background-image: url("images/button_pic.png");
  background-size: cover;
  background-position: 50%;
  border: none;
  cursor: pointer;
  transition: all 0.6s ease;
 
}



.newsletter-btn:hover {
  background-image: url("images/button_pic_hover.png");
  cursor: url("images/pointinghand.svg") 2 2, pointer;
  color: #fff;
}

/* Newsletter Description */
.newsletter-desc {
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  font-weight: 300;
  margin-top: 32px;
  max-width: 700px;
  line-height: 1.8;
  text-align: center;
  justify-self: center;
}

/* Responsive */
@media screen and (max-width: 900px) {
  .newsletter-box {
    flex-direction: column;
    gap: 12px;
    padding: 16px 24px;
  }

  .newsletter-btn {
    width: 100%;
    justify-content: center;
  }

  .newsletter-desc {
    font-size: 18px;
    padding: 0 16px;
  }
}

</style>