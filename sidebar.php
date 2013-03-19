<?php
/**
 * The Sidebar containing the main widget area.
 *
 */

?>
			<?php if ( ! dynamic_sidebar( 'Main Sidebar' ) ) : ?>

				<div id="archives" class="widget">
					<h4 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h4>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</div>

			<?php endif; // end sidebar widget area ?>
