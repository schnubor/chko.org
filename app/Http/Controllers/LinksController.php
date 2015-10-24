<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateLinkRequest;
use App\Http\Requests\EditLinkRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Link;

class LinksController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateLinkRequest $request)
    {
        $blank = 0;
        if($request->input('blank') === 'on'){
            $blank = 1;
        }
        $link = Link::create([
            'title' => $request->input('title'),
            'blank' => $blank,
            'url' => $request->input('url'),
            'project_id' => $request->input('project_id'),
        ]);
        if($link){
            flash()->success('Link created successfully!');
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
        //
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
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id, EditLinkRequest $request)
    {
        $blank = 0;
        $link = Link::find($id);
        if($request->input('blank') === 'on'){
            $blank = 1;
        }
        $link->blank = $blank;
        $link->title = $request->title;
        $link->url = $request->url;

        if($link->save()){
            flash()->success('Link updated successfully!');
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
        $link = Link::find($id);
        $link->delete();

        flash()->info('Link deleted successfully.');
        return redirect(route('backend'));
    }
}
