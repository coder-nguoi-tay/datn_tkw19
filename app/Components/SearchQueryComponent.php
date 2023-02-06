<?php

namespace App\Components;

class SearchQueryComponent
{
    public static function alterQuery($request)
    {
        $query = [];
        foreach ($request->query() as $key => $value) {
            $query[$key] = $value ?? '';
        }

        return $query;
    }
}
