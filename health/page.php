<?php get_header(); ?>
<?php
the_post();
the_title();
?>
<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
        <?php the_content(); ?>
    </div>
</section>
<?php get_footer(); ?>