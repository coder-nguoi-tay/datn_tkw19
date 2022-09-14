<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class DisplayInfoFlag extends Enum
{
    const DEFAULT = 0;

    const SHOWFLAG = 1;
}
