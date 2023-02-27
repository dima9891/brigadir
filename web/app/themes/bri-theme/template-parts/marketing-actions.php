<?php 
    $start_date = strtotime(post_custom('from_date'));
    $finish_date = strtotime(post_custom('to_date'));
    $intlFormatter = new IntlDateFormatter('ru_RU', IntlDateFormatter::SHORT, IntlDateFormatter::SHORT);
    $intlFormatter->setPattern('d MMMM');
?>

<li class="discount__slide swiper-slide">
    <article class="discount-card">
    <div class="discount-card__left">
        <div class="discount-card__top">
        <span class="discount-card__badge badge badge--yellow"> Акции </span>
        <span class="discount-card__date">С <?php echo $intlFormatter->format($start_date); ?> до <?php echo $intlFormatter->format($finish_date); ?></span>
        </div>
        <div class="discount-card__middle">
        <h3 class="discount-card__title">
            <a href="<?php echo esc_url( get_permalink() );?>">
            <?php the_title(); ?>
            </a>
        </h3>
        <p class="discount-card__text">
            <?php echo get_the_excerpt(); ?>
        </p>
        </div>
        <div class="discount-card__time">
        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
            d="M7.5 13.125C10.6066 13.125 13.125 10.6066 13.125 7.5C13.125 4.3934 10.6066 1.875 7.5 1.875C4.3934 1.875 1.875 4.3934 1.875 7.5C1.875 10.6066 4.3934 13.125 7.5 13.125Z"
            stroke="#222222" stroke-miterlimit="10" />
            <path d="M7.5 7.5H10.7812" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M9.82031 9.82031L7.5 7.5" stroke="#222222" stroke-width="1.5" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>

        <span><?php echo downcounter($finish_date); ?></span>
        </div>
    </div>
    <a class="discount-card__right" href="#">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="discount" />
    </a>
    </article>
</li>