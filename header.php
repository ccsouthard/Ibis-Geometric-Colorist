<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <title>Ibis.is Interactive Web Design</title>
    <meta name="author" content="C. Southard" />
    <meta name="keywords" content="" />
    <meta name="description" content="An Interactive Co." />
<!-- le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  
    <!--[If IE 9]>
	<link href="css/ie_style.css" rel="stylesheet" type="text/css">
	<style>
		body {background:url('img/BG/burn.jpg') no-repeat top center;}
	</style>
	<![endif]--> 
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body onload="loading();">
    <div id="loading">
        <div class="spinner">
        </div>
    </div>
    <div id="container" class="bgContainer">
