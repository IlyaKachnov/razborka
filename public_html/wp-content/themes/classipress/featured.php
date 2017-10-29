<?php
/**
 * Featured ads slider template.
 *
 * @package ClassiPress\Templates
 * @author  AppThemes
 * @since   ClassiPress 3.0
 */

global $cp_options;
?>

<?php if ( $cp_options->enable_featured ) : ?>

	<script>
		/* featured listings slider */
		jQuery(document).ready(function($) {
		    var number = 4;
		    var windowWidth = $(window).width();
            if (windowWidth < 1000 && windowWidth >= 700) {
                number = 3;
            }
		    if (windowWidth < 700 && windowWidth >= 450) {
		        number = 2;
            }
            if (windowWidth < 450) {
                number = 1;
            }
			$('div.slider').jCarouselLite({

                autoWidth: true,
				responsive: true,
				pause: true,
				auto: true,
                visible :number,
                btnNext: '.next',
                btnPrev: '.prev',
                timeout: 2800,
				speed: 1000,
				init: function() {
					$('div.slider').fadeIn();
				},
				easing: 'easeOutQuint' // for different types of easing, see easing.js
			});
		});
	</script>

	<?php appthemes_before_loop( 'featured' ); ?>

	<?php if ( $featured = cp_get_featured_slider_ads() ) : ?>

		<!-- featured listings -->
		<div class="shadowblock_out slider_top">

			<div class="shadowblock sliderblock">

				<h2 class="dotted"><?php _e( 'Featured Listings', APP_TD ); ?></h2>

				<div class="sliderwrap">

					<div class="dashicons-before prev"></div>
					<div class="dashicons-before next"></div>

					<div class="slider">

						<ul>

							<?php while ( $featured->have_posts() ) : $featured->the_post(); ?>

								<?php appthemes_before_post( 'featured' ); ?>

								<?php get_template_part( 'content-slider', get_post_type() ); ?>

								<?php appthemes_after_post( 'featured' ); ?>

							<?php endwhile; ?>

							<?php appthemes_after_endwhile( 'featured' ); ?>

						</ul>

					</div><!-- /slider -->

				</div><!-- /sliderwrap -->

			</div><!-- /sliderblock -->

		</div><!-- /shadowblock_out -->

	<?php endif; ?>

	<?php appthemes_after_loop( 'featured' ); ?>

	<?php wp_reset_postdata(); ?>

<?php endif; // end feature ad slider check ?>
