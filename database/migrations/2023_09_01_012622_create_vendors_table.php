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
        Schema::create('vendors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email', 100)->unique();
            $table->string('username', 100)->unique();
            $table->enum('status', ['verified', 'unverified', 'processed']);
            $table->enum('gender', ['male', 'female']);
            $table->foreignUuid('zip_code_id')->constrained()->cascadeOnDelete();
            $table->string('ktp_image');
            $table->string('vendor_image')->nullable();
            $table->string('phone_number', 15);
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
        Schema::dropIfExists('vendors');
    }
};
