<?php

/**
 * The template for displaying content in the index.php template.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-sm-6 col-lg-4 mb-4'); ?>>

   <?php if (has_post_thumbnail()) : ?>
   <div class="card text-white">
      <img src="<?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>" alt="" class="card-img">
      <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark-gradient">
         <h5 class="card-title">Palazzo Piercing</h5>
      </div>
   </div>
   <?php else : ?>

   <div class="card">
      <div class="card-body">
         <h5 class="card-title">
            <a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'polyglotwannabe'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a>
         </h5>
         <?php
         if ('post' === get_post_type()) :
         ?>
            <h6 class="card-subtitle mb-3"><small class="text-muted entry-meta">
                  <!-- — 6 august 2020, h15.22 -->
                  <?php
                  printf(
                     wp_kses_post(__('<time class="entry-date" datetime="%1$s">%2$s</time>', 'polyglotwannabe')),
                     esc_attr(get_the_date('c')),
                     esc_html(get_the_date() . ' - ' . get_the_time())
                  )
                  ?>
               </small></h6>
            <!-- codice per i commenti e quindi div.entry-meta ??? -->
         <?php
         endif;
         ?>
         <p class="card-text entry-content">
            <?php

            if (is_search() or has_excerpt()) :
               the_excerpt();
            else :
               the_content();
            endif;
            ?>
            <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . esc_html__('Pages:', 'polyglotwannabe') . '</span>', 'after' => '</div>')); ?>
         </p>
         <footer class="entry-meta text-end">
            <a href="<?php echo get_the_permalink(); ?>"><?php esc_html_e('...', 'polyglotwannabe'); ?></a>
         </footer><!-- /.entry-meta -->
      </div>
   </div>

   <?php endif; ?>

</article>