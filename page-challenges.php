<?php
/**
  *
  * CHALLENGES
  * Template Name: All Challenges
  * Positive Impact Fitness & Nutrition
  * Developer: travis@pifitness.net
  *
*/

// -------------------------------------------
// HEADER
// Get default header.
// -------------------------------------------
get_header();

?>
<style>
#all-posts {
  list-style: none;
  margin: 0;
  padding: 0;
}
#all-posts li {
  background-color: transparent;
  width: 25%;
  display: block;
  float: left;
  padding: 10px;
  height: 300px;
  overflow: hidden;
  margin: 0 0 15px 0;
}
#all-posts li h2 {
  margin: 0 0 5px 0;
  padding: 0;
  font-size: 24px;
  font-weight: 100;
  background-color: transparent;
  overflow: hidden;
  height: 64px;
}
#all-posts li p {
  margin: 0;
  padding: 0;
  font-size: 14px;
  background-color: transparent;
  height: 64px;
  overflow: hidden;
  display: block;
}
.link-more {
  display: none !important;
}
</style>




<?php
// -------------------------------------------
// HTML.
// -------------------------------------------
?>
<div class="wrap">

  <h1>Blogs</h1>
  <small><?php // the_content(); ?></small>
  <hr>

  <ul id="all-posts" style="">

    <?php
    // Displaying Custom Post Types – Templates and Querying
    // https://www.proteusthemes.com/blog/displaying-custom-post-types-templates-querying/

    $args = array(
      'post_type'   => 'challeges',
      'post_status' => 'publish',
      'tax_query'   => array()
     );

    $challeges = new WP_Query( $args );

    if( $challeges->have_posts() ) :
      while( $challeges->have_posts() ) : $challeges->the_post();

      ?>
      <li>
        <?php get_the_title(); ?>
        <?php //printf( '%1$s - %2$s', get_the_title(), get_the_content() );  ?>


    <?php

      endwhile;
      wp_reset_postdata();
    ?>

    <?php
    else :
      esc_html_e( 'No challeges in the diving taxonomy!', 'text-domain' );
    endif;
    ?>

    </li>




  </ul><!-- [end] all-posts -->

</div><!-- /wrap -->







 <?php
 // --------------------------------------
 // FOOTER
 // Get default header.
 // --------------------------------------
 get_footer();
 ?>
