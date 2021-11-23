<?php

/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

get_sidebar();

$page_id = get_option('page_for_posts');
?>

<div class="col-md-8 col-sm-12 p-4 bg-pastel">
   <?php get_template_part('archive', 'loop'); ?>
</div>

<div class="col-1 bg-pastel"></div>
<?php
get_footer();
