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
        Schema::create('miscellaneous', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('misc_name', 50);
            $table->decimal('misc_budget', 5,2);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('miscellaneous')->insert([
            [
                'user_id' => 1,
                'misc_name' => 'Snacks',
                'misc_budget' => 800,
            ],
            [
                'user_id' => 2,
                'misc_name' => 'Employees Wages',
                'misc_budget' => 300,
            ],
            [
                'user_id' => 3,
                'misc_name' => 'Internet Load',
                'misc_budget' => 500,
            ],
            [
                'user_id'=> 4,
                'misc_name'=> 'Other Services',
                'misc-budget'=> 250,
            ],
            [
                'user_id'=> 5,
                'misc_name'=> 'Clinic Maintenance',
                'misc-budget'=> 600,
            ],
            [
                'user_id'=> 6,
                'misc_name'=> 'Equipments',
                'misc-budget'=> 700,
            ],
            [
                'user_id'=> 7,
                'misc_name'=> 'Electric Billing',
                'misc-budget'=> 900,
            ],
            [
                'user_id'=> 8,
                'misc_name'=> 'Water Billing',
                'misc-budget'=> 500,
            ],
            [
                'user_id'=> 9,
                'misc_name'=> 'Taxes',
                'misc-budget'=> 900,
            ],
            [
                'user_id'=> 10,
                'misc_name'=> 'Payable Loans',
                'misc-budget'=> 950,
            ],
            [
                'user_id'=> 12,
                'misc_name'=> 'Transportations',
                'misc-budget'=> 600,
            ],
            [
                'user_id'=> 13,
                'misc_name'=> 'Orders and Deliveries',
                'misc-budget'=> 900,
            ],
            [
                'user_id'=> 14,
                'misc_name'=> 'Employees Trainings and Seminars',
                'misc-budget'=> 900,
            ],
            [
                'user_id'=> 15,
                'misc_name'=> 'Medical matters',
                'misc-budget'=> 900,
            ],
            [
                'user_id'=> 16,
                'misc_name'=> 'Business Advertising through Flyers',
                'misc-budget'=> 450,
            ],
            [
                'user_id'=> 17,
                'misc_name'=> 'Rent Pay',
                'misc-budget'=> 950,
            ],
            [
                'user_id'=> 18,
                'misc_name'=> 'Municipal Office Business Est. Shares',
                'misc-budget'=> 500,
            ],
            [
                'user_id'=> 19,
                'misc_name'=> 'Travels and Tours',
                'misc-budget'=> 900,
            ],
            [
                'user_id'=> 20,
                'misc_name'=> 'Charities for a cause',
                'misc-budget'=> 450,
            ],
            [
                'user_id'=> 21,
                'misc_name'=> 'Sponsorship',
                'misc-budget'=> 500,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miscellaneos');
    }
};
