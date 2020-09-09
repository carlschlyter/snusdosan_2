<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat">
 
    <title>Document</title>

    <?php wp_head();?>
    
</head>
<body>

    <header>

        <div class="container menu-container">

            <div class="menu-wrap">

                <input type="checkbox" class="toggler">

                <div class="hamburger"><div></div></div>

                <div class="menu">

                    <div>

                        <?php
                            wp_nav_menu(        
                                    array(
                                    'theme_location' => 'top-menu',
                                    'menu_class' => 'top-bar'
                                    )    
                            );

                        ?>

                    </div>

                </div>

            </div>

        </div>

    </header>
    
