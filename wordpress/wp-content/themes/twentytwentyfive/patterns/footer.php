<?php

/**
 * Title: Footer
 * Slug: twentytwentyfive/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Custom green footer with social icons, legal text, and copyright.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#0a7a58","text":"#ffffff"},"spacing":{"padding":{"top":"50px","bottom":"50px","left":"20px","right":"20px"},"blockGap":"25px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","alignItems":"center"}} -->
<div class="wp-block-group alignfull has-text-color has-background" style="background-color:#0a7a58;color:#ffffff;padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px">

	<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only">
		<!-- wp:social-link {"url":"#","service":"facebook"} /-->
		<!-- wp:social-link {"url":"#","service":"twitter"} /-->
		<!-- wp:social-link {"url":"#","service":"instagram"} /-->
		<!-- wp:social-link {"url":"#","service":"google"} /-->
		<!-- wp:social-link {"url":"#","service":"mail"} /-->
	</ul>
	<!-- /wp:social-links -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><a href="#" style="color:#ffffff;text-decoration:underline">National Transaction Corporation</a> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}}} -->
	<p class="has-text-align-center" style="font-weight:700">© All right Reversed. Sunlimetech</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->