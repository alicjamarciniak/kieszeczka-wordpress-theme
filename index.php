
<?php get_header();?>


<?php 

        $topPostId = 48;
        $innerPostsIds = array( 51, 57, 59, 61);
        $bottomPostId = 76;

?>
    <div class='kiszeczka-about-us-section container'>
<?php
        printBigPostBlock($topPostId, 'top');

        foreach ($innerPostsIds as $postId) :
            printSmallPostBlock($postId);
        endforeach;

        printBigPostBlock($bottomPostId, 'bottom');

?>
    </div>
<?php

        // $magazineArgs = array( 
        //     'category' => '5', 
        //     'posts_per_page' => 3
        // );
        // $reviews = get_posts( $reviewArgs );
        // foreach ($reviews as $post) :  setup_postdata($post); 
        //     the_post_thumbnail();
        //     the_title();
        //     the_content();
        // endforeach; 
?>

<?php get_footer();?>
