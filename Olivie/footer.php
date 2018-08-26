  <?php ace_featured_bottom(); ?>

</section><!-- .container -->

  <?php ace_newsletter_bottom(); ?>

<?php if( is_active_sidebar( 'footer-widget' ) ) : ?>
<footer class="footer" id="footer" itemscope itemtype="http://schema.org/WPFooter">
  <footer class="footer-inner" role="complementary">
    <?php dynamic_sidebar( 'footer-widget' ); ?>
  </footer><!-- .footer-inner -->
</footer><!-- .footer -->
<?php endif; ?>

<p class="footer-copy" role="contentinfo">
  <?php if ( get_option( 'ace_footer_credit' ) == true ) { echo stripslashes_deep( get_option( 'ace_footer_credit' ) ); } else { ?>&copy; <?php _e( 'Copyright','ace' ); ?> <a href="<?php echo esc_url( home_url() ); ?>" itemtype="copyrightHolder"><?php bloginfo( 'name' ); ?></a> <span itemtype="copyrightYear" content="<?php echo date( 'Y' ); ?>"><?php echo date( 'Y' ); ?></span>. <?php _e( 'Theme By','ace' ); ?> <a href="<?php echo esc_url( 'http://www.bluchic.com' ); ?>">Bluchic</a><?php } ?>
</p>

</section><!-- .wrap -->

<?php if( is_active_sidebar( 'footer-widget-instagram' ) ) : ?>
<footer class="footer-instagram" role="complementary">
  <?php dynamic_sidebar( 'footer-widget-instagram' ); ?>
</footer><!-- .footer-instagram -->
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>