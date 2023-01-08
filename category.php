<?php get_header(); ?>

<section>

<?php

if ( have_posts() ) :

	while ( have_posts() ) :

		the_post();
		printf( '<a href="%s">%s</a>', get_the_permalink(), get_the_title() );
		//get_template_part( 'template-parts/content/content', 'excerpt' );

	endwhile;

	the_posts_pagination();

else :

	print( 'Nothing found.' );
	//get_template_part( 'template-parts/content/content', 'none' );

endif;

?>

</section>

<?php get_footer(); ?>
