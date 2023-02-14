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
					<div class="cmnbannerhead">History</div>
				</div>
		    </div>
		</div>
	</div>
	<div class="greybg padtb60">
		<div class="container">
			<div class="row">
			<?php
                    $args = array( 
                        'post_type' => 'history-priests',
                        'order'=>'ASC',
                        'posts_per_page' =>-1 ,                       
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
					$imageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 

				?> 
				<div class="col-md-2 text-center">
					<img class="img-fluid" src="<?php echo $imageurl; ?>" alt="image">
					<div class="fatname"><?php the_title(); ?></div>
				</div>	
				<?php
					endwhile;
				?>
			</div>
		</div>
	</div>
	<div class="padtb60 clearfix witebanner cmnpagebrdr">
		<div class="container page">
			<h1 class="cmnhead"><?php the_title(); ?></h1>
			<div class="cmntxt"><?php the_content(); ?></div>
		</div>
	</div>
<?php
get_footer();
?>
	
	
