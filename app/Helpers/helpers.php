<?php

use Illuminate\Support\Facades\URL;

if (!function_exists('amount')) {
    function amount($value)
    {
        return number_format($value, 2); // Example logic to format a number
    }
}


if (!function_exists('amount')) {
    /**
     * Format the given amount as a currency.
     *
     * @param  mixed $value
     * @return string
     */
    function amount($value)
    {
        return number_format((float) $value, 2, '.', ','); // Formats the number with 2 decimal points and commas
    }
}


if (!function_exists('get_settings')) {
    function get_settings($setting_key)
    {
        $setting_data = \App\Models\Settings::where("settings_key", $setting_key)->first();
        return @$setting_data->settings_value;
    }
}

// if (!function_exists('asset_url')) {
//     function asset_url($path)
//     {
//         return URL::asset('public/'.$path);
//     }
// }
if (!function_exists('asset_url')) {
    function asset_url($path)
    {
        return URL::asset($path);
    }
}



// if (!function_exists('assetFromPublic')) {
//     function assetFromPublic($path)
//     {
//         return URL::asset('public/'.$path);
//     }
// }
if (!function_exists('assetFromPublic')) {
    function assetFromPublic($path)
    {
        return URL::asset($path);
    }
}
if (!function_exists('image_url')) {
    /**
     * Get the URL for images stored in the public/images folder.
     *
     * @param string $imageName
     * @return string
     */
    function image_url($imageName)
    {
        return URL::asset('/storage/app/public/images/' . $imageName);
    }
}

