<?php if( is_active_sidebar( 'right-widget-1' ) ) : ?>
<aside class="aside" id="aside" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">

  <?php dynamic_sidebar( 'right-widget-1' ); ?>

  <p><strong>Come visit us on Instagram! We would love to see you.</strong></p>
  <?php echo do_shortcode('[instagram-feed]'); ?>

</aside><!-- .aside -->
<?php endif; ?>