<?php get_header(); ?>
<ul>
    <?php if (have_posts()) : while (have_posts()) : the_post();

            $attachments = get_posts(array(
                'post_type'   => 'attachment',
                'numberposts' => -1,
                'post_status' => null,
                'post_parent' => $post->ID
            ));

            if ($attachments) {
                foreach ($attachments as $attachment) {
    ?>
                    <li><?php echo wp_get_attachment_image($attachment->ID, 'full'); ?>
                        <p><?php echo apply_filters('the_title', $attachment->post_title); ?></p>
                    </li>
    <?php
                }
            }
        endwhile;
    endif; ?>
</ul>
<?php get_footer(); ?>