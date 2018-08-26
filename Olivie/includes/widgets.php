<?php
// ==================================================================
// Widget - Sidebar
// ==================================================================
function right_widgets_1_init() {
  register_sidebar( array(
    'name'          => __( 'Right Widget', 'ace' ),
    'id'            => 'right-widget-1',
    'class'         => '',
    'description'   => 'Right side widget area',
    'before_widget' => '<article class="side-widget widget %2$s" id="%1$s">',
    'after_widget'  => '</article>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'right_widgets_1_init' );

// ==================================================================
// Widget - Footer
// ==================================================================
function footer_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Footer Widget', 'ace' ),
    'id'            => 'footer-widget',
    'class'         => '',
    'description'   => 'Footer widget area.',
    'before_widget' => '<article class="footer-widget widget %2$s" id="%1$s">',
    'after_widget'  => '</article>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );
}
add_action( 'widgets_init', 'footer_widgets_init' );

// ==================================================================
// Widget - Featured
// ==================================================================
function ace_featured_widget_init() {
  register_sidebar( array(
    'name'          => __( 'Featured Widget', 'ace' ),
    'id'            => 'featured-widget',
    'class'         => '',
    'description'   => '',
    'before_widget' => '<section class="featured-widget widget %2$s" id="%1$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'ace_featured_widget_init' );

// ==================================================================
// Widget - Instagram
// ==================================================================
function ace_footer_widgets_instagram_init() {
  register_sidebar( array(
    'name'          => __( 'Instagram Widget', 'ace' ),
    'id'            => 'footer-widget-instagram',
    'class'         => '',
    'description'   => 'Instagram widget area.',
    'before_widget' => '<article class="footer-instagram-widget widget %2$s" id="%1$s">',
    'after_widget'  => '</article>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );
}
add_action( 'widgets_init', 'ace_footer_widgets_instagram_init' );