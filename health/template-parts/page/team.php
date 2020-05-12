<?php
// Parent Field
if (have_rows('team')) :
    while (have_rows('team')) : the_row();
        // Child Field1
        if (have_rows('member1')) :
            while (have_rows('member1')) : the_row();
                $member1_name = get_sub_field('member1_name');
                $member1_position = get_sub_field('member1_position');
                $member1_tel = get_sub_field('member1_tel');
                $member1_email = get_sub_field('member1_email');
            // Do something...
            endwhile;
        else :
        // no rows found
        endif;
        // Child Field2
        if (have_rows('member2')) :
            while (have_rows('member2')) : the_row();
                $member2_name = get_sub_field('member2_name');
                $member2_position = get_sub_field('member2_position');
                $member2_tel = get_sub_field('member2_tel');
                $member2_email = get_sub_field('member2_email');
            // Do something...
            endwhile;
        else :
        // no rows found
        endif;
        // Child Field3
        if (have_rows('member3')) :
            while (have_rows('member3')) : the_row();
                $member3_name = get_sub_field('member3_name');
                $member3_position = get_sub_field('member3_position');
                $member3_tel = get_sub_field('member3_tel');
                $member3_email = get_sub_field('member3_email');
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



<!-- TEAM -->
<section id="team" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/team-image1.jpg" class="img-responsive" alt="">

                    <div class="team-info">
                        <h3><?php echo $member1_name ?></h3>
                        <p><?php echo $member1_position ?></p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i><?php echo $member1_tel ?></p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#"><?php echo $member1_email ?></a></p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-linkedin-square"></a></li>
                            <li><a href="#" class="fa fa-envelope-o"></a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/team-image2.jpg" class="img-responsive" alt="">

                    <div class="team-info">
                        <h3><?php echo $member2_name ?></h3>
                        <p><?php echo $member2_position ?></p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> <?php echo $member2_tel ?></p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#"><?php echo $member2_email ?></a></p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook-square"></a></li>
                            <li><a href="#" class="fa fa-envelope-o"></a></li>
                            <li><a href="#" class="fa fa-flickr"></a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/team-image3.jpg" class="img-responsive" alt="">

                    <div class="team-info">
                        <h3><?php echo $member3_name ?></h3>
                        <p><?php echo $member3_position ?></p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> <?php echo $member3_tel ?></p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#"><?php echo $member3_email ?></a></p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-envelope-o"></a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>