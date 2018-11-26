<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="/../">Home</a>
            @if(!Auth::check())

                <a class="nav-link" href="/register">Register</a>

                <a class="nav-link" href="/login">Login</a>


            @endif

            @if(Auth::check())
                <a class="nav-link" href="/myposts/{{Auth::user()->id}}">MyPosts</a>

                <a class="nav-link" href="logout">Logout</a>

                <a class="nav-link ml-auto" href="/../">{{ Auth::user()->name }}</a>

                <a class="nav-link" href="/create">Create Post</a>

            @endif
        </nav>
    </div>
</div>
