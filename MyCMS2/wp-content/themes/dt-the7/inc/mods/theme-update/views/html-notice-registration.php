<?php
/**
 * Admin View: Notice - Registration
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="notice">
	<p><?php printf( __( '<strong>Thank you for choosing The7!</strong>', 'the7mk2' ) );?></p>
	<p><?php printf( __( '<strong>Please %1$sregister%2$s</strong> this copy of theme to get access to premium plugins, pre-built websites, 1-click updates and more.', 'the7mk2' ), '<a href="' . admin_url( 'admin.php?page=the7-dashboard' ) . '">', '</a>' );?></p>
    <p><?php printf( __( 'Also be advised that according to %1$sThemeForest Standard Licenses%2$s each site/project built with The7 requires a separate license, which can be purchased %3$shere%4$s.', 'the7mk2' ), '<a href="https://themeforest.net/licenses/standard" target="_blank">', '</a>', '<a href="https://themeforest.net/item/the7-responsive-multipurpose-wordpress-theme/5556590?ref=Dream-Theme&license=regular&open_purchase_for_item_id=5556590" target="_blank">', '</a>' );?></p>
</div>