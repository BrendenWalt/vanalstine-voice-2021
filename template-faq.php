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

$thecontent = get_the_content();

get_header();
?>

	<main id="primary" class="faq-main">
		<section class="faq-section">
			<div class="content-container faq-container">
				<h1>
					<?php echo get_the_title(); ?>
				</h1>

				<?php if( !empty( $thecontent ) ) { ?>
					<div class="faq-content-block">
						<?php echo( $thecontent ); ?>
					</div>
				<?php } ?>

				<?php
					$loop = new WP_Query( $args );
					if ($loop->have_posts()) {
				?>
					<div class="faqs-container">
						<ul uk-accordion>
							<?php
									while ( $loop->have_posts() ) : $loop->the_post();
									if (get_field( 'faq_on' )) {
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
								}
								endwhile;
								wp_reset_postdata();
							?>

						</ul>
					</div>
				<?php 
					
					wp_reset_postdata();
					}
				?>

			</div>
		</section>

		<!-- Contact form -->
		<?php get_template_part('template-parts/content','contact-form'); ?>

	</main><!-- #main -->

<?php
//   get_sidebar();
get_footer();
