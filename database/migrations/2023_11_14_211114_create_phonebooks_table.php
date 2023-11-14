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
        Schema::create('phonebooks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('imgUrl');
            $table->string('address');
            $table->string('correspondence_address')->nullable();
            $table->timestamps();

            //$table->foreign('email_id')->references('id')->on('mails')->onDelete('cascade');
            //$table->foreign('phonenumber_id')->references('id')->on('phonenumbers')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phonebooks');
    }
};