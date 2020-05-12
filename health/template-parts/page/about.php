<!-- ABOUT -->
<!-- About 변수 -->
<?php
if (have_rows('about')) :
    while (have_rows('about')) : the_row();
        $about_title = get_sub_field('about_title');
        $about_content = get_sub_field('about_content');
        $about_author = get_sub_field('about_author');
        $about_author_info = get_sub_field('about_author_info');
    endwhile;
else :
// no rows found
endif;
?>
<section id="about">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s"><?php echo $about_title; ?></h2>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <p><?php echo $about_content; ?></p>
                    </div>
                    <figure class="profile wow fadeInUp" data-wow-delay="1s">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/author-image.jpg" class="img-responsive" alt="">
                        <figcaption>
                            <h3><?php echo $about_author; ?></h3>
                            <p><?php echo $about_author_info; ?></p>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </div>
    </div>
</section>