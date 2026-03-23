<section class="contact_section">
  <div class="contact_left">
    <h3 class="contact_intro"><?= $lang['email_intro']; ?></h3>
    <p><?= $lang['email_desc1']; ?></p>
    <p><?= $lang['email_desc2']; ?></p>

    <button class="email_button" id="emailBtn"
      onmouseenter="showEmail()"
      onmouseleave="resetText()"
      onclick="copyEmail()">
      <?= $lang['email_btn']; ?>
    </button>

    <div id="copyLabel" class="copy_label"><?= $lang['email_copied']; ?></div>

    <ul class="bullet_points">
      <li><?= $lang['email_bullet1']; ?></li>
      <li><?= $lang['email_bullet2']; ?></li>
      <li><?= $lang['email_bullet3']; ?></li>
    </ul>

    <p><?= $lang['email_desc3']; ?></p>
  </div>

  <div class="contact_right">
    <h4><?= $lang['form_title']; ?></h4>
    <form id="contactForm" action="contact_submit.php" method="post">
      <div class="form_group">
        <label for="name"><?= $lang['form_name']; ?></label>
        <input type="text" id="name" name="name" required>
      </div>

      <div class="form_group">
        <label for="email"><?= $lang['form_email']; ?></label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form_group">
        <label for="message"><?= $lang['form_message']; ?></label>
        <textarea id="message" name="message" rows="5" required></textarea>
      </div>

      <button type="submit" class="submit_button"><?= $lang['form_send']; ?></button>
    </form>
  </div>
</section>




<style>
  @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Greek&display=swap');

/* ============================= */
/* Contact Section Layout        */
/* ============================= */
.contact_section {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 60px;
  padding: clamp(2rem, 6vw, 5rem) clamp(20px, 4vw, 50px);
  font-family: 'Poppins', sans-serif;
}

/* Left Column */
.contact_left {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.contact_intro {
  font-family: 'Oswald', sans-serif;
  font-size: clamp(1.4rem, 2.5vw, 2.4rem);
  margin-bottom: 0.5rem;
}

.email_button {
  display: inline-block;
  padding: 14px 30px;
  font-family: 'Oswald', sans-serif;
  font-size: clamp(0.9rem, 1.3vw, 1.2rem);
  font-weight: 600;
  background-color: #111;
  color: #fff;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.email_button:hover {
  background-color: #333;
  transform: scale(1.05);
}

.copy_label {
  font-size: 0.85rem;
  color: #c94c05;
  margin-top: 5px;
}

.bullet_points {
  margin-top: 10px;
  padding-left: 20px;
}

.bullet_points li {
  margin-bottom: 5px;
}

/* Right Column (Contact Form) */
.contact_right {
  flex: 1;
  background: #fafafa;
  padding: 30px;
  border: 1px solid #ddd;
  border-radius: 10px;
}

.contact_right h4 {
  font-family: 'Oswald', sans-serif;
  font-size: 1.4rem;
  margin-bottom: 20px;
}

.form_group {
  display: flex;
  flex-direction: column;
  margin-bottom: 16px;
}

.form_group label {
  font-size: 0.9rem;
  margin-bottom: 6px;
  color: #333;
}

.form_group input,
.form_group textarea {
  border: 1px solid #ccc;
  border-radius: 6px;
  padding: 10px;
  font-family: 'Poppins', sans-serif;
  font-size: 0.95rem;
  resize: vertical;
}

.submit_button {
  background-color: #111;
  color: #fff;
  border: none;
  border-radius: 8px;
  padding: 14px 30px;
  font-family: 'Oswald', sans-serif;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.submit_button:hover {
  background-color: #333;
  transform: scale(1.05);
}

/* ============================= */
/* Responsive Layout             */
/* ============================= */
@media (max-width: 768px) {
  .contact_section {
    flex-direction: column;
    gap: 40px;
  }

  .contact_right {
    padding: 20px;
  }
}

/* ============================= */
/* Greek Font Adjustments        */
/* ============================= */
html[lang="gr"] .contact_intro,
html[lang="gr"] .email_button,
html[lang="gr"] .submit_button,
html[lang="gr"] .contact_right h4,
html[lang="gr"] .form_group label,
html[lang="gr"] .form_group input,
html[lang="gr"] .form_group textarea,
html[lang="gr"] .bullet_points li {
  font-family: 'Noto Sans Greek', 'Poppins', sans-serif;
  line-height: 1.4;
}

</style>