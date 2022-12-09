<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\OsiguravajucaKucaSeeder;
use Database\Seeders\ZaposleniSeeder;
use Database\Seeders\KlijentSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ok = new OsiguravajucaKucaSeeder();
        $za = new Zaposleniseeder();
        $kl = new KlijentSeeder();

        $ok->run();
        $za->run();
        $kl->run();

    }
}
