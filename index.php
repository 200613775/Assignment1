<?php 
/**
 * This is the default template file.
 */
get_header();
?>
<!-- the following code is used to display the pages content if using the black editor or the classic editor -->
 <?php 
 //in order to use our featured image will need to add function to our fuctions.php and create a variable to collect it here.
 $featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
 ?>
 <section class="post-assignment1row1" style="bacground: url('<?php $featuredImg[0];?>')">
    <div>
        <h1>Assignment-1</h1>
        <p> This Assignment covers the parts that what we have learn in class and what I want to achieve in my life. </p>
        <h2> Goals </h2>
        <p> My first goal to get co-op. After graduation, I want want to persue my career in designing. </P>

    </div>
  </section>
 <?php
 get_footer();
 ?>