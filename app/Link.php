<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'links';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'url', 'blank', 'project_id'];

    /**
     * Get the category for the project.
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
