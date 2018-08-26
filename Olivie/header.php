<!DOCTYPE html>
<!--[if IE 7]><html id="ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html id="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<span class="back-top"><i class="fa fa-angle-up"></i></span>

<?php if( get_option( 'ace_woo_cart_float' ) ) { echo ace_woo_cart_count(); } ?>

<?php if( get_option( 'ace_top_icons' ) == true ) { ?>
<section class="top-icons">
  <ul class="top-icons-wrap">
    <?php if( get_option( 'ace_twitter' ) ) { ?><li><a href="<?php echo get_option( 'ace_twitter' ); ?>" class="fa fa-twitter radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>><span>Twitter</span></a></li><?php } ?>
    <?php if( get_option( 'ace_facebook' ) ) { ?><li><a href="<?php echo get_option( 'ace_facebook' ); ?>" class="fa fa-facebook radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>><span>Facebook</span></a></li><?php } ?>
    <?php if( get_option( 'ace_pinterest' ) ) { ?><li><a href="<?php echo get_option( 'ace_pinterest' ); ?>" class="fa fa-pinterest radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>><span>Pinterest</span></a></li><?php } ?>
    <?php if( get_option( 'ace_instagram' ) ) { ?><li><a href="<?php echo get_option( 'ace_instagram' ); ?>" class="fa fa-instagram radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>><span>Instagram</span></a></li><?php } ?>
    <?php if( get_option( 'ace_google_plus' ) ) { ?><li><a href="<?php echo get_option( 'ace_google_plus' ); ?>" class="fa fa-google-plus radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>><span>Google Plus</span></a></li><?php } ?>
    <?php if( get_option( 'ace_flickr' ) ) { ?><li><a href="<?php echo get_option( 'ace_flickr' ); ?>" class="fa fa-flickr radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>><span>Flickr</span></a></li><?php } ?>
    <?php if( get_option( 'ace_linkedin' ) ) { ?><li><a href="<?php echo get_option( 'ace_linkedin' ); ?>" class="fa fa-linkedin radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>><span>LinkedIn</span></a></li><?php } ?>
    <?php if( get_option( 'ace_youtube' ) ) { ?><li><a href="<?php echo get_option( 'ace_youtube' ); ?>" class="fa fa-youtube radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>><span>YouTube</span></a></li><?php } ?>
    <?php if( get_option( 'ace_vimeo' ) ) { ?><li><a href="<?php echo get_option( 'ace_vimeo' ); ?>" class="fa fa-vimeo-square radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>><span>Vimeo</span></a></li><?php } ?>
    <?php if( get_option( 'ace_bloglovin' ) ) { ?><li><a href="<?php echo get_option( 'ace_bloglovin' ); ?>" class="fa fa-plus radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>><span>BlogLovin</span></a></li><?php } ?>
    <?php if( get_option( 'ace_tumblr' ) ) { ?><li><a href="<?php echo get_option( 'ace_tumblr' ); ?>" class="fa fa-tumblr radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>><span>Tumblr</span></a></li><?php } ?>
    <?php if( get_option( 'ace_rss' ) ) { ?><li><a href="<?php echo get_option( 'ace_rss' ); ?>" class="fa fa-rss radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>><span>RSS Feed</span></a></li><?php } ?>
    <?php if( get_option( 'ace_email' ) ) { ?><li><a href="mailto:<?php echo get_option( 'ace_email' ); ?>" class="fa fa-envelope radius-50" <?php if( get_option( 'ace_icons_new_windows' ) ) echo 'target="_blank"'; ?>><span>Email</span></a></li><?php } ?>
  </ul>
</section>
<?php } ?>

<?php if( get_option( 'ace_header_banner' ) ) { echo '<section class="header-banner">'; echo stripslashes_deep( get_option( 'ace_header_banner' ) ); echo '</section>'; } ?>

<section class="wrap">

<header class="header-wrap">
<header class="header" id="header" itemscope itemtype="http://schema.org/WPHeader">

  <?php ace_header(); ?>

</header><!-- .header -->
</header><!-- .header-wrap -->

<?php ace_theme_slider(); ?>

<?php ace_newsletter_top(); ?>

<section class="container">

<?php ace_featured_top(); ?>
