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