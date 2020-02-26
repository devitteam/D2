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
<div class="container rubrics">
	<div class="row rubrics">
	    <div id="rubrics-slider" class="owl-carousel">
	    	<?php 
			$blog_categories = get_categories(array('parent'=>58));
			foreach ($blog_categories as $cat) { ?>
				<div class="post-slide">
			        <div class="post-img room">
			        	<a href="<?php echo get_category_link( $cat->term_id ); ?>">
		            		<?php 
		            		// получим ID картинки из метаполя термина
							$image_cat_id = get_term_meta( $cat->term_id, '_thumbnail_id', 1 );
							// ссылка на полный размер картинки по ID вложения
							$image_cat_url = wp_get_attachment_image_url( $image_cat_id, 'full' );
		            		 ?>
		            		<img class="rubrics-img" src="<?php echo $image_cat_url; ?>" alt="">
			            	<h2 id="rubrics<?php echo $key+1; ?>"><?php echo $cat->name; ?></h2>
			          	</a>
			        </div>
			     </div>
			<?php
			}
			?>
	    </div>
	</div>

	<h1 class="head">Блог о мебели и дизайне</h1>

	<div class="row blog">
  	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="col-12 col-md-6 col-lg-4 blog-one">
			<div class="row article left" >
				<div class="col-12 col-lg-12 blog-img-a">
					<div class="blog-img">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php the_post_thumbnail_url( $size = 'post-thumbnail' ); ?>" alt="">
						</a>
					</div>
					<h2 class="head-blog-one">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
				</div>
				<div class="col-12 col-lg-12 blog-one-one">
				<?php 
					$categories = get_the_category();
					foreach ($categories as $category) {
						echo '<a class="marks" href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a>';
					}
				 ?>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
    <div class="col-12 paginations">
    	<?php d2_page_links(); ?>
    </div>
  </div>

</div>
<?php
get_footer();
