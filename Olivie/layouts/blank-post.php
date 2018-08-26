<?php
/*
Template Name: Blank
Template Post Type: post
*/
?>
<!DOCTYPE html>
<!--[if IE 7]><html id="ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html id="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<?php ace_header_scripts() || ace_css() || ace_theme_css(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<section class="wrap">

  <main class="section-wide blank-page-template">

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <article <?php post_class( 'article article-page' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/CreativeWork">

      <article class="post-content entry-content" itemprop="text">

        <?php the_content(); ?>

        <?php ace_get_link_pages() ?>

        <?php comments_template( '/comments.php', true ); ?>

      </article><!-- .post-content -->

    </article><!-- .article -->

    <?php endwhile; endif; ?>

  </main><!-- .section-wide -->

</section><!-- .wrap -->

<?php ace_footer_scripts(); ?>
<?php wp_footer(); ?>

</body>
</html>