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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('service_name', 50);
            $table->decimal('service_price', 5,2);
            $table->integer('service_popularity');
            $table->tinyInteger('archived')->default(1);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        DB::table('services')->insert([
            [
                'user_id' => 1,
                'service_name' => 'Wolfcut L',
                'service_price' => 400,
                'service_popularity' => 3,
                'archived' => 0
            ],
            [
                'user_id' => 2,
                'service_name' => 'Hair Straightening',
                'service_price' => 400,
                'service_popularity' => 3,
                'archived' => 0
            ],
            [
                'user_id' => 3,
                'service_name' => 'Rebond',
                'service_price' => 400,
                'service_popularity' => 6,
                'archived' => 0
            ],
            [
                'user_id' => 4,
                'service_name' => 'Hair Coloring',
                'service_price' => 300,
                'service_popularity' => 7,
                'archived' => 0
            ],
            [
                'user_id' => 5,
                'service_name' => 'Hair Curl',
                'service_price' => 350,
                'service_popularity' => 3,
                'archived' => 0
            ],
            [
                'user_id' => 6,
                'service_name' => 'Hair Wax',
                'service_price' => 250,
                'service_popularity' => 8,
                'archived' => 0
            ],
            [
                'user_id' => 7,
                'service_name' => 'Hair Spa',
                'service_price' => 200,
                'service_popularity' => 9,
                'archived' => 0
            ],
            [
                'user_id' => 8,
                'service_name' => 'Manicure',
                'service_price' => 250,
                'service_popularity' => 15,
                'archived' => 0
            ],
            [
                'user_id'=> 9,
                'service_name'=> 'Pedicure',
                'service_price'=> 300,
                'service_popularity'=> 18,
                'archived'=> 0
            ],
            [
                'user_id'=> 10,
                'service-name'=> 'Footspa',
                'service_price'=> 450,
                'service_popularity'=> 18,
                'archived'=> 0
            ],
            [
                'user_id' => 11,
                'service_name' => 'Wolfcut S',
                'service_price' => 400,
                'service_popularity' => 3,
                'archived' => 0
            ],
            [
                'user_id' => 12,
                'service_name' => 'Hair Straightening',
                'service_price' => 400,
                'service_popularity' => 8,
                'archived' => 0
            ],
            [
                'user_id' => 13,
                'service_name' => 'Rebond',
                'service_price' => 400,
                'service_popularity' => 16,
                'archived' => 0
            ],
            [
                'user_id' => 14,
                'service_name' => 'Hair Coloring',
                'service_price' => 300,
                'service_popularity' => 8,
                'archived' => 0
            ],
            [
                'user_id' => 15,
                'service_name' => 'Hair Curl',
                'service_price' => 350,
                'service_popularity' => 3,
                'archived' => 0
            ],
            [
                'user_id' => 16,
                'service_name' => 'Hair Wax',
                'service_price' => 250,
                'service_popularity' => 7,
                'archived' => 0
            ],
            [
                'user_id' => 17,
                'service_name' => 'Hair Spa',
                'service_price' => 200,
                'service_popularity' => 7,
                'archived' => 0
            ],
            [
                'user_id' => 18,
                'service_name' => 'Manicure',
                'service_price' => 250,
                'service_popularity' => 6,
                'archived' => 0
            ],
            [
                'user_id'=> 19,
                'service_name'=> 'Pedicure',
                'service_price'=> 300,
                'service_popularity'=> 9,
                'archived'=> 0
            ],
            [
                'user_id'=> 20,
                'service-name'=> 'Footspa',
                'service_price'=> 450,
                'service_popularity'=> 18,
                'archived'=> 0
            ]
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
