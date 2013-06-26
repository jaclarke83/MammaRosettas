<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header('shop'); ?>

<?php get_template_part( 'includes/breadcrumbs', 'index' ); ?>

<?php get_template_part( 'includes/top_info', 'index' );  ?>

<div id="content" class="clearfix">
	<div id="left-area">
		<?php if ( have_posts() ) : ?>

			<div id="et_results_settings" class="clearfix">
				<?php do_action('woocommerce_before_shop_loop'); ?>
			</div>

			<ul class="et-products clearfix">

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php woocommerce_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			</ul>

			<div class="clear"></div>

			<?php do_action('woocommerce_after_shop_loop'); ?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

		<div class="clear"></div>
	</div> <!-- #left-area -->

	<?php get_sidebar(); ?>
</div> <!-- #content -->

<?php get_footer('shop'); ?>