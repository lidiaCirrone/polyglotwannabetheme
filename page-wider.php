<?php

/**
 * Template Name: Page (Wider 8+1)
 * Description: Page template that occupies two more columns on the right.
 *
 */

get_header();
get_sidebar();
the_post();
?>
<div class="col-md-8 col-sm-12 p-4 bg-pastel">
   <div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php
      the_content();
      wp_link_pages(
         array(
            'before' => '<div class="page-links">' . __('Pages:', 'polyglotwannabe'),
            'after'  => '</div>',
         )
      );
      edit_post_link(esc_html__('Edit', 'polyglotwannabe'), '<span class="edit-link">', '</span>');
      ?>
   </div>
   <?php
   if (comments_open() || get_comments_number()) :
      comments_template();
   endif;
   ?>
</div>
<div class="col-md-1 col-sm-12 bg-pastel"></div>
<?php
get_footer();
