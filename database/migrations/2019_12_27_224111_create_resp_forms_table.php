<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resp_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
            $table->string('prenom', 20)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->rememberToken();
            $table->boolean('auth');
            $table->string('poste', 40);
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
        Schema::dropIfExists('resp_forms');
    }
}