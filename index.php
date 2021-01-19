<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>
<h1>The Front Page</h1>

<?php if (get_theme_mod($home_top_img)) { ?>
  <img 
    src="<?php echo get_theme_mod($home_top_img) ?>" 
    alt=""
  >
<?php } ?>

<?php if (get_theme_mod($home_top_desc)) { ?>
  <h4>
    <?php echo get_theme_mod($home_top_desc) ?>
  </h4>
<?php } ?>

<!-- Example with default video if $home_top_vid isn't set -->
<iframe 
  class="yt-vid" 
  src="<?php echo get_theme_mod($home_top_vid, 'https://www.youtube.com/embed/A0Wyx-OOX4A'); ?>" 
  frameborder="0" 
  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>

<style>
@import url('https://fonts.googleapis.com/css2?family=Orienta&display=swap');
</style>

<div class="next-step-section">
  <h1 class="next-step-header">Next steps...</h1>
  <div class="next-step-header-line"></div>
  <div class="page-box-container">
      <div class="next-step-box" id="giving-rides-box">
        <div class="box-header box-header-black">Giving Rides</div>
        <p class="box-description box-description-black">
        Join our team of volunteers and give back to your community.
        </p>
        <button type="button" class="learn-more-button learn-more-button-black">Learn more</button>
      </div>
      <div class="next-step-box" id="receiving-rides-box">
        <div class="box-header box-header-white">Receiving Rides</div>
        <p class="box-description box-description-white">
        Become an Independence Rides member.
        </p>
        <button type="button" class="learn-more-button learn-more-button-white">Learn more</button>
      </div>
      <div class="next-step-box" id="contact-us-box">
        <div class="box-header box-header-black">Contact Us</div>
        <p class="box-description box-description-black">
        We’re here to answer any questions you have.
        </p>
        <button type="button" class="learn-more-button learn-more-button-black">Learn more</button>
      </div>
    
      <div class="next-step-box" id="donate-page-box">
        <div class="box-header box-header-white">Donate</div>
        <p class="box-description box-description-white">
        Help us grow to serve more of our community.
        </p>
        <button type="button" class="learn-more-button learn-more-button-white">Learn more</button>
      </div>
      <div class="next-step-box" id="fares-page-box">
        <div class="box-header box-header-black">Fares</div>
        <p class="box-description box-description-black">
        Membership fee and ride fares.
        </p>
        <button type="button" class="learn-more-button learn-more-button-black">Learn more</button>
      </div>
      <div class="next-step-box" id="volunteer-with-us-box">
        <div class="box-header box-header-white">Volunteer with Us</div>
        <p class="box-description box-description-white">
        Assist us in ensuring our rides run smoothly.
        </p>
        <button type="button" class="learn-more-button learn-more-button-white">Learn more</button>
      </div>
  </div>
</div>

<div class="info-icon-list info-icon-list-home">
      <div class="box-top">
        <div class="info-icon-box-gray light-arms-box">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/light-arms.png">
          <div class="info-icon-text-subtitle">Assistance Provided</div>
          <div class="info-icon-text info-icon-text-home">Arm-through-arm and door-through-door assistance, help with canes, walkers, folding wheelchairs, grocery bags, and packages</div>
        </div>
        <div class="info-icon-box-white dollar-box">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/dollar-icon.png">
          <div class="info-icon-text-subtitle">Payment</div>
          <div class="info-icon-text info-icon-text-home">Fares paid through our internal account system (no cash or cards needed), trading your unwanted car can help pay for rides, our nonprofit status keeps fares low</div>
        </div>
      </div>
      <div class="box-bot">
        <div class="info-icon-box-gray light-clock-box">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/light-clock.png">
          <div class="info-icon-text-subtitle">Availability</div>
          <div class="info-icon-text info-icon-text-home">Rides available 24/7 for any reason. The current COVID-19 pandemic may drive some restrictions.</div>
        </div>
        <div class="info-icon-box-white wheel-box">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/wheel-icon.png">
          <div class="info-icon-text-subtitle">Drivers</div>
          <div class="info-icon-text info-icon-text-home">Drivers are trained community volunteers who have passed criminal background and driving record checks.</div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
