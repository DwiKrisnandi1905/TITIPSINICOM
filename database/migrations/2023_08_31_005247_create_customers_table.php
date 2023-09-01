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
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 100);
            $table->string('username', 100)->unique();
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('pin');
            $table->char('nik', 16);
            $table->enum('status', ['verified', 'unverified', 'processed']);
            $table->date('date_of_birth');
            $table->string('place_of_birth', 100);
            $table->enum('gender', ['male', 'female']);
            $table->string('phone_number', 15);
            $table->string('ktp_image');
            $table->string('ktp_selfie_image');
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
        Schema::dropIfExists('customers');
    }
};
