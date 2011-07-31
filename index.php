<?php get_header(); ?>

    <div id="coreContent" class="hfeed">
      
    	<?php if (have_posts()) : ?>

    		<?php while (have_posts()) : the_post(); ?>

      <div class="post hentry">
        <?php the_date('F j, Y', '<h5 class="postDate"><abbr class="published">','</abbr></h5>'); ?>
        <div class="postContent">
          <h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
          <!-- <h4 class="vcard author">by <span class="fn"><?php the_author(); ?></span></h4> -->
          
          <div class="entry-content">

              <?php the_content('猛击这里阅读全文！！轻击则跳转至冯智超的银行转账页面。'); ?>

          </div>
        </div>
        <div class="postMeta">
        
        <?php if ('closed' == $post->comment_status) : ?>

          <div class="comments closed">

         	<?php else : ?>
        
          <div class="comments">
        
          <?php endif; ?>

            <?php comments_popup_link('留下评论，赢取 iPhone4（太假了-_-!）', '已经有 1 位大侠留下了自己的评论', '已经有 % 位大侠留下了自己的评论', '', '神马？这个文章不允许评论！'); ?>
          </div>
        </div>
      </div>

		<?php endwhile; ?>

    <div class="pageNav">
      <div class="prev"><?php next_posts_link('&laquo; 更古老的文章（有可能跳转至白垩纪）') ?></div>
      <div class="next"><?php previous_posts_link('更未来的文章（有可能跳转至 the matrix） &raquo;') ?></div>
    </div>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

  </div>


<?php get_footer(); ?>
