<?php

// ARCHIVE
// Child Theme.

get_header(); ?>

<?php

  $titlebox_style = pearl_get_option('page_title_box_style');

  $tpl = 'partials/global/titlebox/' . $titlebox_style;

  if ( empty( locate_template($tpl . '.php') ) ) {

    $titlebox_style = 'style_1';
    
  }

  get_template_part('partials/global/titlebox/' . $titlebox_style);

// pearl_get_titlebox();

?>

<?php
// TEST
echo "<h1>ARCHIVE</h1>";
?>

<?php if (have_posts()): ?>
    <?php get_template_part('partials/content/archive'); ?>
<?php else: ?>
    <?php get_template_part('partials/content/none'); ?>
<?php endif; ?>

<?php get_footer(); ?>
