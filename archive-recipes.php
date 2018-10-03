<?php

// ARCHIVE
// Child Theme.

get_header(); ?>

<div class="stm_titlebox stm_titlebox_style_2 stm_titlebox_text-left" style="width: 1920px; margin-left: -405px; background-image: url('http://localhost:8888/pifitness/wp-content/uploads/2017/07/4.jpeg');">
  <div class="container">
    <div class="stm_flex stm_flex_last stm_flex_center">
      <div class="stm_titlebox__inner">
          <div class="stm_separator mbc stm_mgb_15"></div>
          <h1 class="h1 stm_titlebox__title no_line text-transform stm_mgb_2">I've got 99 problems</h1>
          <div class="stm_titlebox__subtitle">and protein ain't one.</div>
      </div>
    </div>
  </div>
</div>

<?php
// TEST
echo "<h1>RECIPES</h1>";
?>

<?php if (have_posts()): ?>
    <?php get_template_part('partials/content/archive'); ?>
<?php else: ?>
    <?php get_template_part('partials/content/none'); ?>
<?php endif; ?>

<?php get_footer(); ?>
