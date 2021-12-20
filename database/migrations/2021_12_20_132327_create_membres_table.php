<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->date('dateAdhésion');
            $table->double('fraisAdhésion');
            $table->char('livretElu');
            $table->char('brochureElu');
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
        Schema::table('membres', function (Blueprint $table) {
            $table->dropConstrainedForeignId('patient_id');
        });
        Schema::dropIfExists('membres');
    }
}
