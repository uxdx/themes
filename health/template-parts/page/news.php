<?php

/**
 * Displays news in front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
?>

<!-- NEWS -->
<section id="news" data-stellar-background-ratio="2.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <!-- SECTION TITLE -->
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Latest News</h2>
                </div>
            </div>
            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'news',
                'posts_per_page' => 3,
            );
            $arr_posts = new WP_Query($args);
            $index = 1;
            if ($arr_posts->have_posts()) :

                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
            ?>
                    <?php
                    if (has_post_thumbnail()) :
                        the_post_thumbnail();
                    endif;
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <!-- NEWS THUMB -->
                        <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                            <a href="news-detail.html">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/news-image<?php echo $index; ?>.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="news-info">
                                <span><?php echo get_the_date(); ?></span>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                                <div class="author">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/author-image.jpg" class="img-responsive" alt="">
                                    <div class="author-info">
                                        <h5><?php the_author(); ?></h5>
                                        <p>CEO / Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                    $index++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>