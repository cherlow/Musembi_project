<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('reviewer_id')->unsigned();
            $table->integer('rating');
            $table->longText('review');
            $table->string('budget');
            $table->string('time');
            $table->bigInteger('task_id')->unsigned();
            $table->string('reviewable')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('reviewer_id')->references('id')->on('users');
            $table->foreign('task_id')->references('id')->on('tasks');

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
        Schema::dropIfExists('reviews');
    }
}
