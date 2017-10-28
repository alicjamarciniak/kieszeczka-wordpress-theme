<?php
/*
######################################
    ABOUT US CATEGORY
######################################
*/
get_header();
?>

<?php 
        $aboutUsArgs = array( 
            'category' => '4', 
            'posts_per_page' => 5
        );
        $aboutUs = get_posts( $aboutUsArgs );
        foreach ($aboutUs as $post) :  setup_postdata($post); 
            the_post_thumbnail();
            the_title();
            the_content();
        endforeach;         
?> 

<?php get_footer();?>