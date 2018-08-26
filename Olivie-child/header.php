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
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116898974-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116898974-1');
</script>

<meta name="p:domain_verify" content="a08da7ac9f5f8eb121ae3848b1268e37"/>

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

<style>

.banner {
    padding: 40px 0;
    background: #fff1ee;
}

.banner .container {
    width: 95%;
    margin: 0 auto;
    position: relative;
    padding: 0;
}

.banner-image {
    position: relative;
    height: 0;
    width: 100%;
    padding-bottom: 36.25%;
}

.banner-image .img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
}

.banner-image .img.bottom {
    background-position: bottom;
}

.banner-image .img.top {
    background-position: top;
}

.banner .title {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;

}

.banner .title .title-wrapper {
    padding: 4%;
    z-index: 8;
    width: 60%;
    text-align: center;
    text-transform: uppercase;
    position: relative;
}

.banner .title .title-wrapper .title-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fff;
}



.banner .title h1 {
    font-weight: 300;
    margin: 0;
    position: relative;
    z-index: 10;
}

@media (min-width: 1200px) {
    .banner .container {
        width: 980px;
        margin: 0 auto;
    }
}

</style>

<?php
    global $wp_query;
    $postid = $wp_query->post->ID;
    if(get_field('banner_image')) {
        $image = get_field('banner_image');
        $size = 'large'; // (thumbnail, medium, large, full or custom size)
	    $url = $image['sizes'][ $size ];
?>
<section class="banner">
    <div class="container">
        <div class="banner-image">
            <div class="img <?php the_field('banner_image_position'); ?>" style="background-image:url(<?php echo $url; ?>);" alt=""></div>
        </div>
        <div class="title">
            <div class="title-wrapper">
                <div class="title-bg" style="opacity: <?php the_field('banner_title_background_opacity');?>;"></div>
                <h1><?php the_field('banner_title'); ?></h1>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php
    if( is_home() ) {
        $image = get_field('banner_image', 99);
        $size = 'large'; // (thumbnail, medium, large, full or custom size)
        $url = $image['sizes'][ $size ];
        $title = get_field('banner_title', 99);
        $opacity = get_field('banner_title_background_opacity', 99);
        $position = get_field('banner_image_position', 99);
?>
<section class="banner">
    <div class="container">
        <div class="banner-image">
            <div class="img <?php echo $position; ?>" style="background-image:url(<?php echo $url; ?>)" alt=""></div>
        </div>
        <div class="title">
            <div class="title-wrapper">
                <div class="title-bg" style="opacity:<?php echo $opacity; ?>;"></div>
                <h1><?php echo $title; ?></h1>
            </div>
        </div>
    </div>
</section>

<?php } ?>
<?php wp_reset_query(); ?>

<section class="container">

<?php ace_featured_top(); ?>
