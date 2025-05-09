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
        <!-- Slide 1 -->
        <li class="splide__slide">
          <div class="hero__slide">
            <!-- Left side: side -->
            <div class="hero__content">
              <!-- Shapes inside content -->
              <img class="hero__shape hero__shape--32"
                src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-32.svg'; ?>" alt="Polygon 32">
              <img class="hero__shape hero__shape--34"
                src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-34.svg'; ?>" alt="Polygon 34">

              <div class="hero__text">
                <h1><?php the_field('hero_heading_1'); ?></h1>
                <p><?php the_field('hero_description_1'); ?></p>
                <a href="<?php the_field('hero_button_link_1'); ?>" class="button">
                  <?php the_field('hero_button_text_1'); ?>
                </a>
              </div>
            </div>

            <!-- Right side: Background Image -->
            <div class="hero__image hero__image--1"
              style="background-image: url('<?php the_field('hero_image_1'); ?>');">
              <!-- Shapes inside image -->
              <img class="hero__shape hero__shape--33"
                src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-33.svg'; ?>" alt="Polygon 33">
            </div>
            <img class="hero__shape hero__shape--31" src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-31.svg'; ?>"
              alt="Polygon 31">
          </div>
        </li>

        <!-- Slide 2 -->
        <li class="splide__slide">
          <div class="hero__slide">
            <!-- Left side: side -->
            <div class="hero__content">
              <!-- Shapes inside content -->
              <img class="hero__shape hero__shape--32"
                src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-32.svg'; ?>" alt="Polygon 32">
              <img class="hero__shape hero__shape--34"
                src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-34.svg'; ?>" alt="Polygon 34">
              <div class="hero__text">
                <h1><?php the_field('hero_heading_2'); ?></h1>
                <p><?php the_field('hero_description_2'); ?></p>
                <a href="<?php the_field('hero_button_link_2'); ?>" class="button">
                  <?php the_field('hero_button_text_2'); ?>
                </a>
              </div>
            </div>

            <!-- Right side: Background Image -->
            <div class="hero__image hero__image--2"
              style="background-image: url('<?php the_field('hero_image_2'); ?>');">
              <!-- Shapes inside image -->
              <img class="hero__shape hero__shape--33"
                src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-33.svg'; ?>" alt="Polygon 33">
            </div>
            <img class="hero__shape hero__shape--31" src="<?php echo THEME_DIR_URI . '/assets/icons/polygon-31.svg'; ?>"
              alt="Polygon 31">
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Industries Section -->
<section class="industries">
  <div class="container">
    <h2 class="industries__heading"><?php the_field('industries_heading'); ?></h2>
    <div class="industries__grid">
      <!-- Industry Card 1 -->
      <div class="industries__card">
        <img src="<?php the_field('industry_1_image'); ?>" alt="<?php the_field('industry_1_title'); ?>"
          class="industries__card-image" />
        <div class="industries__card-title">
          <span class="industries__card-title-text"><?php the_field('industry_1_title'); ?></span>
        </div>
      </div>

      <!-- Industry Card 2 -->
      <div class="industries__card">
        <img src="<?php the_field('industry_2_image'); ?>" alt="<?php the_field('industry_2_title'); ?>"
          class="industries__card-image" />
        <div class="industries__card-title">
          <span class="industries__card-title-text"><?php the_field('industry_2_title'); ?></span>
        </div>
      </div>

      <!-- Industry Card 3 -->
      <div class="industries__card">
        <img src="<?php the_field('industry_3_image'); ?>" alt="<?php the_field('industry_3_title'); ?>"
          class="industries__card-image" />
        <div class="industries__card-title">
          <span class="industries__card-title-text"><?php the_field('industry_3_title'); ?></span>
        </div>
      </div>

      <!-- Industry Card 4 -->
      <div class="industries__card">
        <img src="<?php the_field('industry_4_image'); ?>" alt="<?php the_field('industry_4_title'); ?>"
          class="industries__card-image" />
        <div class="industries__card-title">
          <span class="industries__card-title-text"><?php the_field('industry_4_title'); ?></span>
        </div>
      </div>

      <!-- Industry Card 5 -->
      <div class="industries__card">
        <img src="<?php the_field('industry_5_image'); ?>" alt="<?php the_field('industry_5_title'); ?>"
          class="industries__card-image" />
        <div class="industries__card-title">
          <span class="industries__card-title-text"><?php the_field('industry_5_title'); ?></span>
        </div>
      </div>

      <!-- CTA Box -->
      <div class="industries__cta">
        <h3 class="industries__cta-heading"><?php the_field('industries_cta_heading'); ?></h3>
        <p class="industries__cta-text"><?php the_field('industries_cta_text'); ?></p>
        <a href="<?php the_field('industries_cta_button_link'); ?>" class="button button--alt">Get Started</a>
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
          <picture>
            <source srcset="<?php the_field('study_online_image_mobile'); ?>" media="(max-width: 1024px)">
            <img src="<?php the_field('study_online_image'); ?>" alt="<?php the_field('study_online_image_alt'); ?>"
              class="study-online__img" />
          </picture>
        </div>
      </div>

      <!-- Text content -->
      <div class="study-online__content">
        <h4 class="study-online__subheading"><?php the_field('study_online_subheading'); ?></h4>
        <h2 class="study-online__heading"><?php the_field('study_online_heading'); ?></h2>
        <p class="study-online__text study-online__text--large">
          <?php the_field('study_online_text_large'); ?>
        </p>
        <p class="study-online__text study-online__text--small">
          <?php the_field('study_online_text_small'); ?>
        </p>
        <a href="<?php the_field('study_online_button_link'); ?>" class="button button--secondary">
          <?php the_field('study_online_button_text'); ?>
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
  <div class="container">
    <div class="college__intro">
      <h2 class="college__heading"><?php echo esc_html(get_field('college_heading')); ?></h2>
      <p class="college__text">
        <?php echo esc_html(get_field('college_text')); ?>
      </p>
    </div>

    <div class="college__cards">
      <!-- Card 1 -->
      <div class="college__card college__card--stack">
        <div class="college__card-bg"></div>
        <div class="college__card-content">
          <div class="college__card-inner">
            <img src="<?php echo esc_url(get_field('college_card1_icon')); ?>"
              alt="<?php echo esc_attr(get_field('college_card1_alt')); ?>" />
            <h3 class="college__card-title"><?php echo esc_html(get_field('college_card1_title')); ?></h3>
            <p class="college__card-text"><?php echo esc_html(get_field('college_card1_text')); ?></p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="college__card">
        <div class="college__card-bg"></div>
        <div class="college__card-content">
          <div class="college__card-inner">
            <img src="<?php echo esc_url(get_field('college_card2_icon')); ?>"
              alt="<?php echo esc_attr(get_field('college_card2_alt')); ?>" />
            <h3 class="college__card-title"><?php echo esc_html(get_field('college_card2_title')); ?></h3>
            <p class="college__card-text"><?php echo esc_html(get_field('college_card2_text')); ?></p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="college__card">
        <div class="college__card-bg"></div>
        <div class="college__card-content">
          <div class="college__card-inner">
            <img src="<?php echo esc_url(get_field('college_card3_icon')); ?>"
              alt="<?php echo esc_attr(get_field('college_card3_alt')); ?>" />
            <h3 class="college__card-title"><?php echo esc_html(get_field('college_card3_title')); ?></h3>
            <p class="college__card-text"><?php echo esc_html(get_field('college_card3_text')); ?></p>
          </div>
        </div>
      </div>

      <!-- CTA Button -->
      <div class="college__action">
        <a href="<?php echo esc_url(get_field('college_button_link')); ?>"
          class="button button--secondary"><?php echo esc_html(get_field('college_button_text')); ?></a>
      </div>
    </div>
  </div>
</div>


<?php get_footer() ?>