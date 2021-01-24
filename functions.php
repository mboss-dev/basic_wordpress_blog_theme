<?php

  function cta_theme_setup(){

    add_theme_support('post-thumbnails');

    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );


  }

  add_action('after_setup_theme', 'cta_theme_setup');

  function custom_header(){

    $args = array(
      'width'  =>  160,
      'height' =>  60,
      'flex-width' => true,
      'flex-height' => true,
    );

    add_theme_support('custom-header', $args);
  }

  add_action('after_setup_theme', 'custom_header');
  

  function cta_menu(){
    register_nav_menus(array(
      'primary'     => __('Primary', 'CTA-Primary'),
      'secondary'   => __('Footer', 'CTA-Footer'),
    ));
  }

  add_action('init', 'cta_menu');

  function cta_excerpt_length(){
    return 50;
  }

  add_filter('excerpt_length', 'cta_excerpt_length');

  function new_excerpt_more( $more ) {
  	return ' ... <strong><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More »', 'cta_theme_setup') . '</a></strong>';
  }
  add_filter( 'excerpt_more', 'new_excerpt_more' );

  function cta_widgets(){
    register_sidebar(array(
      'name'          => 'Right sidebar',
  		'id'            => 'right-sidebar',
  		'before_widget' => '<div class="sidebar-widget">',
  		'after_widget'  => '</div>',
  		'before_title'  => '<div class="sidebar-widget-title">',
  		'after_title'   => '</div>',
    ));

    register_sidebar(array(
      'name'          => 'Footer 1',
      'id'            => 'footer-1',
      'before_widget' => '<div class="f-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="f-widget-title">',
      'after_title'   => '</h2>',
    ));

    register_sidebar(array(
      'name'          => 'Footer 2',
      'id'            => 'footer-2',
      'before_widget' => '<div class="f-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="f-widget-title">',
      'after_title'   => '</h2>',
    ));

    register_sidebar(array(
      'name'          => 'Footer 3',
      'id'            => 'footer-3',
      'before_widget' => '<div class="f-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="f-widget-title">',
      'after_title'   => '</h2>',
    ));

    register_sidebar(array(
      'name'          => 'Footer 4',
      'id'            => 'footer-4',
      'before_widget' => '<div class="f-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="f-widget-title">',
      'after_title'   => '</h2>',
    ));
  }

  add_action('widgets_init', 'cta_widgets');

  function cta_scripts(){
    wp_enqueue_style('cta-style', get_stylesheet_uri() );
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/inc/font-awesome.min.css');

    wp_enqueue_script('my-java', get_theme_file_uri() . '/inc/my.js', array(), '5.0', true);
  }
  add_action('wp_enqueue_scripts', 'cta_scripts');

  function cta_author_box(){
    ?>
    <div class="postauthorbox">
      <?php echo get_avatar( get_the_author_meta( 'ID' ), 90 ); ?>
      <h4><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">About the <?php the_author(); ?></a></h4>
      <div class="athorinfo">
        <p><?php the_author_meta('description'); ?></p>
      </div>
    </div>
    <?php
  }


 ?>
