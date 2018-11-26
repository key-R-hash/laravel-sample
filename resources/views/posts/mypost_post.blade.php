<div class="blog-post">

    <a href="/laravel/edit/{{ $post->id }}">

        <h2 class="blog-post-title">{{ $post->title }}</h2>
    </a>

    <p class="blog-post-meta">

        {{$post->User->name}}

        {{$post->created_at->toFormattedDateString()}}

    </p>

    {!!$post->body  !!}


</div>
