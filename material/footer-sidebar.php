</div><!-- main-container -->
</main>
<footer class="site-footer">
    <nav class="site-nav">
        <?php
        $args = array(
            'theme_location' => 'footer',
        );
        ?>
        <?php wp_nav_menu($args); ?>
    </nav>
    <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
</footer>

</div>
<!-- 전체 컨테이너 -->

<?php wp_footer(); ?>
</body>


</html>