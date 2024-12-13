<div class="f-info">
    <div class="container">
        <div class="f-info__wrap">
            <div class="left">
                <?php get_template_part('templates-parts/header/header', 'brand'); ?>
                <br>
                <p>BĄDŹ NA BIERZĄCO:</p>
                <?php get_template_part('templates-parts/parts/social_media'); ?>
            </div>
            <div class="right">
                <?php get_template_part('templates-parts/parts/logos'); ?>
                <?php $temp_menu = wp_nav_menu(
                    array(
                        'theme_location'  => 'footer',
                        'menu_id'           => 'footer-nav-list',
                    )
                ); ?>
                <?php $temp_menu = wp_nav_menu(
                    array(
                        'theme_location'  => 'footer-two',
                        'menu_id'           => 'footer-nav-list',
                    )
                ); ?>
            </div>

        </div>
        <div class="bottom">
            <p>© 2024 Wszelkie prawa zastrzeżone. Projekt i realizacja <a href="https://roial.pl"
                    target="_blank">roial.pl</a></p>
        </div>
    </div>
</div>