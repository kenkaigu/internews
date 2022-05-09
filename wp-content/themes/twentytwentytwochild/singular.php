<?php

get_header();

?>

<main id="site-content">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main>

<!-- #creating site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>


<!-- # getting footer content -->

<?php get_footer(); ?>
