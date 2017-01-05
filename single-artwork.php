<?php
?>

<!--Action below runs the function - I picked genesis_before_loop as the hook, but genesis_before_content seems to work just as well-->
<?php add_action('genesis_before_loop','display_custom_artwork_post'); ?>

<!--The following code is adapted from the Treehouse WP theme development course, section on custom post types - single-portfolio.php -->

<!--Make sure the following line is surrounded by a PHP block, or else won't work-->	
<?php function display_custom_artwork_post() { ?> 

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
	    <h1 class="centertext art-title"><?php the_title(); ?></h1>

	    <div style="text-align: center; font-size: 16px;"><?php the_field('wysiwyg_editor'); ?></div>
				
		<div class="artwork">
			<?php the_field('image'); ?>
		</div>	

			<div class="artwork-text">
			<p style="text-align: center; font-size: 16px;"><?php the_field('view_full_size_image'); ?></p>
		</div>
		<div>
			<p style="font-weight: bold; text-align: center; font-size: 18px;">Price: <?php the_field('price'); ?></p>
		</div>
			
		<div class="artwork-text">
			<p style="text-align: center;"><?php the_field('description'); ?></p>
			<p class="centertext">
			<a href="<?php bloginfo('url'); ?>/artwork">Back to Gallery</a>
			</p>
		</div>
		
	<?php endwhile; endif; ?>

<!--Closing function curly bracket needs to be in PHP block in order to work-->
<?php } ?> 

<?php
genesis();