<?php
if (!function_exists('isUrl')) {
    function isUrl($url, $classes,$NTClass='')
    {
        return \request()->fullUrlIs($url) ? $classes : $NTClass;
    }
}
