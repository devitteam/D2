<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', $priority = 20 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', $priority = 10 );
remove_all_filters( 'woocommerce_after_single_product_summary', $priority = false );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', $priority = 5 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', $priority = 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', $priority = 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', $priority = 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', $priority = 40 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

add_action( 'woocommerce_before_single_product_summary', 'd2_wraper_product_start', $priority = 5 );
function d2_wraper_product_start()
{ ?>
	<div class="row">
		<div class="col-12 col-lg-9">
<?php }
add_action( 'woocommerce_after_single_product_summary', 'delivery_tabs', $priority = 10 );
function delivery_tabs()
{ ?>
		</div>
		<div class="col-12 col-lg-3 ">
			<div id="tabs-delivery">
				<ul>
					<li><a href="#tabs-delivery1">Вся Украина</a></li>
					<!-- <li><a href="#tabs-delivery2">Киев</a></li> -->
				</ul>
				<div id="tabs-delivery1">
					<div class="row delivery-row">
						<div class="col-4 col-lg-4 delivery-text">
							<img src="<?php echo get_template_directory_uri(); ?>/img/doctavka.png" alt="" >
						</div>
						<div class="col-8 col-lg-8 delivery-text">
							<h3>Доставка</h3>
							<p>“Новая Почта”, “Деливери”, Автолюкс”, - по тарифам перевозчика</p>
						</div>
					</div>
					<div class="row delivery-row">
						<div class="col-4 col-lg-4 delivery-text">
							<img src="<?php echo get_template_directory_uri(); ?>/img/oplata.png" alt="">
						</div>
						<div class="col-8 col-lg-8 delivery-text">
							<h3>Оплата</h3>
							<p>Наличными, Безналичными, VISA/Mastercard</p>
						</div>
					</div>
					<div class="row delivery-row">
						<div class="col-4 col-lg-4 delivery-text">
							<img src="<?php echo get_template_directory_uri(); ?>/img/nalogn.png" alt="" >
						</div>
						<div class="col-8 col-lg-8 delivery-text">
							<h3>Наложенный платеж:</h3>
							<p> Отправка заказа наложенным платежом</p>
						</div>
					</div>
					<div class="row">
						<div class="col-4 col-lg-4 delivery-text">
							<img src="<?php echo get_template_directory_uri(); ?>/img/vozvrat.png" alt="" >
						</div>
						<div class="col-8 col-lg-8 delivery-text">
							<h3>Возврат товара:</h3>
							<p>Обмен/возврат товара надлежащего качества в течение 14 дней</p>
						</div>
					</div>
				</div>
				<!-- <div id="tabs-delivery2">
					<div class="row delivery-row">
						<div class="col-4 col-lg-4 delivery-text">
							<img src="<?php echo get_template_directory_uri(); ?>/img/delivery.png" alt="" >
						</div>
						<div class="col-8 col-lg-8 delivery-text">
							<h3>Мелкогабаритные</h3>
							<p>Курьером - 35 грн Самовывоз - бесплатно</p>
						</div>
					</div>
					<div class="row delivery-row">
						<div class="col-4 col-lg-4 delivery-text">
							<img src="<?php echo get_template_directory_uri(); ?>/img/doctavka.png" alt="" >
						</div>
						<div class="col-8 col-lg-8 delivery-text">
							<h3>Крупногабаритные</h3>
							<p>За одну машину - 250 грн</p>
						</div>
					</div>
					<div class="row delivery-row">
						<div class="col-4 col-lg-4 delivery-text">
							<img src="<?php echo get_template_directory_uri(); ?>/img/oplata.png" alt="">
						</div>
						<div class="col-8 col-lg-8 delivery-text">
							<h3>Оплата</h3>
							<p>Наличными, Безналичными, VISA/Mastercard</p>
						</div>
					</div>
					<div class="row">
						<div class="col-4 col-lg-4 delivery-text">
							<img src="<?php echo get_template_directory_uri(); ?>/img/vozvrat.png" alt="" >
						</div>
						<div class="col-8 col-lg-8 delivery-text">
							<h3>Возврат товара:</h3>
							<p>Обмен/возврат товара надлежащего качества в течение 14 дней</p>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
<?php }
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_title', $priority = 15 );
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 30 );
add_action( 'woocommerce_before_single_product_summary', 'd2_wraper_product_img_start', $priority = 20 );
function d2_wraper_product_img_start()
{ ?>
	<div class="row">
		<div class="col-md-8 col-lg-8">
<?php }
add_action( 'woocommerce_before_single_product_summary', 'd2_wraper_product_img_end', $priority = 40 );
function d2_wraper_product_img_end()
{ ?>
		</div>
<?php }
add_action( 'woocommerce_single_product_summary', 'd2_single_product_summary_start', 5 );
function d2_single_product_summary_start()
{ ?>
		<div class="col-12 col-lg-4 product-text">
<?php }
add_action( 'woocommerce_single_product_summary', 'd2_single_product_summary_end', 65 );
function d2_single_product_summary_end()
{
	global $product; ?>
		</div>
		<div class="fff"></div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-checkout">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Оформление заказа.</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="your-order">
							<?php 
								$product_img_id = $product->get_image_id();
								$product_img_url = wp_get_attachment_image_url($product_img_id);
							 ?>
							<p>Ваш заказ: <?php the_title( $before = '', $after = '', $echo = true ); ?>.</p>
							<img class="your-product" src="<?php echo $product_img_url; ?>" alt="">
						</div>
						<?php echo do_shortcode( '[contact-form-7 id="251" title="Заказать товар"]' ); ?>
						<script>
						    jQuery(document).ready(function($){
						        $(".form-product-name").val("<?php echo get_the_title().' / '.$product->get_sku(); ?>");
						    });
					    </script>   
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', $priority = 45 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', $priority = 40 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', $priority = 20 );
add_action( 'woocommerce_single_product_summary', 'd2_display_product_attributes', $priority = 50 );
function d2_display_product_attributes()
{
	global $product;
	echo wc_display_product_attributes( $product );
}
add_action( 'woocommerce_single_product_summary', 'd2_display_product_info', $priority = 55 );
function d2_display_product_info()
{ ?>
	<!-- <div class="availability">
		<span class="bold">есть в наличии</span>
		<a href=""> <i class="fas fa-info-circle"></i></a>
		<div class="descr">
			<p class="descr-head">Сроки уточняйте</p>
			<p>Этот товар можно заказать. Сроки доставки варьируются от 14 до 90 дней, более точную информацию вам предоставит менеджер отдела продаж.</p>
		</div>
  	</div> -->
	<div class="order">
		<a href="#" class="selection" data-toggle="modal" data-target="#exampleModal">заказать</a>
	</div>
<?php }
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', $priority = 20 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', $priority = 10 );
remove_all_actions( 'woocommerce_before_shop_loop', $priority = false );
add_action( 'woocommerce_before_main_content', 'd2_shop_content_start', $priority = 20 );
function d2_shop_content_start()
{ ?>
	<div class="row ">
<?php }
add_action( 'woocommerce_after_main_content', 'd2_shop_content_end', $priority = 5 );
function d2_shop_content_end()
{ ?>
	</div>
<?php }
add_action( 'woocommerce_before_shop_loop', 'd2_shop_products_start', $priority = 10 );
function d2_shop_products_start()
{ ?>
	<div class="col-12 col-md-7 col-lg-8 col-xl-9 catalog">
		<?php 
		$tax_obj = get_queried_object();
		if ($tax_obj->parent == 17 || $tax_obj->parent == 19) {
			$cat_description = $tax_obj->description;
			$cat_name = $tax_obj->name;
			$cat_id = $tax_obj->term_id;
			$image_cat_id = get_term_meta( $cat_id, '_thumbnail_id', 1 );
            $image_cat_url = wp_get_attachment_image_url( $image_cat_id, 'full' ); ?>
			<p class="head-carousel-catalog "><?php echo $cat_name; ?></p>
	    	<div class="row catalog-style">
		        <div class="col-12 col-sm-12  col-md-12 col-lg-6 col-xl-6 head-catalog-text">
		        	<?php echo $cat_description; ?>
		        </div>
		        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 index-img-a" style="background-image:url(<?php echo $image_cat_url; ?>);background-size:cover;background-position:center;"></div>
	    	</div>
		<?php } ?>
		<div class="row catalog-all">
			<div class="woocommerce-products-header col-12">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h1 class="woocommerce-products-header__title page-title head-carousel"><span><?php woocommerce_page_title(); ?></span></h1>
				<?php endif; ?>
			</div>
<?php }
add_action( 'woocommerce_after_shop_loop', 'd2_shop_products_end', $priority = 5 );
function d2_shop_products_end()
{ ?>
		</div>
<?php }
add_action( 'woocommerce_before_main_content', 'd2_sidebar_archive_only', $priority = 40 );
function d2_sidebar_archive_only() {
	if (!is_product()) {
		woocommerce_get_sidebar();
	}
}
add_action( 'woocommerce_after_shop_loop', 'd2_shop_products_new', $priority = 20 );
function d2_shop_products_new()
{ ?>
	<div class="row">
		<div class="col-md-12">
			<div class="head-arows-box">
				<h2 class="head-carousel catalog-new"><span>Новинки</span></h2>
				<p>
					<a href="#" id="js-prev-catalog-new" class="prev-next"></a>
					<a href="#" id="js-next-catalog-new" class="prev-next"></a>
				</p>
			</div>
			<div id="catalog-slider-new" class="owl-carousel catalog-slider">
				<?php 
					// Define Query Arguments
					$args_new = array( 
						'post_type'    => 'product', 
						'posts_per_page' => -1, 
						'product_tag'    => 'new' 
					);

					// Create the new query
					$loop = new WP_Query( $args_new );

					// Get products number
					$product_count = $loop->post_count;

					// If results
					if( $product_count > 0 ) :

						// Start the loop
						while ( $loop->have_posts() ) : $loop->the_post(); global $product;

							global $post;

							echo '<div class="post-slide">';

								wc_get_template_part( 'content', 'product' );

							echo '</div><!--/.products-->';

						endwhile;

					else :

					_e('No product matching your criteria.');

					endif; // endif $product_count > 0
				?>
			</div>
		</div>
	</div>
<?php }

add_action( 'woocommerce_after_shop_loop', 'd2_shop_products_choose', $priority = 30 );
function d2_shop_products_choose()
{ ?>
	<div class="row">
		<div class="col-md-12">
			<div class="head-arows-box">
				<h2 class="head-carousel catalog-selection"><span>Выбор наших покупателей</span></h2>
				<p>
					<a href="#" id="js-prev-catalog-selection" class="prev-next"></a>
					<a href="#" id="js-next-catalog-selection" class="prev-next"></a>
				</p>
			</div>
			<div id="catalog-slider-selection" class="owl-carousel catalog-slider">
				<?php 
					// Define Query Arguments
					$args_choose = array( 
						'post_type'    => 'product', 
						'posts_per_page' => 10,
						'orderby' => 'rand',
					);

					// Create the new query
					$loop = new WP_Query( $args_choose );

					// Get products number
					$product_count = $loop->post_count;

					// If results
					if( $product_count > 0 ) :

						// Start the loop
						while ( $loop->have_posts() ) : $loop->the_post(); global $product;

							global $post;

							echo '<div class="post-slide">';

								wc_get_template_part( 'content', 'product' );

							echo '</div><!--/.products-->';

						endwhile;

					else :

					_e('No product matching your criteria.');

					endif; // endif $product_count > 0
				?>
			</div>
		</div>
	</div>
<?php }

add_action( 'woocommerce_after_main_content', 'd2_shop_perfect_solution', $priority = 7 );
function d2_shop_perfect_solution()
{
	if (is_archive()) { ?>
		<div class="row catalog-select">
			<div class="col-12 col-lg-6 news-img-a">
				<div class="news-img img-selection"></div>
			</div>
			<div class="col-12 col-lg-6 news-one-one">
				<h2 class="head-selection">Подобрать Вам идеальное интерьерное решение?</h2>
				<p class="text-selection">Оставьте свой контакт и наш профессиональный консультант с вами свяжется.</p>
				<p class="select">
					<a href="<?php echo home_url(); ?>/#connection" class="selection">подобрать</a>
				</p>
			</div>
		</div>
	<?php }
}

remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_shop_loop_item_title', 'd2_shop_loop_item_title', 10 );
function d2_shop_loop_item_title()
{
	echo '<h3 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</h3>';
}

add_action( 'woocommerce_before_shop_loop_item', 'd2_new_product', 20 );
function d2_new_product()
{
	global $product;
	$product_id = $product->id;
	$product_tags = get_the_terms($product_id, 'product_tag');
	$term_array = array();
	if ( ! empty( $product_tags ) && ! is_wp_error( $product_tags ) ){
	    foreach ( $product_tags as $product_tag ) {
	        $term_array[] = $product_tag->slug;
	    }
	}
	if (in_array('new', $term_array)) {
		echo '<img src="'.get_template_directory_uri().'/img/new.png" class="new-product" alt="new">';
	}
}
