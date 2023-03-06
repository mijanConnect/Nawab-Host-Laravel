<?php

function money(float $amount, $currency = 'BDT'): false|string
{
    $pattern = $currency === 'BDT' ? '#,###' : null;

    return (new NumberFormatter('en', 0, $pattern))->formatCurrency($amount, $currency);
}

function currency($name = false): int|string
{
    static $num = null;
    static $str = null;

    if ($num === null) {
        $num = (int) session('currency', 2);
    }

    if ($str === null) {
        $str = config('services.whmcs.currencies')[$num] ?? 'BDT';
    }

    return $name ? $str : $num;
}
