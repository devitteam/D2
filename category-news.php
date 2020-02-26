<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package d2interier
 */

get_header();
?>
<h1 class="head">Уютные новости</h1>
<div class="container news-container">

  	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<div class="row article1" >
				<div class="col-12 col-lg-6 news-img-a">
					<a href="<?php the_permalink(); ?>">
						<div class="news-img1">
							<img src="<?php the_post_thumbnail_url( $size = 'post-thumbnail' ); ?>" alt="">
						</div>
					</a>
				</div>
				<div class="col-12 col-lg-6 news-one">
					<span class="date"><?php echo get_the_date( 'd.m.Yг.' ); ?></span>
					<?php 
						$categories = get_the_category();
						foreach ($categories as $category) {
							echo '<a class="'.$category->slug.'" href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a>';
						}
					 ?>
					<a href="<?php the_permalink(); ?>">
						<h2 class="head-news"><?php the_title(); ?></h2>
        				<p class="text-news"><?php echo get_the_excerpt(); ?></p>
					</a>
					<a href="<?php the_permalink(); ?>" class="more">подробнее...</a>
				</div>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>

</div>
<?php
get_footer();
