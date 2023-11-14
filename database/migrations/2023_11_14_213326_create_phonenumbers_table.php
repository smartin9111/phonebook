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
        Schema::create('phonenumbers', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->unsignedBigInteger('phonebook_id');
            $table->timestamps();

            $table->foreign('phonebook_id')->references('id')->on('phonebooks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phonenumbers');
    }
};