<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
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

if ( $related_products ) : ?>

	<div class="row product-carousel">
    	<div class="col-md-12">

			<div class="related-head-wrap">
				<h2 class="head-product"><span>Выбор наших покупателей</span></h2>
				<p class="center-text">
					<a href="#" id="js-prev-product" class="prev-next"></a>
					<a href="#" id="js-next-product" class="prev-next"></a>
				</p>
			</div>

			<div <?php wc_product_class( '', $product ); ?>>
				<?php woocommerce_product_loop_start(); ?>
					<div id="product-slider" class="owl-carousel">
					<?php foreach ( $related_products as $related_product ) : ?>

						<?php
						 	$post_object = get_post( $related_product->get_id() );

							setup_postdata( $GLOBALS['post'] =& $post_object ); ?>
							
							<div class="post-slide">
								<?php wc_get_template_part( 'content', 'product' ); ?>
							</div>

					<?php endforeach; ?>
					</div>
				<?php woocommerce_product_loop_end(); ?>
			</div>
	    </div>
	</div>

<?php endif;

wp_reset_postdata(); ?>

<div class="row pickup">
	<div class="col-12 col-lg-6 news-img-a">
		<div class="news-img img-selection"></div>
	</div>
	<div class="col-12 col-lg-6 news-one-one">
		<h2 class="head-selection">Хотите, чтобы мы подобрали для Вас интерьерное решение?</h2>
		<p class="text-selection">Оставьте свой контакт и наш профессиональный консультант с вами свяжется</p>
		<p class="select">
			<a href="<?php echo home_url(); ?>/#connection" class="selection">подобрать</a>
		</p>
	</div>
</div>