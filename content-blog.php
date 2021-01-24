<article class="blog-posts">
  <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div class="meta">
    Posted on <?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?> in
    <?php
      $categories = get_the_category();
      if ( ! empty( $categories ) ) {
        echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
      }
    ?>
  </div>
  <?php if(has_post_thumbnail()): ?>
    <div class="thumbnail-content">
      <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
      </div>
      <?php the_excerpt(); ?>
    </div>
  <?php else: ?>
    <?php the_excerpt(); ?>
  <?php endif; ?>
  <div class="cf"></div>
</article>
