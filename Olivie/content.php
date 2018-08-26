    <article <?php post_class( 'article' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/CreativeWork">

      <?php if( !get_option( 'ace_hide_category' ) ) { ?><section class="post-category"><?php the_category( ', ' ); ?></section><?php } ?>

      <?php if( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h1 class="post-title entry-title" itemprop="headline"><a itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" href="<?php the_permalink(); ?>" rel="<?php esc_attr_e( 'bookmark', 'ace' ); ?>" title="<?php the_title_attribute(); ?>" <?php if ( get_option( 'ace_new_window' ) ) { echo 'target="_blank"'; } ?>><?php the_title(); ?></a></h1>
        <section class="post-meta">
          <?php if( !get_option( 'ace_hide_date' ) ) { ?><time datetime="<?php the_time( get_option( 'date_format' ) ); ?>" itemprop="datePublished" class="updated"><?php the_time( get_option( 'date_format' ) ); ?></time><?php } ?>
          <?php if( get_option( 'ace_blog_author' ) ) { ?><?php _e('by','ace'); ?> <span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name"><?php the_author(); ?></span></span><?php } ?>
        </section><!-- .post-meta -->
      </header>
      <?php } ?>

      <article class="post-content entry-content" itemprop="text">
        <?php the_content(); ?>

        <?php ace_get_link_pages(); ?>

        <?php if ( get_option( 'ace_post_signature' ) ) { ?>
          <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
            <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
              <img src="<?php echo esc_url( get_option( 'ace_post_signature' ) ); ?>" alt="<?php the_author(); ?>" class="post-signature" />
              <meta itemprop="url" content="<?php echo esc_attr( get_option( 'ace_post_signature' ) ); ?>" />
            </span>
            <meta itemprop="name" content="<?php the_author(); ?>" />
          </span>
        <?php } ?>

        <?php if( function_exists( 'ace_post_author_bio' ) ) { ace_post_author_bio(); } ?>

      </article><!-- .post-content -->

      <?php if( !get_option( 'ace_hide_comment' ) ) { ?><section class="post-comment"><?php comments_popup_link( __( '0 comment', 'ace' ), __( '1 Comment', 'ace' ), __( '% Comments', 'ace' ) ); ?></section><?php } ?>

      <footer class="post-footer">

        <?php if( get_option( 'ace_show_tag' ) ) { the_tags( '<p class="post-tags">Tags: ', ', ', '</p>' ); } ?>

        <ul class="footer-navi">
          <?php previous_post_link( '<li class="previous" rel="prev">&laquo; %link</li>' ); ?>
          <?php next_post_link( '<li class="next" rel="next">%link &raquo;</li>' ); ?>
        </ul>

        <?php if ( get_option( 'ace_post_banner' ) ) { ?>
          <section class="post-banner">
          <?php echo stripslashes_deep( get_option( 'ace_post_banner' ) ); ?>
          </section>
        <?php } ?>

        <?php if( get_option( 'ace_enable_related' ) ) { get_template_part( 'layouts/related' ); } ?>

      </footer><!-- .post-footer -->

      <?php comments_template( '/comments.php', true ); ?>

    </article><!-- .article -->
