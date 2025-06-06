<?php if (get_field('show_industries_section')): ?>
  <section class="industries">
    <div class="container">
      <?php
      // Heading with fallback
      $industries_heading = get_field('industries_heading') ?: 'Explore our industries';
      ?>
      <h2 class="industries__heading"><?php echo esc_html($industries_heading); ?></h2>
      <div class="industries__grid">

        <!-- Loop through industry cards (repeater) -->
        <?php if (have_rows('industry_cards')): ?>
          <!-- Get fields with fallback strings -->
          <?php while (have_rows('industry_cards')):
            the_row(); ?>
            <?php
            $image = get_sub_field('industry_image');
            $title = get_sub_field('industry_title') ?: 'Industry Title';
            $image_url = $image && is_array($image) ? $image['url'] : (is_string($image) ? $image : THEME_DIR_URI . '/assets/imgs/placeholder-image.jpg');
            ?>
            <div class="industries__card">
              <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>"
                class="industries__card-image" />
              <div class="industries__card-title">
                <span class="industries__card-title-text"><?php echo esc_html($title); ?></span>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

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
<?php endif; ?>