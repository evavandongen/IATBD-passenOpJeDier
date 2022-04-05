<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyOnPetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pets', function (Blueprint $table) {
            $table->foreign("type")->references("type")->on("types_of_pets");
            $table->foreign("ownerId")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pets', function (Blueprint $table) {
            $table->dropForeign('pets_type_foreign');
        });
        Schema::table('pets', function (Blueprint $table) {
            $table->dropForeign('pets_ownerId_foreign');
        });
    }
}
