<?php namespace JeremyDunn\RecipeBuilder\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateRecipesTable extends Migration
{
    public function up()
    {
        Schema::create('jeremydunn_recipebuilder_recipes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jeremydunn_recipebuilder_recipes');
    }
}
