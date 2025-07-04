<?php

namespace App\Enums;

enum ProductType: string
{
    case ELECTRONICS = 'electronics';
    case CLOTHING = 'clothing';
    case HOME_APPLICATION = 'home_appliances';
    case BOOKS = 'books';
    case TOYS = 'toys';
    case SPORTS = 'sports';
    case HEALTH_AND_BEAUTY = 'health_and_beauty';
    case FOOD = 'food';
    case OTHERS = 'others';

    public static function label(): array
    {
        return [
            self::ELECTRONICS->value => 'Electronics',
            self::CLOTHING->value => 'Clothing',
            self::HOME_APPLICATION->value => 'Home Appliances',
            self::BOOKS->value => 'Books',
            self::TOYS->value => 'Toys',
            self::SPORTS->value => 'Sports',
            self::HEALTH_AND_BEAUTY->value => 'Health & Beauty',
            self::FOOD->value => 'Food',
            self::OTHERS->value => 'Others',
        ];
    }

}
