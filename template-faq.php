<?php
/*
	Template Name: FAQ Page
*/

$args = array(
	'post_type' => 'faq',
	'post_status' => 'publish',
	'orderby' => 'date',
	'order' => 'ASC'
);

get_header();
?>

	<main id="primary" class="faq-main">
		<section class="faqs-container">
			<div class="content-container faq-container">
				<ul uk-accordion class="uk-accordion">
				<?php
					$loop = new WP_Query( $args );
					if ($loop->have_posts()) {
						while ( $loop->have_posts() ) : $loop->the_post();
				?>
				
					
						<li class="faq-item">
							<a class="uk-accordion-title" href="#"><?php echo the_field('question'); ?></a>
							<div class="faq-answer uk-accordion-content">
								<p>
									<?php echo the_field('answer'); ?>
								</p>
							</div>
						</li>
					
				

				<?php 
					endwhile;
					wp_reset_postdata();
					}
				?>
				</ul>
			</div>
			<div class="faq-contact">
				<?php get_template_part('template-parts/content-block','contact-form'); ?>
			</div>
		</section>
	</main><!-- #main -->

<?php
//   get_sidebar();
get_footer();
