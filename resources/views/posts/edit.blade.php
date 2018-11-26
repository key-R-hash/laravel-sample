
@extends('layouts.layout')

@section('content')

    <div class="col-sm-8 blog-main">

        <div class="container">

            <div class="blog-post">

                <a href="posts/{{ $post->id }}">

                    <h2 class="blog-post-title">{{ $post->title }}</h2>

                </a>

                <p class="blog-post-meta">
                    {{$post->User->name}}

                    {{$post->created_at->toFormattedDateString()}}

                </p>
                <div>{!!$post->body  !!}</div>
                </br>

                @foreach($post->images as $img)

                    <img class="img_uploude" src='../kiarash/{!! $img['post_id'] !!}.png'>

                @endforeach
            </div>

            <form method="post" action="/laravel/show_delete/{{ $post->id  }}">

                {{ csrf_field() }}

                <div class="form-group">

                    <label for="title">Title:</label>

                    <input value="{{ $post->title }}" type="text" class="form-control" id="title" name="title" >

                </div>

                <div class="form-group">

                    <label for="body">Body:</label>

                    <textarea name="body" class="form-control tinymce">{!! $post->body !!}</textarea>

                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary update">Update</button>

                </div>

                @include('layouts.errors')

            </form>

            <div class="form-group">
                <a class="btn btn-primary delete" href="/laravel/index.php/delete/{{$post->id}}">Delete</a>
            </div>

        </div>

    </div>

@endsection