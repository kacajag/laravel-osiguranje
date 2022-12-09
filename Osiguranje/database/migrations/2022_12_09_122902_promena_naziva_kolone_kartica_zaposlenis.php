<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromenaNazivaKoloneKarticaZaposlenis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zaposlenis', function (Blueprint $table) {
            $table->renameColumn('kartica', 'broj_kartice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zaposlenis', function (Blueprint $table) {
            $table->renameColumn('broj_kartice', 'kartica');
        });
    }
}
