<?php get_header(); ?>

    <section >
      <div class="wrap">
        <div class="body">
          <?php if(is_active_sidebar('right-sidebar')): ?>
          <div class="blog">
            <div class="error-page">
              <h2 class="error-page-header"><?php echo("404 Error - Page Not Found!"); ?></h2>
              <p>The page you are looking for does not exist. Please <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact' ) ) ); ?>"><?php esc_html_e( 'Contact Us', 'cta theme' ); ?></a>
   and let us know how you got here, so we can help you find what you're looking for.</p>

              <p><strong>Pages:</strong></p>
              <ul>
                <?php wp_list_pages(array('title_li'    => '',)); ?>
              </ul>

              <p><strong>Categories:</strong></p>

              <ul>
                <?php wp_list_categories(array('title_li'    => '')); ?>
              </ul>

              <p><strong>Authors:</strong></p>

              <ul>
                <?php wp_list_authors( ); ?>
              </ul>

              <p><strong>Months:</strong></p>

              <ul>
                <?php wp_get_archives( array( 'type' => 'monthly',) ); ?>
              </ul>

              <p><strong>Recent Posts:</strong></p>

              <ul>
                <?php
                  $args = array( 'numberposts' => '30', 'tax_query' => array(
                      array(
                          'taxonomy' => 'post_format',
                          'field'    => 'slug',
                          'terms'    => 'post-format-aside',
                          'operator' => 'NOT IN'
                      ),
                      array(
                          'taxonomy' => 'post_format',
                          'field'    => 'slug',
                          'terms'    => 'post-format-image',
                          'operator' => 'NOT IN'
                      )
                  ) );
                  $recent_posts = wp_get_recent_posts( $args );

                  foreach( $recent_posts as $recent ){
                      printf( '<li><a href=%1$s">%2$s</a></li>',
                          esc_url( get_permalink( $recent['ID'] ) ),
                          apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
                      );
                  }
              ?>
              </ul>
            </div>
          </div>
          <aside class="sidebar">
            <?php dynamic_sidebar('right-sidebar'); ?>
          </aside>
          <div class="cf"></div>
        <?php else: ?>
          <div class="blog no-sidebar">

          </div>
          <div class="cf"></div>
        <?php endif; ?>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
