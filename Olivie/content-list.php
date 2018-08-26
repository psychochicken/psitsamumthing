    <article <?php post_class( 'article' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/CreativeWork">

      <?php if( !get_option( 'ace_hide_category' ) ) { ?><section class="post-category"><?php the_category( ', ' ); ?></section><?php } ?>

      <?php if( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h2 class="post-title entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>" rel="<?php esc_attr_e( 'bookmark', 'ace' ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <section class="post-meta">
          <?php if( !get_option( 'ace_hide_date' ) ) { ?><time datetime="<?php the_time( get_option( 'date_format' ) ); ?>" itemprop="datePublished" class="updated"><?php the_time( get_option( 'date_format' ) ); ?></time><?php } ?>
          <?php if( get_option( 'ace_blog_author' ) ) { ?><?php _e('by','ace'); ?> <span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name"><?php the_author(); ?></span></span><?php } ?>
        </section><!-- .post-meta -->
      </header>
      <?php } ?>

      <article class="post-content entry-content" itemprop="text">

        <?php if( get_option( "ace_enable_post_thumbnail" ) ) { ?>

          <?php if( has_post_thumbnail() ) { ?>
              <a href="<?php the_permalink(); ?>" <?php if( get_option( 'ace_new_window' ) ) { echo 'target="_blank"'; } ?>><?php the_post_thumbnail( 'post_thumb', array( 'class'=>'alignleft' ) ); ?></a>
          <?php } ?>

        <?php } ?>

        <?php if( get_option( "ace_enable_excerpt" ) ) { the_excerpt(); } else { the_content(); } ?>

      </article><!-- .post-content -->

      <?php if( !get_option( 'ace_hide_comment' ) ) { ?><section class="post-comment"><?php comments_popup_link( __( '0 comment', 'ace' ), __( '1 Comment', 'ace' ), __( '% Comments', 'ace' ) ); ?></section><?php } ?>

    </article><!-- .article -->