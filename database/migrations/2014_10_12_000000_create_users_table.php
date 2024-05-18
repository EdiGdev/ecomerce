<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('unique_code')->unique()->nullable();
            $table->unsignedBigInteger('referrer_id')->nullable();
            $table->decimal('commission_earned', 10, 2)->default(0); // Columna para comisiones ganadas
            $table->unsignedInteger('referral_level')->default(0); // Nivel de referido
            $table->string('phone')->unique()->nullable();
            $table->timestamps();
        
            // Agrega una relación para rastrear el referente
            $table->foreign('referrer_id')->references('id')->on('users');
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
