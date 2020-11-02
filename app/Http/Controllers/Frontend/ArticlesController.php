<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Validator,Redirect,Response;

class ArticlesController extends Controller
{
    public function showCreateArticles()
    {
        $categories = DB::table('categories')->get();
        return view('frontend.create-articles',['categories' => $categories]);
    }
    public function createArticles(Request $request)
    {
        request()->validate([
            'title' => 'required|unique:posts',
            'category' => 'required',
            'content' => 'required|min:1',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        $data = $request->All();
        $imageName = time().'.'.$request->thumbnail->extension();  
        $request->thumbnail->move(public_path('images'), $imageName);
        Post::create([
            'title' => $data['title'],
            'slug' => str_replace(" ","-",strtolower($data['title'])),
            'content' => $data['content'],
            'category_id' => $data['category'],
            'thumbnail' => '/images/'.$imageName,
            'user_id' => Auth::id()
        ]);
        return Redirect::to("/")->withSuccess('You create articles success!');
    }
}
