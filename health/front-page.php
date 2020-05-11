<?php get_header(); ?>

<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>arusari Company</a>
        </div>

        <!-- MENU LINKS -->
        <!-- <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#top" class="smoothScroll">Home</a></li>
                <li><a href="#about" class="smoothScroll">About Us</a></li>
                <li><a href="#team" class="smoothScroll">Doctors</a></li>
                <li><a href="#news" class="smoothScroll">News</a></li>
                <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
            </ul>
        </div> -->
        <?php
        $args = array(
            'menu'            => '',
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => '',
            'menu_class'      => 'menu nav navbar-nav navbar-right',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'item_spacing'    => 'preserve',
            'depth'           => 0,
            'walker'          => '',
            'theme_location'  => '',
        );
        ?>
        <?php wp_nav_menu($args); ?>
    </div>
</section>
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


<!-- ABOUT -->
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
                        <img src="images/author-image.jpg" class="img-responsive" alt="">
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
                    <img src="images/team-image1.jpg" class="img-responsive" alt="">

                    <div class="team-info">
                        <h3>Nate Baston</h3>
                        <p>General Principal</p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> 010-020-0120</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">general@company.com</a></p>
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
                    <img src="images/team-image2.jpg" class="img-responsive" alt="">

                    <div class="team-info">
                        <h3>Jason Stewart</h3>
                        <p>Pregnancy</p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> 010-070-0170</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">pregnancy@company.com</a></p>
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
                    <img src="images/team-image3.jpg" class="img-responsive" alt="">

                    <div class="team-info">
                        <h3>Miasha Nakahara</h3>
                        <p>Cardiology</p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> 010-040-0140</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">cardio@company.com</a></p>
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

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <a href="news-detail.html">
                        <img src="images/news-image1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>March 08, 2018</span>
                        <h3><a href="news-detail.html">About Amazing Technology</a></h3>
                        <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                        <div class="author">
                            <img src="images/author-image.jpg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Jeremie Carlson</h5>
                                <p>CEO / Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <a href="news-detail.html">
                        <img src="images/news-image2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>February 20, 2018</span>
                        <h3><a href="news-detail.html">Introducing a new healing process</a></h3>
                        <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                        <div class="author">
                            <img src="images/author-image.jpg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Jason Stewart</h5>
                                <p>General Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                    <a href="news-detail.html">
                        <img src="images/news-image3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>January 27, 2018</span>
                        <h3><a href="news-detail.html">Review Annual Medical Research</a></h3>
                        <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                        <div class="author">
                            <img src="images/author-image.jpg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Andrio Abero</h5>
                                <p>Online Advertising</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="images/appointment-image.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->
                <form id="appointment-form" role="form" method="post" action="#">

                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Make an appointment</h2>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="date">Select Date</label>
                            <input type="date" name="date" value="" class="form-control">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="select">Select Department</label>
                            <select class="form-control">
                                <option>General Health</option>
                                <option>Cardiology</option>
                                <option>Dental</option>
                                <option>Medical Research</option>
                            </select>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <label for="telephone">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                            <label for="Message">Additional Message</label>
                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                            <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


<!-- GOOGLE MAP -->
<section id="google-map">
    <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<?php get_footer(); ?>