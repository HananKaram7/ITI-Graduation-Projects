<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHackathonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackathons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('mobile');
            $table->string('email');
            $table->string('Background_Experience');
            $table->string('Governate');
            $table->longText('Profile_Link');
            $table->string('participating');
            $table->string('teamName')->nullable();
            $table->integer('teamNo')->nullable();
            $table->longText('membersNames')->nullable();
            $table->longText('Describe_Idea')->nullable();
            $table->longText('Need_To_Execute_Your_Idea')->nullable();
            $table->longText('Mentorship_You_Need')->nullable();
            $table->string('Participated_Hackathons_Before');
            $table->longText('Hackathon_Name')->nullable();
            $table->string('Know_About');
            $table->longText('comment')->nullable();
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
        Schema::dropIfExists('hackathons');
    }
}
