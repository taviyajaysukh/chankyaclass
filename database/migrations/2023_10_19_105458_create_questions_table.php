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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->integer('subject_id');
            $table->integer('chapter_id');
            $table->text('question');
            $table->text('optiona');
            $table->text('optionb');
            $table->text('optionc');
            $table->text('optiond');
            $table->string('right_answer');
            $table->integer('add_marks');
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
        Schema::dropIfExists('questions');
    }
};
