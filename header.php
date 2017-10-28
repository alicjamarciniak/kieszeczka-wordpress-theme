<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( name ); wp_title(); ?></title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?> >
<header class='kiszeczka-header'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-6'>
                    <nav class='kiszeczka-navigation'>        
                        <?php wp_nav_menu( array('theme_location' => 'primary') )?>
                    </nav>
                </div>
            <div class='col-md-6'>
                <div class='kiszeczka-logo'>
                    <img class='logo__img' src="/public_html/kiszeczka/wp-content/themes/kiszeczka_theme/images/logo.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <?php 
        if(is_front_page() || is_page(array(13, 7, 30))) {
            include (TEMPLATEPATH . '/kiszeczka-slider.php');
        }
    ?>
</header>

  



