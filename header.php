<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="description" content="Keywords">
  <meta name="author" content="Name">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- TITLE -->
  <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
  <!-- FONTS -->
  <script src="https://use.typekit.net/xyb4dxz.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <!-- WP-HEAD -->
  <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
  <!-- PRELOADER
  <div class="pace-wrapper">
    <div class="pace">
      <div class="pace-progress"></div>
    </div>
  </div> -->
    <!-- NAVBAR -->
  <div class="ix-nav">
    <div class="left">
      <img src="http://127.0.0.1:8888/NineDesign/01_PortfolioSite/03_Webversions/1.14/1.14_wordpress/wp-content/uploads/2017/04/nine-logo.png" width="120">
    </div>
    <div class="right">
      <div id="nav-button-wrapper">
        <button class="nav-button" onclick="openNav()">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </button>
      </div>
    </div>
  </div>
<div id="navigation" class="side-navigation">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#intro">INTRO</a>
  <a href="#about">ABOUT</a>
  <a href="#work">WORK</a>
  <a href="#contact">CONTACT</a>
</div>
<!-- /NAVBAR -->