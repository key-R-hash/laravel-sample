<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comment;
class commentsController extends Controller
{
    public function store(post $post){

        $this->validate(request(),[

            'body'=>"required|min:2|max:30"

        ]);

        $post->addComment(request('body'));

        return back();
    }
}
