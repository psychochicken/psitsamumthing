<?php
/*
Template Name: HTML
*/
?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<?php remove_filter('the_content', 'wpautop'); the_content(); ?>

<?php endwhile; endif; ?>