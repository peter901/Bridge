<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_qualifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained('users');
            $table->string('level')->nullable();
            $table->string('qualification')->nullable();
            $table->string('awarding_institution')->nullable();
            $table->date('award_date')->nullable();
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
        Schema::table('user_qualifications', function(Blueprint $table){

            $table->dropForeign(['users_id']);
        });
        
        Schema::dropIfExists('user_qualifications');
    }
}
