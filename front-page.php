<?php
/**
 * Template for front page.
 *
 * @package Clean_Commerce
 */

if ( 'posts' === get_option( 'show_on_front' ) ) :

	get_template_part( 'home' );

else :

	if ( true === apply_filters( 'clean_commerce_filter_home_page_content', true ) ) :

		get_template_part( 'page' );

	else :

		get_header();

		get_footer();

	endif;

endif;
