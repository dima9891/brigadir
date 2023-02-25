<li class="news__slide swiper-slide">
    <article class="news-card" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
    <div class="news-card__inner">
        <span class="news-card__date"><?php echo get_the_date('j F Y'); ?></span>
        <div class="news-card__bottom">
        <h3 class="news-card__title">
            <a href="<?php echo esc_url( get_permalink() )?>">
                <?php the_title(); ?>
            </a>
        </h3>
        <a class="news-card__link" href="<?php echo esc_url( get_permalink() )?>">Подробнее</a>
        </div>
    </div>
    </article>
</li>