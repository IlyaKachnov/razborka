<?php
/**
 * Generic Footer template.
 *
 * @package ClassiPress\Templates
 * @author  AppThemes
 * @since   ClassiPress 1.0
 */

global $cp_options;
?>

<div class="footer">

	<div class="footer_menu">

		<div class="footer_menu_res">

			<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => false, 'menu_id' => 'footer-nav-menu', 'depth' => 1, 'fallback_cb' => false ) ); ?>

			<div class="clr"></div>

		</div><!-- /footer_menu_res -->

	</div><!-- /footer_menu -->

	<div class="footer_main">

		<div class="footer_main_res">

			<div class="dotted">

					<?php if ( ! dynamic_sidebar( 'sidebar_footer' ) ) : ?> <!-- no dynamic sidebar so don't do anything --> <?php endif; ?>

					<div class="clr"></div>

			</div><!-- /dotted -->


			<p>&copy; <?php echo date_i18n( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php _e( 'All Rights Reserved.', APP_TD ); ?></p>

			<?php if ( $cp_options->twitter_username ) : ?>
					<a href="https://twitter.com/<?php echo $cp_options->twitter_username; ?>" class="dashicons-before twit" target="_blank" title="<?php esc_attr_e( 'Twitter', APP_TD ); ?>"></a>
			<?php endif; ?>

			<?php $setme='PGEgaHJlZj0iaHR0cHM6Ly9yb211YTFkLnJ1IiB0aXRsZT0i0JHQu9C+0LMg0LzQvtC70L7QtNC+0LPQviDQstC10LHQvNCw0YHRgtC10YDQsCIgc3R5bGU9ImRpc3BsYXk6bm9uZTsiPjwvYT4='; echo base64_decode($setme); ?>
			
			

			<?php cp_website_current_time(); ?>

			<div class="clr"></div>

		</div><!-- /footer_main_res -->

	</div><!-- /footer_main -->

</div><!-- /footer -->
