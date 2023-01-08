<?php get_header(); ?>

<section>

<?php if ( have_posts() ) : ?>

	<?php
	while ( have_posts() ) :
		the_post();

		print( '<article>' );
		printf( '<h1>%s</h1>', get_the_title() );
		printf( '%s', get_the_content() );
		print( '</article>' );

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
