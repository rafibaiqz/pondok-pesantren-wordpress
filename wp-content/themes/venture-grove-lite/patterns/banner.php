<?php
/**
 * Title: Banner
 * Slug: venture-grove-lite/banner
 * Categories: venture-grove-lite
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"tagName":"main","metadata":{"name":"Banner"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary"} -->
<p class="has-text-align-left has-primary-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:21px;font-style:normal;font-weight:600;letter-spacing:2px"><?php echo esc_html__( 'Where Vision Meets Design', 'venture-grove-lite' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"48px","lineHeight":"1.3"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-size:48px;font-style:normal;font-weight:500;line-height:1.3"><?php echo esc_html__( 'Discover our journey and what drives us', 'venture-grove-lite' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.", 'venture-grove-lite' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"var:preset|spacing|10"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"primary","textColor":"base-2","className":"has-hover-effect","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}}} -->
<div class="wp-block-button has-hover-effect"><a class="wp-block-button__link has-base-2-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Browse All Services', 'venture-grove-lite' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base-2","textColor":"contrast","className":"has-hover-effect","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"width":"1px"}},"borderColor":"secondary"} -->
<div class="wp-block-button has-hover-effect"><a class="wp-block-button__link has-contrast-color has-base-2-background-color has-text-color has-background has-link-color has-border-color has-secondary-border-color wp-element-button" style="border-width:1px;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Contact Us', 'venture-grove-lite' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/banner.jpg","id":1352,"dimRatio":0,"overlayColor":"accent","isUserOverlayColor":true,"focalPoint":{"x":0.11,"y":0.59},"minHeight":650,"isDark":false,"sizeSlug":"large","className":"has-hover-effect","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-hover-effect" style="border-radius:20px;min-height:650px"><img class="wp-block-cover__image-background wp-image-1352 size-large" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/banner.jpg" style="object-position:11% 59%" data-object-fit="cover" data-object-position="11% 59%"/><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->