<!DOCTYPE HTML>
<!--
                              ..
                            .' @`._
             ~       ...._.'  ,__.-;
          _..- - - /`           .-'    ~
         :     __./'       ,  .'-'- .._
      ~   `- -(.-'''- -.    \`._       `.   ~
        _.- '(  .______.'.-' `-.`         `.
       :      `-..____`-.                   ;
       `.             ````  稻花香里说丰年，  ;   ~
         `-.__          听取人生经验。  __.-'
              ````- - -.......- - -'''    ~
           ~                   ~
-->
<html>
  <head>
    <title><?php wp_title('-',true,'right'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="format-detection" content="telphone=no, email=no" />
    <meta name="description" itemprop="description" content="<?php kratos_description(); ?>" />
    <meta name="keywords" content="<?php kratos_keywords(); ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo kratos_option('site_ico'); ?>" />
    <?php wp_head();wp_print_scripts('theme-jq'); ?>
    <style><?php
        echo '#offcanvas-menu{background:rgba('.kratos_option('mobi_color').')}';
        if(kratos_option('background_mode')=='image'&&!wp_is_mobile()&&!kratos_option('site_bw')) echo '@media(min-width:768px){.pagination>li>a{background-color:rgba(255,255,255,.8)}.kratos-hentry,.navigation div,.comments-area .comment-list li,#kratos-widget-area .widget,.comment-respond{background-color:rgba(253,253,253,.85)!important}.comment-list .children li{background-color:rgba(255,253,232,.7)!important}body.custom-background{background-image:url('.kratos_option('background_index_image').');background-size:cover;background-attachment:fixed}}';
        if(kratos_option('head_mode')=='pic') echo '@media(max-width:768px){#kratos-header-section{background:rgba('.hex2rgb(kratos_option('banner_color')).','.kratos_option('banner_color_op').')}}@media(min-width:768px){.affix{top:92px}}'; ?>
    </style>
  </head>
    <?php flush(); ?>
    <body <?php if(kratos_option('background_mode')=='image') echo 'class="custom-background"'; ?>>
		<canvas id="evanyou"></canvas>
        <div id="kratos-wrapper">
            <div id="kratos-page">
                <div id="kratos-header">
                    <?php if (has_nav_menu('header_menu')): ?>
                    <div class="nav-toggle"><a class="kratos-nav-toggle js-kratos-nav-toggle"><i></i></a></div>
                    <?php endif; ?>
                    <header id="kratos-header-section"<?php if(kratos_option('head_mode')=='pic') echo ' class="color-banner" style="background:rgba('.hex2rgb(kratos_option('banner_color')).','.kratos_option('banner_color_op').')"'; ?>>
                        <div class="container">
                            <div class="nav-header">
                                <div class="color-logo"><a href="<?php echo get_option('home'); ?>"><?php if(!kratos_option('banner_logo')) echo bloginfo('name'); else echo '<img src="'.kratos_option('banner_logo').'">'; ?></a></div>
                                <?php $defaults = array('theme_location'=>'header_menu','container'=>'nav','container_id'=>'kratos-menu-wrap','menu_class'=>'sf-menu','menu_id'=>'kratos-primary-menu',);
                                wp_nav_menu($defaults); ?>
                            </div>
                        </div>
                    </header>
                </div>
                <?php if(kratos_option('head_mode')=='pic'){ ?>
                <div class="kratos-start kratos-hero-2">
                    <div class="kratos-overlay"></div>
                    <div class="kratos-cover kratos-cover_2 text-center" style="background-image: url(<?php echo kratos_option('background_image'); ?>);">
                         <?php echo do_shortcode('[smartslider3 slider=1]');?>
						<div class="desc desc2 animate-box">
                            <a href="<?php echo get_bloginfo('url'); ?>"><h2 class="center-text glitch is-glitching Ubuntu-font" data-text="HI!BARRY"><?php echo kratos_option('background_image_text1'); ?></h2><span style="line-height:1px"><?php echo  kratos_option('background_image_text2'); ?></span></a>
                        </div>
                    </div>
                </div>
                <?php }else{ ?>
                <div class="kratos-start kratos-hero"></div>
                <?php } ?>
                <div id="kratos-blog-post" <?php if(kratos_option('background_mode')=='color') echo 'style="background:'.kratos_option('background_index_color').'50"'; ?>>