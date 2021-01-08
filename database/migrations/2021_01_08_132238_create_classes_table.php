<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('name', 100)->require();
            $table->string('avatar')->require();
            $table->tinyInteger('status')->default(1);
            $table->unsignedBigInteger('userId')->unique();
            $table->unsignedBigInteger('subjectId')->unique();
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('subjectId')->references('id')->on('subjects');
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
        Schema::dropIfExists('classes');
    }
}
