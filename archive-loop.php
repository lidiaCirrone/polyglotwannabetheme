<?php

/**
 * The template for displaying the archive loop.
 */

polyglotwannabe_content_nav('nav-above');

if (have_posts()) :
?>
   <div class="row" id="masonry-container">
      <?php
      while (have_posts()) :
         the_post();
         get_template_part('content', 'index'); // Post format: content-index.php
      endwhile;
      ?>
   </div>
<?php
endif;

wp_reset_postdata();

polyglotwannabe_content_nav('nav-below');
