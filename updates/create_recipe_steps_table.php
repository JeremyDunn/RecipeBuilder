<?php namespace JeremyDunn\RecipeBuilder\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateRecipeStepsTable extends Migration
{
    public function up()
    {
        Schema::create('jeremydunn_recipebuilder_recipe_steps', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('step')->unsigned();
            $table->unsignedInteger('recipe_id');
            $table->text('instructions')->nullable();

            $table->foreign('recipe_id')->references('id')->on('jeremydunn_recipebuilder_recipes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jeremydunn_recipebuilder_recipe_steps');
    }
}
