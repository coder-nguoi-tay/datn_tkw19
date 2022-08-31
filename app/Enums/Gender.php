<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Gender extends Enum
{
    const MALE = 1;
    const FEMALE = 2;
    const OTHER = 3;

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::MALE:
                return '男性';
                break;
            case self::FEMALE:
                return '女性';
                break;
            case self::OTHER:
                return 'その他';
                break;
            default:
                return '';
                break;
        }
    }

    public static function parseArray()
    {
        $data = [];
        foreach (self::getValues() as $value) {
            $data[] = ['label' => self::getDescription($value), 'id' => $value];
        }
        return $data;
    }
}
