<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startexams', function (Blueprint $table) {
            $table->id();
			$table->integer('batch_id');
            $table->integer('student_id')->nullable();
            $table->string('examdate');
            $table->integer('total_questions');
            $table->integer('total_questions_attempt');
            $table->integer('currect_answers');
            $table->integer('wrong_answers');
            $table->double('percentage',8,2);
            $table->string('start_time');
            $table->string('submit_time');
            $table->string('time_taken');
            $table->integer('total_marks');
            $table->string('negative_marketing')->nullable();
            $table->string('result')->nullable();
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
        Schema::dropIfExists('startexams');
    }
};
