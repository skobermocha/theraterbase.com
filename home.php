<?php
/*
Template Name: Home Page
*/

get_header();
?>

	<div id="slider-content">
		<div id="slider-text">
			<ul>
			    <?php
			    	$my_query = new WP_Query('cat=' . get_option('unisphere_slider_cat') . '&showposts=' . get_option('unisphere_slider_posts_number'));
			    	while ($my_query->have_posts()) : $my_query->the_post();
			    ?>
			    <li>
			    	<h2><?php the_title(); ?></h2>
			    	<div class="text"><?php the_excerpt(); ?></div>
		    	</li>
			    <?php endwhile; ?>    
			</ul>
		</div>
		
		<div id="slider-images">
		    <ul>
			    <?php
			    	$my_query = new WP_Query('cat=' . get_option('unisphere_slider_cat') . '&showposts=' . get_option('unisphere_slider_posts_number'));
			    	while ($my_query->have_posts()) : $my_query->the_post();
			    ?>
			    <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_post_meta($post->ID, "featured_img", $single = true); ?>" alt="<?php the_title(); ?>" /></a></li>
			    <?php endwhile; ?>    
			</ul>
		</div>
		
		<div id="slider-nav-left">&nbsp;</div>
		<div id="slider-nav-right">&nbsp;</div>
	</div>
	
	<div id="home-3-sections-top">&nbsp;</div>
	<div id="home-3-sections-middle">
		<div class="home-section-1">
			<?php	/* Widgetized Area */
				if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Home Left Section') ) : ?>
	        
				<h3><a href="builders.php"><?php echo html_entity_decode(get_option('unisphere_left_section_title')); ?></a></h3>
				<div><?php echo html_entity_decode(get_option('unisphere_left_section_text')); ?></div>
	        	
        	<?php endif; ?>
		</div>
		<div class="home-section-2">
			<?php	/* Widgetized Area */
				if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Home Middle Section') ) : ?>
				
				<h3><a href="contractors.php"><?php echo html_entity_decode(get_option('unisphere_middle_section_title')); ?></a></h3>
				<div><?php echo html_entity_decode(get_option('unisphere_middle_section_text')); ?></div>
				
			<?php endif; ?>
		</div>
		<div class="home-section-3">
			<?php	/* Widgetized Area */
				if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Home Right Section') ) : ?>
			
				<h3><a href="homeowners.php"><?php echo html_entity_decode(get_option('unisphere_right_section_title')); ?></a></h3>
				<div><?php echo html_entity_decode(get_option('unisphere_right_section_text')); ?></div>
				
			<?php endif; ?>		     
		</div>
	</div>	
	<div id="home-3-sections-bottom">&nbsp;	</div>

<?php get_footer(); ?>