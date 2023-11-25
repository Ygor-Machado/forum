<?php

namespace App\Helpers;

use App\Enums\SupportStatus;

if (!function_exists('getStatusSupport')) {
    function getStatusSupport( string $status): string
    {
       return SupportStatus::fromValue($status);
    }
}
