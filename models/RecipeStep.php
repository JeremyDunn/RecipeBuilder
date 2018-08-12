<?php namespace JeremyDunn\RecipeBuilder\Models;

use Model;

/**
 * RecipeStep Model
 */
class RecipeStep extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'jeremydunn_recipebuilder_recipe_steps';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
