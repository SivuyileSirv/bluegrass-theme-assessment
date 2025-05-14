<section class="industries">
  <div class="container">
    <?php
    // Heading with fallback
    $industries_heading = get_field('industries_heading') ?: 'Explore our industries';
    ?>
    <h2 class="industries__heading"><?php echo esc_html($industries_heading); ?></h2>
    <div class="industries__grid">
      <?php
      // Loop through 5 industry cards
      for ($i = 1; $i <= 5; $i++) {
        // Get fields with fallback strings
        $image = get_field("industry_{$i}_image") ?: THEME_DIR_URI . '/assets/imgs/placeholder-image.jpg';
        $title = get_field("industry_{$i}_title") ?: 'Industry Title';
        ?>
        <div class="industries__card">
          <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>"
            class="industries__card-image" />
          <div class="industries__card-title">
            <span class="industries__card-title-text"><?php echo esc_html($title); ?></span>
          </div>
        </div>
      <?php } ?>

      <?php
      // CTA content with fallbacks
      $cta_heading = get_field('industries_cta_heading') ?: 'Ready to get started?';
      $cta_text = get_field('industries_cta_text') ?: 'Learn how we can help you thrive in your industry.';
      $cta_link = get_field('industries_cta_button_link') ?: '#';
      ?>
      <div class="industries__cta">
        <h3 class="industries__cta-heading"><?php echo esc_html($cta_heading); ?></h3>
        <p class="industries__cta-text"><?php echo esc_html($cta_text); ?></p>
        <a href="<?php echo esc_url($cta_link); ?>" class="button button--alt">Get Started</a>
      </div>
    </div>
  </div>
</section>