<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class StatusPackage extends Enum
{
    const ACTIVE = 1;
    const INACTIVE = 2;

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::ACTIVE:
                return 'Đang hoạt động';
                break;
            case self::INACTIVE:
                return 'Đã hết hạn';
                break;
            default:
                return '';
                break;
        }
    }
}