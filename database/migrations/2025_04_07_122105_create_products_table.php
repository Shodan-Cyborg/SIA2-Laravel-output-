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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('product_name', 50);
            $table->decimal('product_price', 5,2);
            $table->integer('product_quantity');
            $table->integer('sales_volume');
            $table->tinyInteger('archived')->default(1);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        DB::table('products')->insert([
            [
                'user_id' => 1,
                'product_name' => 'Keratin',
                'product_price' => '200',
                'product_quantity' => '5',
                'sales_volume' => '500',
                'archived' => 0

            ],
            [
                'user_id' => 2,
                'product_name' => 'Sunsilk Black',
                'product_price' => '360',
                'product_quantity' => '35',
                'sales_volume' => '400',
                'archived' => 0
            ],
            [
                'user_id' => 3,
                'product_name' => 'Palmolive',
                'product_price' => '170',
                'product_quantity' => '29',
                'sales_volume' => '250',
                'archived' => 0
            ],
            [
                'user_id' => 4,
                'product_name' => 'Dove',
                'product_price' => '200',
                'product_quantity' => '12',
                'sales_volume' => '500',
                'archived' => 0
            ],
            [
                'user_id' => 5,
                'product_name' => 'Garnier',
                'product_price' => '350',
                'product_quantity' => '9',
                'sales_volume' => '400',
                'archived' => 0
            ],
            [
                'user_id' => 6,
                'product_name' => 'Herbal Essences',
                'product_price' => '300',
                'product_quantity' => '12',
                'sales_volume' => '450',
                'archived' => 0
            ],
            [
                'user_id'=> 7,
                'product_name'=> 'Joico Moisture',
                'product_price'=> '250',
                'product_quantity'=> '8',
                'sales_volume'=> '200',
                'archived'=> 0
            ],
            [
                'user_id'=> 8,
                'product_name'=> 'Kerasilk',
                'product_price'=> '300',
                'product_quantity'=> '7',
                'sales_volume'=> '450',
                'archived'=> 0
            ],
            [
                'user_id'=> 9,
                'product_name'=> 'Kerastase',
                'product_price'=> '350',
                'product_quantity'=> '12',
                'sales_volume'=> '500',
                'archived'=> 0
            ],
            [
                'user_id'=> 10,
                'product_name'=> 'Kristin Ess',
                'product_price'=> '400',
                'product_quantity'=> '6',
                'sales_volume'=> '500',
                'archived'=> 0
            ],
            [
                'user_id'=> 11,
                'product_name'=> 'Nexxus Frizz',
                'product_price'=> '300',
                'product_quantity'=> '7',
                'sales_volume'=> '250',
                'archived'=> 0
            ],
            [
                'user_id'=> 12,
                'product_name'=> 'Palmolive',
                'product_price'=> '250',
                'product_quantity'=> '8',
                'sales_volume'=> '250',
                'archived'=> 0
            ],
            [
                'user_id'=> 13,
                'product_name'=> 'Pantene Moisture',
                'product_price'=> '300',
                'product_quantity'=> '9',
                'sales_volume'=> '350',
                'archived'=> 0
            ],
            [
                'user_id'=> 14,
                'product_name'=> 'Revlon Colorsilk',
                'product_price'=> '300',
                'product_quantity'=> '6',
                'sales_volume'=> '250',
                'archived'=> 0
            ],
            [
                'user_id'=> 15,
                'product_name'=> 'TRESEMME',
                'product_price'=> '500',
                'product_quantity'=> '7',
                'sales_volume'=> '250',
                'archived'=> 0
            ],
            [
                'user_id'=> 16,
                'product_name'=> 'VitaKeratin',
                'product_price'=> '450',
                'product_quantity'=> '8',
                'sales_volume'=> '250',
                'archived'=> 0
            ],
            [
                'user_id'=> 17,
                'product_name'=> 'Sunsilk Sakura Blossom',
                'product_price'=> '350',
                'product_quantity'=> '9',
                'sales_volume'=> '250',
                'archived'=> 0
            ],
            [
                'user_id'=> 18,
                'product_name'=> 'Lorea`l Paris',
                'product_price'=> '850',
                'product_quantity'=> '8',
                'sales_volume'=> '500',
                'archived'=> 0
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
