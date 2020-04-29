<?php get_header(); ?>

<!-- 글 표시 -->
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article class="post">
            <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
        </article>
<?php endwhile;
else :
    echo '포스트가 존재하지 않습니다.';
endif;
?>


<?php get_footer(); ?>