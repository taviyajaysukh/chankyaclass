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
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
            $table->string('paper_type');
            $table->string('paper_name');
            $table->string('time_duration');
            $table->string('mocktest_schedule_date')->nullable();
            $table->string('mocktest_schedule_time')->nullable();
            $table->unsignedBigInteger('batch_id');
            $table->integer('question_ids')->nullable();
            $table->integer('negative_marketing_value')->nullable();
            $table->integer('number_of_question')->nullable();
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
        Schema::dropIfExists('papers');
    }
};
