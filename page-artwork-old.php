<?php /* 
Template Name: Artwork
*/ ?> 


<!-- This template is from http://genesistutorials.com/creating-a-custom-template-in-genesis/ -->

<?php get_header(); ?>


	<?php do_action( 'genesis_before_content_sidebar_wrap' ); ?>
	
	<div id="content-sidebar-wrap">
		
		<?php do_action( 'genesis_before_content' ); ?>
		
		<div id="content" class="hfeed">
			<?php do_action( 'genesis_before_loop' ); ?>
			<?php do_action( 'genesis_loop' ); ?>
			<?php do_action( 'genesis_after_loop' ); ?>

			
		</div><!-- end #content -->
		
		<?php do_action( 'genesis_after_content' ); ?>
	
	</div><!-- end #content-sidebar-wrap -->


	
	<?php do_action( 'genesis_after_content_sidebar_wrap' ); ?>
	 

	<!-- The following code is adapted from the Treehouse WP theme development course - section on custom post types - page-portfolio.php -->
  
<!-- Commented out while working on grid


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h1><?php the_title(); ?> </h1>
          <?php the_content(); ?> 

        <?php endwhile; endif; ?>  
 -->






<?php

  $args = array(
    'post_type' => 'artwork'
  );
  $query = new WP_Query( $args );

?>



  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>


      
        <div width="auto">
        	<!-- For info on how to style the_post_thumbnail with CSS see https://codex.wordpress.org/Function_Reference/the_post_thumbnail -->
        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
        </div>


     

      <?php endwhile; endif; wp_reset_postdata(); ?>  




<?php get_footer(); ?>