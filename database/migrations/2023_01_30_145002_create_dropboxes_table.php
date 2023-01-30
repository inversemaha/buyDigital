<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dropboxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("phone");
            $table->string("email")->nullable();
            $table->string("password")->default(\Illuminate\Support\Facades\Hash::make("123456"));
            $table->string("cv")->nullable();
            $table->integer("status")->default(0);//0=Pending, 1=Accepted, 2=Shortlisted, 3=Finalize
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
        Schema::dropIfExists('dropboxes');
    }
}
