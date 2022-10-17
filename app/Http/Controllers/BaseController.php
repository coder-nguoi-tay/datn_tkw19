<?php

namespace App\Http\Controllers;

use App\Enums\OperationType;
use App\Models\OperationLog;
use Auth;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Log;

class BaseController extends Controller
{
    public function setFlash($message, $mode = 'success', $urlRedirect = '')
    {
        session()->forget('Message.flash');
        session()->push('Message.flash', [
            'message' => $message,
            'mode' => $mode,
            'urlRedirect' => $urlRedirect,
        ]);
    }

    public function setFlashUser($message, $mode = 'success', $urlRedirect = '')
    {
        session()->forget('Message.flashPage');
        session()->push('Message.flashPage', [
            'message' => $message,
            'mode' => $mode,
            'urlRedirect' => $urlRedirect,
        ]);
    }

    public static function newListLimit($query)
    {
        $newSizeLimit = 20;
        $arrPageSize = [20, 50, 100];
        if (isset($query['limit_page'])) {
            $newSizeLimit = (($query['limit_page'] === '') || ! in_array($query['limit_page'], $arrPageSize)) ? $newSizeLimit : $query['limit_page'];
        }
        if (((isset($query['limit_page']))) && (! empty($query->query('limit_page')))) {
            $newSizeLimit = (! in_array($query->query('limit_page'), $arrPageSize)) ? $newSizeLimit : $query->query('limit_page');
        }

        return $newSizeLimit;
    }

    /**
     * [escapeLikeSentence description]
     * @param  [type]  $str    :search conditions
     * @param  bool $before : add % before
     * @param  bool $after  : add % after
     * @return [type]          [description]
     */
    public function escapeLikeSentence($column, $str, $before = true, $after = true)
    {
        $result = str_replace('\\', '[\]', $this->mbTrim($str)); // \ -> \\
        $result = str_replace('%', '\%', $result); // % -> \%
        $result = str_replace('_', '\_', $result); // _ -> \_

        return [[$column, 'LIKE', (($before) ? '%' : '').$result.(($after) ? '%' : '')]];
    }

    public function handleSearchQuery($str, $before = true, $after = true)
    {
        $result = str_replace('\\', '[\]', $this->mbTrim($str)); // \ -> \\
        $result = str_replace('%', '\%', $result); // % -> \%
        $result = str_replace('_', '\_', $result); // _ -> \_

        return (($before) ? '%' : '').$result.(($after) ? '%' : '');
    }

    public function checkPaginatorList($query)
    {
        if ($query->currentPage() > $query->lastPage()) {
            return true;
        }

        return false;
    }

    public function mbTrim($string)
    {
        $whitespace = '[\s\0\x0b\p{Zs}\p{Zl}\p{Zp}]';
        $ret = preg_replace(sprintf('/(^%s+|%s+$)/u', $whitespace, $whitespace), '', $string);

        return $ret;
    }

    /**
     * マルチバイト対応のtrim
     *
     * 文字列先頭および最後の空白文字を取り除く
     *
     * @param  string  空白文字を取り除く文字列
     * @return  string
     */
    public function checkRfidCode($rfidCode)
    {
        return preg_match('/^[a-zA-Z0-9][a-zA-Z0-9]*$/i', $rfidCode);
    }

    public function checkReturnCsvContent($column)
    {
        $ret = 0;
        if ($column == '') {
            $ret = 1; // Blank OR NULL
        } elseif (! $this->checkRfidCode($column)) {
            $ret = 2; // Error formart
        }

        return $ret;
    }

    public function logInfo($request, $message = '')
    {
        Log::channel('access_log')->info([
            'url' => url()->full(),
            'method' => $request->getMethod(),
            'data' => $request->all(),
            'message' => $message,
        ]);
    }

    public function logError($request, $message = '')
    {
        Log::channel('access_log')->error([
            'url' => url()->full(),
            'method' => $request->getMethod(),
            'data' => $request->all(),
            'message' => $message,
        ]);
    }

    public function logWarning($request, $message = '')
    {
        Log::channel('access_log')->warning([
            'url' => url()->full(),
            'method' => $request->getMethod(),
            'data' => $request->all(),
            'message' => $message,
        ]);
    }

    public function convertShijis($text)
    {
        return mb_convert_encoding($text, 'SJIS', 'UTF-8');
    }

    public function saveOperationLog($request, $operationType = OperationType::INSERT)
    {
        $requestUri = $request->getRequestUri();
        $guard = isset(explode('/', $requestUri)[1]) ? explode('/', $requestUri)[1] : 'system';
        $operationLog = new OperationLog();
        $operationLog->operation_log_datetime = Carbon::now();
        $operationLog->screen_name = $requestUri;
        $operationLog->user_id = Auth::guard($guard)->user() === null ? null : Auth::guard($guard)->user()->id;
        $operationLog->operation_name = $request->route()->getActionMethod();
        $operationLog->operation_type = $operationType;
        $operationValue = $request->all();
        unset($operationValue['_token']);
        unset($operationValue['_method']);
        unset($operationValue['password']);
        $operationValue['ip'] = $request->ip();
        $operationValue['user_agent'] = $request->server('HTTP_USER_AGENT');
        $operationLog->operation_value = $operationValue;
        $operationLog->save();
    }
}
