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