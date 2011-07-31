<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>
<!-- You can start editing here. -->
<div id="comments">
  <?php if ( have_comments() ) : ?>
  	<h3 id="comments"><?php comments_number('还没有人', '1 位大侠', '% 位大侠' );?> 对 &#8220;<?php the_title(); ?>&#8221; 发表了评论。</h3>

  	<div class="navigation">
  		<div class="alignleft"><?php previous_comments_link() ?></div>
  		<div class="alignright"><?php next_comments_link() ?></div>
  	</div>

  	<ol class="commentlist">
  	<?php wp_list_comments('avatar_size=48'); ?>
  	</ol>

  	<div class="navigation">
  		<div class="alignleft"><?php previous_comments_link() ?></div>
  		<div class="alignright"><?php next_comments_link() ?></div>
  	</div>
   <?php else : // this is displayed if there are no comments so far ?>

  	<?php if ( comments_open() ) : ?>
  		<!-- If comments are open, but there are no comments. -->

  	 <?php else : // comments are closed ?>
  		<!-- If comments are closed. -->

  	<?php endif; ?>
  <?php endif; ?>


  <?php if ( comments_open() ) : ?>


  
<div id="respond">  
  
<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

  <div class="leaveComment">
    
    <fieldset>
      <legend><span><?php comment_form_title('高手，留下您的评论','留下您对 %s 的回复'); ?></span></legend>
      <div class="commentForm">
      
      <?php if ( is_user_logged_in() ) : ?>

      <p class="loggedin">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>
      <label>Comment:
      <textarea name="comment" id="comment" cols="50" rows="20" class="loggedIn"></textarea></label>


      <?php endif; ?>
        <?php if ( !is_user_logged_in() ) : ?>
          <div class="commentAuthorInfo">
            <label>高姓大名：<em>行不改姓坐不改名，必须的</em> <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" /></label>
            <label>电子邮件：<em>必须的，不会公开</em> <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" /></label>
            <label>网址：<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" /></label>
          </div>
        <label>您的评论：
        <textarea name="comment" id="comment" cols="50" rows="20"></textarea></label>
      <?php endif; ?>

        <div id="cancel-comment-reply">
        	<small><?php cancel_comment_reply_link('Cancel Reply') ?></small>
        </div>
        <input type="submit" value="必杀技：发表" /> <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
      </div>
    </fieldset>
  </div>
  <?php comment_id_fields(); ?>

<?php do_action('comment_form', $post->ID); ?>

</form>
</div>
<?php endif; // If registration required and not logged in ?>


<?php endif; // if you delete this the sky will fall on your head ?>
  </div>
