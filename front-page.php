<?php get_header() ?>

<!-- Hero Section -->
<!-- Only show Hero if enabled in ACF -->
<?php if (get_field('show_hero_section')): ?>
  <?php get_template_part('template-parts/sections/hero'); ?>
<?php endif; ?>

<!-- Industries Section -->
<?php if (get_field('show_industries_section')): ?>
  <?php get_template_part('template-parts/sections/industries'); ?>
<?php endif; ?>

<!-- Study Online Section -->
<?php if (get_field('show_study-online_section')): ?>
  <?php get_template_part('template-parts/sections/study-online'); ?>
<?php endif; ?>

<!-- Best College Section -->
<?php if (get_field('show_college_section')): ?>
  <?php get_template_part('template-parts/sections/college'); ?>
<?php endif; ?>

<?php get_footer() ?>