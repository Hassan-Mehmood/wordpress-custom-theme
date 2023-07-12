<?php

function register_scripts() {
  wp_enqueue_style( 'fonts', '//fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap' );
  wp_enqueue_style( 'boostrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css' );

  wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css' );
  wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css' );
  wp_enqueue_style( 'glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css' );
  wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css' );

  wp_enqueue_style( 'variables', get_template_directory_uri() . '/assets/css/variables.css' );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );

  wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), false, true );
  wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), false, true );
  wp_enqueue_script( 'glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), false, true );
  wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), false, true );
  wp_enqueue_script( 'php-email-form', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), false, true );

  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true );
}

add_action( 'wp_enqueue_scripts', 'register_scripts' );
add_theme_support( 'post-thumbnails' );
