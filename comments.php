

<?php if( post_password_required())

  return;

?>

<div class="comments-header">
  <h3 class="comment-numbers"> <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>  <i class="fa fa-comment-o"></i></h3>

  <a href="#respond" class="comment-reply-button">Leave a reply</a>
  <div class="cf"></div>
</div>

<?php if(have_comments()): ?>

<div id="comments">

<ol class="comment-list">
  <?php
    wp_list_comments(array(
      'avatar_size'   => 60,
      'short_ping'    => true,
      'style'         => 'ol',
      'reply_text'    => '<i class = "fa fa-reply"></i> Reply',
    ));
  ?>
</ol>

</div>

<?php endif; ?>

  <?php

  $args = array(
       'label_submit'=>'Submit comment',
       'title_reply'=>'Leave a reply',
       'title_reply_to'    => 'Leave a reply',
       'comment_notes_before' => '<p class="comment-notes">Thaks for choosing to leave a comment. Your email address will NOT be published. Let&apos;s have a personal and meaningful conversation.</p>',
       'comment_notes_after' => '',
       'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
  );

  comment_form($args);

  ?>
