<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createUserTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {

        Schema::create('user_laravel', function (Blueprint $table) {
            $table->id();
            $table->string('username_user')->unique();
            $table->string('password_user');
            $table->string('name_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
