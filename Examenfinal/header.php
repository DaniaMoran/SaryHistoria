<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
    <?php wp_head() ?>
    
</head>
<body>
<div class="contenedor">


<header class= "barrasuperior">

    <div class= "barra">

<div class="logo">
<a href="<?php bloginfo('url')?>" style="text-decoration: none; color:white;margin-bottom: 6px; "><h4 class=nombre-empresa> INICIO</h4></a>

    
</div>
    <nav>
   
         <?php wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container_class' => 'container-menu',
                            
                        )
                    ); 
                    ?>
                
                </nav> 
            </div>
    
        
        
                
    
</header>