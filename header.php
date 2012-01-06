<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="no-js iem7"><![endif]-->
<!--[if lt IE 9]><html class="no-js lte-ie8"><![endif]-->
<!--[if (gt IE 8)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php
        /*
       * Print the <title> tag based on what is being viewed.
       */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

        ?></title>
    <meta name="author" content="盘先海">
    <?php
    if(FALSE){
    ?>
        <meta name="keywords" content="<?php tag_to_keywords()?>">
        <meta name="description" content="<?php content_to_meta();?>">
    <?php } else { ?>
        <meta name="keywords" content="wordpress theme, wordpress plugin, 盘先海, 博客">
        <meta name="description" content="这是盘先海的个人博客，写一些关于生活，wordpress，编程相关的文章">
    <?php }
    ?>


    <!-- http://t.co/dKP3o1e -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/modernizr-2.0.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/ender.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/octopress.js" type="text/javascript"></script>
    <!--Fonts from Google"s Web font directory at http://google.com/webfonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Serif:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css">
    <script src="http://yandex.st/highlightjs/6.1/highlight.min.js"></script>
    <link rel="stylesheet" href="http://yandex.st/highlightjs/6.1/styles/solarized_dark.min.css">
    <script>
        hljs.tabReplace = '    ';
        hljs.initHighlightingOnLoad();
    </script>
    <?php if ( is_singular() && get_option('thread_comments') ) wp_enqueue_script('comment-reply'); ?>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header role="banner">
    <hgroup>
        <h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <h2><?php bloginfo( 'description' ); ?></h2>
    </hgroup>
</header>
<nav role="navigation">
    <ul class="subscription" data-subscription="rss">
        <li><a href="<?php bloginfo('rss2_url'); ?>" rel="subscribe-rss" title="subscribe via RSS">RSS</a></li>
    </ul>
    <form action="http://google.com/search" method="get">
        <fieldset role="search">
            <input type="hidden" name="q" value="site:panxianhai.com" />
            <input class="search" type="text" name="q" results="0" placeholder="Search"/>
        </fieldset>
    </form>
    <ul class="main-navigation">
        <?php wp_list_pages('sort_column=menu_order&title_li='); ?>
    </ul>
</nav>
<div id="main">
    <div id="content">