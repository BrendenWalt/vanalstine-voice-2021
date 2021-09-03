<?php
/*
	Template Name: Program Page
*/

get_header();
?>

	<main id="primary" class="site-main">

		<!-- content -->
		<?php
			get_template_part('template-parts/home-page/content-home','hero');
			get_template_part('template-parts/home-page/content-home','video');
			get_template_part('template-parts/home-page/content-home','benefits');
			get_template_part('template-parts/home-page/content-home','programs');
			get_template_part('template-parts/home-page/content-home','about');
			get_template_part('template-parts/home-page/content-home','cta-banner');
			get_template_part('template-parts/home-page/content-home','testimonials');
			get_template_part('template-parts/home-page/content-home','contact');
			get_template_part('template-parts/home-page/content-home','ig-feed');
		?>

	</main><!-- #main -->

<?php
//   get_sidebar();
get_footer();
