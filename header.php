<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <?php wp_head(); ?>
</head>

<?php
$navbar_scheme   = get_theme_mod('navbar_scheme', 'navbar-light bg-light');
$navbar_position = get_theme_mod('navbar_position', 'static');
$search_enabled  = get_theme_mod('search_enabled', '1');
?>

<body <?php body_class(); ?>>

   <?php wp_body_open(); ?>

   <a href="#main" class="visually-hidden-focusable"><?php esc_html_e('Skip to main content', 'polyglotwannabe'); ?></a>

   <div id="wrapper">

      <main id="main" class="container-fluid flatten-it mt-0" <?php if (isset($navbar_position) && 'fixed_top' === $navbar_position) : echo ' style="padding-top: 100px;"';
      elseif (isset($navbar_position) && 'fixed_bottom' === $navbar_position) : echo ' style="padding-bottom: 100px;"';
      endif; ?>>

         <div class="row">