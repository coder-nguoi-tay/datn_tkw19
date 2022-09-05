<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class JobType extends Enum
{
    const Option1 = 1;

    const Option2 = 2;

    const Option3 = 3;

    const Option4 = 4;

    public static function getDescription($value): string
    {
        $arrTxt = [
            1 => 'option 1',
            2 => 'option 2',
            3 => 'option 3',
            4 => 'option 4',
        ];
        if (isset($arrTxt[$value])) {
            return $arrTxt[$value];
        }

        return '';
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
