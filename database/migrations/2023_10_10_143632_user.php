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
        Schema::create('user', function (Bluprint $table) {
	    $table->id(); $table->string('nama');
	    $table->string('email')->unique();
	    $table->int('umur');
	    $table->string('password');
	    $table->string('role')->nullable();

	    $table->timestamp('email_verified_at')->nullable();
	    $table->rememberToken()->nullable();
	    $table->timestamps();
	});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
