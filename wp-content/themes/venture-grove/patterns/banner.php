<?php
/**
 * Title: Banner
 * Slug: venture-grove/banner
 * Categories: venture-grove
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg","id":1055,"dimRatio":70,"overlayColor":"black","isUserOverlayColor":true,"minHeight":750,"sizeSlug":"large","metadata":{"name":"Banner"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);min-height:750px"><img class="wp-block-cover__image-background wp-image-1055 size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"wow animate__animated animate__fadeInUp","layout":{"type":"constrained","contentSize":"1020px"}} -->
<div class="wp-block-group wow animate__animated animate__fadeInUp"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:21px;font-style:normal;font-weight:600;letter-spacing:2px"><?php echo esc_html__( 'Where Vision Meets Design', 'venture-grove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"56px","lineHeight":"1.3"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:56px;font-style:normal;font-weight:600;line-height:1.3"><?php echo esc_html__( 'Create a stunning online presence with Vanture Grove – optimized for growth, built for impact.', 'venture-grove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"var:preset|spacing|10"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40)"><!-- wp:button {"backgroundColor":"secondary","textColor":"base-2","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-2-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Browse All Services', 'venture-grove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->