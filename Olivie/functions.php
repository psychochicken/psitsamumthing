<?php
// ==================================================================
// Included libraries
// ==================================================================
require_once( get_template_directory() . '/includes/ace_functions.php' );
require_once( get_template_directory() . '/includes/ace_import_export.php' );
require_once( get_template_directory() . '/includes/ace_options.php' );
require_once( get_template_directory() . '/includes/ace_started.php' );
require_once( get_template_directory() . '/includes/ace_theme_customize.php' );
require_once( get_template_directory() . '/includes/custom_post.php' );
require_once( get_template_directory() . '/includes/custom_widgets.php' );
require_once( get_template_directory() . '/includes/meta_boxes.php' );
require_once( get_template_directory() . '/includes/modules.php' );
require_once( get_template_directory() . '/includes/quicktags.php' );
require_once( get_template_directory() . '/includes/shortcodes.php' );
require_once( get_template_directory() . '/includes/widgets.php' );
require_once( get_template_directory() . '/includes/plugins/ace_woocommerce.php' );

if ( get_option( 'ace_infinite_scroll' ) ) {
  // ==================================================================
  // Infinite Scroll
  // ==================================================================
  function infinite_scroll_js() {
    if( ! is_singular() ) { ?>

    <script type='text/javascript'>
    /* <![CDATA[ */
    var infinite_scroll = {
      loading: {
        img: "<?php echo get_template_directory_uri(); ?>/images/content_loading.gif",
        msgText: "<?php _e( 'Loading more posts...', 'ace' ); ?>",
        finishedMsg: "<?php _e( 'All posts loaded.', 'ace' ); ?>"
      },
      "nextSelector":".pagination a",
      "navSelector":".pagination",
      "itemSelector":".article",
      "contentSelector":".section"
    };
    jQuery( infinite_scroll.contentSelector ).infinitescroll( infinite_scroll );
    /* ]]> */
    </script>

    <?php
    }
  }
  add_action( 'wp_footer', 'infinite_scroll_js', 100 );
}

// ==================================================================
// WordPress dashicons
// ==================================================================
function ace_load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'ace_load_dashicons_front_end' );

// ==================================================================
// Getting started
// ==================================================================
if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == "themes.php" ) wp_redirect( 'themes.php?page=ace_started.php' );
