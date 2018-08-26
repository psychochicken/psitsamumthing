<?php get_header(); ?>

  <?php if( get_option( 'ace_full_blog' ) ) { echo '<main role="main" class="section-wide" id="section">'; } else { echo '<main role="main" class="section" id="section">'; } ?>

    <?php echo ace_breadcrumb(); ?>

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'list' ); ?>

    <?php endwhile; ?>

      <?php echo ace_get_pagination_links(); ?>

    <?php else : get_template_part( 'content', 'none' ); endif; ?>

  </main><!-- .section -->

  <?php if( get_option( 'ace_full_blog' ) ) { } else { echo get_sidebar(); } ?>

<?php get_footer(); ?>