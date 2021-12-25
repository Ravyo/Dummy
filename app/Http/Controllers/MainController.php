<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public static function index(Request $request){

        $posts  = Post::with('categories')->whereNull('deleted_at') ;


        $search = $request->search ;


       if($request->no_of_guests){
            $posts = $posts->where('no_of_guests',$request->no_of_guests);
       }

       if($request->dates){
           $posts = $posts->whereIn('available_dates',$request->dates);
       }

       if($request->categories){
           $posts = $posts->whereHas('categories',function($q) use($request){
              $q = $q->whereIn('name',$request->categories);

               return $q ;
           });
       }


       $posts = $posts->get() ;


       return view('welcome',['posts'=>$posts]) ;

    }

   
}
