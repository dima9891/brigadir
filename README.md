# Brigadir

Brigadir site made as a test. 

## TODO List

- main page slider
- advantages
- display products

ЧТО ДОЛЖНО РЕДАКТИРОВАТЬСЯ ИЗ АДМИН-ПАНЕЛИ:
1. Блок со слайдером.
2. Блок преимуществ.
3. Блок товаров. Возможность выбирать какие товары будут отображаться в этом блоке.
Возможность добавлять товары в корзину. - В блоке отображаются товары у которых стоит галочка Рекомендуемые (можно поставить ее в Свойствах не заходя в редактирование товара)
4. Блок акций и предложений - Сюда выводятся записи блога из категории Акции и предложения. Даты начала и окончания акции - в Произвольных полях.
6. Блок контактов - Страницы -> Контакты (редактировать Произвольные поля, если они вдруг не отображаются - зайти в Предпочтения -> Панели -> включить Произвольные поля)

## Technologies used:

- Bedrock

## Plugins used

- Woocommerce
- Duplicate post
- Cyr-to-Lat

# How to set up for local dev

1. Clone repository and run ```composer install``` from the main folder
2. Set up database and change settings in .env file if needed
3. Run Find/Replace in database for proper work (I recommend using https://github.com/interconnectit/Search-Replace-DB)
3. Download 'uploads' folder (it contains all uploaded images) - TODO
4. Place 'uploads' folder in web/app/