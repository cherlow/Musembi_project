<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('title');
            $table->bigInteger('user_id')->unsigned();
            $table->mediumText('location');
            $table->string('mode');
            $table->mediumText('application_link')->nullable();

            $table->integer('min_salary');
            $table->integer('max_salary');
            $table->string('status')->default('pending');
            $table->bigInteger('category_id')->unsigned();


            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
