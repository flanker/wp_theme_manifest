</div>

<div id="footer">

  <!-- Footer Links -->
  
  <h5>Elsewhere</h5>
  <ul class="elsewhere">
    <?php wp_list_bookmarks('categorize=0&title_li=&show_images=0'); ?>
  </ul>

  <!-- Search Field -->
  
  <div class="footerContent">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
      <div id="search">
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
      </div>
    </form>
    
    
    <p>&copy; <a href="http://blog.chaojiwudi.com" title="宇宙超级无敌! | 冯智超的博客"><?php bloginfo('name'); ?></a>. Powered by <a href="http://wordpress.org/">WordPress</a> and <a href="http://jimbarraud.com/manifest/">Manifest</a> modified by 冯智超 <a href="http://chaojiwudi.com" title="超级无敌 - 冯智超的个人网站">超级无敌</a>
  </p>
  </div>
</div>

<?php wp_footer(); ?>

</body>