<section class="study-online">
  <!-- Pattern Top -->
  <div class="study-online__pattern study-online__pattern--top">
    <img src="<?php echo THEME_DIR_URI . '/assets/imgs/pattern-light-top.png'; ?>" alt="Pattern" />
  </div>
  <div class="container">
    <div class="study-online__row">
      <!-- Image card stack -->
      <div class="study-online__img-stack">
        <div class="study-online__bg"></div>
        <div class="study-online__img-wrapper">
          <?php
          $desktop_img = get_field('study_online_image') ?: THEME_DIR_URI . '/assets/imgs/placeholder-image.jpg';
          $mobile_img = get_field('study_online_image_mobile') ?: $desktop_img;
          $image_alt = get_field('study_online_image_alt') ?: 'Study Online Image';
          ?>
          <picture>
            <source srcset="<?php echo esc_url($mobile_img); ?>" media="(max-width: 1024px)">
            <img src="<?php echo esc_url($desktop_img); ?>" alt="<?php echo esc_attr($image_alt); ?>"
              class="study-online__img" />
          </picture>
        </div>
      </div>

      <!-- Text content -->
      <div class="study-online__content">
        <?php
        $subheading = get_field('study_online_subheading') ?: 'Study Online';
        $heading = get_field('study_online_heading') ?: 'Flexible learning for your future';
        $text_large = get_field('study_online_text_large') ?: 'Our platform allows you to learn anytime, anywhere.';
        $text_small = get_field('study_online_text_small') ?: 'Choose from a variety of online programs and shape your career.';
        $button_text = get_field('study_online_button_text') ?: 'Start Now';
        $button_link = get_field('study_online_button_link') ?: '#';
        ?>
        <h4 class="study-online__subheading"><?php echo esc_html($subheading); ?></h4>
        <h2 class="study-online__heading"><?php echo esc_html($heading); ?></h2>
        <p class="study-online__text study-online__text--large">
          <?php echo esc_html($text_large); ?>
        </p>
        <p class="study-online__text study-online__text--small">
          <?php echo esc_html($text_small); ?>
        </p>
        <a href="<?php the_field('study_online_button_link'); ?>" class="button button--secondary">
          <?php echo esc_html($button_text); ?>
        </a>
      </div>
    </div>
  </div>
  <!-- pattern Bottom -->
  <div class="study-online__pattern study-online__pattern--bottom">
    <img src="<?php echo THEME_DIR_URI . '/assets/imgs/pattern-light-bottom.png'; ?>" alt="Pattern" />
  </div>
</section>