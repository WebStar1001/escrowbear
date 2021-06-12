<?php

if (!function_exists('profile_path')) {

    function profile_path($path)
    {
        return asset('storage/profile/' . $path);
    }

}
