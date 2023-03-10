<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResources;
use App\Models\followers;
use App\Models\Friends;
use App\Models\Posts;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        

        $followe_id_list = followers::select('user_id')->where('follower_id',Auth::id())->get()->pluck('user_id');
        $posts = Posts::whereIn('user_id',$followe_id_list)
            ->with('users')
            ->orderBy('updated_at', 'DESC')->get();
            
        $users = User::all()->whereIn('id',$posts->pluck('user_id'))->first();
        
        return view('dashboard',compact('users') )->with('posts', $posts);
       
        
    }
    public function show_frineds()
    {
        $followe_id_list = followers::select('user_id')->where('follower_id',Auth::id())->get()->pluck('user_id')->toArray();
      
        $newList = array_merge([Auth::id()],$followe_id_list);
        $users = User::all()->except($newList);

        return view('users.users',compact('users')) ;
    }

    public function user_posts($id)
    {
        $user = User::findOrFail($id);
        $posts = PostResources::collection($user->posts)->where('user_id',$id);
        return view('posts.posts',compact('posts','user')) ;
    }

    public function add_friends(Request $request)
    {
        $id = $request->user_id;
       $user =  User::findOrFail($id);
       

        followers::create
        ([

            'user_id'=>$user->id,
            'follower_id'=> Auth::user()->id,
            
        ]);
        session()->flash('Add','now you are friends');
        return back();
    }

}
