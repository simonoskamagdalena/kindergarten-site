<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     
     */
    public function index()
    {
        $images= Gallery::all();
        return view('gallery',compact('images'));
    }

    
    public function store(Request $request)
    {
        $image= new Gallery;
        $image->description= $request->description;
        $image->save();
        $file = $request->file('image');


        if($file){
            $filename  = "galleryimage".$image->id.'.png';
            $image->image = $filename;
            $image->save();
            Storage::disk('local')->put($filename, File::get($file));


        }

        $images = Gallery::all();

        return redirect('gallery')->with('images');

    }

    public function getPNG($filename){
        //Date::setLocale('hr');
        $file=Storage::disk('local')->get($filename);
        return response($file,200)->header('Content-Type', 'image/png');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }



    public function image($filename){
        
        $file=Storage::disk('local')->get($filename);
        
        return new Response($file,200);

    }


}
