<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
  <link href="<?= get_template_directory_uri() . "/style.css"; ?>" rel="Stylesheet"/>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . "/assets/images/icons/site-favicon.ico"?>"/>
  <title>Overwatch</title>
</head>
<body>
  <!-- Header section, which contains the top navigation menu and secondary
       navigation menu, which follows the screen view. -->
  <div class="section" id="sec-header">                                                 <!-- Start header -->
    <header class="nav" id="head-header">
      <nav id="head-nav">
        <div class="grid-container" id="grid-head-nav">
          <div></div>
          <a href="#" class="nav-item logo" id="head-logo">BLIZZARD</a>
          <a href="#" class="nav-item" id="head-games">Games</a>
          <a href="#" class="nav-item" id="head-shop">Shop</a>
          <a href="#" class="nav-item" id="head-news">News</a>
          <a href="#" class="nav-item" id="head-esports">Esports</a>
          <div></div>
          <a href="#" class="nav-item support" id="head-support"></a>
          <a href="#" class="nav-item" id="head-account">My Account</a>
          <div></div>
        </div>
      </nav>
    </header>
    <nav class="nav" id="head-floating-nav">
      <div class="grid-container" id="grid-floating-nav">
        <a href="#" class="nav-item logo" id="head-floating-game">Game</a>
        <a href="#" class="nav-item" id="head-floating-heroes">Heroes</a>
        <a href="#" class="nav-item" id="head-floating-events">Events</a>
        <a href="#" class="nav-item" id="head-floating-media">Media</a>
        <a href="#" class="nav-item" id="head-floating-news">News</a>
        <a href="#" class="nav-item support" id="head-floating-community">Community</a>
        <a href="#" class="nav-item" id="head-floating-esports">Esports</a>
        <div></div>
        <a href="#" class="nav-item" id="head-floating-search">Search Bar</a>
        <a href="#" class="nav-item" id="head-floating-login">Login</a>
        <button class="back-orange white" id="head-floating-buy">Buy Now</button>
      </div>
    </nav>
  </div>                                                                              <!-- End header -->