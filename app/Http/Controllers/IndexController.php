<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);

        return view('test',['posts'=>$posts]);
    }
    public function singlePost(Request $request,  $id)
    {
//        dd($id);
                $post = Post::find($id);

        return view('post',['post'=>$post]);
    }
    public function showContactForm()
    {
        return view("contact_form");
    }
}
