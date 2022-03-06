<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tadikas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('ic_num');
            $table->string('tel_no');
            $table->string('the_sex');
            $table->string('consent');
            $table->string('complaint');
            $table->string('mh');
            $table->string( 'dh');
            $table->string('sh');
            $table->string('ohpb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tadikas');
    }
};
