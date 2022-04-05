<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("type")->default("other");
            $table->string("description")->nullable();
            $table->float("hourlyRate");
            $table->date("startDate");
            $table->date("endDate");
            $table->string("image")->default("/img/logo.png");
            $table->foreignId("ownerId");
            $table->boolean("request")->default(false);
            $table->foreignId("sitterId")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
