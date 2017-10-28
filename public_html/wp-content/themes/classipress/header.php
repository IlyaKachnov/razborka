<?php
/**
 * Generic Header template.
 *
 * @package ClassiPress\Templates
 * @author  AppThemes
 * @since   ClassiPress 1.0
 */

global $cp_options;
?>

<div class="header">

	<div class="header_menu">

		<div class="header_menu_res">
            <div id="logo" style="float: left;margin-right: 10px;">

                <?php if ( get_header_image() ) { ?>
                    <a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php header_image(); ?>" class="header-logo" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
                    </a>
                <?php } elseif ( display_header_text() ) { ?>
                    <h1 class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </h1>
                <?php } ?>
                <?php if ( display_header_text() ) { ?>
                    <div class="description"><?php bloginfo( 'description' ); ?></div>
                <?php } ?>

            </div><!-- /logo -->

            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu-header', 'fallback_cb' => false, 'container' => false ) ); ?>

			<a href="<?php echo esc_url( CP_ADD_NEW_URL ); ?>" class="obtn btn_orange"><?php _e( 'Post an Ad', APP_TD ); ?></a>

			<div class="clr"></div>

		</div><!-- /header_menu_res -->

	</div><!-- /header_menu -->

</div><!-- /header -->
