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
				$imageurl = of_get_option('audios_banner_image'); 
				if($imageurl!=""){
			?>
			<img src="<?php echo $imageurl ?>" class="img-fluid" alt="Audios">
			<?PHP
			}
			?>
				<div class="bannrercentered">
					<div class="cmnbannerhead">Videos</div>
				</div>
		    </div>
		</div>
	</div>


	<div class="padtb60 clearfix witebanner ">
		<div class="container">
			<h1 class="cmnhead">Video Gallery : General</h1>
			<div class="cmntxt">Please click on the thumbnail to listen audio with visuals.</div>
		</div>
		
		<div class="container">
			<div class="row">
				<?php
				
				$mydata = unserialize($mydata);
                    $args = array( 
                        'post_type' => array( 'general-videos'),
						'orderby' => 'menu_order',
                        //'order'=>'ASC',
                        'posts_per_page' =>15 ,
                    );
                    $loop = new WP_Query( $args );
                    
                    while ( $loop->have_posts() ) : $loop->the_post();  
					$youtubecode = get_post_meta($post->ID, 'youtubecode', true);
                ?>
			
				<div class="col-md-3 nopad">
					<div class="container">
						<div class="videobox">
						<?PHP
								if($youtubecode!="")
								{ 
						?>
							<div class="embed-responsive embed-responsive-4by3">
								<iframe class="embed-responsive-item videos" src="https://www.youtube.com/embed/<?PHP echo $youtubecode;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			
							</div>
							<?PHP 
									   }
							?>
						<div class="videotext"><?php the_title();?></div>
						</div>
					</div>
				</div>				
			
				<?php              
                     endwhile;
                ?>	
				</div>
			</div>
			<div class="container  text-center">
			<a href="<?PHP echo get_home_url()?>/general-videos">
				<button type="button" class="btn btn-outline-primary viewallbtnblue mt-2">View all</button>			
			</a>
		</div>
			</div>
		</div>
		
	</div>

<div class="padtb60 clearfix witebanner ">
		<div class="container">
			<h1 class="cmnhead">Messages</h1>
			
		</div>
		
		<div class="container">
			<div class="row">
				<?php
				
				$mydata = unserialize($mydata);
                    $args = array( 
                        'post_type' => array( 'messages-videos'),
						'orderby' => 'menu_order',
                        //'order'=>'ASC',
                        'posts_per_page' =>15 ,
                    );
                    $loop = new WP_Query( $args );
                    
                    while ( $loop->have_posts() ) : $loop->the_post();  
					$youtubecode = get_post_meta($post->ID, 'youtubecode', true);
                ?>
			
				<div class="col-md-3 nopad">
					<div class="container">
						<div class="videobox">
						<?PHP
								if($youtubecode!="")
								{ 
						?>
							<div class="embed-responsive embed-responsive-4by3">
								<iframe class="embed-responsive-item videos" src="https://www.youtube.com/embed/<?PHP echo $youtubecode;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			
							</div>
							<?PHP 
									   }
							?>
						<div class="videotext"><?php the_title();?></div>
						</div>
					</div>
				</div>				
			
				<?php              
                     endwhile;
                ?>	
				</div>
			</div>

			<div class="container  text-center">
				<a href="<?PHP echo get_home_url()?>/messages-videos">
					<button type="button" class="btn btn-outline-primary viewallbtnblue mt-2">View all</button>			
				</a>
			</div>
			</div>
		</div>
		
	</div><div class="padtb60 clearfix witebanner ">
		<div class="container">
			<h1 class="cmnhead">Religious Education Festivals</h1>
			
		</div>
		
		<div class="container">
			<div class="row">
				<?php
				
				$mydata = unserialize($mydata);
                    $args = array( 
                        'post_type' => array( 'religious-videos'),
						'orderby' => 'menu_order',
                        //'order'=>'ASC',
                        'posts_per_page' =>15 ,
                    );
                    $loop = new WP_Query( $args );
                    
                    while ( $loop->have_posts() ) : $loop->the_post();  
					$youtubecode = get_post_meta($post->ID, 'youtubecode', true);
                ?>
			
				<div class="col-md-3 nopad">
					<div class="container">
						<div class="videobox">
						<?PHP
								if($youtubecode!="")
								{ 
						?>
							<div class="embed-responsive embed-responsive-4by3">
								<iframe class="embed-responsive-item videos" src="https://www.youtube.com/embed/<?PHP echo $youtubecode;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			
							</div>
							<?PHP 
									   }
							?>
						<div class="videotext"><?php the_title();?></div>
						</div>
					</div>
				</div>				
			
				<?php              
                     endwhile;
                ?>	
				</div>
			</div>
			<div class="container  text-center">
				<a href="<?PHP echo get_home_url()?>/religious-videos">
					<button type="button" class="btn btn-outline-primary viewallbtnblue mt-2">View all</button>			
				</a>
			</div>

			</div>
		</div>
		
	</div>
		
	</div><div class="padtb60 clearfix witebanner ">
		<div class="container">
			<h1 class="cmnhead">First Communion</h1>
			
		</div>
		
		<div class="container">
			<div class="row">
				<?php
				
				$mydata = unserialize($mydata);
                    $args = array( 
                        'post_type' => array( 'communion-videos'),
						'orderby' => 'menu_order',
                        //'order'=>'ASC',
                        'posts_per_page' =>15 ,
                    );
                    $loop = new WP_Query( $args );
                    
                    while ( $loop->have_posts() ) : $loop->the_post();  
					$youtubecode = get_post_meta($post->ID, 'youtubecode', true);
                ?>
			
				<div class="col-md-3 nopad">
					<div class="container">
						<div class="videobox">
						<?PHP
								if($youtubecode!="")
								{ 
						?>
							<div class="embed-responsive embed-responsive-4by3">
								<iframe class="embed-responsive-item videos" src="https://www.youtube.com/embed/<?PHP echo $youtubecode;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			
							</div>
							<?PHP 
									   }
							?>
						<div class="videotext"><?php the_title();?></div>
						</div>
					</div>
				</div>				
			
				<?php              
                     endwhile;
                ?>	
				</div>
			</div>

			<div class="container  text-center">
				<a href="<?PHP echo get_home_url()?>/communion-videos">
					<button type="button" class="btn btn-outline-primary viewallbtnblue mt-2">View all</button>			
				</a>
			</div>

			</div>
		</div>
		
	</div>
			
	</div>
	
	<div class="padtb60 clearfix witebanner ">
		<div class="container">
			<h1 class="cmnhead">Liturgy</h1>
			
		</div>
		
		<div class="container">
			<div class="row">
				<?php
				
				$mydata = unserialize($mydata);
                    $args = array( 
                        'post_type' => array( 'liturgy-videos'),
						'orderby' => 'menu_order',
                        //'order'=>'ASC',
                        'posts_per_page' =>15 ,
                    );
                    $loop = new WP_Query( $args );
                    
                    while ( $loop->have_posts() ) : $loop->the_post();  
					$youtubecode = get_post_meta($post->ID, 'youtubecode', true);
                ?>
			
				<div class="col-md-3 nopad">
					<div class="container">
						<div class="videobox">
						<?PHP
								if($youtubecode!="")
								{ 
						?>
							<div class="embed-responsive embed-responsive-4by3">
								<iframe class="embed-responsive-item videos" src="https://www.youtube.com/embed/<?PHP echo $youtubecode;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			
							</div>
							<?PHP 
									   }
							?>
						<div class="videotext"><?php the_title();?></div>
						</div>
					</div>
				</div>				
			
				<?php              
                     endwhile;
                ?>	
				</div>
			</div>
			<div class="container  text-center">
				<a href="<?PHP echo get_home_url()?>/liturgy-videos">
					<button type="button" class="btn btn-outline-primary viewallbtnblue mt-2">View all</button>			
				</a>
			</div>

			</div>
		</div>
		
	</div>
	<div class="padtb60 clearfix witebanner ">
		<div class="container">
			<h1 class="cmnhead">Knanaya</h1>
			
		</div>
		
		<div class="container">
			<div class="row">
				<?php
				
				$mydata = unserialize($mydata);
                    $args = array( 
                        'post_type' => array( 'knanaya-videos'),
						'orderby' => 'menu_order',
                        //'order'=>'ASC',
                        'posts_per_page' =>15 ,
                    );
                    $loop = new WP_Query( $args );
                    
                    while ( $loop->have_posts() ) : $loop->the_post();  
					$youtubecode = get_post_meta($post->ID, 'youtubecode', true);
                ?>
			
				<div class="col-md-3 nopad">
					<div class="container">
						<div class="videobox">
						<?PHP
								if($youtubecode!="")
								{ 
						?>
							<div class="embed-responsive embed-responsive-4by3">
								<iframe class="embed-responsive-item videos" src="https://www.youtube.com/embed/<?PHP echo $youtubecode;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			
							</div>
							<?PHP 
									   }
							?>
						<div class="videotext"><?php the_title();?></div>
						</div>
					</div>
				</div>				
			
				<?php              
                     endwhile;
                ?>	
				</div>
			</div>
			<div class="container  text-center">
				<a href="<?PHP echo get_home_url()?>/knanaya-videos">
					<button type="button" class="btn btn-outline-primary viewallbtnblue mt-2">View all</button>			
				</a>
			</div>

			</div>
		</div>
		
	</div>
	<div class="padtb60 clearfix witebanner cmnpagebrdr">
		<div class="container">
			<h1 class="cmnhead">Films</h1>
			
		</div>
		
		<div class="container">
			<div class="row">
				<?php
				
				$mydata = unserialize($mydata);
                    $args = array( 
                        'post_type' => array( 'films-videos'),
						'orderby' => 'menu_order',
                        //'order'=>'ASC',
                        'posts_per_page' =>15 ,
                    );
                    $loop = new WP_Query( $args );
                    
                    while ( $loop->have_posts() ) : $loop->the_post();  
					$youtubecode = get_post_meta($post->ID, 'youtubecode', true);
                ?>
			
				<div class="col-md-3 nopad">
					<div class="container">
						<div class="videobox">
						<?PHP
								if($youtubecode!="")
								{ 
						?>
							<div class="embed-responsive embed-responsive-4by3">
								<iframe class="embed-responsive-item videos" src="https://www.youtube.com/embed/<?PHP echo $youtubecode;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			
							</div>
							<?PHP 
									   }
							?>
						<div class="videotext"><?php the_title();?></div>
						</div>
					</div>
				</div>				
			
				<?php              
                     endwhile;
                ?>	
				</div>
			</div>

			<div class="container  text-center">
				<a href="<?PHP echo get_home_url()?>/films-videos">
					<button type="button" class="btn btn-outline-primary viewallbtnblue mt-2">View all</button>			
				</a>
			</div>

			</div>
		</div>
		
	</div>



<?php
get_footer();
?>
	
	
