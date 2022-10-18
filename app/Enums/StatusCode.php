<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class StatusCode extends Enum
{
    const OK = 200;

    const CREATED = 201;

    const NO_CONTENT = 204;

    const NOT_MODIFIED = 304;

    const BAD_REQUEST = 400;

    const UNAUTHORIZED = 401;

    const FORBIDDEN = 403;

    const NOT_FOUND = 404;

    const METHOD_NOT_ALLOWED = 405;

    const GONE = 410;

    const UNSUPOPPER_MEDIA_TYPE = 415;

    const UNPROCESSABLE_ENTITY = 422;

    const TOO_MANY_REQUEST = 429;

    const PARAMS_ERR = 600;

    const INTERNAL_ERR = 500;

    const ERROR = 'error';

    const SUCCESS = 'success';

    const WARNING = 'warning';
    
}
