<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {

            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->integer('total_days');
            $table->integer('guests');
            $table->longText('note')->nullable();
            $table->decimal('discount', 5, 2)->default(0);


            $table->string('payment_id');
            $table->string('payer_id');
            $table->string('payer_email');
            $table->float('amount',10, 2);
            $table->string('currency');
            $table->string('payment_status');
            $table->string('booking_status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
