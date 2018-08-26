<?php
// ==================================================================
// Post author
// ==================================================================
function ace_post_author() {
  if( get_option( 'ace_blog_author' ) ) {
    echo _e('by','ace');
    echo ' <span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">';
    the_author();
    echo '</span></span>';
  }
}

// ==================================================================
// Post author biography
// ==================================================================
function ace_post_author_bio() {
  if( get_option( 'ace_blog_author_bio' ) ) { ?>
      <section class="post-author-bio">
        <?php echo get_avatar( get_the_author_meta( 'email' ) , 64 ); ?>
        <?php echo get_the_author_meta( 'description' ); ?>
      </section>
  <?php }
}

// ==================================================================
// Theme slider
// ==================================================================
function ace_theme_slider() {
  if( get_option( 'ace_feature_enable' ) ) {
    if( get_option( 'ace_feature_enable_home' ) ) {
      if( is_front_page() ) { echo get_template_part( 'layouts/slide' ); } } else { echo get_template_part( 'layouts/slide' );
		}
  }
}

// ==================================================================
// Theme newsletter
// ==================================================================
function ace_theme_newsletter() {
  if ( get_option( 'ace_enable_newsletter' ) ) {
    if( get_option( 'ace_enable_newsletter_home' ) ) {
      if( is_front_page() ) { ?>
        <section class="header-meta">
          <section class="header-meta-inner">
            <?php echo stripslashes( get_option( 'ace_newsletter' ) ); ?>
          </section>
        </section>
      <?php }
    } else { ?>
      <section class="header-meta">
        <section class="header-meta-inner">
          <?php echo stripslashes( get_option( 'ace_newsletter' ) ); ?>
        </section>
      </section>
    <?php }
  }
}

// ==================================================================
// Theme custom css
// ==================================================================
function ace_css() {
  if( get_option( 'ace_css' ) ) { ?>
    <style type="text/css">
      <?php echo stripslashes( get_option( 'ace_css' ) ); ?>
    </style>
  <?php }
}
add_action( 'wp_head', 'ace_css' );

// ==================================================================
// Theme options colors
// ==================================================================
function ace_theme_css() { ?>
  <style type="text/css">

    <?php if( get_option( 'ace_h1' ) ) { ?>h1 {color: <?php echo get_option( 'ace_h1' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_h2' ) ) { ?>h2 {color: <?php echo get_option( 'ace_h2' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_h3' ) ) { ?>h3 {color: <?php echo get_option( 'ace_h3' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_h4' ) ) { ?>h4 {color: <?php echo get_option( 'ace_h4' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_h5' ) ) { ?>h5 {color: <?php echo get_option( 'ace_h5' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_h6' ) ) { ?>h6 {color: <?php echo get_option( 'ace_h6' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_link' ) ) { ?>a, .sc-flex-direction-nav li a.sc-flex-next .fa, .sc-flex-direction-nav li a.sc-flex-prev .fa {color: <?php echo get_option( 'ace_link' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_link_hover' ) ) { ?>a:hover {color: <?php echo get_option( 'ace_link_hover' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_nav_link' ) ) { ?>
    .nav a,
	.nav ul li.has-sub > a:after,
	.nav ul ul li.has-sub > a:after,
	.nav ul li.page_item_has_children > a:after,
	.nav ul ul li.menu-item-has-children > a:after,
	.menu-click,
    .menu-click:before {
    	color: <?php echo get_option( 'ace_nav_link' ); ?>;
    }
    <?php } ?>
    <?php if( get_option( 'ace_nav_link_hover' ) ) { ?>.nav a:hover, .nav .current-menu-item > a, .nav .current-menu-ancestor > a, .nav .current_page_item > a, .nav .current_page_ancestor > a, .menu-open:before {color: <?php echo get_option( 'ace_nav_link_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_nav_submenu_border_color' ) ) { ?>.nav ul ul, .nav ul ul li {border-color: <?php echo get_option( 'ace_nav_submenu_border_color' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_link' ) ) { ?>
    .responsiveslides_tabs li.responsiveslides_here a,
    .sc-slide .rslides_tabs li.rslides_here a, 
	.sc-flex-control-nav li a.sc-flex-active,
	.sc-flex-control-nav li a:hover,
    .pagination a:hover,
	.pagination .current {
      background: <?php echo get_option( 'ace_link' ); ?>;
    }
    <?php } ?>

    <?php if( get_option( 'ace_button_bg' ) ) { ?>
    button,
    .post-button,
    .input-button,
    input[type=submit] {
      background: <?php echo get_option( 'ace_button_bg' ); ?>;
      <?php if( get_option( 'ace_button_border' ) ) { ?>border: 1px solid <?php echo get_option( 'ace_button_border' ); ?>;<?php } ?>
      <?php if( get_option( 'ace_button_text' ) ) { ?>color: <?php echo get_option( 'ace_button_text' ); ?>;<?php } ?>
    }
    <?php } ?>

    <?php if( get_option( 'ace_button_bg_hover' ) ) { ?>
    button:hover,
    .post-button:hover,
    .input-button:hover,
    input[type=submit]:hover {
      background: <?php echo get_option( 'ace_button_bg_hover' ); ?>;
      <?php if( get_option( 'ace_button_border_hover' ) ) { ?>border: 1px solid <?php echo get_option( 'ace_button_border_hover' ); ?>;<?php } ?>
      <?php if( get_option( 'ace_button_text_hover' ) ) { ?>color: <?php echo get_option( 'ace_button_text_hover' ); ?>;<?php } ?>
    }
    <?php } ?>

    <?php if( get_option( 'ace_button_bg' ) ) { ?>.sideform-button {<?php if( get_option( 'ace_button_text' ) ) { ?>color: <?php echo get_option( 'ace_button_text' ); ?> !important;<?php } ?>}<?php } ?>
    <?php if( get_option( 'ace_button_bg_hover' ) ) { ?>.sideform-button:hover {<?php if( get_option( 'ace_button_text_hover' ) ) { ?>color: <?php echo get_option( 'ace_button_text_hover' ); ?> !important;<?php } ?>}<?php } ?>

    <?php if( get_option( 'ace_newsletter_bg' ) ) { ?>.header-meta {background: <?php echo get_option( 'ace_newsletter_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_newsletter_text' ) ) { ?>
    .header-meta-inner,
    .header-meta-inner h1,
    .header-meta-inner h2,
    .header-meta-inner h3,
    .header-meta-inner h4,
    .header-meta-inner h5,
    .header-meta-inner h6 {
      color: <?php echo get_option( 'ace_newsletter_text' ); ?>;
    }
    <?php } ?>

    <?php if( get_option( 'ace_text_color' ) ) { ?>body {color: <?php echo get_option( 'ace_text_color' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_border_color' ) ) { ?>
    .side-widget,
    .footer,
    .header-meta,
    .footer-newsletter .header-meta,
    .article .post-meta,
    .footer-navi,
    ol.commentlist li {border-color: <?php echo get_option( 'ace_border_color' ); ?>;}
    <?php } ?>

    <?php if( get_option( 'ace_comment_button' ) ) { ?>.article .post-comment a {background: <?php echo get_option( 'ace_comment_button' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_comment_button_text' ) ) { ?>.article .post-comment a {color: <?php echo get_option( 'ace_comment_button_text' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_comment_button_hover' ) ) { ?>.article .post-comment a:hover {background: <?php echo get_option( 'ace_comment_button_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_comment_button_text_hover' ) ) { ?>.article .post-comment a:hover {color: <?php echo get_option( 'ace_comment_button_text_hover' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_page_page_title' ) ) { ?>.article .page-title {color: <?php echo get_option( 'ace_page_page_title' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_page_post_title_link' ) ) { ?>.article .post-title a {color: <?php echo get_option( 'ace_page_post_title_link' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_page_post_title_link_hover' ) ) { ?>.article .post-title a:hover {color: <?php echo get_option( 'ace_page_post_title_link_hover' ); ?> !important;}<?php } ?>

    <?php if( get_option( 'ace_button_bg' ) ) { ?>#cancel-comment-reply-link, a.comment-reply-link {background: <?php echo get_option( 'ace_button_bg' ); ?>; <?php if( get_option( 'ace_button_text' ) ) { ?>color: <?php echo get_option( 'ace_button_text' ); ?>;<?php } ?>}<?php } ?>

    <?php if( get_option( 'ace_sidebar_widget_title' ) ) { ?>.side-widget h3 {color: <?php echo get_option( 'ace_sidebar_widget_title' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_footer_background' ) ) { ?>.footer {background: <?php echo get_option( 'ace_footer_background' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_footer_widget_title' ) ) { ?>.footer-widget h4 {color: <?php echo get_option( 'ace_footer_widget_title' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_footer_text' ) ) { ?>.footer {color: <?php echo get_option( 'ace_footer_text' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_footer_credit_background' ) ) { ?>p.footer-copy {background: <?php echo get_option( 'ace_footer_credit_background' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_footer_credit_text' ) ) { ?>p.footer-copy {color: <?php echo get_option( 'ace_footer_credit_text' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_slider_bg' ) ) { ?>.responsiveslides-wrap {background: <?php echo get_option( 'ace_slider_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_caption_bg' ) ) { ?>.responsiveslides-slide li .responsiveslides-caption {background: <?php echo get_option( 'ace_caption_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_caption_text' ) ) { ?>.responsiveslides-slide li .responsiveslides-caption h3, .responsiveslides-slide li .responsiveslides-caption h3 a {color: <?php echo get_option( 'ace_caption_text' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_arrow_bg' ) ) { ?>.responsiveslides .next, .responsiveslides .prev {background-color: <?php echo get_option( 'ace_arrow_bg' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_accordion_bg' ) ) { ?>.accordion-title {background-color: <?php echo get_option( 'ace_accordion_bg' ); ?>; color: <?php echo get_option( 'ace_accordion_text' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_accordion_bg_hover' ) ) { ?>.accordion-open {background-color: <?php echo get_option( 'ace_accordion_bg_hover' ); ?> !important; color: <?php echo get_option( 'ace_accordion_text_hover' ); ?> !important;}<?php } ?>

    <?php if( get_option( 'ace_widget_twitter_bg' ) ) { ?>ul.social-icons .fa-twitter {background: <?php if( get_option( 'ace_widget_twitter_bg' ) ) { echo get_option( 'ace_widget_twitter_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_fb_bg' ) ) { ?>ul.social-icons .fa-facebook {background: <?php if( get_option( 'ace_widget_fb_bg' ) ) { echo get_option( 'ace_widget_fb_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_email_bg' ) ) { ?>ul.social-icons .fa-envelope {background: <?php if( get_option( 'ace_widget_email_bg' ) ) { echo get_option( 'ace_widget_email_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_rss_bg' ) ) { ?>ul.social-icons .fa-rss {background: <?php if( get_option( 'ace_widget_rss_bg' ) ) { echo get_option( 'ace_widget_rss_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_google_bg' ) ) { ?>ul.social-icons .fa-google-plus {background: <?php if( get_option( 'ace_widget_google_bg' ) ) { echo get_option( 'ace_widget_google_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_flickr_bg' ) ) { ?>ul.social-icons .fa-flickr {background: <?php if( get_option( 'ace_widget_flickr_bg' ) ) { echo get_option( 'ace_widget_flickr_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_linkedin_bg' ) ) { ?>ul.social-icons .fa-linkedin {background: <?php if( get_option( 'ace_widget_linkedin_bg' ) ) { echo get_option( 'ace_widget_linkedin_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_youtube_bg' ) ) { ?>ul.social-icons .fa-youtube {background: <?php if( get_option( 'ace_widget_youtube_bg' ) ) { echo get_option( 'ace_widget_youtube_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_vimeo_bg' ) ) { ?>ul.social-icons .fa-vimeo-square {background: <?php if( get_option( 'ace_widget_vimeo_bg' ) ) { echo get_option( 'ace_widget_vimeo_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_instagram_bg' ) ) { ?>ul.social-icons .fa-instagram {background: <?php if( get_option( 'ace_widget_instagram_bg' ) ) { echo get_option( 'ace_widget_instagram_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_bloglovin_bg' ) ) { ?>ul.social-icons .fa-plus {background: <?php if( get_option( 'ace_widget_bloglovin_bg' ) ) { echo get_option( 'ace_widget_bloglovin_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_pinterest_bg' ) ) { ?>ul.social-icons .fa-pinterest {background: <?php if( get_option( 'ace_widget_pinterest_bg' ) ) { echo get_option( 'ace_widget_pinterest_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_tumblr_bg' ) ) { ?>ul.social-icons .fa-tumblr {background: <?php if( get_option( 'ace_widget_tumblr_bg' ) ) { echo get_option( 'ace_widget_tumblr_bg' ); } else { echo '#cccccc'; } ?>;}<?php } ?>

    <?php if( get_option( 'ace_widget_twitter_bg_hover' ) ) { ?>ul.social-icons .fa-twitter:hover {background: <?php if( get_option( 'ace_widget_twitter_bg_hover' ) ) { echo get_option( 'ace_widget_twitter_bg_hover' ); } else { echo '#269dd5'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_fb_bg_hover' ) ) { ?>ul.social-icons .fa-facebook:hover {background: <?php if( get_option( 'ace_widget_fb_bg_hover' ) ) { echo get_option( 'ace_widget_fb_bg_hover' ); } else { echo '#0c42b2'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_email_bg_hover' ) ) { ?>ul.social-icons .fa-envelope:hover {background: <?php if( get_option( 'ace_widget_email_bg_hover' ) ) { echo get_option( 'ace_widget_email_bg_hover' ); } else { echo '#aaaaaa'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_rss_bg_hover' ) ) { ?>ul.social-icons .fa-rss:hover {background: <?php if( get_option( 'ace_widget_rss_bg_hover' ) ) { echo get_option( 'ace_widget_rss_bg_hover' ); } else { echo '#f49000'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_google_bg_hover' ) ) { ?>ul.social-icons .fa-google-plus:hover {background: <?php if( get_option( 'ace_widget_google_bg_hover' ) ) { echo get_option( 'ace_widget_google_bg_hover' ); } else { echo '#fd3000'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_flickr_bg_hover' ) ) { ?>ul.social-icons .fa-flickr:hover {background: <?php if( get_option( 'ace_widget_flickr_bg_hover' ) ) { echo get_option( 'ace_widget_flickr_bg_hover' ); } else { echo '#fc0077'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_linkedin_bg_hover' ) ) { ?>ul.social-icons .fa-linkedin:hover {background: <?php if( get_option( 'ace_widget_linkedin_bg_hover' ) ) { echo get_option( 'ace_widget_linkedin_bg_hover' ); } else { echo '#0d5a7b'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_youtube_bg_hover' ) ) { ?>ul.social-icons .fa-youtube:hover {background: <?php if( get_option( 'ace_widget_youtube_bg_hover' ) ) { echo get_option( 'ace_widget_youtube_bg_hover' ); } else { echo '#ff0000'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_vimeo_bg_hover' ) ) { ?>ul.social-icons .fa-vimeo-square:hover {background: <?php if( get_option( 'ace_widget_vimeo_bg_hover' ) ) { echo get_option( 'ace_widget_vimeo_bg_hover' ); } else { echo '#00c1f8'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_instagram_bg_hover' ) ) { ?>ul.social-icons .fa-instagram:hover {background: <?php if( get_option( 'ace_widget_instagram_bg_hover' ) ) { echo get_option( 'ace_widget_instagram_bg_hover' ); } else { echo '#194f7a'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_bloglovin_bg_hover' ) ) { ?>ul.social-icons .fa-plus:hover {background: <?php if( get_option( 'ace_widget_bloglovin_bg_hover' ) ) { echo get_option( 'ace_widget_bloglovin_bg_hover' ); } else { echo '#00c4fd'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_pinterest_bg_hover' ) ) { ?>ul.social-icons .fa-pinterest:hover {background: <?php if( get_option( 'ace_widget_pinterest_bg_hover' ) ) { echo get_option( 'ace_widget_pinterest_bg_hover' ); } else { echo '#c70505'; } ?>;}<?php } ?>
    <?php if( get_option( 'ace_widget_tumblr_bg_hover' ) ) { ?>ul.social-icons .fa-tumblr:hover {background: <?php if( get_option( 'ace_widget_tumblr_bg_hover' ) ) { echo get_option( 'ace_widget_tumblr_bg_hover' ); } else { echo '#304d6b'; } ?>;}<?php } ?>

    <?php if( get_option( 'ace_icons_background' ) ) { ?>.top-icons {background: <?php echo get_option( 'ace_icons_background' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_icons_background' ) ) { ?>
    ul.top-icons-wrap .fa-twitter,
    ul.top-icons-wrap .fa-facebook,
    ul.top-icons-wrap .fa-pinterest,
    ul.top-icons-wrap .fa-instagram,
    ul.top-icons-wrap .fa-google-plus,
    ul.top-icons-wrap .fa-flickr,
    ul.top-icons-wrap .fa-linkedin,
    ul.top-icons-wrap .fa-youtube,
    ul.top-icons-wrap .fa-vimeo-square,
    ul.top-icons-wrap .fa-plus,
    ul.top-icons-wrap .fa-tumblr,
    ul.top-icons-wrap .fa-rss,
    ul.top-icons-wrap .fa-envelope {color: <?php echo get_option( 'ace_icons_background' ); ?>;}
    <?php } ?>

    <?php if( get_option( 'ace_rss_bg' ) ) { ?>ul.top-icons-wrap .fa-rss {background: <?php echo get_option( 'ace_rss_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_twitter_bg' ) ) { ?>ul.top-icons-wrap .fa-twitter {background: <?php echo get_option( 'ace_twitter_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_facebook_bg' ) ) { ?>ul.top-icons-wrap .fa-facebook {background: <?php echo get_option( 'ace_facebook_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_pinterest_bg' ) ) { ?>ul.top-icons-wrap .fa-pinterest {background: <?php echo get_option( 'ace_pinterest_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_email_bg' ) ) { ?>ul.top-icons-wrap .footer-email {background: <?php echo get_option( 'ace_email_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_flickr_bg' ) ) { ?>ul.top-icons-wrap .fa-flickr {background: <?php echo get_option( 'ace_flickr_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_linkedin_bg' ) ) { ?>ul.top-icons-wrap .fa-linkedin {background: <?php echo get_option( 'ace_linkedin_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_youtube_bg' ) ) { ?>ul.top-icons-wrap .fa-youtube {background: <?php echo get_option( 'ace_youtube_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_vimeo_bg' ) ) { ?>ul.top-icons-wrap .fa-vimeo-square {background: <?php echo get_option( 'ace_vimeo_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_google_plus_bg' ) ) { ?>ul.top-icons-wrap .fa-google-plus {background: <?php echo get_option( 'ace_google_plus_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_instagram_bg' ) ) { ?>ul.top-icons-wrap .fa-instagram {background: <?php echo get_option( 'ace_instagram_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_bloglovin_bg' ) ) { ?>ul.top-icons-wrap .fa-plus {background: <?php echo get_option( 'ace_bloglovin_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_tumblr_bg' ) ) { ?>ul.top-icons-wrap .fa-tumblr {background: <?php echo get_option( 'ace_tumblr_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_email_bg' ) ) { ?>ul.top-icons-wrap .fa-envelope {background: <?php echo get_option( 'ace_email_bg' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_rss_bg_hover' ) ) { ?>ul.top-icons-wrap .fa-rss:hover {background: <?php echo get_option( 'ace_rss_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_twitter_bg_hover' ) ) { ?>ul.top-icons-wrap .fa-twitter:hover {background: <?php echo get_option( 'ace_twitter_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_facebook_bg_hover' ) ) { ?>ul.top-icons-wrap .fa-facebook:hover {background: <?php echo get_option( 'ace_facebook_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_pinterest_bg_hover' ) ) { ?>ul.top-icons-wrap .fa-pinterest:hover {background: <?php echo get_option( 'ace_pinterest_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_email_bg_hover' ) ) { ?>ul.top-icons-wrap .footer-email:hover {background: <?php echo get_option( 'ace_email_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_flickr_bg_hover' ) ) { ?>ul.top-icons-wrap .fa-flickr:hover {background: <?php echo get_option( 'ace_flickr_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_linkedin_bg_hover' ) ) { ?>ul.top-icons-wrap .fa-linkedin:hover {background: <?php echo get_option( 'ace_linkedin_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_youtube_bg_hover' ) ) { ?>ul.top-icons-wrap .fa-youtube:hover {background: <?php echo get_option( 'ace_youtube_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_vimeo_bg_hover' ) ) { ?>ul.top-icons-wrap .fa-vimeo-square:hover {background: <?php echo get_option( 'ace_vimeo_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_google_plus_bg_hover' ) ) { ?>ul.top-icons-wrap .fa-google-plus:hover {background: <?php echo get_option( 'ace_google_plus_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_instagram_bg_hover' ) ) { ?>ul.top-icons-wrap .fa-instagram:hover {background: <?php echo get_option( 'ace_instagram_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_bloglovin_bg_hover' ) ) { ?>ul.top-icons-wrap .fa-plus:hover {background: <?php echo get_option( 'ace_bloglovin_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_tumblr_bg_hover' ) ) { ?>ul.top-icons-wrap .fa-tumblr:hover {background: <?php echo get_option( 'ace_tumblr_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_email_bg_hover' ) ) { ?>ul.top-icons-wrap .fa-envelope:hover {background: <?php echo get_option( 'ace_email_bg_hover' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_hide_comment' ) ) { ?>.nocomments {display: none;}<?php } ?>

    <?php if( get_option( 'ace_blog_layout' ) == 'blog-sidebar-content' ) { ?>
    .section {float: right;}
    .aside {float: left;}
    <?php } ?>

    <?php if ( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'infinite-scroll' ) ) : ?>
    .pagination {display: none !important;}
    <?php endif; ?>

  </style>
<?php }
add_action( 'wp_head', 'ace_theme_css' );

// ==================================================================
// Breadcrumb
// ==================================================================
function ace_breadcrumb() {
  if( get_option( 'ace_enable_breadcrumb' ) ) { echo get_breadcrumb(); }
}

// ==================================================================
// Sticky menu
// ==================================================================
if( get_option( 'ace_sticky_menu' ) ) {
  function ace_sticky_menu_script(){ ?>
	<script type="text/javascript">
	/* <![CDATA[ */
	var $ = jQuery.noConflict();
	jQuery( document ).ready( function( $ ){ // START

	var stickyMenu = document.querySelector(".nav");

	window.onscroll = function() {
	  if (window.pageYOffset > 150) {
		stickyMenu.classList.add("fixed-menu");
		stickyMenu.style.top = 0;
	  } else {
		stickyMenu.classList.remove("fixed-menu");
	  };
	}

	}); // END
	/* ]]> */
	</script>
  <?php }
  add_action( 'wp_footer', 'ace_sticky_menu_script', 100 );
}

// ==================================================================
// Heading
// ==================================================================
function ace_heading() {
  if( get_header_image() == true ) { ?>
    <a href="<?php echo esc_url( home_url() ); ?>">
      <img src="<?php header_image(); ?>" style="width:calc(<?php echo get_custom_header()->width; ?>px/2); height:auto;" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" class="header-title-img" />
    </a>
  <?php } elseif( is_home() || is_front_page() ) { ?>
      <h1><a href="<?php echo esc_url( home_url() ); ?>" class="header-title"><?php bloginfo( 'name' ); ?></a></h1>
  <?php } else { ?>
      <h5><a href="<?php echo esc_url( home_url() ); ?>" class="header-title"><?php bloginfo( 'name' ); ?></a></h5>
  <?php }
}

// ==================================================================
// Header style
// ==================================================================
function ace_header() {
  if( get_option( 'ace_header_layout' ) == 'below-header' ) { ?>

    <header class="header-below">
      <nav class="nav" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
		<label for="show-menu"><div class="menu-click">Menu</div></label>
		<input type="checkbox" id="show-menu" class="checkbox-menu hidden" role="button">
		<div class="menu-wrap">
			<?php wp_nav_menu( 'theme_location=top_menu&container_class=menu&menu_class=main-menu&fallback_cb=wp_page_menu&show_home=1' ); ?>
		</div>
      </nav><!-- .nav -->
      <?php echo ace_heading(); ?>
    </header><!-- .header-below -->

  <?php } elseif( get_option( 'ace_header_layout' ) == 'top-header' )  { ?>

    <header class="header-top">
      <?php echo ace_heading(); ?>
      <nav class="nav" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
		<label for="show-menu"><div class="menu-click">Menu</div></label>
		<input type="checkbox" id="show-menu" class="checkbox-menu hidden" role="button">
		<div class="menu-wrap">
			<?php wp_nav_menu( 'theme_location=top_menu&container_class=menu&menu_class=main-menu&fallback_cb=wp_page_menu&show_home=1' ); ?>
		</div>
      </nav><!-- .nav -->
    </header><!-- .header-top -->

  <?php } elseif( get_option( 'ace_header_layout' ) == 'left-header' )  { ?>

    <header class="header-inner">
      <?php echo ace_heading(); ?>
      <nav class="nav" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
		<label for="show-menu"><div class="menu-click">Menu</div></label>
		<input type="checkbox" id="show-menu" class="checkbox-menu hidden" role="button">
		<div class="menu-wrap">
			<?php wp_nav_menu( 'theme_location=top_menu&container_class=menu&menu_class=main-menu&fallback_cb=wp_page_menu&show_home=1' ); ?>
		</div>
      </nav><!-- .nav -->
    </header><!-- .header-inner -->

  <?php } else { ?>

    <header class="header-inner">
      <?php echo ace_heading(); ?>
      <nav class="nav" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
		<label for="show-menu"><div class="menu-click">Menu</div></label>
		<input type="checkbox" id="show-menu" class="checkbox-menu hidden" role="button">
		<div class="menu-wrap">
			<?php wp_nav_menu( 'theme_location=top_menu&container_class=menu&menu_class=main-menu&fallback_cb=wp_page_menu&show_home=1' ); ?>
		</div>
      </nav><!-- .nav -->
    </header><!-- .header-inner -->

  <?php }
}

// ==================================================================
// Header scripts
// ==================================================================
function ace_header_scripts() {
	if( get_option( 'ace_header_scripts' ) ) { echo stripslashes_deep( get_option( 'ace_header_scripts' ) ); }
}
add_action( 'wp_head', 'ace_header_scripts' );

// ==================================================================
// Footer scripts
// ==================================================================
function ace_footer_scripts() {
	if( get_option( 'ace_footer_scripts' ) ) { echo stripslashes_deep( get_option( 'ace_footer_scripts' ) ); }
}
add_action( 'wp_footer', 'ace_footer_scripts' );

// ==================================================================
// Newsletter on top
// ==================================================================
function ace_newsletter_top() {
  if( get_option( 'ace_newsletter_location' ) == 'Top' ) {
	echo ace_theme_newsletter();
  }
}

// ==================================================================
// Newsletter on bottom
// ==================================================================
function ace_newsletter_bottom() {
  if( get_option( 'ace_newsletter_location' ) == 'Bottom' ) {
	echo '<div class="footer-newsletter">';
	echo ace_theme_newsletter();
	echo '</div>';
  }
}

// ==================================================================
// Featured widget on top
// ==================================================================
function ace_featured_top() {
  if( get_option( 'ace_featured_location' ) == 'Top' ) {
	if( is_active_sidebar( 'featured-widget' ) ) : ?>
	<section class="featured-widget-area" role="complementary">
	  <?php dynamic_sidebar( 'featured-widget' ); ?>
	</section><!-- .featured-widget-area -->
	<?php endif;
  }
}

// ==================================================================
// Featured widget on bottom
// ==================================================================
function ace_featured_bottom() {
  if( get_option( 'ace_featured_location' ) == 'Bottom' ) {
	if( is_active_sidebar( 'featured-widget' ) ) : ?>
	<section class="featured-widget-area" role="complementary">
	  <?php dynamic_sidebar( 'featured-widget' ); ?>
	</section><!-- .featured-widget-area -->
	<?php endif;
  }
}