<?php get_header(); ?>

    <section >
      <div class="wrap">
        <div class="body">
          <?php if(is_active_sidebar('right-sidebar')): ?>
          <div class="blog">
            <div class="search-page">
              <?php if(have_posts()): ?>
                <h2><?php printf(__('Search Results: %s', 'cta-theme'), '<span>' . get_search_query() . '</span>'); ?></h2>
              <?php else: ?>
                <h2><?php echo('Nothing Found'); ?></h2>
              <?php endif; ?>
            </div>
            <?php if(have_posts()): ?>
              <?php while(have_posts()): the_post(); ?>
                <?php get_template_part('content', 'blog'); ?>
              <?php endwhile; ?>
              <?php the_posts_pagination( array(
                 'mid_size'  => 2,
                  'prev_text' => '<i class="fa fa-angle-double-left"></i> Previous Page',
                   'next_text' => 'Next Page <i class="fa fa-angle-double-right"></i>',
                 ) ); ?>
             <?php else: ?>
               <?php echo('Sorry, No posts were found'); ?>
            <?php endif; ?>
          </div>
          <aside class="sidebar">
            <?php dynamic_sidebar('right-sidebar'); ?>
          </aside>
          <div class="cf"></div>
        <?php else: ?>
          <div class="blog no-sidebar">
            <div class="search-page">
              <?php if(have_posts()): ?>
                <h2><?php printf(__('Search Results: %s', 'cta-theme'), '<span>' . get_search_query() . '</span>'); ?></h2>
              <?php else: ?>
                <h2><?php echo('Nothing Found'); ?></h2>
              <?php endif; ?>
            </div>
            <?php if(have_posts()): ?>
              <?php while(have_posts()): the_post(); ?>
                <?php get_template_part('content', 'blog'); ?>
              <?php endwhile; ?>
              <?php the_posts_pagination( array(
                 'mid_size'  => 2,
                  'prev_text' => '<i class="fa fa-angle-double-left"></i> Previous Page',
                   'next_text' => 'Next Page <i class="fa fa-angle-double-right"></i>',
                 ) ); ?>
               <?php else: ?>
                 <?php echo('Sorry, No posts were found'); ?>
            <?php endif; ?>
          </div>
          <div class="cf"></div>
        <?php endif; ?>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
