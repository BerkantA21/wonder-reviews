<?php

$post = get_post();
$id = $post->ID;

$title = get_the_title();
$content = get_the_content();

$newsCategories = get_the_terms(\get_post(), 'reviewsCategory');

$score = get_field('score', $id);
var_dump($score);

render('views/templates/reviews-detail.php', compact('title','content', 'reviewsCategories'));