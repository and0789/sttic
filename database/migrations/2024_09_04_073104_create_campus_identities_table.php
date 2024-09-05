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
        Schema::create('campus_identities', function (Blueprint $table) {
            $table->id();
            $table->string('campus_name');
            $table->string('abbreviated_name');
            $table->string('campus_logo');
            $table->string('campus_email');
            $table->string('campus_telephone');
            $table->string('address');
            $table->string('campus_twitter')->nullable();
            $table->string('campus_instagram')->nullable();
            $table->string('campus_linkedin')->nullable();
            $table->string('campus_youtube')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campus_identities');
    }
};
