<?php
/**
 * The default template for displaying content
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<h4 class="entry-format"><?php _e( 'Featured', 'happycol' ); ?></h4>
				</hgroup>
			<?php else : ?>
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<?php endif; ?>
			
			<hr />

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php happycol_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>

			<?php if ( comments_open() && ! post_password_required() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . 'Reply' . '</span>', '1', '%' ); ?>
			</div>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( 'Continue reading <span class="meta-nav">&rarr;</span>' ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . 'Pages:' . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php $show_sep = false; ?>
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( ', ' );
				if ( $categories_list ):
			?>
			<span class="cat-links">
				<?php printf( '<span class="%1$s">Posted in</span> %2$s', 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
				$show_sep = true; ?>
			</span>
			<?php endif; // End if categories ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', ', ' );
				if ( $tags_list ):
				if ( $show_sep ) : ?>
			<span class="sep"> | </span>
				<?php endif; // End if $show_sep ?>
			<span class="tag-links">
				<?php printf( '<span class="%1$s">Tagged</span> %2$s', 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
				$show_sep = true; ?>
			</span>
			<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>

			<?php if ( comments_open() ) : ?>
			<?php if ( $show_sep ) : ?>
			<span class="sep"> | </span>
			<?php endif; // End if $show_sep ?>
			<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . 'Leave a reply' . '</span>', '<b>1</b> Reply', '<b>%</b> Replies' ); ?></span>
			<?php endif; // End if comments_open() ?>

			<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- #entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
