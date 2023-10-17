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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
			$table->text('student_image')->nullable();
			$table->string('student_name');
			$table->string('student_father_name')->nullable();
			$table->string('student_father_occupation')->nullable();
			$table->string('gender');
			$table->date('dateofbirth');
			$table->string('contact_number');
			$table->text('email');
			$table->text('address')->nullable();
			$table->string('batch_information');
			$table->string('batch')->nullable();
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
        Schema::dropIfExists('students');
    }
};
