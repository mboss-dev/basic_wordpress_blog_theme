<?php get_header(); ?>

    <section >
      <div class="wrap">
        <div class="body">
          <?php if(is_active_sidebar('right-sidebar')): ?>
          <div class="blog">
            <?php if(have_posts()): ?>
              <?php while(have_posts()): the_post(); ?>
                <article class="blog-posts">
                  <h2><?php the_title(); ?></h2>
                  <div class="full-post">
                    <?php the_content(); ?>
                  </div>
                  <div class="cf"></div>
                </article>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <aside class="sidebar">
            <?php dynamic_sidebar('right-sidebar'); ?>
          </aside>
          <div class="cf"></div>
        <?php else: ?>
          <div class="blog no-sidebar">
            <?php if(have_posts()): ?>
              <?php while(have_posts()): the_post(); ?>
                <article class="blog-posts">
                  <h2><?php the_title(); ?></h2>
                  <div class="full-post">
                    <?php the_content(); ?>
                  </div>
                  <div class="cf"></div>
                </article>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="cf"></div>
        <?php endif; ?>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
