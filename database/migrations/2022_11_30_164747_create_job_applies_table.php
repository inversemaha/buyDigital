<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("job_id");
            $table->unsignedBigInteger("applicant_id");
            $table->string("cv")->nullable();
            $table->integer("status")->default(0);//0=Pending, 1=Accepted, 2=Shortlisted, 3=Finalize
            $table->timestamps();
            $table->foreign('job_id')->references('id')->on('job_posts');
            $table->foreign('applicant_id')->references('id')->on('applicants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applies');
    }
}
