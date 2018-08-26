    <article class="article" itemscope itemtype="http://schema.org/CreativeWork">

      <?php if( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h2 class="post-title entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>" rel="<?php esc_attr_e( 'bookmark', 'ace' ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <section class="post-meta">
          <time datetime="<?php the_time( get_option( 'date_format' ) ); ?>" itemprop="datePublished" class="updated"><?php the_time( get_option( 'date_format' ) ); ?></time>
          <?php if( function_exists( 'ace_post_author' ) ) { echo ace_post_author(); } ?>
        </section><!-- .post-meta -->
      </header>
      <?php } ?>

      <article class="post-content entry-content" itemprop="text">

        <p><?php _e( 'You have come to a page that is either not existing or already been removed','ace' ); ?>.</p>

        <?php get_search_form();?>

        <section class="split-columns">
        <article class="colleft">
          <h3><?php _e( 'Archives by month:','ace' ); ?></h3>
          <ul>
            <?php wp_get_archives( 'type=monthly' ); ?>
          </ul>
        </article>
        <article class="colright">
          <h3><?php _e( 'Archives by category:','ace' ); ?></h3>
          <ul>
            <?php wp_list_categories( 'sort_column=name' ); ?>
          </ul>
        </article>
        </section>

      </article><!-- .post-content -->

    </article><!-- .article -->