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
				$imageurl = of_get_option('audio_balletsong_banner_image'); 
				if($imageurl!=""){
			?>
			<img src="<?php echo $imageurl ?>" class="img-fluid" alt="Audios">
			<?PHP
			}
			?>
				<div class="bannrercentered">
					<div class="cmnbannerhead">Migration</div>
				</div>
		    </div>
		</div>
	</div>
	<div class="padtb60 clearfix witebanner cmnpagebrdr">
		<div class="container page">
			<h1 class="cmnhead">Knanaya Region Church Songs</h1>
(If the audio doesn't play in your browser, please try a different browser like Google Chrome or Firefox.)


			<ul>
				<li><a href="<?PHP echo get_home_url()?>/church-songs-audios">CHURCH SONGS</a></li>
				<li><a href="<?PHP echo get_home_url()?>/ballet-audios">KNANAYA MIGRATION BALLET</a></li>
				<li><a href="<?PHP echo get_home_url()?>/bible-audios">KNANAYA SONGS</a></li>
				<li><a href="<?PHP echo get_home_url()?>/devotional-audios">DEVOTIONAL AND CHURCH SONGS</a></li>
			</ul>
			<div class="cmntxt">


			<?php
				
				$mydata = unserialize($mydata);
                    $args = array( 
                        'post_type' => array('ballet-audios'),
						'orderby' => 'menu_order',
                        //'order'=>'ASC',
                        'posts_per_page' =>15 ,
                    );
                    $loop = new WP_Query( $args );
                    
                    while ( $loop->have_posts() ) : $loop->the_post();  
				 	$audiourl = get_post_meta($post->ID, 'audiourl', true);
					$youtubecode = get_post_meta($post->ID, 'youtubecode', true);
                ?>
				<p><strong><?php the_title();?></strong></p>
               
				<?PHP
					if($audiourl!=""){ 
				?>
				 <p class="mb-4">
                    <audio style="width:100%" controls="controls">
                        <source src="<?PHP echo $audiourl;?>" />
                        <embed type="application/x-shockwave-flash" flashvars="" src="http://www.google.com/reader/ui/3523697345-audio-player.swf" width="650? height="0? quality="best"></embed>
                    </audio>
			</p>
			<?PHP
									 }
					?>
                <?PHP
					if($youtubecode!=""){ ?>
				 <p class="col-lg-5 col-md-6 mb-4">
                   <div class="embed-responsive embed-responsive-4by3">
					   <iframe class="embed-responsive-item videos" src="https://www.youtube.com/embed/<?PHP echo $youtubecode;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  
</div>
			</p>
			<?PHP 
									   }
					?>
				<?php              
                     endwhile;
                ?>

				
			</div>
		</div>
	</div>
<?php
get_footer();
?>
	
	
