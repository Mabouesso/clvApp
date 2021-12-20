<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdhesionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adhesions', function (Blueprint $table) {
            $table->id();
            $table->date('dateAdhesion');
            $table->double('montantAdhesion');
            $table->boolean('brochureElu');
            $table->boolean('carnetElu');
            $table->foreignId('patient_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adhesions', function (Blueprint $table) {
            $table->dropConstrainedForeignId('patient_id');
        });
        Schema::dropIfExists('adhesions');
    }
}
