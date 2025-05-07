<nav class="navbar">
  <div class="container">
    <!-- Left Column -->
    <div class="navbar__left">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo THEME_DIR_URI . '/assets/imgs/logo-colour.png'; ?>" alt="Rosebank College Logo" />
      </a>
    </div>

    <!-- Right Column -->
    <div class="navbar__right">
      <div class="navbar__secondary-menu">
        <?php
        wp_nav_menu([
          'theme_location' => 'secondary_menu',
          'menu_class' => 'navbar__menu navbar__menu--secondary',
        ]);
        ?>
      </div>

      <div class="navbar__primary-group">
        <div class="navbar__primary-menu">
          <?php
          wp_nav_menu([
            'theme_location' => 'primary_menu',
            'menu_class' => 'navbar__menu navbar__menu--primary',
          ]);
          ?>
        </div>

        <div class="navbar__actions">
          <a href="#" class="button">Apply Now</a>

          <!-- Hamburger Icon -->
          <button class="navbar__toggle" aria-label="Toggle Menu">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</nav>