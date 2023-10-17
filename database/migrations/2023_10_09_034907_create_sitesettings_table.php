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
        Schema::create('sitesettings', function (Blueprint $table) {
            $table->id();
			$table->text('feviconicon')->nullable();
			$table->text('sitelogo')->nullable();
			$table->text('siteminilogo')->nullable();
			$table->text('sitepreloader')->nullable();
			$table->text('sitetitle');
			$table->text('siteauthorname');
			$table->text('sitekeywords');
			$table->text('sitedescription');
			$table->text('enrollmentword');
			$table->text('copyrighttext');
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
        Schema::dropIfExists('sitesettings');
    }
};
