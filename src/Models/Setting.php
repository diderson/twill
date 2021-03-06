<?php

namespace A17\Twill\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasTranslation;

class Setting extends Model
{
    use HasTranslation, HasMedias;

    public $useTranslationFallback = true;

    protected $fillable = [
        'key',
        'section',
    ];

    public $translatedAttributes = [
        'value',
        'locale',
        'active',
    ];

    public function getTranslationModelNameDefault()
    {
        return "A17\Twill\Models\Translations\SettingTranslation";
    }

    public function getTable()
    {
        return config('twill.settings_table', 'twill_settings');
    }
}
