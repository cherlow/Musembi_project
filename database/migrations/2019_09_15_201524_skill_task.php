<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SkillTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_task', function (Blueprint $table) {
            $table->bigIncrements('id');
        
            $table->bigInteger('task_id')->unsigned();
            $table->bigInteger('skill_id')->unsigned()->nullable();
          

            $table->foreign('task_id')->references('id')->on('tasks');
            $table->foreign('skill_id')->references('id')->on('skills');
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
        Schema::dropIfExists('skill_task');
    }
}
