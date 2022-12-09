<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaKarticaZaposleni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zaposleni', function (Blueprint $table) {
            Schema::table('zaposlenis', function (Blueprint $table) {
                $table->after('pozicija', function ($table) {
                    $table->string('kartica')->unique();
                });
    
            });
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zaposleni', function (Blueprint $table) {
            $table->dropColumn('kartica');
        });
    }
}
