<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package d2interier
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="875594adbdeffcac" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127149861-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-127149861-1');
	</script>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(56887753, "init", {
	        clickmap:true,
	        trackLinks:true,
	        accurateTrackBounce:true,
	        webvisor:true,
	        ecommerce:"dataLayer"
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/56887753" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>

		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand logo-a-header" href="<?php echo site_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo11.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'container' => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id' => 'navbarNavDropdown',
					'menu_class' => 'navbar-nav',
					'menu_id' => 'primary-menu',
					'walker' => new Walker_Header_Nav,
				) );
				?>
				<div class="flex">
					<?php get_search_form( $echo = true ); ?>
				</div>
			</div>
		</nav>
	
	<img id="toTop" src="<?php echo get_template_directory_uri(); ?>/img/toptop.png" alt="" style="display: inline;">

	</header>

	<?php woocommerce_breadcrumb( array(
		'delimiter'   => '',
		'wrap_before' => '<div class="container"><nav class="woocommerce-breadcrumb" aria-label="breadcrumb"><ol class="breadcrumb">',
		'wrap_after'  => '</ol></nav></div>',
		'before'      => '<li class="breadcrumb-item">',
		'after'       => '</li>',
		'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
	) ); ?>
