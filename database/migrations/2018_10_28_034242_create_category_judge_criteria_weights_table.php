<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryJudgeCriteriaWeightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_judge_criteria_weights', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates');

            $table->unsignedInteger('criteria_id');
            $table->foreign('criteria_id')->references('id')->on('criteria');
            
            $table->integer('weight');
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
        Schema::dropIfExists('category_judge_criteria_weights');
    }
}
