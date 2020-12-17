<?php    
/**
 *IndianaTheme Customizer
 *
 * @package Indiana*/

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function indiana_customize_register( $wp_customize ) {	
	
	function indiana_sanitize_dropdown_pages( $page_id, $setting ) {
	  // Ensure $input is an absolute integer.
	  $page_id = absint( $page_id );
	
	  // If $page_id is an ID of a published page, return it; otherwise, return the default.
	  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	function indiana_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}  
		
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	//Layout Options
	$wp_customize->add_section('layout_option',array(
			'title'	=> __('Site Layout','indiana'),			
			'priority'	=> 1,
	));		
	
	$wp_customize->add_setting('sitebox_layout',array(
			'sanitize_callback' => 'indiana_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'sitebox_layout', array(
    	   'section'   => 'layout_option',    	 
		   'label'	=> __('Check to Box Layout','indiana'),
		   'description'	=> __('if you want to box layout please check the Box Layout Option.','indiana'),
    	   'type'      => 'checkbox'
     )); //Layout Section 
	
	$wp_customize->add_setting('color_scheme',array(
			'default'	=> '#f94962',
			'sanitize_callback'	=> 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','indiana'),			
			 'description'	=> __('More color options in PRO Version','indiana'),
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);	
	
	// Slider Section		
	$wp_customize->add_section( 'slider_options', array(
            'title' => __('Slider Section', 'indiana'),
            'priority' => null,
			'description'	=> __('Default image size for slider is 1400 x 827 pixel.','indiana'),            			
    ));
	
	$wp_customize->add_setting('sliderpage1',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'indiana_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('sliderpage1',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide one:','indiana'),
			'section'	=> 'slider_options'
	));	
	
	$wp_customize->add_setting('sliderpage2',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'indiana_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('sliderpage2',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide two:','indiana'),
			'section'	=> 'slider_options'
	));	
	
	$wp_customize->add_setting('sliderpage3',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'indiana_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('sliderpage3',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide three:','indiana'),
			'section'	=> 'slider_options'
	));	// Slider Section		
	
	
	$wp_customize->add_setting('show_slider',array(
				'default' => false,
				'sanitize_callback' => 'indiana_sanitize_checkbox',
				'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'show_slider', array(
			   'settings' => 'show_slider',
			   'section'   => 'slider_options',
			   'label'     => __('Check To Show This Section','indiana'),
			   'type'      => 'checkbox'
	 ));//Show Slider Section	
	 
	  // Four Column Services Section
	$wp_customize->add_section('pageboxs_section', array(
		'title'	=> __('Four Page Box Section','indiana'),
		'description'	=> __('Select pages from the dropdown for four column Page section','indiana'),
		'priority'	=> null
	));		
	
	$wp_customize->add_setting('services-pagebox4',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'indiana_sanitize_dropdown_pages'
		));
 
	$wp_customize->add_control(	'services-pagebox4',array(
			'type' => 'dropdown-pages',			
			'section' => 'pageboxs_section',
	));		
	
	$wp_customize->add_setting('services-pagebox5',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'indiana_sanitize_dropdown_pages'
		));
 
	$wp_customize->add_control(	'services-pagebox5',array(
			'type' => 'dropdown-pages',			
			'section' => 'pageboxs_section',
	));
	
	$wp_customize->add_setting('services-pagebox6',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'indiana_sanitize_dropdown_pages'
		));
 
	$wp_customize->add_control(	'services-pagebox6',array(
			'type' => 'dropdown-pages',			
			'section' => 'pageboxs_section',
	));
	
	$wp_customize->add_setting('services-pagebox7',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'indiana_sanitize_dropdown_pages'
		));
 
	$wp_customize->add_control(	'services-pagebox7',array(
			'type' => 'dropdown-pages',			
			'section' => 'pageboxs_section',
	));
	
	$wp_customize->add_setting('show_servicesbox',array(
			'default' => false,
			'sanitize_callback' => 'indiana_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'show_servicesbox', array(
			   'settings' => 'show_servicesbox',
			   'section'   => 'pageboxs_section',
			   'label'     => __('Check To Show This Section','indiana'),
			   'type'      => 'checkbox'
	 ));//Show Services Section	 
	 
	 // Why Choose Us section 
	$wp_customize->add_section('whaychooseus_section', array(
		'title'	=> __('Why Choose Us Section','indiana'),
		'description'	=> __('Select Pages from the dropdown for why choose us section','indiana'),
		'priority'	=> null
	));		
	
	$wp_customize->add_setting('whaychooseus_page',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'indiana_sanitize_dropdown_pages'
		));
 
	$wp_customize->add_control(	'whaychooseus_page',array(
			'type' => 'dropdown-pages',			
			'section' => 'whaychooseus_section',
	));		
	
	
	$wp_customize->add_setting('show_whaychooseus_page',array(
			'default' => false,
			'sanitize_callback' => 'indiana_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'show_whaychooseus_page', array(
			   'settings' => 'show_whaychooseus_page',
			   'section'   => 'whaychooseus_section',
			   'label'     => __('Check To Show This Section','indiana'),
			   'type'      => 'checkbox'
	 ));//Show Why Choose Us Page Section
	
		 
}
add_action( 'customize_register', 'indiana_customize_register' );

function indiana_custom_css(){
		?>
        	<style type="text/css"> 					
					a, .recent_articles h2 a:hover,
				#sidebar ul li a:hover,								
				.recent_articles h3 a:hover,					
				.recent-post h6:hover,					
				.page-four-column:hover h3,												
				.postmeta a:hover,
				.slide_info h2 a:hover,						
				.header-menu ul li a:hover, 
				.header-menu ul li.current-menu-item a,
				.header-menu ul li.current-menu-parent a.parent,
				.header-menu ul li.current-menu-item ul.sub-menu li a:hover				
					{ color:<?php echo esc_html( get_theme_mod('color_scheme','#f94962')); ?>;}					 
					
				.pagination ul li .current, .pagination ul li a:hover, 
				#commentform input#submit:hover,					
				.nivo-controlNav a.active,
				.learnmore,							
				#sidebar .search-form input.search-submit,				
				.wpcf7 input[type='submit'],				
				.column-3:hover .learnmore,
				nav.pagination .page-numbers.current,						
				.toggle a	
					{ background-color:<?php echo esc_html( get_theme_mod('color_scheme','#f94962')); ?>;}	
					
				blockquote	
					{ border-color:<?php echo esc_html( get_theme_mod('color_scheme','#f94962')); ?>;}		
					
					
			</style> 
<?php            
}
         
add_action('wp_head','indiana_custom_css');	 

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function indiana_customize_preview_js() {
	wp_enqueue_script( 'indiana_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20171016', true );
}
add_action( 'customize_preview_init', 'indiana_customize_preview_js' );