<?php

/**
 * Theme header.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
$charset = [];
$charset['charset'] = get_bloginfo('charset', 'display');

$viewport = [];
$viewport['name'] = 'viewport';
$viewport['content'][] = 'width=device-width,';
$viewport['content'][] = 'initial-scale=1,';
$viewport['content'][] = 'shrink-to-fit=no';

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php

  elem('meta', $charset);
  elem('meta', $viewport);

  elem('title', [], wp_title('&raquo;', false));

  wp_head();

  ?>

  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/dist/index.css">

</head>

<body <?php body_class(); ?>>
  aa
  <?php

  do_action('after_body');

  get_header();
