<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
<div class="navbar__brand">
    <?php if (has_custom_logo()) {
        echo '<a href=" ' . esc_url(home_url('/')) . '"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
    } else {
        echo '<h1> <a href=" ' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
    } ?>
</div>