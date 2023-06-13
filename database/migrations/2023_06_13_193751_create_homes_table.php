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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->String('home_name');
            $table->String('email');
            $table->String('phone_no');
            $table->String('address1');
            $table->String('address2');
            $table->String('postcode');
            $table->String('city');
            $table->String('country');
            $table->String('contact_person_name');
            $table->String('contact_person_phone_no');
            $table->String('contact_person_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
