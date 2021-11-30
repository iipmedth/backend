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
            $table->float('height_difference_1-3');
            $table->float('height_difference_3-5');
            $table->float('spread_1-2');
            $table->float('spread_1-3');
            $table->float('spread_1-4');
            $table->float('spread_1-5');
            $table->float('spread_2-3');
            $table->float('spread_2-4');
            $table->float('spread_2-5');
            $table->float('spread_3-4');
            $table->float('spread_3-5');
            $table->float('spread_4-5');
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
