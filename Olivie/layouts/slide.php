<section class="responsiveslides-wrap">
<section class="responsiveslides">
  <ul class="responsiveslides-slide">
    <?php $query = new WP_Query( "post_type=sliders&posts_per_page=-1&orderby=menu_order&order=ASC" ); while ( $query->have_posts() ) : $query->the_post(); ?>
    <li>
      <?php if( get_post_meta( $post->ID, 'ace_slider_url', true ) ) { echo '<a href="'; echo get_post_meta( $post->ID, 'ace_slider_url', true ); echo '">'; } ?>
        <?php if( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); } ?>
      <?php if( get_post_meta( $post->ID, 'ace_slider_url', true ) ) { echo '</a>'; } ?>
      <?php if( get_option( "ace_feature_title_enable" ) ) { ?>
        <article class="responsiveslides-caption">
        <h3><?php if( get_post_meta( $post->ID, 'ace_slider_url', true ) ) { echo '<a href="'; echo get_post_meta( $post->ID, 'ace_slider_url', true ); echo '">'; } ?><?php the_title(); ?><?php if( get_post_meta( $post->ID, 'ace_slider_url', true ) ) { echo '</a>'; } ?></h3>
        </article>
      <?php } ?>
    </li>
    <?php endwhile; wp_reset_query(); ?>
  </ul>
</section>
</section>

<script type="text/javascript">
/* <![CDATA[ */
var $ = jQuery.noConflict();
jQuery( document ).ready( function( $ ){ // START

  $( '.responsiveslides-slide' ).responsiveSlides( {
    auto:           <?php if( get_option( 'ace_featured_slide_sliding' ) == true ) { echo 'true'; } else { echo 'false'; } ?>,    // Boolean: Animate automatically, true or false
    speed:          <?php if( get_option( 'ace_featured_slide_speed' ) == true ) { echo get_option( 'ace_featured_slide_speed' ); } else { echo '500'; } ?>,  // Integer: Speed of the transition, in milliseconds
    timeout:        <?php if( get_option( 'ace_featured_slide_pause' ) == true ) { echo get_option( 'ace_featured_slide_pause' ); } else { echo '1000'; } ?>, // Integer: Time between slide transitions, in milliseconds
    pager:          <?php if( get_option( 'ace_featured_slide_pager_nav' ) == true ) { echo 'true'; } else { echo 'false'; } ?>,  // Boolean: Show pager, true or false
    nav:            <?php if( get_option( 'ace_featured_slide_nav' ) == true ) { echo 'true'; } else { echo 'false'; } ?>,        // Boolean: Show navigation, true or false
    random:         false,                // Boolean: Randomize the order of the slides, true or false
    pause:          true,                 // Boolean: Pause on hover, true or false
    pauseControls:  true,                 // Boolean: Pause when hovering controls, true or false
    prevText:       "<i class=\"fa fa-angle-left\"></i>",           // String: Text for the "previous" button
    nextText:       "<i class=\"fa fa-angle-right\"></i>",               // String: Text for the "next" button
    maxwidth:       "",                   // Integer: Max-width of the slideshow, in pixels
    navContainer:   "",                   // Selector: Where controls should be appended to, default is after the 'ul'
    manualControls: "",                   // Selector: Declare custom pager navigation
    namespace:      "responsiveslides",   // String: Change the default namespace used
    before:         function(){},       // Function: Before callback
    after:          function(){}        // Function: After callback
  } );

}); // END
/* ]]> */
</script>