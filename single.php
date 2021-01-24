<?php get_header(); ?>

    <section >
      <div class="wrap">
        <div class="body">
          <?php if(is_active_sidebar('right-sidebar')): ?>
          <div class="blog">
            <?php if(have_posts()): ?>
              <?php while(have_posts()): the_post(); ?>
                <article class="blog-posts">
                  <h2 class="post-title"><?php the_title(); ?></h2>
                  <div class="meta">
                    Posted on <?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?> in
                    <?php
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                      echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }
                    ?>
                  </div><a href="#"></a>
                  <div class="full-post">
                    <?php the_content(); ?>
                  </div>
                  <div class="cf"></div>
                </article>
              <?php endwhile; ?>
              <?php cta_author_box(); ?>
              <div class="nav-post">
                <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
                <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
              </div>
            <?php else: ?>
              <?php echo('Sorry, No posts were found'); ?>
            <?php endif; ?>
            <div class="comments-section">
              <?php if(comments_open() || get_comments_number()):
                comments_template(); ?>
              <?php endif; ?>
            </div>
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
                  <h2 class="post-title"><?php the_title(); ?></h2>
                  <div class="meta">
                    Posted on <?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?> in
                    <?php
                      $categories = get_the_category();
                      if ( ! empty( $categories ) ) {
                        echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                      }
                    ?>
                  </div>
                  <div class="full-post">
                    <?php the_content(); ?>
                  </div>
                  <div class="cf"></div>
                </article>
              <?php endwhile; ?>
              <?php cta_author_box(); ?>
            <?php else: ?>
              <?php echo('Sorry, No posts were found'); ?>
            <?php endif; ?>
            <div class="comment-section">
              <?php if(comments_open() || get_comments_number()):
                comments_template(); ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="cf"></div>
        <?php endif; ?>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
