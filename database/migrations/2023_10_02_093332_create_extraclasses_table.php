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
        Schema::create('extraclasses', function (Blueprint $table) {
            $table->id();
            $table->string('teacher');
            $table->string('batch');
            $table->date('date');
            $table->time('starttime');
            $table->time('endtime');
            $table->text('description');
			$table->enum('status', ['active', 'deactive'])->default('active');
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
        Schema::dropIfExists('extraclasses');
    }
};
