<?php
/*
######################################
    MAGAZINE CATEGORY
######################################
*/
get_header();
?>

<?php 
        $magazineArgs = array( 
            'category' => '5', 
            'posts_per_page' => 3
        );
        $magazine = get_posts( $magazineArgs );
        foreach ($magazine as $post) :  setup_postdata($post); 
            the_post_thumbnail();
            the_title();
            the_content();
        endforeach; 
?>

<?php get_footer();?>
