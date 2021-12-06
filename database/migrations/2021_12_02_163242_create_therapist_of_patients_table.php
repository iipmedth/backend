<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTherapistOfPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapist_of_patients', function (Blueprint $table) {
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
        Schema::dropIfExists('therapist_of_patients');

        Schema::table('therapist_of_patients', function($table)
        {
            $table->dropForeign('therapist_of_patients_therapist_id_foreign');
            $table->dropForeign('therapist_of_patients_patient_id_foreign');
        });
    }
}
