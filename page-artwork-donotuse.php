<!-- Code taken from http://genesistutorials.com/creating-a-custom-template-in-genesis/ - may need to revisit -->

<?php
/*
 Template Name: 
 */

?>
<?php
remove_action('genesis_loop', 'genesis_do_loop');
/**
 * Example function that replaces the default loop
 * with a custom loop querying 'PostType' CPT.
*/
add_action('genesis_loop', 'gt_custom_loop');
function gt_custom_loop() {
global $paged;
 
    $args = array('post_type' => 'artwork');
    // Accepts WP_Query args 
    // (http://codex.wordpress.org/Class_Reference/WP_Query)
    $query = new WP_Query( $args );
 
  }
?>
<?php genesis(); ?>

 

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h1><?php the_title(); ?> </h1>
          Test
          <?php the_content(); ?> 

        <?php endwhile; endif; ?>

     

<?php

  $args = array(
    'post_type' => 'artwork'
  );
  $query = new WP_Query( $args );

?>



  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

      
        <!--<a href="<?php the_permalink(); ?>">--><?php the_post_thumbnail('large'); ?><!--</a>-->
     

      <?php endwhile; endif; wp_reset_postdata(); ?>  




