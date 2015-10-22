<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateImageRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;
use Storage;
use Resizer;

class ImagesController extends Controller
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
     * @return Response
     */
    public function store(CreateImageRequest $request)
    {
        if($request->hasFile('imageFile')){
              $path = public_path() . '/uploads/images';
              $file = $request->file('imageFile');
              $fileName =  time(). '_' .$file->getClientOriginalName();
              $file->move($path,$fileName);
              $image = $fileName;
        }
         $image = Image::create([
            'project_id' => $request->input('project_id'),
            'filename' => $image
        ]);
        if($image){
            $filename = pathinfo($image->filename, PATHINFO_FILENAME);
            $fileExt = pathinfo($image->filename, PATHINFO_EXTENSION);
            // Resize image
            $img640 = Resizer::make('uploads/images/'.$image->filename)->widen(640);
            $img1280 = Resizer::make('uploads/images/'.$image->filename)->widen(1280);
            $img1920 = Resizer::make('uploads/images/'.$image->filename)->widen(1920);
            $img2560 = Resizer::make('uploads/images/'.$image->filename)->widen(2560);
            // Save images
            $img640->save('uploads/images/'.$filename.'_640.'.$fileExt);
            $img1280->save('uploads/images/'.$filename.'_1280.'.$fileExt);
            $img1920->save('uploads/images/'.$filename.'_1920.'.$fileExt);
            $img2560->save('uploads/images/'.$filename.'_2560.'.$fileExt);
            flash()->success('Image uploaded successfully!');
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
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);
        $filename = pathinfo($image->filename, PATHINFO_FILENAME);
        $fileExt = pathinfo($image->filename, PATHINFO_EXTENSION);
        unlink(public_path().'/uploads/images/'.$filename.'.'.$fileExt);
        unlink(public_path().'/uploads/images/'.$filename.'_640.'.$fileExt);
        unlink(public_path().'/uploads/images/'.$filename.'_1280.'.$fileExt);
        unlink(public_path().'/uploads/images/'.$filename.'_1920.'.$fileExt);
        unlink(public_path().'/uploads/images/'.$filename.'_2560.'.$fileExt);
        $image->delete();

        flash()->info('Image deleted successfully.');
        return redirect(route('backend'));
    }
}
