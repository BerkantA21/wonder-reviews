<?php
/**
 * Template Name: about us
 **/

 $title = get_the_title();
 $content = get_the_content();
?>

<body>
    <h1 class="title"><?php echo $title?></h1>
    <div>
        <p><?php echo $content?></P>
    </div>
</body>