<?php get_header(); ?>
  <style>
  div[role="content"]{
  	width:100%;
  	float:left;
  }
  </style>
  <div role="main">
  		<div class="archive clearfix"><h2>Sidebar</h2></div>
			
  <div role="content">
		<?php get_sidebar();?>
  </div><!--role:content-->
    <?php happycol_content_nav('nav-below');?>

  </div><!--role:main-->
<?php get_footer(); ?>