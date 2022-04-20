<?php

/**
 * The template for displaying all single posts.
 *
 * @see https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header();

while (have_posts()) {
  the_post();
  $base_path = 'templates/content/content';
  $post_object = get_post_type_object(get_post_type());
  if (!empty($post_object->rewrite['slug'])) {
    $located = locate_template($base_path . '-' . $slug . '.php');
    if (!empty($located)) {
      get_template_part($base_path, $post_object->rewrite['slug']);
    } else {
      get_template_part($base_path, 'single');
    }
  } else {
    get_template_part($base_path, 'blog');
  }
}

get_footer();
