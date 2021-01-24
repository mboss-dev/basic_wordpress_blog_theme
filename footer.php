<footer class="site-footer">
<div class="wrap">
  <div class="three-footer-widgets">
    <?php if ( is_active_sidebar('footer-1')
        && ! is_active_sidebar('footer-2')
        && ! is_active_sidebar('footer-3')
        && ! is_active_sidebar('footer-4') ):?>
        <div class="footer-widget">
          <div class="first full">
            <?php dynamic_sidebar('footer-1'); ?>
          </div>
        </div>
    <?php endif; ?>

    <?php if ( is_active_sidebar('footer-1')
        &&  is_active_sidebar('footer-2')
        && ! is_active_sidebar('footer-3')
        && ! is_active_sidebar('footer-4') ):?>

        <div class="footer-widget">
          <div class="first half left">
            <?php dynamic_sidebar('footer-1'); ?>
          </div>
          <div class="second half right">
            <?php dynamic_sidebar('footer-2'); ?>
          </div>
        </div>
        <div class="cf"></div>
    <?php endif; ?>

    <?php if ( is_active_sidebar('footer-1')
        &&  is_active_sidebar('footer-2')
        &&  is_active_sidebar('footer-3')
        && ! is_active_sidebar('footer-4') ):?>

        <div class="footer-widget">
          <div class="first one-third left">
            <?php dynamic_sidebar('footer-1'); ?>
          </div>
          <div class="second one-third">
            <?php dynamic_sidebar('footer-2'); ?>
          </div>
          <div class="third one-third right">
            <?php dynamic_sidebar('footer-3'); ?>
          </div>
        </div>
        <div class="cf"></div>
    <?php endif; ?>
    <?php if ( is_active_sidebar('footer-1')
        &&  is_active_sidebar('footer-2')
        &&  is_active_sidebar('footer-3')
        &&  is_active_sidebar('footer-4') ):?>

        <div class="footer-widget">
          <div class="first quarter left">
            <?php dynamic_sidebar('footer-1'); ?>
          </div>
          <div class="second quarter">
            <?php dynamic_sidebar('footer-2'); ?>
          </div>
          <div class="third quarter">
            <?php dynamic_sidebar('footer-3'); ?>
          </div>
          <div class="four quarter right">
            <?php dynamic_sidebar('footer-4'); ?>
          </div>
        </div>
        <div class="cf"></div>
    <?php endif; ?>

  </div>
  <div class="footer">
    <p>Copyright <i class="fa fa-copyright"></i> <?php the_date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></p> <p> Powered by<a href="https://www.linkedin.com/in/mohammed-abbas-shaik-223194b7/" target="_blank" rel="noopener noreferrer">Mohammed Abbas</a></p>
  </div>
  </div>
  <?php wp_footer(); ?>
</footer>
</body>
</html>
