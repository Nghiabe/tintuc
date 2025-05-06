<?php

use Carbon\Carbon;

if (!function_exists('dateTimeFormat')) {
    function dateTimeFormat($date) {
        return Carbon::parse($date)->format('d/m/Y H:i');
    }
}
