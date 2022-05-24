<?php
/**
 * Template Name: reviews
 **/

 $title = get_the_title();
 $content = get_the_content();
 $args = ['post_type' => 'reviews', 'numberposts' => 3, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
 $reviewPosts = get_posts($args);

?>

<body>
    <h1 class="title"><?php echo $title?></h1>
    <div>
        <p><?php echo $content?></P>
    </div>

    <div>
        <?php    
        foreach($reviewPosts as $currentPost)
        {
            render('views/atoms/reviewTest.php');
        } 
        ?>
    </div>
</body>