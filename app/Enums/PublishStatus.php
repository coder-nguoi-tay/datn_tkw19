<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PublishStatus extends Enum
{
    const UNPUBLISH = 0;

    const PUBLISH = 1;

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::UNPUBLISH:
                return '非公開';
                break;
            case self::PUBLISH:
                return '公開';
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
