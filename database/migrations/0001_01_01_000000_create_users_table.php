<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'staff'])->default('admin');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        // Insert users with hashed passwords
        DB::table('users')->insert([
            [
                'name' => 'Levan',
                'email' => 'levantagubar3195@gmail.com',
                'password' => Hash::make('password'), // Hashed password
                'role' => 'admin'
            ],
            [
                'name' => 'Brillyn',
                'email' => 'brillyn_sugarysweet16@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin'
            ],
            [
                'name' => 'Richard',
                'email' => 'richard_canoy050593@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin'
            ],
            [
                'name' => 'Vaughn',
                'email' => 'vaughnman@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Gabriel',
                'email' => 'occ.gabrielmendoza@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Adawyah',
                'email' => 'occ.adawyah_ampaso@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Anabelle',
                'email' => 'occ.anabelle_armero@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Dexter',
                'email' => 'occ.dexter_abing@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Michael Angelocinth',
                'email' => 'occ.micheal_buencamiming@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Kurt Celocia',
                'email' => 'occ.kurt_seloso@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Jef Magdale',
                'email' => 'occ.jef_magdalena@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Richly Bagongon',
                'email' => 'occ.richly_baungon@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Michael Flores',
                'email' => 'occ.michael_flores_de_mayo@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Ian Vincent Madayag',
                'email' => 'occ.madayag_damulag@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Christian Yurong',
                'email' => 'occ.yurong_rong@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Mark John Bongolto',
                'email' => 'occ.kupal_adonisGayBar@gmail.com',
                'password' => Hash::make('deepthroat'),
                'role' => 'staff'
            ],
            [
                'name' => 'Ian James Buna',
                'email' => 'occ.bonakid_james@gmail.com',
                'password' => Hash::make('bonakid'),
                'role' => 'staff'
            ],
            [
                'name' => 'Ace Roger Zapanta',
                'email' => 'occ.anal_alas@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Jhonrey Mendiola',
                'email' => 'occ.nonchalant_mendiolaBridge@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Raven Anabieza',
                'email' => 'occ.bossMafia_rave@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ],
            [
                'name' => 'Norway Mangorangca',
                'email' => 'occ.norwegian_sognafjorden@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'staff'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
