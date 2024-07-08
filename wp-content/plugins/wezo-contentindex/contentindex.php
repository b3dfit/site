<?php
/*
Plugin Name: Index Generator
Plugin URI: https://wezo.com.br/
Description: Automatically create a navigable table of contents for your articles based on headers (h2, h3, h4, h5, and h6). This plugin enhances the reading experience and navigation of your posts by adding a table of contents before the first header found.
Version: 1.0
Author: Weslley Alves
Author URI: https://wezo.com.br
Text Domain: wezoalves
*/


add_action('plugins_loaded', 'wezoalves_load_textdomain');
function wezoalves_load_textdomain()
{
  load_plugin_textdomain('wezoalves', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}

function add_custom_meta_box()
{
  add_meta_box(
    'header_selector_meta_box',
    __('Index Selection', 'wezoalves'),
    'display_custom_meta_box',
    'post',
    'side',
    'low'
  );
}
add_action('add_meta_boxes', 'add_custom_meta_box');


function display_custom_meta_box($post)
{
  $selected_headers = get_post_meta($post->ID, 'header_selector', true);
  if (! is_array($selected_headers)) {
    $selected_headers = [];
  }
  $headers = ['h2', 'h3', 'h4', 'h5', 'h6'];
  foreach ($headers as $header) {
    $checked = in_array($header, $selected_headers) ? 'checked' : '';
    echo '<p><label><input type="checkbox" name="header_selector[]" value="' . $header . '" ' . $checked . '> ' . strtoupper($header) . '</label></p>';
  }
}


function save_custom_meta_box($post_id)
{
  if (array_key_exists('header_selector', $_POST)) {
    update_post_meta(
      $post_id,
      'header_selector',
      $_POST['header_selector']
    );
  } else {
    delete_post_meta($post_id, 'header_selector');
  }
}
add_action('save_post', 'save_custom_meta_box');


function findFirstHeader($content)
{
  $pattern = '/<(h[1-6])[^>]*>/i';
  if (preg_match($pattern, $content, $match)) {
    return $match[1];
  }
  return null;
}

function ContentIndex($content)
{

  if (is_singular()) {
    global $post;

    $firstHeader = findFirstHeader($content);

    $stringIndex = __('index', 'wezoalves');
    $stringHeaderIndex = __('What you will find in this article', 'wezoalves');

    $selected_headers = get_post_meta($post->ID, 'header_selector', true);

    if (empty($selected_headers)) {
      return $content;
    }

    $header_pattern = implode('|', array_map('preg_quote', $selected_headers));
    $regex = '/<(' . $header_pattern . ')\b[^>]*>(.*?)<\/\1>/s';
    preg_match_all($regex, $content, $matches, PREG_SET_ORDER);

    if (count($matches)) {
      $index = "<h6 class='text-base'>{$stringHeaderIndex}</h6><ol class='table-content'>";
      $replacements = [];
      foreach ($matches as $match) {
        $level = $match[1];
        $text = $match[2];
        $text = strip_tags($text);
        $slug = sanitize_title($text);
        $slug = "{$stringIndex}-{$slug}";
        $url = get_permalink($post->ID);
        $index .= "<li class='index-header-{$level}'><a class='text-sm' href='{$url}#{$slug}'>{$text}</a></li>";
        $new_header = "<a style='display:inline-block;' class='index-anchor' id='{$slug}'></a><{$level}>{$text}</{$level}>"; // headers h<1...6>
        $replacements[$match[0]] = $new_header;
      }
      $index .= '</ol>';
      foreach ($replacements as $original => $new) {
        $content = str_replace($original, $new, $content);
      }
      $content = preg_replace('/<(' . $firstHeader . ')[^>]*>/i', $index . '$0', $content, 1);
    }
  }

  return $content;
}

add_filter('the_content', 'ContentIndex');