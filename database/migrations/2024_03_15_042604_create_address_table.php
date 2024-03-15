<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createAddressTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id_address();
            $table->foreignId('id_contact')->constrained('contacts');
            $table->string('street_address');
            $table->string('city_address');
            $table->string('province_address');
            $table->string('country_address');
            $table->string('postal_code_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
};
