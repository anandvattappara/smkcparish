<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage knanaya
 * @since knanaya
 */
?>
<div class="padtb60 clearfix">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="textlogofooter">LOGO</div>
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-2">
							<div class="footerhead">Quick Links</div>

							<?php 
										$args = array(
											'menu'            => 'footer-menu',
											'container'       => 'div',
											'container_class' => 'quicklinklist',
											'container_id'    => '',
											'menu_class'      => 'list-unstyled ',
											'menu_id'         => '',
											'echo'            => true,
											'before'          => '',
											'after'           => '',
											'link_before'     => '',
											'link_after'      => '',
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											'item_spacing'    => 'preserve',
											'depth'           => 0,
											'walker'          => '',
											'theme_location'  => 'footer-menu',
										);
										wp_nav_menu($args);
							?>


						</div>
						<div class="col-md-10">
							<div class="footerhead">Contact Information</div>
							<div class="contactinfo row">
								<div class="col-md-6">
									<?PHP echo of_get_option('contact_information_block_1');?>
								</div>
								<div class="col-md-6">
									<?PHP echo of_get_option('contact_information_block_2');?>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="bluebg">
		<div class="padtb20 clearfix">
			<div class="container text-center">
				<div class="copyrighttext">&copy; Knanaya Catholic Parish, Chicago. All Rights Reserved 2023.</div>
			</div>
		</div>
	</div>
	
	
	<script type="text/javascript" src="<?PHP echo get_template_directory_uri()?>/assets/js/bootstrap.min.js"></script>
</body>
</html>
