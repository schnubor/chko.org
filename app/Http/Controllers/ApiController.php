<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;

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
}
