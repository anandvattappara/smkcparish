<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	$wp_editor_settings = array(
        'wpautop' => true, // Default
        'textarea_rows' => 15,
        'tinymce' => array( 
            'plugins' => 'fullscreen,wordpress,wplink, textcolor'
        ));
		
		/*$wp_editor_settings = array(
        'wpautop'             => true,
        'media_buttons'       => true,
        'default_editor'      => '',
        'drag_drop_upload'    => false,
        'textarea_rows'       => 20,
        'tabindex'            => '',
        'tabfocus_elements'   => ':prev,:next',
        'editor_css'          => '',
        'editor_class'        => '',
        'teeny'               => false,
        'dfw'                 => false,
        '_content_editor_dfw' => false,
        'tinymce'             => true,
        'quicktags'           => true,
		'tinymce' => array( 
            'plugins' => 'fullscreen,wordpress,wplink, textcolor'
        ));*/

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();
	$theamurl = get_template_directory_uri();

	$options[] = array(
		'name' => __('Home Page', 'options_check'),
		'type' => 'heading');
	$options[] = array(
		'name' => __('1) Home Page Banner', 'options_check'));	
	$options[] = array(
		'name' => __('Church Name', 'options_check'),
		'desc' => __('', ''),
		'id' => 'church_name',
		'std' => '',
		'type' => 'editor',
		'settings' => $wp_editor_settings);
	$options[] = array(
		'name' => __('Church Place', 'options_check'),
		'desc' => __('', ''),
		'id' => 'church_place',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('Church Image', 'options_check'),
		'desc' => __('', ''),
		'id' => 'church_image',
		'std' => '',
		'type' => 'upload');
	$options[] = array(
		'name' => __('2) Our Mission', 'options_check'));		
	$options[] = array(
		'name' => __('Our Mission Introduction', 'options_check'),
		'desc' => __('', ''),
		'id' => 'our_mission_introduction',
		'std' => '',
		'type' => 'editor',
		'settings' => $wp_editor_settings);
	$options[] = array(
		'name' => __('Our Mission Image', 'options_check'),
		'desc' => __('', ''),
		'id' => 'our_mission_image',
		'std' => '',
		'type' => 'upload');
	$options[] = array(
		'name' => __('3) Brief History', 'options_check'));		
	$options[] = array(
		'name' => __('Brief History Introduction', 'options_check'),
		'desc' => __('', ''),
		'id' => 'brief_history_introduction',
		'std' => '',
		'type' => 'editor',
		'settings' => $wp_editor_settings);
	$options[] = array(
		'name' => __('Brief History Image', 'options_check'),
		'desc' => __('', ''),
		'id' => 'brief_history_image',
		'std' => '',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Pastoral Services', 'options_check'),
		'type' => 'heading');
	$options[] = array(
		'name' => __('Pastoral Services Image', 'options_check'),
		'desc' => __('', ''),
		'id' => 'pastoral_services_image',
		'std' => '',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Pastoral Services Block 1', 'options_check'),
		'desc' => __('', ''),
		'id' => 'pastoral_services_block_1',
		'std' => '',
		'type' => 'editor',
		'settings' => $wp_editor_settings);
	$options[] = array(
		'name' => __('Pastoral Services Block 2', 'options_check'),
		'desc' => __('', ''),
		'id' => 'pastoral_services_block_2',
		'std' => '',
		'type' => 'editor',
		'settings' => $wp_editor_settings);
		$options[] = array(
			'name' => __('Footer Contact Information', 'options_check'),
			'type' => 'heading');
	$options[] = array(
			'name' => __('Contact Information Block_1', 'options_check'),
			'desc' => __('', ''),
			'id' => 'contact_information_block_1',
			'std' => '',
			'type' => 'editor',
			'settings' => $wp_editor_settings );
	$options[] = array(
			'name' => __('Contact Information Block_2', 'options_check'),
			'desc' => __('', ''),
			'id' => 'contact_information_block_2',
			'std' => '',
			'type' => 'editor',
			'settings' => $wp_editor_settings );
	$options[] = array(
		    'name' => __('Page:: Media', 'options_check'),
			'type' => 'heading');		
	
	$options[] = array(
			'name' => __('Photos Banner Image', 'options_check'),
			'desc' => __('', ''),
			'id' => 'photos_banner_image',
			'std' => '',
			'type' => 'upload');

	$options[] = array(
			'name' => __('Audio => Church Songs Banner Image', 'options_check'),
			'desc' => __('', ''),
			'id' => 'audio_chruchsong_banner_image',
			'std' => '',
			'type' => 'upload');
			
	$options[] = array(
			'name' => __('Audio => Migration Ballet Songs Banner Image', 'options_check'),
			'desc' => __('', ''),
			'id' => 'audio_balletsong_banner_image',
			'std' => '',
			'type' => 'upload');
    
	$options[] = array(
			'name' => __('Audio => Knanaya Audios Banner Image', 'options_check'),
			'desc' => __('', ''),
			'id' => 'audio_knanayasong_banner_image',
			'std' => '',
			'type' => 'upload');
			
	
	$options[] = array(
			'name' => __('Audio => Knanaya Devotional Audios Banner Image', 'options_check'),
			'desc' => __('', ''),
			'id' => 'audio_devotionalsong_banner_image',
			'std' => '',
			'type' => 'upload');
			
	$options[] = array(
			'name' => __('Videos Banner Image', 'options_check'),
			'desc' => __('', ''),
			'id' => 'videos_banner_image',
			'std' => '',
			'type' => 'upload');
			
	return $options;
}
