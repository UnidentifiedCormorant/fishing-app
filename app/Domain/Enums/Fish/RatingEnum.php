<?php

namespace App\Domain\Enums\Fish;

enum RatingEnum: string
{
    case COMMON = 'common';
    case RARE = 'rare';
    case EPIC = 'epic';
    case LEGENDARY = 'legendary';

    /**
     * @return array{key: string, value: string}
     */
    public static function toList(): array
    {
        return [
            self::COMMON->value => 'Обычная',
            self::RARE->value => 'Редкая',
            self::EPIC->value => 'Эпическая',
            self::LEGENDARY->value => 'Легендарная',
        ];
    }

    /**
     * @param string $key
     * @return string
     */
    public static function toValue(string $key): string
    {
        return self::toList()[$key];
    }
}
