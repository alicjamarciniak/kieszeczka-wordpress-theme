<?php 

function kiszeczka_script_enqueue(){
    wp_enqueue_style( 'bootstrap_css', 
                      'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_script( 'jquery_js', 
                       'https://code.jquery.com/jquery-3.2.1.min.js');
                       wp_enqueue_script( 'bootstrap_js', 
                       'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');                     
    wp_enqueue_style( 'customstyle', 
                       get_template_directory_uri() . '/css/kiszeczka.css', 
                       array(), 
                       '1.0.0', 
                       'all');
    wp_enqueue_script( 'customjs', 
                       get_template_directory_uri() . '/js/kiszeczka.js', 
                       array(),
                       '1.0.0',
                       true );

    }
add_action( 'wp_enqueue_scripts', 'kiszeczka_script_enqueue');

function kiszeczka_theme_setup() {
    add_theme_support( 'menus' );
    register_nav_menu( 'primary', 'Primary Header Navigation');
    add_theme_support( 'post-thumbnails' );

}
add_action( 'init', 'kiszeczka_theme_setup');


function printBigPostBlock($post_id, $position) {
    $queried_post = get_post($post_id);
    $title = $queried_post->post_title;
    $content = $queried_post->post_content;
    $thumbnail_url = get_the_post_thumbnail_url( $post_id );
    echo '<div class="kiszeczka-big-post-block ' . $position . '-block" style="background-image: url(' .$thumbnail_url . ')">';
        echo '<div class="kiszeczka-big-post-block__wrapper">';    
            echo '<div class="kiszeczka-big-post-block__title">' . $title . '</div>';
            echo '<div class="kiszeczka-big-post-block__content">' . $content . '</div>';
            echo '<div class="kiszeczka-big-post-block__btn">WIĘCEJ</div>';
        echo '</div>';
    echo '</div>';
}

function printSmallPostBlock($post_id) {
    $queried_post = get_post($post_id);
    $title = $queried_post->post_title;
    $thumbnail_url = get_the_post_thumbnail_url( $post_id );
    echo '<div class="kiszeczka-small-post-block" style="background-image: url(' .$thumbnail_url . ')">';
        echo '<div class="kiszeczka-small-post-block__title">' . $title . '</div>';
    echo '</div>';
}

?>


