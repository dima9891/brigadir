<li class="reviews__slide swiper-slide">
    <div class="reviews-card">
    <div class="reviews-card__top">
        <img class="reviews-card__img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="reviews" />

        <div class="reviews-card__info">
        <span class="reviews-card__name"><?php echo post_custom('otz_author')?></span>

        <div>
            <?php echo post_custom('otz_date')?> <br />
            <?php echo post_custom('otz_city')?>
        </div>
        </div>
    </div>

    <div class="reviews-card__content">
        <span class="reviews-card__icon">
        <svg width="62" height="52" viewBox="0 0 62 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d_615_54540)">
            <path
                d="M10 32V23.5789C10 21.0214 10.4552 18.308 11.3655 15.4386C12.3072 12.538 13.657 9.74659 15.4148 7.06433C17.204 4.35088 19.3543 1.9961 21.8655 0L27.8924 4.8655C25.9148 7.67252 24.1883 10.6043 22.713 13.6608C21.2691 16.6862 20.5471 19.9298 20.5471 23.3918V32H10ZM34.1076 32V23.5789C34.1076 21.0214 34.5628 18.308 35.4731 15.4386C36.4148 12.538 37.7646 9.74659 39.5224 7.06433C41.3117 4.35088 43.4619 1.9961 45.9731 0L52 4.8655C50.0224 7.67252 48.296 10.6043 46.8206 13.6608C45.3767 16.6862 44.6547 19.9298 44.6547 23.3918V32H34.1076Z"
                fill="white" />
            </g>
            <defs>
            <filter id="filter0_d_615_54540" x="0" y="0" width="62" height="52"
                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feColorMatrix in="SourceAlpha" type="matrix"
                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                <feOffset dy="10" />
                <feGaussianBlur stdDeviation="5" />
                <feComposite in2="hardAlpha" operator="out" />
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_615_54540" />
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_615_54540"
                result="shape" />
            </filter>
            </defs>
        </svg>
        </span>
        <div class="reviews-card__text">
        <p>
            <?php the_content() ?>
        </p>
        </div>
    </div>
    </div>
</li>