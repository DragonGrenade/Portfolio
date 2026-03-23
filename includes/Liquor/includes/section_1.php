<!-- ================= EXCLUSIVE CONTACT SECTION ================= -->
<section class="exclusive-section">
  <div class="exclusive-inner">

    <!-- Column 1 -->
    <div class="exclusive-column">
        <div class="exclusive-text-group">
            <h2>CONTACT <span class="highlight">FOR EXCLUSIVE MEMBERS</span></h2>
            <p>The JERICHO Experience is a long lasting relationship sacred as a king’s ceremony.</p>
         </div>
        <a href="mailto:exclusive@jericho.com" class="exclusive-email">exclusive@jericho.com</a>
    </div>

    <!-- Column 2 -->
    <div class="exclusive-column">
        <div class="exclusive-text-group">
            <h2>CONTACT <span class="highlight">FOR SPONSORSHIP</span></h2>
            <p>The JERICHO Experience offers a wide variety of options for those who seek to collaborate.</p>
        </div>
            <a href="mailto:sponsorship@jericho.com" class="exclusive-email">sponsorship@jericho.com</a>
    </div>

  </div>
</section>



<style>
  .exclusive-section {
  background: #000;
  color: #fff;
  padding: 80px 40px;
}
.exclusive-text-group{
    display: flex;
    flex-direction: column;
    gap: 12px;
}
.exclusive-inner {
  display: flex;
  justify-content: center;
  gap: 56px;
}

.exclusive-column {
    display: flex;
    flex-direction: column;
    
}

.exclusive-column h2 {
  font-family: 'Bebas Neue';
  font-size: 24px; /* updated */
 
}

/* Gradient highlight for the second part of the heading */
.exclusive-column h2 .highlight {
    font-family: 'Bebas Neue';
  background: linear-gradient(to right, #FF8000, #FF5900);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Paragraph */
.exclusive-column p {
  font-family: 'Inter', sans-serif;
  font-size: 14px; /* updated */
  line-height: 1.8;
  
  margin-bottom: 32px;
  max-width: 310px;
}

/* Emails */
.exclusive-email {
  font-family: 'Inter', sans-serif;
  font-size: 14px; /* updated */
  font-weight: 700;
  text-decoration: none;
  color: #fff;
  transition: color 0.25s ease;
}

.exclusive-email:hover {
  
  color: #FF9A1F;
  cursor: url("images/pointinghand.svg") 2 2, pointer;

}

/* Responsive */
@media screen and (max-width: 900px) {
  .exclusive-inner {
    grid-template-columns: 1fr;
    gap: 60px;
    text-align: center;
  }
  .exclusive-column p {
    max-width: 100%;
  }
}


</style>