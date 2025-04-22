<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {

        $this->migrator->add('page.sitename', 'SMA Negeri 1 Cibinong');
        $this->migrator->add('page.slogan', 'SMA Negeri 1 Cibinong');
        $this->migrator->add('page.slogan_desc', 'SMA Negeri 1 Cibinong');
        $this->migrator->add('page.periode_desc', 'Periode Pendaftaran 2025/2026');
        $this->migrator->add('page.persayratan_desc', 'Persyaratan Pendaftaran');
        $this->migrator->add('page.contact_desc', 'Kontak Kami');
        $this->migrator->add('page.footer_desc', 'Hak Cipta &copy; 2025 SMA Negeri 1 Cibinong. All rights reserved.');
    }
};
