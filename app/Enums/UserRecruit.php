<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserRecruit extends Enum
{
    const TEN = 1;
    const TWENTY = 2;
    const THIRTY = 3;
    const FORTY = 4;
    const FIFTY = 5;

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::TEN:
                return '10 người';
                break;
            case self::TWENTY:
                return '20 người';
                break;
            case self::THIRTY:
                return '30 người';
                break;
            case self::FORTY:
                return '40 người';
                break;
            case self::FIFTY:
                return '50 người';
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