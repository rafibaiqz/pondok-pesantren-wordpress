<?php
/**
 * Title: Articles
 * Slug: venture-grove/articles
 * Categories: venture-grove
 * Keywords: articles
 */
?>
<!-- wp:group {"metadata":{"name":"Articles"},"className":"wow animate__animated animate__fadeInUp","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group wow animate__animated animate__fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:21px;font-style:normal;font-weight:600;letter-spacing:2px"><?php echo esc_html__( 'From News & Articles', 'venture-grove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"42px","lineHeight":"1.3"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:42px;font-style:normal;font-weight:700;line-height:1.3"><?php echo esc_html__( 'You May Learn More By Our Recent Blog Posting.', 'venture-grove' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-sections","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-sections" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:query {"queryId":20,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"className":"has-hover-effect","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10"}},"border":{"radius":"8px","width":"1px"}},"backgroundColor":"base","borderColor":"accent-5","layout":{"inherit":false}} -->
<div class="wp-block-group has-hover-effect has-border-color has-accent-5-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:post-featured-image {"style":{"border":{"radius":"5px"}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.4"}}} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-3"}}}},"textColor":"accent-3"} /-->

<!-- wp:post-excerpt {"excerptLength":15} /-->

<!-- wp:read-more {"content":"Read More","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","letterSpacing":"1px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|20"}},"border":{"radius":"5px"}},"backgroundColor":"primary","textColor":"base-2"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->