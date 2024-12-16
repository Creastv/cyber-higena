<?php
$articles = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 8,
    'order' => 'DESC',
));

?>
<div class="container">
    <div class="last-posts__wrap">
        <?php echo  $title ? '<h2 class="section-tite">' . $title . '</h2>' : false; ?>
        <div class="desc-wrap">
            <?php echo  $des ? ' <div class="desc">' . $des . '</div>' : false; ?>
            <?php if ($link) { ?>
                <a class="btn-revers " href="<?php echo esc_url($link_url); ?>"
                    target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php } ?>
        </div>
        <div class="swiper js-posts">
            <div class="swiper-wrapper">
                <?php while ($articles->have_posts()) : $articles->the_post(); ?>
                    <div class="swiper-slide">
                        <?php get_template_part('templates-parts/content/content-cart-post');  ?>
                    </div>
                <?php endwhile;
                wp_reset_query(); ?>
            </div>
            <div class="swiper-pagination swiper-pagination--posts"></div>
        </div>

    </div>
</div>