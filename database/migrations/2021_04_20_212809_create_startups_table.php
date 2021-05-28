<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('startup_name');
            $table->string('industry');
            $table->string('website');
            $table->string('stage');
            $table->string('gov');
            $table->date('fund');
            $table->string('doner');
            $table->integer('money');
            $table->string('founder_name');
            $table->string('founder_email');
            $table->integer('founder_phone');
            $table->longText('whyID');
            $table->longText('brief');
            $table->longText('booth_supplies');
            $table->longText('booth_stuff');
            $table->longText('comment');








        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('startups');
    }
}
