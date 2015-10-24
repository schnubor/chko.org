<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\Link;

class ApiController extends Controller
{
    /**
     * Display the JSON of the specified project
     *
     * @return Response
     */
    public function project($id)
    {
        $project = Project::find($id);
        $category = $project->category;
        return $project;
    }

    /**
     * Display the JSON of the specified link
     *
     * @return Response
     */
    public function link($id)
    {
        $link = Link::find($id);
        return $link;
    }
}
