<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Post;

class PostController extends Controller
{
    //create post
    function createPost(Request $req){
        $newPost= new Post;

        $newPost->title=$req->title;
        $newPost->content=$req->content;
        $newPost->image  = "placeholder.jpg";
        $newPost->category=$req->category;

        $newPost->save();

        $file = $req->file('image');

        if($file){
            $fileName = "image".$newPost->id.".png";
            $newPost->image  = $fileName;
            $newPost->save();
            Storage::disk('local')->put($fileName, File::get($file));
        }
       
        // return redirect()->route('news');    
        if($newPost->category=='act'){
            return redirect()->route('activities');
        }
        else if($newPost->category=='ann'){
            return redirect()->route('announcements');
        }
        else if($newPost->category=='eve'){
            return redirect()->route('events');
        }
    }

    public function image($filename){
        
        $file=Storage::disk('local')->get($filename);        
        //return new Response($file,200);
        return response($file);//->header('Content-type','image/png');

    }

    public function post_details(Post $post){
        //$comments = $post->comments->simplePaginate(3); 
        
        $find_next=Post::where('id', '>', $post->id)->where('category','!=','document')->min('id');
        $find_prev=Post::where('id', '<', $post->id)->where('category','!=','document')->max('id');
        $next=Post::where('id',$find_next)->first();
        $prev=Post::where('id',$find_prev)->first();

        return view('post-details',compact(['post','prev','next']));
        
    }

    public function edit(Post $post){
        return view('crud.updatePost',compact('post'));
    
        }
    
        public function delete(Post $post){
            
            if($post->category=='act'){
                $post->delete();
                return redirect()->route('activities');
            }
            else if($post->category=='ann'){
                $post->delete();
                return redirect()->route('announcements');
            }
            else if($post->category=='eve'){
                $post->delete();
                return redirect()->route('events');
            }
    
    
        }
     
        public function update(Post $post, Request $request){
            $post->title = $request->title;
            $post->content = $request->content;
            $post->category = $request->category;
            $post->save();
    
    
            $file = $request->file('image');
    
            if($file){
                $fileName = "image1".$post->id.".png";
                $post->image  = $fileName;
                $post->save();
                Storage::disk('local')->put($fileName, File::get($file));
            }
    
        
            return redirect()->route('post-details',$post);
        }
    



}
