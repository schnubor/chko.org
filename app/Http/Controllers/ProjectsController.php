<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\EditProjectRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\Category;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
        $projects = Project::all();
        return view('pages/backend/project/create')
            ->with('categories', $categories)
            ->with('projects', $projects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateProjectRequest $request)
    {
        // dd($request->input('description'));
        $project = Project::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
        ]);
        if($project){
            flash()->success('Project created successfully!');
        }
        else{
            flash()->error('Oops! Something went wrong.');
        }
        return redirect(route('backend'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('pages.project')
            ->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, EditProjectRequest $request)
    {
        $project = Project::find($id);
        $project->title = $request->title;
        $project->description = $request->description;

        if($project->save()){
            flash()->success('Project updated successfully!');
        }
        else{
            flash()->danger('Oops! Something went wrong.');
        }

        return redirect(route('backend'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();

        flash()->info('Project deleted successfully.');
        return redirect(route('backend'));
    }
}
