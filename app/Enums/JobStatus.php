<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class JobStatus extends Enum
{
    const ACTIVE = 1;

    const INACTIVE = 0;
    public static function getDescription($value): string
    {
        switch ($value) {
            case self::ACTIVE:
                return 'Đã chạy';
                break;
            case self::INACTIVE:
                return 'Bản nháp';
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