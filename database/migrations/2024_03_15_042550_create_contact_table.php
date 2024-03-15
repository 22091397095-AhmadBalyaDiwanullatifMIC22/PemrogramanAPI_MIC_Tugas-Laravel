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
        Schema::create('contact', function (Blueprint $table) {
            $table->id_contact();
            $table->string('first_name_contact');
            $table->string('last_name_contact');
            $table->string('email_contact');
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
