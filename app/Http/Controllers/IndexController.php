<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Mail\LastPosts;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        return view('post',['post'=>$post,]);
    }
    public function lastPosts()
    {
        $posts = Post::orderByDesc('id')->limit('5')->get()->toArray();
        //dd($posts);
        Mail::to("madhowl@yandex.ru")->send(new LastPosts($posts));

    }
    public function showContactForm()
    {
        return view("contact_form");
    }
    public function contactForm(ContactFormRequest $request)
    {
        Mail::to("madhowl@yandex.ru")->send(new ContactForm($request->validated()));

        return redirect(route("contacts"));
    }
}
