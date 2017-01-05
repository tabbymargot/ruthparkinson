<!-- This template is from http://genesistutorials.com/creating-a-custom-template-in-genesis/ -->

<?php get_header(); ?>

	<?php do_action( 'genesis_before_content_sidebar_wrap' ); ?>
	
	<div id="content-sidebar-wrap">
		
		<?php do_action( 'genesis_before_content' ); ?>
		
		<div id="content" class="hfeed">
			
			<?php do_action( 'genesis_before_loop' ); ?>
			<?php do_action( 'genesis_loop' ); ?><!-- commenting this out prevents title etc from echoing -->
			<?php do_action( 'genesis_after_loop' ); ?>

			

			
		</div><!-- end #content -->
		
		<?php do_action( 'genesis_after_content' ); ?>
	
	</div><!-- end #content-sidebar-wrap -->
	<!-- The following code is adapted from the Treehouse WP theme development course - section on custom post types - single-portfolio.php -->
	
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    	<main class="content"><!-- Added for formatting -->
		
			<h1 class="centerheading"><?php the_title(); ?></h1>
			
			
			<div class="artwork">
				<?php the_field('image'); ?>
			</div>	
		

			
				<div class="artwork-text">
					<p><?php the_field('description'); ?></p>
				
			
					<?php previous_post_link(); ?> -
					<a href="<?php bloginfo('url'); ?>/portfolio">Back to Portfolio</a> - 
					<?php next_post_link(); ?>
				</div>
			
		</main>
	
			

		
	<?php endwhile; endif; ?>
	


<?php get_footer(); ?>