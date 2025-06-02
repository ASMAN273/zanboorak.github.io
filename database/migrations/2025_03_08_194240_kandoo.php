<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kandoo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kandoo', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->bigInteger('id_beehive');
            $table->bigInteger('id_mother');
            $table->string('cloni_type');
            $table->string('box_number');
            $table->string('age_queen');
            $table->string('qeen_race');
            $table->string('shakhoon');
            $table->string('picture');
            $table->string('bimari');
            $table->string('date_bazdid');
            $table->string('description');
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
