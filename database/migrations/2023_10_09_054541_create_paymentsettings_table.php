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
        Schema::create('paymentsettings', function (Blueprint $table) {
            $table->id();
			$table->text('razorpaykeyid');
			$table->text('razorpaysecretkey');
			$table->text('paypalclientid');
			$table->text('paypalsandboxaccount');
			$table->text('currency');
			$table->string('createdby');
			$table->enum('paymenttype', ['paypal', 'razorpay'])->default('razorpay');
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
        Schema::dropIfExists('paymentsettings');
    }
};
