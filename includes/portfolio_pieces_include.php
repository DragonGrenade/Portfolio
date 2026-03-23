<section class="portfolio_section">

  <h1><?= $lang['portfolio_title']; ?></h1>

  <div class="flex_container_portfolio">

    <div class="portfolio_item">
      <a href="Portfolio_piece_1.php">
        <img src="images/Piece_1.png" alt="Project 1" />
        <div class="portfolio_footer">
          <span><?= $lang['portfolio_item_1_tag1']; ?></span>
          <span><?= $lang['portfolio_item_1_tag2']; ?></span>
        </div>
      </a>
    </div>

    <div class="portfolio_item">
      <a href="Portfolio_piece_2.php">
        <img src="images/Piece_2.png" alt="Project 2" />
        <div class="portfolio_footer">
          <span><?= $lang['portfolio_item_2_tag1']; ?></span>
          <span><?= $lang['portfolio_item_2_tag2']; ?></span>
        </div>
      </a>
    </div>

    <div class="portfolio_item">
      <a href="Portfolio_piece_3.php">
        <img src="images/Piece_3.png" alt="Project 3" />
        <div class="portfolio_footer">
          <span><?= $lang['portfolio_item_3_tag1']; ?></span>
          <span><?= $lang['portfolio_item_3_tag2']; ?></span>
        </div>
      </a>
    </div>

  </div>

  <div class="flex_container_portfolio single_row">
    <div class="portfolio_item full_width_item">
      <a href="Portfolio_piece_4.php">
        <img src="images/Piece_4.png" alt="Project 4" />
        <div class="portfolio_footer">
          <span><?= $lang['portfolio_item_4_tag1']; ?></span>
          <span><?= $lang['portfolio_item_4_tag2']; ?></span>
        </div>
      </a>
    </div>
  </div>

  <!-- SEE MORE BUTTON -->
  <div class="see_more_wrapper">
    <a href="7.php" id="seeMoreBtn" class="see_more_button"><?= $lang['see_more_btn']; ?></a>
  </div>

</section>
