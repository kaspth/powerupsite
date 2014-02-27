<!DOCTYPE html>
<html>
<head>
    <title>PowerUp</title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>
  <div id="container">
    <header id="siteheader">
      <?php if (is_front_page()) { ?>
        <h1>PowerUp</h1>
      <?php } else { ?>
        <a href="<?php bloginfo('url'); ?>/"><h1>PowerUp</h1></a>
      <?php } ?>
      <p>Den gode vej til en energifuld hverdag</p>
    </header>
