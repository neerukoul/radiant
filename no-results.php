<?php
/**
 * No Search Results Template
 *
 * Please do not edit this file. This file is part of the CyberChimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
 * @link     http://www.cyberchimps.com/
 */
?>

<article id="post-0" class="post no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title"><?php _e( 'Nothing Found', 'slickhouse' ); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( is_home() ) { ?>

			<p><?php printf( '%1$s <a href="%2$s"></a>.', 
												__( 'Ready to publish your first post?', 'slickhouse' ),
												admin_url( 'post-new.php' ),
                        __( 'Get started here', 'slickhouse' )
											); ?></p>

		<?php } elseif ( is_search() ) { ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'slickhouse' ); ?></p>
			<?php get_search_form(); ?>

		<?php } else { ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'slickhouse' ); ?></p>
			<?php get_search_form(); ?>

		<?php } ?>
	</div><!-- .entry-content -->
</article><!-- #post-0 -->