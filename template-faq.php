<?php
/*
	Template Name: Home Page
*/

get_header();
?>

	<main id="primary" class="faq-main">
		<section class="faqs-container">
			<div class="faq-container">
			</div>
			<div class="faq-contact">
			
			</div>
		</section>

		<!-- content -->
		<?php
			get_template_part('template-parts/content-home','hero');
			get_template_part('template-parts/content-home','video');
			get_template_part('template-parts/content-home','benefits');
			get_template_part('template-parts/content-home','programs');
			get_template_part('template-parts/content-home','about');
			get_template_part('template-parts/content-home','cta-banner');
			get_template_part('template-parts/content-home','testimonials');
			get_template_part('template-parts/content-home','contact');
			get_template_part('template-parts/content-home','ig-feed');
		?>

	</main><!-- #main -->

<?php
//   get_sidebar();
get_footer();
