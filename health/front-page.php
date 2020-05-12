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

<!-- SLIDE -->
<?php
get_template_part('template-parts/page/slide');
?>
<!-- ABOUT -->
<?php
get_template_part('template-parts/page/about');
?>


<!-- TEAM -->
<?php
get_template_part('template-parts/page/team');
?>


<!-- NEWS -->
<?php
get_template_part('template-parts/page/news');
?>

<!-- MAKE AN APPOINTMENT -->
<?php
get_template_part('template-parts/page/appointment');
?>

<!-- GOOGLE MAP -->
<section id="google-map">
    <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.096768235109!2d136.92735647121444!3d35.158651602060104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3b69cc56c4686e51!2z44Kr44OV44Kn44OP44Km44K544Oq44O844OZ!5e0!3m2!1sja!2sjp!4v1589226688258!5m2!1sja!2sjp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<?php get_footer(); ?>