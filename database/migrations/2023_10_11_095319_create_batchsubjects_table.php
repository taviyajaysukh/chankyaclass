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
        Schema::create('batchsubjects', function (Blueprint $table) {
            $table->id();
            $table->integer('batch_id');
			$table->integer('teacher_id');
            $table->text('batch_subject');
            $table->text('batch_chapter');
            $table->date('start_subject_date');
            $table->date('end_subject_date');
            $table->time('start_subject_time');
            $table->time('end_subject_time');
			$table->enum('status', ['active', 'deactive'])->default('active');
            $table->string('createdby');
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
        Schema::dropIfExists('batchsubjects');
    }
};
