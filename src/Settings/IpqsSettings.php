<?php

namespace Astrogoat\Ipqs\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class IpqsSettings extends AppSettings
{
    public string $key;
    public string $ir_click_id;
    public string $utm_content;

    public function rules(): array
    {
        return [
            'key' => Rule::requiredIf($this->enabled === true),
            'ir_click_id' => ['required'],
            'utm_content' => ['required'],
        ];
    }

    public function description(): string
    {
        return 'Interact with Ipqs.';
    }

    public static function group(): string
    {
        return 'ipqs';
    }

    public function section(): array
    {
        return [
            [
                'title' => 'Key',
            ],
            [
                'title' => 'IR Click Id',
                'properties' => ['ir_click_id'],
            ],
            [
                'title' => 'UTM Content',
                'properties' => ['utm_content'],
            ],

        ];
    }
}
