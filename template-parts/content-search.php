<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package West_CPA
 */

?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php

	do_action( 'tha_entry_top' );

	?><header class="page-header contentsearch"><?php

		/**
		 * @hooked 		title_search 		10
		 */
		do_action( 'entry_header_content' );

		if ( 'post' == get_post_type() ) :
			?><div class="entry-meta"><?php

				westcpa_posted_on();

			?></div><!-- .entry-meta --><?php

		endif;

	?></header><!-- .entry-header --><?php

	do_action( 'tha_entry_content_before' );

	?><div class="entry-summary"><?php

		the_excerpt();

	?></div><!-- .entry-summary --><?php

	do_action( 'tha_entry_content_after' );

	?><footer class="entry-footer"><?php

		westcpa_entry_footer();

	?></footer><!-- .entry-footer --><?php

	do_action( 'tha_entry_bottom' );

?></article><!-- #post-## -->