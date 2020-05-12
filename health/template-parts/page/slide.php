<!-- HOME 변수 -->
<?php
// Parent Field
if (have_rows('slide_show')) :
    while (have_rows('slide_show')) : the_row();
        // Child Field1
        if (have_rows('slide1')) :
            Console_log('Detect child');
            while (have_rows('slide1')) : the_row();
                $slide1_header = get_sub_field('slide1_header');
                $slide1_content = get_sub_field('slide1_content');
                $slide1_image = get_sub_field('slide1_image');
            // Do something...
            endwhile;
        else :
        // no rows found
        endif;
        // Child Field2
        if (have_rows('slide2')) :
            while (have_rows('slide2')) : the_row();
                $slide2_header = get_sub_field('slide2_header');
                $slide2_content = get_sub_field('slide2_content');
                $slide2_image = get_sub_field('slide2_image');
            // Do something...
            endwhile;
        else :
        // no rows found
        endif;
        // Child Field3
        if (have_rows('slide3')) :
            while (have_rows('slide3')) : the_row();
                $slide3_header = get_sub_field('slide3_header');
                $slide3_content = get_sub_field('slide3_content');
                $slide3_image = get_sub_field('slide3_image');
            // Do something...
            endwhile;
        else :
        // no rows found
        endif;
    // no rows
    // Do something...
    endwhile;
else :
// no rows found
endif;
?>

<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="owl-carousel owl-theme">
                <div class="item item-first">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3><?php echo $slide1_content; ?></h3>
                            <h1><?php echo $slide1_header; ?></h1>
                            <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3><?php echo $slide2_content; ?></h3>
                            <h1><?php echo $slide2_header; ?></h1>
                            <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3><?php echo $slide3_content; ?></h3>
                            <h1><?php echo $slide3_header; ?></h1>
                            <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>