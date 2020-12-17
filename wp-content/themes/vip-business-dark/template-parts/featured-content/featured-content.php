<?php
/**
 * Template part for displaying Service
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vip_Business
 */

$vip_business_enable = vip_business_gtm( 'vip_business_featured_content_visibility' );

if ( ! vip_business_display_section( $vip_business_enable ) ) {
	return;
}

$vip_business_top_title = vip_business_gtm( 'vip_business_featured_content_section_top_subtitle' );
$vip_business_title     = vip_business_gtm( 'vip_business_featured_content_section_title' );
$vip_business_subtitle  = vip_business_gtm( 'vip_business_featured_content_section_subtitle' );
?>

<div id="featured-content-section" class="section style-two">
	<div class="section-latest-posts">
		<div class="container">
			<?php if ( $vip_business_top_title || $vip_business_title || $vip_business_subtitle ) : ?>
			<div class="section-title-wrap">
				<?php if ( $vip_business_top_title ) : ?>
				<p class="section-top-subtitle"><?php echo esc_html( $vip_business_top_title ); ?></p>
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

			<?php get_template_part( 'template-parts/featured-content/post-type' ); ?>
			</div><!-- .container -->
	</div><!-- .section-latest-posts -->
</div><!-- .section -->
