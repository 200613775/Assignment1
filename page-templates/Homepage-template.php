<?php 
    /**
     * Template Name: Custom Homepage
     * Template Post Type: page
     */
    get_header();

?>
<section class="home-row1" style= "background-image: url('<?php echo wp_kses_post(the_field('assignment1_row1_image')); ?>')">
    <div>
        <h1><?php echo wp_kses_post(the_field('assignment1_row1_title')); ?></h1>
    </div>

</section>
<section class="home-row2">
<h2><?php echo wp_kses_post(the_field('assignment1_row2_title')); ?></h2>
<p><?php echo wp_kses_post(the_field('assignment1_row2_text')); ?></p>
</section>

<section class="home-row3">
    <div>
        <h3><?php echo wp_kses_post(the_field('assignment1_row3_title')); ?></h3>
        <p><?php echo wp_kses_post(the_field('assignment1_row3_text')); ?></p>
    </div>
    <div>
        <img src="<?php echo wp_kses_post(the_field('assignment1_row3_image')); ?>" alt="<?php echo wp_kses_post(the_field('assignment1_row3_image_alt')); ?>">
    </div>
</section>
<?php 
    get_footer();
?>