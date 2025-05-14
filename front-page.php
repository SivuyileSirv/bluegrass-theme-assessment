<?php get_header() ?>
<!-- Hero Section -->
<section class="hero">
  <div class="splide" id="heroSplide">
    <!-- Custom arrows -->
    <div class="slider-arrows">
      <button class="slider-arrows__prev">
        <img src="<?php echo THEME_DIR_URI . '/assets/icons/prev-ector.svg'; ?>" alt="Previous">
      </button>
      <button class="slider-arrows__next">
        <img src="<?php echo THEME_DIR_URI . '/assets/icons/next-vector.svg'; ?>" alt="Next">
      </button>
    </div>
    <div class="splide__track">
      <ul class="splide__list">
        <!-- Loop through the slides -->
        <?php for ($i = 1; $i <= 2; $i++):
          // Get fields with fallback strings
          $heading = get_field("hero_heading_{$i}") ?: 'Learn Online From Anywhere';
          $description = get_field("hero_description_{$i}") ?: 'Choose from hundreds of courses and get certified by experienced lecturers.';
          $button_text = get_field("hero_button_text_{$i}") ?: 'Browse Courses';
          $button_link = get_field("hero_button_link_{$i}") ?: '#';
          $bg_image = get_field("hero_image_{$i}") ?: THEME_DIR_URI . '/assets/imgs/placeholder-image.jpg'; // Use a default placeholder image if empty
          ?>
          <!-- Slide -->
          <li class="splide__slide">
            <div class="hero__slide">
              <!-- Left side: Text Content -->
              <div class="hero__content">
                <!-- Shapes inside content -->
                <img class="hero__shape hero__shape--32"
                  src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-32.svg'; ?>" alt="Polygon 32">
                <img class="hero__shape hero__shape--34"
                  src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-34.svg'; ?>" alt="Polygon 34">

                <div class="hero__text">
                  <h1><?php echo esc_html($heading); ?></h1>
                  <p><?php echo esc_html($description); ?>
                  </p>
                  <a href="<?php echo esc_url($button_link); ?>" class="button">
                    <?php echo esc_html($button_text); ?>
                  </a>
                </div>
              </div>

              <!-- Right side: Background Image -->
              <div class="hero__image hero__image--<?php echo esc_attr($i); ?>"
                style="background-image: url('<?php echo esc_url($bg_image); ?>');">
                <!-- Shapes inside image -->
                <img class="hero__shape hero__shape--33"
                  src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-33.svg'; ?>" alt="Polygon 33">
              </div>
              <img class="hero__shape hero__shape--31" src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-31.svg'; ?>"
                alt="Polygon 31">
            </div>
          </li>
        <?php endfor; ?>
      </ul>
    </div>
  </div>
</section>

<!-- Industries Section -->
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

<!-- Study Online Section -->
<div class="study-online">
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
</div>

<!-- Best College Section -->
<div class="college">
  <!-- Shapes inside content -->
  <div class="college__bg-shapes">
    <img class="college__shape college__shape--31" src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-31.png'; ?>"
      alt="Polygon 31">
    <img class="college__shape college__shape--32" src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-32.png'; ?>"
      alt="Polygon 32">
    <img class="college__shape college__shape--33" src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-33.png'; ?>"
      alt="Polygon 33">
    <img class="college__shape college__shape--35" src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-35.png'; ?>"
      alt="Polygon 35">
    <img class="college__shape college__shape--36" src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-36.png'; ?>"
      alt="Polygon 36">
  </div>
  <div class="container">
    <div class="college__intro">
      <?php
      // Heading and text with fallbacks
      $heading = get_field('college_heading') ?: 'Why We’re the Best College';
      $text = get_field('college_text') ?: 'Here’s why students trust us with their education.';
      ?>
      <h2 class="college__heading"><?php echo esc_html($heading); ?></h2>
      <p class="college__text">
        <?php echo esc_html($text); ?>
      </p>
    </div>

    <div class="college__cards">
      <!-- Loop throgh the cards -->
      <?php for ($i = 1; $i <= 3; $i++):
        $icon = get_field("college_card{$i}_icon") ?: THEME_DIR_URI . '/assets/imgs/placeholder-image.jpg';
        $alt = get_field("college_card{$i}_alt") ?: "Card Icon {$i}";
        $title = get_field("college_card{$i}_title") ?: "Card Title {$i}";
        $desc = get_field("college_card{$i}_text") ?: "Card description placeholder for item {$i}.";

        // Optional class for stack
        $card_class = $i === 1 ? 'college__card college__card--stack' : 'college__card';
        ?>
        <div class="<?php echo esc_attr($card_class); ?>">
          <div class="college__card-bg"></div>
          <div class="college__card-content">
            <div class="college__card-inner">
              <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($alt); ?>"
                alt="<?php echo esc_attr(get_field('college_card1_alt')); ?>" />
              <h3 class="college__card-title"><?php echo esc_html($title); ?></h3>
              <p class="college__card-text"><?php echo esc_html($desc); ?></p>
            </div>
          </div>
        </div>
      <?php endfor; ?>

      <!-- CTA Button -->
      <?php
      $cta_text = get_field('college_button_text') ?: 'Apply Now';
      $cta_link = get_field('college_button_link') ?: '#';
      ?>
      <div class="college__action">
        <a href="<?php echo esc_url($cta_link); ?>" class="button button--secondary"><?php echo esc_html($cta_text); ?>
        </a>
      </div>
    </div>
  </div>
</div>


<?php get_footer() ?>