<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('service_id');
            $table->date('transaction_date');
            $table->decimal('payment', 5,2);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');

        });

        DB::table('transaction')->insert([
            [
                'user_id' => 1,
                'product_id' => 1,
                'service_id' => 1,
                'transaction_date' => now(),
                'payment' => 500.00
            ],
            [
                'user_id' => 2,
                'product_id' => 2,
                'service_id' => 2,
                'transaction_date' => now(),
                'payment' => 400.00
            ],
            [
                'user_id' => 3,
                'product_id' => 3,
                'service_id' => 3,
                'transaction_date' => now(),
                'payment' => 500.00
            ],
            [
               'user_id' => 4,
                'product_id' => 4,
                'service_id' => 4,
                'transaction_date' => now(),
                'payment' => 950.00
            ],
            [
                'user_id' => 5,
                 'product_id' => 5,
                 'service_id' => 5,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 6,
                 'product_id' => 6,
                 'service_id' => 6,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 7,
                 'product_id' => 7,
                 'service_id' => 7,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 8,
                 'product_id' => 8,
                 'service_id' => 8,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 9,
                 'product_id' => 9,
                 'service_id' => 9,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 10,
                 'product_id' => 10,
                 'service_id' => 10,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 11,
                 'product_id' => 1,
                 'service_id' => 11,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 12,
                 'product_id' => 2,
                 'service_id' => 12,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 13,
                 'product_id' => 3,
                 'service_id' => 13,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 14,
                 'product_id' => 4,
                 'service_id' => 14,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 15,
                 'product_id' => 5,
                 'service_id' => 15,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 16,
                 'product_id' => 6,
                 'service_id' => 16,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 17,
                 'product_id' => 7,
                 'service_id' => 17,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 18,
                 'product_id' => 8,
                 'service_id' => 18,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 19,
                 'product_id' => 9,
                 'service_id' => 19,
                 'transaction_date' => now(),
                 'payment' => 950.00
             ],
             [
                'user_id' => 20,
                 'product_id' => 10,
                 'service_id' => 20,
                 'transaction_date' => now(),
                 'payment' => 980.00
             ]

        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
