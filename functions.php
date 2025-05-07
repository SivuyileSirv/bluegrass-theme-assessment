<?php

define('THEME_DIR_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());

class RosebankCollegeTheme
{
  private static $instance = null;

  private function __construct()
  {
    // Hook WordPress setup
    add_action('after_setup_theme', [$this, 'setupTheme']);

    // Load assets
    add_action('wp_enqueue_scripts', [$this, 'enqueueStyles']);
    add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);
  }

  public function setupTheme()
  {
    // Register navigation menus
    register_nav_menus([
      'primary_menu' => 'Main Menu',
      'secondary_menu' => 'Secondary Menu'
    ]);

  }

  public function enqueueStyles()
  {
    // Google Fonts: Montserrat
    wp_enqueue_style(
      'google-font-montserrat',
      'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap',
      [],
      null
    );

    // Enqueue Splide.js CSS
    wp_enqueue_style(
      'splide-css',
      'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css',
      [],
      null
    );

    wp_enqueue_style(
      'rosebank-college-theme',
      THEME_DIR_URI . '/assets/css/style.css',
      [],
      filemtime(THEME_DIR . '/assets/css/style.css'),
      'all'
    );
  }


  public function enqueueScripts()
  {
    // Enqueue Splide.js JavaScript
    wp_enqueue_script(
      'splide-js',
      'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js',
      [],
      null,
      true // Load in footer
    ); 
    
    wp_enqueue_script(
      'rosebank-main-js',
      THEME_DIR_URI . '/assets/js/main.js',
      [],
      filemtime(THEME_DIR . '/assets/js/main.js'),
      true // Load in footer
    );
  }

  public static function getInstance()
  {
    if (null === self::$instance) {
      self::$instance = new self;
    }
    return self::$instance;
  }
}

RosebankCollegeTheme::getInstance();
