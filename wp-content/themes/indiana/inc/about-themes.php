<?php
/**
 *IndianaAbout Theme
 *
 * @package Indiana*/

//about theme info
add_action( 'admin_menu', 'indiana_abouttheme' );
function indiana_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'indiana'), __('About Theme Info', 'indiana'), 'edit_theme_options', 'indiana_guide', 'indiana_mostrar_guide');   
} 

//Info of the theme
function indiana_mostrar_guide() { 	
?>
<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <h3><?php esc_html_e('About Theme Info', 'indiana'); ?></h3>
		   </div>
          <p><?php esc_html_e('Indiana is a Clean and Corporate multipurpose free WordPress theme. It is designed Specially for corporate, business, Health and fitness.  It is a simple and attractive but still professional theme that is best suited for all corporate and business related organizations. It is very easy to setup and it comes with all the basic features that is needed to create your own website.','indiana'); ?></p>
<div class="heading-gt"> <?php esc_html_e('Theme Features', 'indiana'); ?></div>
 

<div class="col-2">
  <h4><?php esc_html_e('Theme Customizer', 'indiana'); ?></h4>
  <div class="description"><?php esc_html_e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'indiana'); ?></div>
</div>

<div class="col-2">
  <h4><?php esc_html_e('Responsive Ready', 'indiana'); ?></h4>
  <div class="description"><?php esc_html_e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'indiana'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('Cross Browser Compatible', 'indiana'); ?></h4>
<div class="description"><?php esc_html_e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'indiana'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('E-commerce', 'indiana'); ?></h4>
<div class="description"><?php esc_html_e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'indiana'); ?></div>
</div>
<hr />  
</div><!-- .gt-left -->
	
<div class="gt-right">			
        <div>				
            <a href="<?php echo esc_url( INDIANA_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'indiana'); ?></a> | 
            <a href="<?php echo esc_url( INDIANA_PROTHEME_URL ); ?>"><?php esc_html_e('Purchase Pro', 'indiana'); ?></a> | 
            <a href="<?php echo esc_url( INDIANA_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'indiana'); ?></a>
        </div>		
</div><!-- .gt-right-->
<div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>