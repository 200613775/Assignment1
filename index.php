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
        <h1><?php the_title(); ?></h1>
        <p> This Assignment covers the parts that what we have learn in class. </p>
    </div>
  </section>
 <?php
 get_footer();
 ?>