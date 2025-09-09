<?php
/**
 * Title: Header
 * Slug: venture-grove/header
 * Categories: header, venture-grove
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"base-2","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-base-2-background-color has-background" id="sticky-header" style="padding-top:20px;padding-right:var(--wp--preset--spacing--20);padding-bottom:20px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0,"style":{"spacing":{"margin":{"right":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"large"} /-->

<!-- wp:navigation {"icon":"menu","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"35px"}},"layout":{"type":"flex","justifyContent":"right"}} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"spacing":{"padding":{"left":"30px","right":"30px","top":"12px","bottom":"12px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="padding-top:12px;padding-right:30px;padding-bottom:12px;padding-left:30px"> <?php echo esc_html__( 'Suscribe', 'venture-grove' ); ?> </a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->