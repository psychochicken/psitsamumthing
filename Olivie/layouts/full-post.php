<?php
/*
Template Name: Full width
Template Post Type: post
*/
get_header(); ?>

	<main class="section-wide">

		<?php ace_breadcrumb(); ?>

		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<article <?php post_class( 'article' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/CreativeWork">

			<header class="post-header">
				<h1 class="post-title entry-title" itemprop="headline"><?php the_title(); ?></h1>
			</header>

			<article class="post-content entry-content" itemprop="text">

				<?php the_content(); ?>

				<?php ace_get_link_pages(); ?>

			</article><!-- .post-content -->

			<?php if( comments_open() || get_comments_number() ) { comments_template(); } ?>

		</article><!-- .article -->

		<?php endwhile; endif; ?>

	</main><!-- .section -->

<?php get_footer(); ?>