<?php
/*
 * Template Name: news(niet_nodig)
 */

$title = get_the_title();
$content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));




?>


<!doctype html>

<h1>test</h1>