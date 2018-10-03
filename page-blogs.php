<?php
/**
  *
  * BLOGS
  * Template Name: All Blogs
  * Positive Impact Fitness & Nutrition
  * Developer: travis@pifitness.net
  *
*/

// require_once( dirname(__FILE__) . "/wp-load.php" );
// query_posts( 'post_type=post&showposts=30' );

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
    <!-- TEMPLATE
    <li>
      <img src="" alt="">
      <h3></h3>
      <p></p>
      <a href="#">Read More</a>
    </li>
     -->


    <?php
    /*
    if (have_posts()) :
       while (have_posts()) :

        echo "<li>";
        echo "<img>";
        echo "<h3>";
        the_title();
        echo "</h3>";
        echo "<p>";
        the_excerpt();
        echo "</p>";
        echo "<a>Read More</a>";
        echo "</li>";

       endwhile;
    else :
        echo '<li>Sorry, no posts found.</li>';
    endif;
    */
    ?>




  		<?php // Display blog posts on any page @ https://m0n.co/l
      // https://digwp.com/2013/01/display-blog-posts-on-page-with-navigation/

      $temp = $wp_query;
      $wp_query= null;
  		$wp_query = new WP_Query();
      $wp_query->query( 'posts_per_page=5' . '&paged=' . $paged );

  		while ( $wp_query->have_posts() ) : $wp_query->the_post();

      // ------------------
      // DISPLAY TEMPLATE
      // ================== ?>

      <li style="">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( $size, $attr ); ?>
          <h2 style="">
            <?php the_title(); ?>
          </h2>
          <?php the_excerpt(); ?>
        </a>
      </li>

  		<?php endwhile; ?>



  		<?php wp_reset_postdata(); ?>



  </ul><!-- [end] all-posts -->

</div><!-- /wrap -->







 <?php
 // --------------------------------------
 // FOOTER
 // Get default header.
 // --------------------------------------
 get_footer();
 ?>
