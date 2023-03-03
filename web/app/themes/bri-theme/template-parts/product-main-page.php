<?php
global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<li class="products-grid__item">
<article class="product-card">
    <div class="product-card__top">
    <div class="product-card__slider swiper">
        <ul class="products-card__slides swiper-wrapper">
        <li class="product-card__slide swiper-slide">
            <picture>
            <source srcset="img/products/1.webp" type="image/webp" />
            <img class="product-card__img" src="img/products/1.png" alt="product" />
            </picture>
        </li>
        </ul>
    </div>
    </div>
    <div class="product-card__body">
    <div class="product-card__info">
        <span class="product-card__price"><?php echo $product->get_price_html(); ?></span>
        <h3 class="product-card__title"><?php echo $product->title; ?></h3>
    </div>
    <div class="product-card__details card-details">
        <div class="card-details__top">
        <span class="card-details__stock card-details__stock--in-stock">
            В наличии
        </span>
        <span>Арт: 123456789</span>
        </div>
        <div class="card-details__btns">
        <button class="card-details__cart btn" type="button">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M14.375 15.2725H5.45313L3.27344 3.28809C3.24793 3.14457 3.17307 3.01447 3.06179 2.92032C2.95051 2.82616 2.80982 2.77386 2.66406 2.77246H1.25"
                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M6.25 18.3975C7.11294 18.3975 7.8125 17.6979 7.8125 16.835C7.8125 15.972 7.11294 15.2725 6.25 15.2725C5.38706 15.2725 4.6875 15.972 4.6875 16.835C4.6875 17.6979 5.38706 18.3975 6.25 18.3975Z"
                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M14.375 18.3975C15.2379 18.3975 15.9375 17.6979 15.9375 16.835C15.9375 15.972 15.2379 15.2725 14.375 15.2725C13.5121 15.2725 12.8125 15.972 12.8125 16.835C12.8125 17.6979 13.5121 18.3975 14.375 18.3975Z"
                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M4.88281 12.1475H14.6953C14.9875 12.1484 15.2706 12.0462 15.4949 11.8591C15.7193 11.6719 15.8704 11.4116 15.9219 11.124L16.875 5.89746H3.75"
                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>В корзину</span>
        </button>
        </div>
    </div>

    <div class="product-card__bottom">
        <div class="product-card__text">Мощность: 6,5 л.с</div>
        <div class="product-card__text">Ударная сила: 12кН</div>
        <div class="product-card__text">
        Рабочая поверхность: 54х42 см
        </div>
        <div class="product-card__text">Вес: 82 кг</div>

        <div class="product-card__details card-details">
        <div class="card-details__top">
            <span class="card-details__stock card-details__stock--in-stock">
            В наличии
            </span>
            <span>Арт: 123456789</span>
        </div>
        <div class="card-details__btns">
            <button class="card-details__cart btn" type="button">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                d="M14.375 15.2725H5.45313L3.27344 3.28809C3.24793 3.14457 3.17307 3.01447 3.06179 2.92032C2.95051 2.82616 2.80982 2.77386 2.66406 2.77246H1.25"
                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                d="M6.25 18.3975C7.11294 18.3975 7.8125 17.6979 7.8125 16.835C7.8125 15.972 7.11294 15.2725 6.25 15.2725C5.38706 15.2725 4.6875 15.972 4.6875 16.835C4.6875 17.6979 5.38706 18.3975 6.25 18.3975Z"
                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                d="M14.375 18.3975C15.2379 18.3975 15.9375 17.6979 15.9375 16.835C15.9375 15.972 15.2379 15.2725 14.375 15.2725C13.5121 15.2725 12.8125 15.972 12.8125 16.835C12.8125 17.6979 13.5121 18.3975 14.375 18.3975Z"
                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                d="M4.88281 12.1475H14.6953C14.9875 12.1484 15.2706 12.0462 15.4949 11.8591C15.7193 11.6719 15.8704 11.4116 15.9219 11.124L16.875 5.89746H3.75"
                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>В корзину</span>
            </button>

        </div>
        </div>
    </div>
    </div>
</article>
</li>