<?php

/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();
get_sidebar();

the_post();
?>

<!-- <div class="col-md-8 order-md-2 col-sm-12"> -->
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
   </div><!-- /#post-<?php the_ID(); ?> -->
   <?php
   // If comments are open or we have at least one comment, load up the comment template.
   if (comments_open() || get_comments_number()) :
      comments_template();
   endif;
   ?>
</div><!-- /.col -->

<div class="col-1 bg-pastel"></div>
<?php
get_footer();
