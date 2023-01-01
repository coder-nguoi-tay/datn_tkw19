<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class LeverPackageCompany extends Enum
{
    const VIP1 = 1;
    const VIP2 = 2;
    const VIP3 = 3;
    const VIP4 = 4;

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::VIP1:
                return 'VIP 1';
                break;
            case self::VIP2:
                return 'VIP 2';
                break;
            case self::VIP3:
                return 'VIP 3';
                break;
            case self::VIP4:
                return 'VIP 4';
                break;
            default:
                return '';
                break;
        }
    }
}