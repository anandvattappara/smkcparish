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
<style>
	#intro{background-image: url(<?PHP echo of_get_option('church_image');?>);}
</style>
	<div class="bg-image">
		<div id="intro">
			<div class="container mt25">
				<div class="centered">
					<div class="text-white bannertxt"><h1 class="clearfix"><?PHP echo of_get_option('church_name');?></h1></div>
					<hr class="bannerhr">
					<div><h5 class="mb-4 bannersubtxt"><p><?PHP echo of_get_option('church_place');?></p></h5></div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="witebanner">
		<div class="container padtb60 text-center">
			<h2 class="blackhead">Chicago St. Mary's Knanaya Catholic Church Song.</h2>
			<h4 class="subtxt">(If the audio doesn't play in your browser, please try a different browser like Google Chrome or Firefox.)</h4>
			<div class="mtb35">media player</div>
		</div>
		
		<div class="container padtb60">
			<div class="row">
				<div class="col-md-4">
					<img src="<?PHP echo of_get_option('our_mission_image');?>" title="" alt="" class="img-fluid">
				</div>
				<div class="col-md-8">
					<div class="pad30">
						<h2 class="bluehead">Our Mission</h2>
						<div class="blueheadborder"></div>
						<div class="cmntxt"><?PHP echo of_get_option('our_mission_introduction');?></div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<div class="bluebg">
		<div class="container bluebgpad">
			<div class="row">
				<div class="col-md-8">
					<div class="pad30 padlt0">
						<h2 class="whitehead">Brief History</h2>
						<div class="whiteheadborder"></div>
						<div class="cmntxtwht"><?PHP echo of_get_option('brief_history_introduction');?></div>
					</div>
				</div>
				<div class="col-md-4">
					<img src="<?PHP echo of_get_option('brief_history_image');?>" title="" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	
	<div class="witebannerrgt">
		<div class="container pbcontainer">
			<div class="pastbanrmar">
				<img src="<?PHP echo of_get_option('pastoral_services_image');?>" alt="" class="img-fluid">
				<div class="pbcentered">
					<div class="pbhead">Pastoral Services</div>
					<div class="pbsubhead">HOLY MASS SCHEDULE</div>
				</div>
		    </div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="pastservice">
					<?PHP echo of_get_option('pastoral_services_block_1');?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="pastservice">
					<?PHP echo of_get_option('pastoral_services_block_2');?>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="mapsection"><img src="<?PHP echo get_template_directory_uri()?>/assets/images/map.png" alt="" class="img-fluid"></div>
	
<?php
get_footer();
?>
	
	
