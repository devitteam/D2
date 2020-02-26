<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<h3>
			<?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span>
		</h3>

	<?php endif; ?>

	<?php 
		$terms = get_the_terms( $product->get_id(), 'product_cat' );
		$childrens=[];
		foreach ($terms as $term) {
			if ($term->parent>0) {
				$childrens[$term->parent][] = $term;
			}
		}
		foreach ($childrens as $parent_id => $childrenbl) {
			$parent = get_term_by( 'id', $parent_id, $taxonomy = 'product_cat', $output = 'ARRAY_A', $filter = 'raw' );
			// echo "<h4>".$parent['name'].":</h4>";
			foreach ($childrenbl as $child) {
				echo '<a href="'.get_term_link( $child->term_id ).'" class="product-terms">'.$child->name.'</a>';
			}
		}
		// echo "<pre>";
		// print_r($childrens);
		// echo "</pre>";
	 ?>

	<!-- <?php //echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?> -->

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
