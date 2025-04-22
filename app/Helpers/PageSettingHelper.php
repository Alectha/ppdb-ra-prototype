<?php

namespace App\Helpers;

use App\Settings\PageSetting;

class PageSettingHelper
{
    public static function get()
    {
        return app(PageSetting::class);
    }
}
