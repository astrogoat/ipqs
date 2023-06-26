<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateIpqsSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('ipqs.enabled', false);
        $this->migrator->add('ipqs.key', '');
        $this->migrator->add('ipqs.ir_click_id', '');
        $this->migrator->add('ipqs.utm_content', '');
    }

    public function down()
    {
        $this->migrator->delete('ipqs.enabled');
        $this->migrator->delete('ipqs.key');
        $this->migrator->delete('ipqs.ir_click_id');
        $this->migrator->delete('ipqs.utm_content');
    }
}
