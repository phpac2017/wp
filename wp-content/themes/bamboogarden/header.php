<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head();?>

</head>
<body>

<header>
    
    <div class="container">
        <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-bar'
                )
            );
        ?> 
    </div>   

</header>
<div class="parent">
<div class="banner"><img src="<?php echo get_template_directory_uri();?>/images/banner_top.jpg " alt="Snow" style="width:100%;"></div>
<div class="bottom-left"><img src="<?php echo get_template_directory_uri();?>/images/logo.png " alt="Snow" style="width:100%;"></div>
</div>
