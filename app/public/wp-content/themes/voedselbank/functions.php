<?php

/**
 * Block usage if file is called directly.
 */
defined('ABSPATH') || exit('Forbidden');

// Define global Constants.
if (!defined('WP_THEME_DIR')) {
  define('WP_THEME_DIR', __DIR__);
}

/**
 * Requires the composer autoloader.
 */

function attribute_map_callback($attribute, string $index): string
{
  if (is_bool($attribute)) {
    return $index;
  }

  if (is_string($attribute)) {
    return $index . '="' . $attribute . '"';
  }

  return sprintf('%s="%s"', $index, implode(' ', $attribute));
}

function get_attr(array $attributes, ?callable $custom_callback = null): string
{
  /** @noinspection ProperNullCoalescingOperatorUsageInspection */
  $atts = array_map($custom_callback ?? 'attribute_map_callback', $attributes, array_keys($attributes));

  return implode(' ', $atts);
}

function get_element(string $element, array $attributes = [], string $content = ''): string
{
  $atts = get_attr($attributes);

  return sprintf('<%s %s>%s</%s>', $element, $atts, $content, $element);
}


function elem(string $element, array $attributes = [], string $content = ''): void
{
  echo get_element($element, $attributes, $content);
}
