<?php

if (!function_exists('userIp')) {
    function userIp()
    {
        return $_SERVER['REMOTE_ADDR'] . '-' . md5($_SERVER['HTTP_USER_AGENT']);
    }
}
if (!function_exists('mobileGenerator')) {
    function mobileGenerator($phoneNumber)
    {
        $phoneRegex = '/^(\+98|098|0098|0)?9\d{9}$/';
        if (preg_match($phoneRegex, $phoneNumber)) {
            return '0' . substr($phoneNumber, -10, 10);
        }
    }
}

if (!function_exists('hashIds')) {
    function hashIds($number)
    {
        $hashids = new \Hashids\Hashids();
        return $hashids->encode($number, 10);
    }
}
