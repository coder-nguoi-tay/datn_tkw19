<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserType extends Enum
{
    const PERSON = 1;

    const BESINESS = 2;

    const COMPANY = 3;

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::PERSON:
                return '個人';
                break;

            case self::BESINESS:
                return '個人事業主';
                break;
            case self::COMPANY:
                return '法人';
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
