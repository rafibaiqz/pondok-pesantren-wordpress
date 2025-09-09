<?php
/**
 * Title: Articles
 * Slug: venture-grove-lite/articles
 * Categories: venture-grove-lite
 * Keywords: articles
 */
?>
<!-- wp:group {"metadata":{"name":"Articles"},"className":"wow animate__animated animate__fadeInUp","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group wow animate__animated animate__fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"42px","lineHeight":"1.3"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:42px;font-style:normal;font-weight:500;line-height:1.3"><?php echo esc_html__( 'Discover the latest blogs', 'venture-grove-lite' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.", 'venture-grove-lite' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-sections","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-sections" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:query {"queryId":20,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"has-hover-effect","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":"8px","width":"0px","style":"none"}},"backgroundColor":"accent","layout":{"inherit":false}} -->
<div class="wp-block-group has-hover-effect has-accent-background-color has-background" style="border-style:none;border-width:0px;border-radius:8px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"5px"}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.4"}}} /-->

<!-- wp:post-excerpt {"excerptLength":25} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"var:preset|spacing|10"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"primary","textColor":"base-2","className":"has-hover-effect","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}}} -->
<div class="wp-block-button has-hover-effect"><a class="wp-block-button__link has-base-2-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'View All Articles', 'venture-grove-lite' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base-2","textColor":"contrast","className":"has-hover-effect","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"width":"1px"}},"borderColor":"secondary"} -->
<div class="wp-block-button has-hover-effect"><a class="wp-block-button__link has-contrast-color has-base-2-background-color has-text-color has-background has-link-color has-border-color has-secondary-border-color wp-element-button" style="border-width:1px;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Contact Us', 'venture-grove-lite' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->