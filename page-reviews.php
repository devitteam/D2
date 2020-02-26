<?php
/**
 * Template Name: Отзывы
 *
 * @package d2interier
 */

get_header();
?>

<div class="container-fluid container-fluid-about">
    <div class="container reviews-container">
		<div class="row">
			<div class="col-12 col-lg-7 head-reviews">
				<h1>Мы работаем для Вас</h1>
				<h2>Мы продаем своим клиентам только действительно особенную мебель, которая сможет украсить их дом.
				</h2>
				<h2>Поэтому у нас каждый находит что-то для себя и редко уходит без покупки.</h2>
			</div>
			<div class="col-12 col-lg-5 reviews-img-a">
				<a href="#">
					<div class="reviews-img"></div>
				</a>
			</div>
		</div>
    </div>
</div>

<?php
$reviews = get_posts( array(
	'post_type' => 'rewiew',
	'numberposts' => -1,
) );
if ($reviews) {
	foreach ($reviews as $post) {
		setup_postdata( $post ); ?>
		<div class="container reviews-container">
			<div class="row reviews" >
				<div class="col-12 col-lg-3 reviews-avatar">
					<div class="avatar-img" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size:cover"></div>
					<p class="avatar-name"><?php the_title(); ?></p>
					<p class="avatar-sity"><?php the_field('gorod'); ?></p>
					<p class="avatar-facebook"><a href="<?php the_field('ssylka'); ?>"><?php the_field('ssylka'); ?></a></p>
					<p class="reviews-text"><?php echo $post->post_content; ?></p>
				</div>
				<div class="col-12 col-lg-5 reviews-product">
					<h2>Фото интерьера покупателя</h2>
					<div class="row foto">
						<div class="col-12 col-lg-12 ">
							<div id="carousel1" class="carousel slide" data-ride="carousel">
								<?php 
									$post_meta = get_post_meta( $post->ID, $key = '', $single = false );
									$img_ids = $post_meta['_multi_img_array'];
									$img_ids_arr = explode(",", $img_ids[0]);
								 ?>
								<ol class="carousel-indicators">
									<?php for ($i=0; $i < count($img_ids_arr); $i++) { 
										echo '<li data-target="#carousel1" data-slide-to="'.$i.'"></li>';
									} ?>
				                    <li class="figure"></li>
				                </ol>
				                <div class="col-12 carousel-inner">
				                	<?php foreach ($img_ids_arr as $key => $img_id) {

				                		$img_url = wp_get_attachment_image_url($img_id, 'full'); ?>
				                		
										<div class="carousel-item index-img <?php if($key == 0) echo 'active'; ?>">
					                       <img class="d-block " src="<?php echo $img_url; ?>" alt="слайд" >
					                    </div>

				                	<?php } ?>
				                </div>
				            </div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4 reviews-product ">
					<h2>Товар из интерьера</h2>
					<div class="row">
						<?php 
							$tovar = get_field('tovar');
							$tovar_arr = $tovar[0];
							// printer($tovar_arr);
						 ?>
						<div class="card-product" >
							<img src="<?php echo get_the_post_thumbnail_url($tovar_arr->ID); ?>" alt="">
							<h2><?php echo $tovar_arr->post_title; ?></h2>
							<div class="price">
								<a href="<?php the_permalink( $tovar_arr->ID ); ?>" class="selection">посмотреть</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php 
	}
	wp_reset_postdata();
}

?>

<?php

get_footer();
