<?php

namespace Slavytuch\ImshopSdk\Feed\DTO;

use DateTime;
use Spatie\LaravelData\Data;

class OfferDTO extends Data
{
    public function __construct(
        /**
         * Идентификатор товара
         */
        public int|string $id,
        /**
         * Доступность товара
        */
        public bool $available,
        /**
         * Дата релиза (для сортировки по старым/новым товарам)
        */
        public string|DateTime|null $publishedOn = null,
        /**
         * URL-ссылка на страницу с 3D-моделью товара
        */
        public ?string $itemPreviewUrl = null,
        /**
         * Кратность товара, с которой можно добавлять его в корзину
        */
        public float $fraction = 1,
        /**
         * Элемент объединяет все предложения, которые являются вариациями одной модели
         */
        public int|string|null $groupId = null,
        /**
         * Дополнительный идентификатор товара (например, из 1С)
         */
        public int|string|null $uuid = null,
        /**
         * URL-ссылка на картинку с размерами для примерки
         */
        public ?string $sizeGridImage = null,
        public ?string $barcode = null,
        public array $barcodeList = [],
        public ?string $name = null,
        public ?string $url = null,
        public int $sort = 500,
        public ?string $guid = null,
        public ?string $vendor = null,
        public ?string $vendorCode = null,
        public ?string $model = null,
        public ?string $typePrefix = null,
        public int|string|null $categoryId = null,
        public array $categoryIdList = [],
        public ?string $googleProductCategory = null,

    ) {
    }
}