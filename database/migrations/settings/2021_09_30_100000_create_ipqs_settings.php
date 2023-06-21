<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateIpqsSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('ipqs.enabled', false);
        // $this->migrator->add('ipqs.url', '');
        // $this->migrator->addEncrypted('ipqs.access_token', '');
    }

    public function down()
    {
        $this->migrator->delete('ipqs.enabled');
        // $this->migrator->delete('ipqs.url');
        // $this->migrator->delete('ipqs.access_token');
    }
}
