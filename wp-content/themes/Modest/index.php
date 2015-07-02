<?php get_header(); ?>
							
	<?php include(TEMPLATEPATH . '/includes/top_info.php'); ?>
	
	<div id="left-area">
		<?php $i = 1; ?>
			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
			<?php include(TEMPLATEPATH . '/includes/entry.php'); ?>
		<?php endwhile; ?>
			<?php 
				if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
				else { include(TEMPLATEPATH . '/includes/navigation.php'); } 
			?>
		<?php else : ?>
			<?php include(TEMPLATEPATH . '/includes/no-results.php'); ?>					
		<?php endif; ?>
	</div> 	<!-- end #left-area -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>