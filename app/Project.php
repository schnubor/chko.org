<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'category_id'];

    /**
     * Get the links for the project.
     */
    public function links()
    {
        return $this->hasMany('App\Link');
    }

    /**
     * Get the images for the project.
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    /**
     * Get the images for the project.
     */
    public function videos()
    {
        return $this->hasMany('App\Video');
    }

    /**
     * Get the category for the project.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
