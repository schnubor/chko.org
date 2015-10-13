<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'videos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['youtube_id', 'project_id'];

    /**
     * Get the category for the project.
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
