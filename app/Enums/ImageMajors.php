<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ImageMajors extends Enum
{
    const ONE =  1;
    const Two =  2;
    const Three = 3;
    const Four = 4;
    const Five = 5;
    public static function getDescription($value): string
    {
        switch ($value) {
            case self::ONE:
                return 'https://www.topcv.vn/v4/image/job-discover/briefcase.svg';
                break;
            case self::Two:
                return 'https://www.topcv.vn/v4/image/job-discover/start-up.svg';
                break;
            case self::Three:
                return 'https://www.topcv.vn/v4/image/job-discover/money-bag.svg';
                break;
            case self::Four:
                return 'https://www.topcv.vn/v4/image/job-discover/code.svg';
                break;
            case self::Five:
                return 'https://www.topcv.vn/v4/image/job-discover/id-card.svg';
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