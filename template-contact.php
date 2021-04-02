<?php
/*
	Template Name: Contact Page
*/

get_header();
?>

	<main id="primary" class="site-main">

		<!-- content -->
		<?php

			get_template_part('template-parts/content-contact','header');
			get_template_part('template-parts/content-contact', 'contact-form');
			
		?>

	</main><!-- #main -->

<?php
//   get_sidebar();
get_footer();
