<?php
/**
 * Template Name: reviews
 **/

$title = get_the_title();
$content = get_the_content();
$arguments = ['post_type' => 'reviews', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$reviewPosts = get_posts($arguments);

// render('views/templates/reviews-archive.php', compact('title', 'newsItemCollection'));

?>

<?php foreach($reviewPosts as $currentPost): ?>
        <h1><?php echo $currentPost->post_title ?></h1>
        <h1><?php echo $currentPost->post_content ?></h1>
        <a href=<?php echo get_permalink($currentPost); ?>>naar review</a>
<?php endforeach; ?>