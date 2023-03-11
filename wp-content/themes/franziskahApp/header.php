<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franziska Harnisch Website</title>


    <?php
    wp_head();
    ?>
<?php

wp_nav_menu(
    array(
    'menu' => 'primary',
    'container' => '',
    'theme_location' => 'primary',
    'items_wrap' => '<ul id="" class"">%3$s</ul' //to add custom class remove wordpress injected classes 
    )
);
?>
    
</head>
<body>
    <h1>Franziska Harnisch</h1>
</body>
</html>