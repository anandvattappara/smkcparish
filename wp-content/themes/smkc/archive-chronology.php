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
				<img src="<?PHP echo get_template_directory_uri()?>/assets/images/cmnbanner.png" alt="" class="img-fluid">
				<div class="bannrercentered">
					<div class="cmnbannerhead">Chronology</div>
				</div>
		    </div>
		</div>
	</div>
	
	
	<div class="padtb60 clearfix witebanner cmnpagebrdr">
		<div class="container">
			<h1 class="cmnhead">CHRONOLOGY OF EVENTS</h1>
			<div class="cmnlist">
				<ul class="list-unstyled">
					<li>Here we give a chronological description of events that happened in the history of this parish.</li>
					<li>We grew from Knanaya Catholic Mission to two parishes.</li>
					<li>We acknowledge all those who worked to make this a reality.</li>
					<li>We specially thank the bishops, priests, and lay leaders who contributed much for this parish.</li>
					<li>Please click on the time periods in the pulldown menu above, to read the historial events.</li>
				</ul>
			</div>
			
			<div class="col-md-10">
				<h2 class="cmnsubhead">Little Flower Koodara yogam</h2>
				<hr class="eventhr">
                <?php
                    $args = array( 
                        'post_type' => 'chronology',
                        'order'=>'ASC',
                        'posts_per_page' =>-1 ,                       
                    );
                    $loop = new WP_Query( $args );
                    
                    while ( $loop->have_posts() ) : $loop->the_post();               
                   
                ?>
				<dl class="row chroeventlist">
					  <dt class="col-sm-3"><?php the_title();?></dt>
					  <dd class="col-sm-9"><?php echo get_post_meta($post->ID, 'description', true);?></dd>
				</dl>
                <?php 
             
            endwhile;
           
        ?>	
			</div>
			
			
		</div>
	</div>
<?php
get_footer();
?>
	
	
