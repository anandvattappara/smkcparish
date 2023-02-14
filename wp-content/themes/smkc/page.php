<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage  knanaya
 * @since  knanaya
 */
get_header();
?>
<div class="bluebg">
		<div class="container bannercontainer">
			<div class="cmnbanner">
            <?php 
				$imageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
			?>
				<img src="<?php echo $imageurl ?>" alt="" class="img-fluid">
				<div class="bannrercentered">
					<div class="cmnbannerhead"><?php the_title(); ?></div>
				</div>
		    </div>
		</div>
	</div>
	
	<div class="padtb60 clearfix witebanner cmnpagebrdr">
		<div class="container"><?php the_content(); ?> </div>		
    </div>
<?php
get_footer();
?>
	
	
