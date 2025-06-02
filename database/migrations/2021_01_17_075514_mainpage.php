<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mainpage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainpage', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('groups_id');
            $table->string('picture');
            $table->string('subject');
            $table->string('mainpage');
            $table->string('groups');
            $table->string('rols');
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
        //
    }
}
