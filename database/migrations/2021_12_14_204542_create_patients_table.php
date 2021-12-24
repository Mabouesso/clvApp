<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->char('genre');
            $table->date('dateNaissance');
            $table->text('lieuNaissance');
            $table->text('adresse');
            $table->string('telephone1')->unique();
            $table->string('telephone2')->nullable();
            $table->string('email')->nullable();
            $table->string('clan')->nullable();
            $table->string('clanPere')->nullable();
            $table->string('clanMere')->nullable();
            $table->string('clanGrdPere')->nullable();
            $table->string('pays');
            $table->string('ville');
            $table->foreignId('village_id')->constrained();
            $table->unique(['nom','prenom', 'dateNaissance']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropConstrainedForeignId('village_id');
        });
        Schema::dropIfExists('patients');
    }
}
