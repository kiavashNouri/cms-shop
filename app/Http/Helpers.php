<?php
if (!function_exists('isUrl')) {
    function isUrl($url, $classes)
    {
        return \request()->fullUrlIs($url) ? $classes : '';
    }
}
