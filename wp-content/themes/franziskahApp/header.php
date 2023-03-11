<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franziska Harnisch Website</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->

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
</body>
</html>