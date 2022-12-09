<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OsiguravajucaKuca;

class OsiguravajucaKucaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OsiguravajucaKuca::factory()->count(20)->create();
    }
}
