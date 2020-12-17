<?php
/**
 * Template part for displaying Service
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vip_Business
 */

$vip_business_enable_wwd = vip_business_gtm( 'vip_business_wwd_visibility' );

if ( ! vip_business_display_section( $vip_business_enable_wwd ) ) {
	return;
}

$vip_business_top_subtitle = vip_business_gtm( 'vip_business_wwd_section_top_subtitle' );
$vip_business_title        = vip_business_gtm( 'vip_business_wwd_section_title' );
$vip_business_subtitle     = vip_business_gtm( 'vip_business_wwd_section_subtitle' );
?>

<div id="wwd-section" class="section style-three">
	<div class="section-wwd wwd-layout-1">
		<div class="container">
			<?php if ( $vip_business_top_subtitle || $vip_business_title || $vip_business_subtitle ) : ?>
			<div class="section-title-wrap">
				<?php if ( $vip_business_top_subtitle ) : ?>
				<p class="section-top-subtitle"><?php echo esc_html( $vip_business_top_subtitle ); ?></p>
				<?php endif; ?>

				<?php if ( $vip_business_title ) : ?>
				<h2 class="section-title"><?php echo esc_html( $vip_business_title ); ?></h2>
				<?php endif; ?>

				<span class="divider"></span>
				<?php if ( $vip_business_subtitle ) : ?>
				<p class="section-subtitle"><?php echo esc_html( $vip_business_subtitle ); ?></p>
				<?php endif; ?>

			</div>
			<?php endif; ?>

			<?php get_template_part( 'template-parts/wwd/post-type' ); ?>
		</div><!-- .container -->
	</div><!-- .section-wwd  -->
</div><!-- .section -->
