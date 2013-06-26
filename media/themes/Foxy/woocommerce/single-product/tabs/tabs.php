<?php
/**
 * Single Product tabs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="clear"></div>

	<div id="home-tab-area">
		<ul class="tabs">
			<?php $i = 1; ?>
			<?php foreach ( $tabs as $key => $tab ) : ?>

				<li class="<?php echo $key ?>_tab<?php if ( 1 == $i ) echo ' home-tab-active'; ?>">
					<?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?>
				</li>

				<?php $i++; ?>
			<?php endforeach; ?>
		</ul>
		<div id="home-tabs-content">
			<?php foreach ( $tabs as $key => $tab ) : ?>

				<div class="home-tab-slide" id="tab-<?php echo $key ?>">
					<?php call_user_func( $tab['callback'], $key, $tab ) ?>
				</div>

			<?php endforeach; ?>
		</div>
	</div>

<?php endif; ?>