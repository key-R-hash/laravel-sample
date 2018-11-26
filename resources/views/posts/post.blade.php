<div class="blog-post">

    <a href="posts/{{ $post->id }}">

        <h2 class="blog-post-title">{{ $post->title }}</h2>
    </a>

    <p class="blog-post-meta">

        {{$post->User->name}}

        {{$post->created_at->toFormattedDateString()}}

    </p>

    <div style="height: 60px; overflow: hidden">

        <?php

            $body =$post->body;
                echo $body;
        ?>

    </div>
    <a href="posts/{{ $post->id }}">"Read More"</a>
</div>
