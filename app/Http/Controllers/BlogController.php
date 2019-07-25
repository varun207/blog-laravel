<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogHome() {
      $blogs = Blog::all();

      return view('blog.blog-home', ['blogs'=>$blogs]);
    }

    public function blogAdd() {

      return view('blog.blog-add');
    }

    public function blogStore(Request $request) {
      $blog = new Blog();

      $blog->title = request('title');
      $blog->content = request('content');

      $blog->save();
      return redirect('/blog');
    }
}
