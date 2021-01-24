<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="8NGfTn6P4Jgehe3FeSBFUzjSSrVid6-0A9xm55CbzQc" />
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="wrap">
        <div class="brand">
          <?php if(has_header_image()): ?>
            <a href="<?php bloginfo('url'); ?>"><img src="<?php echo(get_header_image()); ?>" class="header-image" alt=""></a>
          <?php else: ?>
            <h1 class="site-brand-name"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <small><?php bloginfo('description'); ?></small>
          <?php endif; ?>
        </div>
        <div class="main-menu">
            <?php wp_nav_menu(array(
              'theme_location' => 'primary',
            )); ?>
        </div>
        <div class="primary-search">
          <div class="mobile-toggle">
            <button type="button" name="button" id="menu-toggle" onclick="mobileMenu()"><i class="fa fa-bars"></i></button>
          </div>
          <div class="search-icon">
            <button type="button" name="button" onclick="openSearch()"><i class="fa fa-search"></i></button>
          </div>
          <div class="search-form" id="searchopcl">
            <button type="button" name="button" class="close-button" onclick="closeSearch()"><i class="fa fa-close"></i></button>
            <div class="srch">
              <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
            		<input type="text" value="" name="s" id="s" placeholder="Search..." class="in-srch"/>
              </form>
              <p class="search-help">Hit enter to search or ESC to close</p>
            </div>
          </div>
        </div>
        <div class="mobile-menu" id="mbmenu">
          <?php wp_nav_menu(array(
            'theme_location' => 'primary',
          )); ?>
        </div>
        <div class="cf"></div>
      </div>
    </header>
