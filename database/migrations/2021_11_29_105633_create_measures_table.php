<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('hand');
            $table->string('gender');
            $table->float('hand_length');
            $table->float('hand_breadth');
            $table->float('height_difference_1_3');
            $table->float('height_difference_3_5');
            $table->float('span_1_2');
            $table->float('span_1_3');
            $table->float('span_1_4');
            $table->float('span_1_5');
            $table->float('span_2_3');
            $table->float('span_2_4');
            $table->float('span_2_5');
            $table->float('span_3_4');
            $table->float('span_3_5');
            $table->float('span_4_5');
            $table->timestamps();

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
        Schema::table('measures', function($table)
        {
            $table->dropForeign('measures_patient_id_foreign');
        });

        Schema::dropIfExists('measures');
    }
}
