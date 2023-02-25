<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_employments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained('users');
            $table->string('organisation')->nullable();
            $table->string('industry')->nullable();
            $table->string('position')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->date('employed_from')->nullable();
            $table->date('employed_to')->nullable();
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
        Schema::table('user_employments', function(Blueprint $table){

            $table->dropForeign(['users_id']);
        });

        Schema::dropIfExists('user_employments');
    }
}
