<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=<?= bloginfo('charset') ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="/wp-content/themes/BWtheme/assets/img/logo.png"> 

    <?php wp_head(); ?>
</head>

<body> 
    <header>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                
                    <?php
                    if(function_exists('the_custom_logo')){            /* funzione per importare il logo  */
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src( $custom_logo_id);
                    }
                    ?>
                    <img src="<?=  $logo[0] ?> " alt="Logo" width="30" height="24">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        )
                    );
                    ?>

                   
                </div>
            </div>
        </nav>
    </header>
  