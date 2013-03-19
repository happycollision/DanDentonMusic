<?php get_header(); ?>
  <div id="videos" class="clearfix">
  	<div id="featured_video">
			<iframe class="youtube-player" type="text/html" width="100%"  src="http://www.youtube.com/embed/1FYryNFX9N0?html5=1" frameborder="0">
		</iframe>
  	</div>
  </div><!--videos-->
  <div role="main" class="clearfix">
  			<?php if(single_term_title('',false)) {
  				echo '<div class="archive clearfix"><h2>' .single_term_title('',false). '</h2>';
  				echo '</div>';
  			}elseif (is_search()){
  				echo '<div class="archive clearfix">';
  				get_search_form();
  				echo '</div>';
  			}elseif (is_author()){
  				function hc_find_author_id(){
  					global $wp_query;
  					return $wp_query->query['author'];
  				}
  				function hc_author_name(){
  					$id = hc_find_author_id();
  					$author = get_userdata($id);
  					return $author->display_name;
  				}
  				echo '<div class="archive clearfix"><h2>Posts by ' .hc_author_name(). '</h2>';
  				echo '</div>';
  			}elseif (is_date()){
  				//hcprint($wp_query);
  				function hc_date(){
  					global $wp_query;
  					$m = (string)$wp_query->query['m'];
  					$length = strlen($m);
  					switch ($length){
  						case 4:
  							$output = $m;
  							break;
  						case 6:
  							$month = substr($m,-2);
  							$year = substr($m,0,-2);
  							$output = date('F, Y',mktime(0,0,0,$month,1,$year));
  							break;
  						case 8:
  							$day = substr($m,-2);
  							$month = substr($m,-4,-2);
  							$year = substr($m,0,-4);
  							$output = date('F j, Y',mktime(0,0,0,$month,$day,$year));
  							break;
  						default:
  							$output = "the past...";
  							break;
  					}
  					return $output;
  				}
  				echo '<div class="archive clearfix"><h2>Posts from ' .hc_date(). '</h2>';
  				echo '</div>';
  			}?>
			
  <div role="content">
    		<?php happycol_content_nav('nav-above');?>

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h3 class="entry-title"><?php echo 'Nothing Found'; ?></h3>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php echo 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.'; ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
    <?php happycol_content_nav('nav-below');?>

  </div><!--role:content-->
  <aside role="sidebar">
	<?php get_sidebar();?>
  </aside>

  </div><!--role:main-->
<?php get_footer(); ?>