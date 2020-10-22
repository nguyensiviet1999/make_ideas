<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Models\Category;

class HomepageController extends Controller
{
  public function index($id_category=0){
    if ($id_category) {
      $posts = DB::table('posts')->where('category_id',$id_category)->get();
    }
    else {
      $posts = DB::table('posts')->get();
    }
    $category = DB::table('categories')->get();
    return view('frontend.homepage', ['category' => $category, 'post' => $posts]);
  }
}
