<?php
/**
 * The Primary Sidebar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clean_Commerce
 */

?>
<?php
$default_sidebar = apply_filters( 'clean_commerce_filter_default_sidebar_id', 'sidebar-1', 'primary' );
if ( is_singular() ) {
	global $post;
	$post_options = get_post_meta( $post->ID, 'clean_commerce_theme_settings', true );
	if ( isset( $post_options['sidebar_location_primary'] ) && ! empty( $post_options['sidebar_location_primary'] ) ) {
		$default_sidebar = esc_attr( $post_options['sidebar_location_primary'] );
	}
}
?>
<div id="sidebar-primary" class="widget-area sidebar" role="complementary">
	<?php if ( is_active_sidebar( $default_sidebar ) ) : ?>
		<?php dynamic_sidebar( $default_sidebar ); ?>
	<?php else : ?>
		<?php
			/**
			 * Hook - clean_commerce_action_default_sidebar.
			 */
			do_action( 'clean_commerce_action_default_sidebar', $default_sidebar, 'primary' );
		?>
	<?php endif ?>
</div><!-- #sidebar-primary -->
