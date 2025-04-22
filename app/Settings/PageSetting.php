<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class PageSetting extends Settings
{

    public string $sitename;
    public string $slogan;
    public string $slogan_desc;
    public string $periode_desc;
    public string $persayratan_desc;
    public string $contact_desc;
    public string $footer_desc;
    public string $phone;
    public string $email;
    public string $website;
    public string $address;
    public string $operational_hours;
    public string $vision;
    public string $mission;
    public string $desc_about;

    public static function group(): string
    {
        return 'page';
    }
}