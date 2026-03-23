<div class="content">
  <!-- Left Column -->
  <div class="links-column">
    <p><?= $lang['links_insights']; ?></p>
    <p><?= $lang['links_figma']; ?></p>
  </div>

  <!-- Right Column -->
  <div class="collaborate-column">
    <!-- Collaborate Box -->
    <div class="collaborate-box">
      <div class="collaborate-header">
        <h2>
          <?= $lang['collab_title']; ?>
          <img src="images/container_arrow_white.svg" alt="arrow">
        </h2>
        <p><b><?= $lang['collab_sub1']; ?></b></p>
        <p><b><?= $lang['collab_sub2']; ?></b></p>
        <ul>
          <li><?= $lang['collab_benefit1']; ?></li>
          <li><?= $lang['collab_benefit2']; ?></li>
          <li><?= $lang['collab_benefit3']; ?></li>
        </ul>
      </div>
    </div>

    <!-- Case Studies Box -->
    <div class="collaborate-box">
      <div class="case-studies">
        <h3>
          <?= $lang['case_studies_title']; ?>
          <a href="http://192.168.1.2/Portfolio%20Website/5.php"><img src="images/container_arrow_black.svg" alt="arrow"></a>
        </h3>
        <p><?= $lang['case_studies_desc']; ?></p>
        <ul>
          <li><?= $lang['case_studies_li1']; ?></li>
          <li><?= $lang['case_studies_li2']; ?></li>
          <li><?= $lang['case_studies_li3']; ?></li>
        </ul>
        <p><b><?= $lang['case_studies_bold']; ?></b><br>
          <?= $lang['case_studies_details']; ?>
        </p>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="local-time"><?= $lang['footer_local_time']; ?></div>
  <div class="clock">
    <div id="hours" class="time-box">00</div>
    <div id="minutes" class="time-box">00</div>
  </div>
  <div class="social">
    <a href="#">X</a>
    <a href="#">IG</a>
  </div>
  <div class="tagline"><?= $lang['footer_tagline']; ?></div>
  <div class="copyright"><?= $lang['footer_copyright']; ?></div>
</footer>
