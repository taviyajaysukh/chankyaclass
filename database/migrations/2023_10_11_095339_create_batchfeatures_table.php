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
        Schema::create('batchfeatures', function (Blueprint $table) {
            $table->id();
            $table->integer('batch_id');
            $table->text('heading');
            $table->longtext('feature');
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
        Schema::dropIfExists('batchfeatures');
    }
};
