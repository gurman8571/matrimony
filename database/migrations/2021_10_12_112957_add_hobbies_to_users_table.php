<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHobbiesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('prefrence')->nullable();
            $table->integer('drink')->nullable();
            $table->integer('smoke')->nullable();
            $table->text('hobbies')->nullable();
            $table->string('surname')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->string('income')->nullable();
            $table->string('Marital_Status')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
