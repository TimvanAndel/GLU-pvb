<?php

/**
 * The main generic template file.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header();

if (have_posts()) {
  get_template_part('templates/content/content', 'archive');
} else {
  get_template_part('templates/content/content', 'none');
}

get_footer();
