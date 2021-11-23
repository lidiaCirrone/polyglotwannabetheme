<?php

/**
 * Sidebar Template.
 */

if (is_active_sidebar('primary_widget_area') || is_archive() || is_single()) :
?>

   <!-- <div class="col-md-4 order-md-first col-sm-12 oder-sm-last"> -->
   <div id="sidebar" class="col-md-3 col-sm-12 px-4 pb-4 text-end">
      <div class="sticky-top pt-4">
         <div class="row g-0">

            <?php
            if (is_active_sidebar('primary_widget_area')) :
            ?>
               <div id="widget-area" class="widget-area" role="complementary">
                  <?php
                  dynamic_sidebar('primary_widget_area');

                  if (current_user_can('manage_options')) :
                  ?>
                     <span class="edit-link"><a href="<?php echo esc_url(admin_url('widgets.php')); ?>" class="badge badge-secondary"><?php esc_html_e('Edit', 'polyglotwannabe'); ?></a></span><!-- Show Edit Widget link -->
                  <?php
                  endif;
                  ?>
               </div><!-- /.widget-area -->
            <?php
            endif;
            ?>
         </div>
      </div>
   </div><!-- /#sidebar -->
<?php
endif;
?>