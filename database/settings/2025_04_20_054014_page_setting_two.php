<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {

        $this->migrator->add('page.phone', '1234567890');
        $this->migrator->add('page.email', 'smanegeri1cbinong@gmail.com');
        $this->migrator->add('page.website', 'https://sman1cibinong.sch.id');
        $this->migrator->add('page.address', 'Jl. Raya Cibinong No.1, Cibinong, Bogor, Jawa Barat 16914');
        $this->migrator->add('page.operational_hours', 'Senin - Jumat, 07:00 - 16:00');
        $this->migrator->add('page.vision', 'Visi Sekolah');
        $this->migrator->add('page.mission', 'Misi Sekolah');
        $this->migrator->add('page.desc_about', 'SMA Negeri 1 Cibinong adalah sekolah menengah atas yang terletak di Cibinong, Bogor, Jawa Barat. Sekolah ini memiliki visi dan misi untuk menciptakan generasi yang unggul dan berkarakter.');
    }
};
