<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->mediumText('title');
            $table->mediumText('slug')->nullable();
            $table->longText('Description');
            $table->bigInteger('user_id')->unsigned();
            $table->string('status')->default('pending');
            $table->bigInteger('developer_id')->unsigned()->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->integer('min_budget');
            $table->integer('max_budget');
            $table->string('mode');
            $table->mediumText('location');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('developer_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');

            
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
        Schema::dropIfExists('tasks');
    }
}
