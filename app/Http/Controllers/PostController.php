<?php

namespace App\Http\Controllers;

use Faker\Provider\zh_TW\Company;
use Illuminate\Http\Request;
use App\post;
use App\User;
use App\image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth')->except(['index', 'show','delete','show_delete']);

    }

    public function index(){

        if(request(['m','y'])){
            $posts = post::latest()
                ->filter(request(['m','y']))
                ->get();
        }else{
            $posts = post::all();
        }

        return view('posts.index', compact('posts'));

    }

    public function show($id){

            $post = post::find($id);

        return view('posts.show',compact('post'));

    }

    public function create(){

        return view('posts.create');

    }

    public function store(Request $request)
    {


        $this->validate(request(), [
           'title' => 'required',
           'body' => 'required'
        ]);

        $id = post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => Auth()->user()->id,
        ])->id;

        if($request->hasFile('image')) {

            $request->file('image');

            $request->image->storeAs("/public/kiarash", "$id.png");

            image::create(['post_id' => $id]);

        }
        return redirect('/');
    }

    public function delete($delete)
    {

        post::where("id",$delete)->delete();

        return redirect('/');
    }

    public function show_delete($id){

        $post = post::find($id);

        return view('posts.edit',compact('post'));

    }

    public function myposts($id){

        $posts = post::select("*")->where("user_id",$id)->get();

        return view('posts.myposts',compact('posts'));

    }

    public function update($id)
    {
        post::where('id', $id)->update(['body' => request('body'),'title' => request('title')]);

        return redirect("/show_delete/$id");
    }
}
