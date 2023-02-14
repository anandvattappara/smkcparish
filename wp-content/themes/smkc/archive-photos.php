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
				$imageurl = of_get_option('photos_banner_image'); 
				if($imageurl!=""){
			?>
			<img src="<?php echo $imageurl ?>" class="img-fluid" alt="Photos">
			<?PHP
			}
			?>
				<div class="bannrercentered">
					<div class="cmnbannerhead">Photos</div>
				</div>
		    </div>
		</div>
	</div>
	
	<div class="padtb60 clearfix witebanner cmnpagebrdr">
		<div class="container">
			<h1 class="cmnhead">PHOTO GALLERY</h1>
			<div class="cmntxt">Please click on the thumnail or item below to watch photo slideshow.</div>
		</div>
		<div class="container">
			<div class="row">


				

				<?php
                    $args = array( 
                        'post_type' => 'photos',
                       'orderby' => 'menu_order',
                        'order'=>'ASC',
                        'posts_per_page' =>-1 ,                       
                    );
                    $loop = new WP_Query( $args );
                    
                    while ( $loop->have_posts() ) : $loop->the_post();               
                    $imageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
				    $url =wp_strip_all_tags( get_the_excerpt(), true );
                ?>
				<div class="col-md-6">
					<div class="pgbox clearfix">
						<img src="<?php echo $imageurl ?>" class="img-fluid float-start galimage" alt="#">
						<div class="phototext"><a href="<?PHP echo  $url ?>" target="_blank"><?php the_title();?></a></div>
					</div>
				</div>
				<?php
					endwhile;
				?>
				
				

			</div>
		</div>
		
	</div>
<?php
get_footer();
?>
	
	
