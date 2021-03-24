<?php
/*
	Template Name: FAQ Page
*/

get_header();
?>

	<main id="primary" class="faq-main">
		<section class="faqs-container">
			<div class="content-container faq-container">
				<div class="faq-question">
					<h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit?<span>+</span></h3>
				</div>
				<div class="faq-answer">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quibusdam recusandae earum tempore. Corporis nulla debitis ut amet, culpa accusamus, ex eius, dicta aliquam minus doloribus magnam reiciendis. Eligendi labore atque libero doloribus provident cupiditate fugit accusantium nisi omnis animi. Reiciendis nam eius amet voluptas asperiores perferendis eveniet nesciunt cupiditate.
					</p>
				</div>
			</div>
			<div class="faq-contact">
				<?php get_template_part('template-parts/content-home','contact'); ?>
			</div>
		</section>
	</main><!-- #main -->

<?php
//   get_sidebar();
get_footer();
