<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createContactTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contact_laravel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_contact');
            $table->foreign('id_contact')->references('id')->on('contact');
            $table->string('first_name_contact');
            $table->string('last_name_contact');
            $table->string('email_contact')->unique();
            $table->string('phone_contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
};
