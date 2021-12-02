<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsFromTherapistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_from_therapist', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('therapist_id');
            $table->unsignedBigInteger('patient_id');
            $table->timestamps();

            $table->foreign('therapist_id')->references('id')->on('users');
            $table->foreign('patient_id')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients_from_therapist');

        Schema::table('patients_from_therapist', function($table)
        {
            $table->dropForeign('patients_from_therapist_therapist_id_foreign');
            $table->dropForeign('patients_from_therapist_patient_id_foreign');
        });
    }
}
