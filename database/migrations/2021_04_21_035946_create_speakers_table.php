<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 255);
            $table->string('email', 100);
            $table->integer('Phonenum');
            $table->string('jobtittle',255);
            $table->Text('bio')->nullable();
            $table->string('Linked_In_Profile_Link',255)->nullable();
            $table->string('governorate', 255);
            $table->string('company', 255);
            $table->string('image_upload', 255);
            $table->Text('comment');
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
        Schema::dropIfExists('speakers');
    }
}
