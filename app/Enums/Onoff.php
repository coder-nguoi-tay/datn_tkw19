<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Onoff extends Enum
{
    const ONLINE = 1;

    const OFFLINE = 2;

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::ONLINE:
                return 'online';
                break;
            case self::OFFLINE:
                return 'offline';
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
