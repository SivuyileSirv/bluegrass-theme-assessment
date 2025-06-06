<?php get_header() ?>

<!-- Loop through the Flexible Content field 'homepage_sections' -->
<?php if (have_rows('homepage_sections')): ?>
  <?php while (have_rows('homepage_sections')):
    the_row(); ?>

    <!-- Hero Section -->
    <!-- Only show Hero if layout is selected AND toggle is enabled in ACF -->
    <?php if (get_row_layout() === 'hero_section' && get_field('show_hero_section')): ?>
      <?php get_template_part('template-parts/sections/hero'); ?>
    <?php endif; ?>

    <!-- Industries Section -->
    <?php if (get_row_layout() === 'industries_section' && get_field('show_industries_section')): ?>
      <?php get_template_part('template-parts/sections/industries'); ?>
    <?php endif; ?>

    <!-- Study Online Section -->
    <?php if (get_row_layout() === 'study_online_section' && get_field('show_study-online_section')): ?>
      <?php get_template_part('template-parts/sections/study-online'); ?>
    <?php endif; ?>

    <!-- Best College Section -->
    <?php if (get_row_layout() === 'best_college_section' && get_field('show_college_section')): ?>
      <?php get_template_part('template-parts/sections/college'); ?>
    <?php endif; ?>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>