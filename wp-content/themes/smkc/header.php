<?php
/**
 * The header for knanaya theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage knanaya
 * @since knanaya
 */
?>	
<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ST. MARY'S KNANAYA CATHOLIC PARISH</title>
<link href="<?PHP echo get_template_directory_uri()?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?PHP echo get_template_directory_uri()?>/assets/css/stmarystyle.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light nobg headpad">
			  <div class="container">
				<a class="navbar-brand textlogo" href="#">LOGO</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
			<?php 
				$args = array(
					'menu'            => 'header-menu',
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarNav',
					'menu_class'      => 'navbar-nav ms-auto mb-2 mb-lg-0 navtext',
					'li_class' 		  => 'nav-item',
    				'a_class'         => 'nav-link',
					'active_class'    => 'active',
					'echo'            => true,
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="" class="%2$s">%3$s</ul>',
					'item_spacing'    => 'preserve',
					'depth'           => 0,
					'walker'          => new bootstrap_5_wp_nav_menu_walker(),
					'theme_location'  => 'header-menu',
				);
				wp_nav_menu($args);
	?>
		</div>
	</nav>