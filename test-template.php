<?php
/**
 * Template Name: Taxonomy Testing
 */

 $posts = get_posts(['post-type' => 'reviews', 'numberposts' => 2, 'orderby' => 'date', 'order' => 'DESC']);

 $terms = get_the_terms($posts[0], 'reviewsCategory');

?>

<body>
    <h1><?php echo $terms[0]->name; ?></h1>
</body>