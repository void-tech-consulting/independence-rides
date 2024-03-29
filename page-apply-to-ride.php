<?php 
  get_header(); 
  require get_template_directory() . '/inc/section_vars.php';
?>

<body>
    <div class="top-section" style="background: url(<?php echo get_theme_mod($apply_to_ride_header_image) ?>); background-repeat: no-repeat; background-size: cover;">
      <h1 class="section-1-title">Apply to be a Rider</h1>
    </div>
    <div class="blue-box">
            <span class="intro-text" id="apply_to_ride_blue_left"><?php  echo get_theme_mod($apply_to_ride_blue_left); ?></span>
            <div class="intro-vertline"></div>
            <span class="intro-text" id="apply_to_ride_blue_right"><?php  echo get_theme_mod($apply_to_ride_blue_right); ?></span>
    </div>
    <div class="header-banner">Option 1</div>
      <div class="steps-body steps-body-drive">
        <div class="steps-timeline">
          <ul class="steps-timeline-list">
            <li class="steps-bullet">
              <h3 class="steps-subtitle drive-list-text">Download the following form</h3>
              <span id="apply_to_ride_download_button">
              <a href="<?php echo get_theme_mod($apply_to_ride_download_button) ?>">
                <button class="steps-button" type="button">Download</button>
              </a>
              </span>
            </li>
            <li class="steps-bullet">
              <h3 class="steps-subtitle drive-list-text">Submit the completed form here</h3>
              <button class="steps-button" type="button">Submit</button>
              <br>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="header-banner">Option 2</div>
      <div class="steps-body steps-body-drive">
        <div class="steps-timeline">
          <ul class="steps-timeline-list">
            <li class="steps-single-bullet">
              <h3 class="steps-subtitle drive-list-text">Download the following form</h3>
              <h4 class="steps-sub-info">Please send your questions or comments here.</h4>
            </li>
          </ul>
        </div>
      </div>
    </div>

</body>

<?php get_footer(); ?>