<?php

function post_image($name) {
  blog_image($name, post_title());
}

function blog_image($name, $alt) {
  $url = implode('/', array(stylesheet_dir(), $name));
  echo "<img src=\"{$url}\" alt=\"$alt\" />";
}

function stylesheet_dir() {
  ob_start();
  bloginfo('stylesheet_directory');
  return ob_get_clean();
}

function post_title() {
  ob_start();
  the_title();
  return ob_get_clean();
}

?>