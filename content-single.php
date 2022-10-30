<?php

/**
 * The template for displaying content in the single.php template.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <header class="entry-header">
      <h1 class="entry-title mb-0"><?php the_title(); ?></h1>
      <?php
      if ('post' === get_post_type()) :
      ?>
         <div class="entry-meta mt-0">

            <h6 class="card-subtitle mb-3"><small class="text-muted entry-meta">
                  <?php
                  printf(
                     wp_kses_post(__('posted on <time class="entry-date" datetime="%1$s">%2$s</time>', 'polyglotwannabe')),
                     esc_attr(get_the_date('c')),
                     esc_html(get_the_date() . ' at ' . get_the_time())
                  )
                  ?>
               </small></h6>
         </div><!-- /.entry-meta -->
      <?php
      endif;
      ?>
   </header><!-- /.entry-header -->
   <div class="entry-content">
      <?php
      the_content();
      wp_link_pages(array('before' => '<div class="page-link"><span>' . esc_html__('Pages:', 'polyglotwannabe') . '</span>', 'after' => '</div>'));
      ?>
   </div><!-- /.entry-content -->

   <?php
   edit_post_link(__('Edit', 'polyglotwannabe'), '<span class="edit-link">', '</span>');
   ?>

</article><!-- /#post-<?php the_ID(); ?> -->