<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title(':', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	
<!--[if gte IE 7]><!-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" charset="utf-8" />
<!-- <![endif]-->

<!--[if IE 7]>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style_ie.css" type="text/css" media="screen" charset="utf-8" />
<![endif]-->

<!--[if IE 6]>
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_directory'); ?>/styles_ie6.css" />
<![endif]-->

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.3.2.min.js" charset="utf-8">
    
  </script>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="siteWrapper">

  <h1 class="vcard author"><a href="<?php echo get_option('home'); ?>/" title="Home" class="fn"><?php  bloginfo('name');?></a></h1> 

  <div id="siteDescription">
    <?php  bloginfo('description'); ?>
  </div>
  
  <div id="mainNav">
    <ul>
      <li class="page_item"><a href="http://chaojiwudi.com/" title="超级无敌 - 冯智超的个人网站">超级无敌首页</a></li> 
      <li class="page_item"><a href="http://blog.chaojiwudi.com/" title="宇宙超级无敌 | 冯智超的博客">博客首页</a></li> 
      <?php wp_list_pages('title_li=&depth=1'); ?>
    </ul>
  </div>

    <?php
      if($post->post_parent)
      $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
      else
      $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
      if ($children) { ?>
      <div id="subNav">
      <ul>
      <?php echo $children; ?>
      </ul>
      </div>
      <?php } ?>
  
