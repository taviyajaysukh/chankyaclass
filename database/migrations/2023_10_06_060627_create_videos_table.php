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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
			$table->text('title');
			$table->text('batch');
			$table->text('subject');
			$table->text('chapter');
			$table->text('source')->nullable();
			$table->text('url')->nullable();
			$table->text('video')->nullable();
			$table->text('description')->nullable();
			$table->string('createdby');
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
        Schema::dropIfExists('videos');
    }
};
