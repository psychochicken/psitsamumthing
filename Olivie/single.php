<?php get_header(); ?>

  <?php if( get_post_meta( $post->ID, 'ace_wide', true ) ) { echo '<main class="section-wide">'; } else { echo '<main class="section">'; } ?>

    <?php ace_breadcrumb(); ?>

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; else: get_template_part( 'content', 'none' ); endif; ?>

  </main><!-- .section -->

  <?php if( get_post_meta( $post->ID, 'ace_wide', true ) ) {} else { get_sidebar(); } ?>

<?php get_footer(); ?>