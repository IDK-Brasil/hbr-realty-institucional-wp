<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?? "UTF-8" ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
    <?php wp_title(); ?>
  </title>

  <link rel="icon" type="image/x-icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicon.png">
  <link rel="apple-touch-icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicon.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="msapplication-config" content="browserconfig.xml">
    
  <?php wp_head() ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/pei0yca.css">

  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/dist/styles.css?v=<?= time(); ?>">


</head>

<body>
  
  <?php
    inc('/components/is-admin.php');
  ?>
