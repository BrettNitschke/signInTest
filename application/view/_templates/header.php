<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FA16G12</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
</head>
<body>
    <!-- logo -->
    <div class="logo">
        FA16G12
    </div>

    <?php if (!isset($_SESSION["user_id"])) { ?>
    <!-- navigation -->
    <div class="navigation">
        <a href="<?php echo URL; ?>">home</a>
        <a href="<?php echo URL; ?>home/Bnitschk">Bnitschk</a>
        <a href="<?php echo URL; ?>home/jconcep2">jconcep2</a>
        <a href="<?php echo URL; ?>home/ktambeka">ktambeka</a>
        <a href="<?php echo URL; ?>home/Nmazumda">Nmazumda</a>
        <a href="<?php echo URL; ?>home/mcdavid">mcdavid</a>
        <a href="<?php echo URL; ?>home/Cdea">Cdea</a>
        <a href="<?php echo URL; ?>m2/index">m2</a>
        <a href="<?php echo URL; ?>picture/pic">picTest</a>
        <a href="<?php echo URL; ?>picture/imageGallery">Image Gallery</a>
        <a href="<?php echo URL; ?>user/signup">Sign Up</a>
        <a href="<?php echo URL; ?>user/signin">Sign In</a>
    </div>
    <?php } else { ?>
    <div class="navigation">
        <a href="<?php echo URL; ?>">home</a>
        <a href="<?php echo URL; ?>home/Bnitschk">Bnitschk</a>
        <a href="<?php echo URL; ?>home/jconcep2">jconcep2</a>
        <a href="<?php echo URL; ?>home/ktambeka">ktambeka</a>
        <a href="<?php echo URL; ?>home/Nmazumda">Nmazumda</a>
        <a href="<?php echo URL; ?>home/mcdavid">mcdavid</a>
        <a href="<?php echo URL; ?>home/Cdea">Cdea</a>
        <a href="<?php echo URL; ?>m2/index">m2</a>
        <a href="<?php echo URL; ?>picture/pic">picTest</a>
        <a href="<?php echo URL; ?>picture/imageGallery">Image Gallery</a>
        <a href="<?php echo URL; ?>user/signout">Sign Out</a>
        
    </div>
    <?php } ?>
