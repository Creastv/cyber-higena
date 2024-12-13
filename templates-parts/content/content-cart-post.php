<article class="card-post <?php echo $post->ID; ?>">
    <header>
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail($post->ID)) : ?>
            <?php the_post_thumbnail('post-futured', array('alt' => get_the_title())); ?>
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/thumbnail.png" alt="<?php the_title(); ?> "
                class="clip-svg">
            <?php endif; ?>
            <svg width="482" height="260" viewBox="0 0 482 260" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M46.0605 0.00427312L431.047 1.18813C431.047 1.18813 472.127 4.24392 478.975 44.2599C485.827 84.2758 476.698 161.79 476.698 161.79C476.698 161.79 470.187 208.568 433.26 218.051C396.332 227.539 46.5262 241.121 10.1584 259.238C-1.91857 265.256 -0.0217875 217.034 0.298614 202.277C0.619016 187.523 4.32713 60.0133 6.75364 44.2642C9.18015 28.5151 7.63368 0.273526 46.0648 0L46.0605 0.00427312Z"
                    fill="#FF9700" />
            </svg>

        </a>
    </header>
    <div class="entry-wraper">
        <h2 class="entry-title h3">
            <?php the_title(); ?>
        </h2>
        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div>
    </div>
</article>