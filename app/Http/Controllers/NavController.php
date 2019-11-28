<?php

namespace App\Http\Controllers;
use App\Post;
use App\Gallery;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function goHome(){
        Date::setLocale('en');
        $images=Gallery::orderBy('created_at','desc')->limit(6)->get();
        $latestPosts = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(3)->get();
        $footerLatestNews = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(2)->get();

        return view('index',compact(['images','latestPosts','footerLatestNews']));
    }

    public function goContact(){
        Date::setLocale('en');

        $footerLatestNews = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(2)->get();
        return view('contact',compact('footerLatestNews'));
    }
    
    public function about(){
        Date::setLocale('en');

       $footerLatestNews = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(2)->get();
        return view('about',compact('footerLatestNews'));
    }

    public function learnMore(){
        Date::setLocale('en');

       $footerLatestNews = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(2)->get();
        return view('additional.learnMore',compact('footerLatestNews'));
    }
    public function programs(){
        Date::setLocale('en');

       $footerLatestNews = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(2)->get();
        return view('additional.programs',compact('footerLatestNews'));
    }

    public function goToNews(){
        Date::setLocale('en');

        $posts=Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->paginate(3);
        $latestPosts = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(3)->get();
        $footerLatestNews = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(2)->get();
        return view('news',compact(['posts','latestPosts','footerLatestNews']));
        
    }

    public function goToActivities(){
        Date::setLocale('en');

        $posts=Post::where('category','act')->orderBy('created_at','desc')->paginate(3);;
        $latestPosts = Post::where('category','act')->orderBy('created_at','desc')->limit(3)->get();

        $footerLatestNews = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(2)->get();
        return view('activities',compact(['posts','footerLatestNews','latestPosts']));
        //
    }

    public function goToAnnouncements(){
        Date::setLocale('en');

        $posts=Post::where('category','ann')->orderBy('created_at','desc')->paginate(3);;
        $latestPosts = Post::where('category','ann')->orderBy('created_at','desc')->limit(3)->get();
        $footerLatestNews = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(2)->get();
        return view('announcements',compact(['posts','footerLatestNews','latestPosts']));
        //
    }

    public function goToEvents(){
        Date::setLocale('en');

        $posts=Post::where('category','eve')->orderBy('created_at','desc')->paginate(3);;
        $latestPosts = Post::where('category','eve')->orderBy('created_at','desc')->limit(3)->get();

        $footerLatestNews = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(2)->get();
        return view('events',compact(['posts','footerLatestNews','latestPosts']));
        //
    }

    public function post_details(Post $post){
        Date::setLocale('en');

        
        $latestPosts = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(3)->get();
       
        $find_next=Post::where('id', '>', $post->id)->min('id');
        $find_prev=Post::where('id', '<', $post->id)->max('id');
        $next=Post::where('id',$find_next)->first();
        $prev=Post::where('id',$find_prev)->first();
        $footerLatestNews = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(2)->get();
        return view('post-details',compact(['post','latestPosts','prev','next','footerLatestNews']));
        
    }

    public function goToGallery(){
        Date::setLocale('en');

       $images=Gallery::orderBy('created_at','desc')->get();
       $footerLatestNews = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(2)->get();
        return view('gallery',compact(['images','footerLatestNews'])); 
    }

    public function search(Request $req){
        $footerLatestNews = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(2)->get();
        $latestNews = Post::where('category','act')->orWhere('category','ann')->orWhere('category','eve')->orderBy('created_at','desc')->limit(3)->get();
        if($req['search']){

            $keyword = $req['search'];
                $postsSearched = Post::where('title','like','%'.$keyword.'%')->orWhere('content','like','%'.$keyword.'%')->orderBy('created_at','desc')->paginate(4);

            return view('search', compact(['footerLatestNews','postsSearched','latestNews']));
        }
        else return 'bad request';
   }


}
