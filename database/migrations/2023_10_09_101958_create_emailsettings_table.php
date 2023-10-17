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
        Schema::create('emailsettings', function (Blueprint $table) {
            $table->id();
            $table->text('smtpusername');
            $table->text('smtppassword');
            $table->text('smtphost');
            $table->text('smtpport');
			$table->enum('smtpencrypted', ['tlc', 'ssl'])->default('tlc');
			$table->enum('servertype', ['smtpserver', 'servermail'])->default('servermail');
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
        Schema::dropIfExists('emailsettings');
    }
};
