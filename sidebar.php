<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package cyberbility-starter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="col-md-4 widget-area sidebar" role="complementary">

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
</div><!-- #secondary -->
