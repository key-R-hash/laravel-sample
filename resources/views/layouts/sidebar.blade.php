<div class="col-sm-3 offset-sm-1 blog-sidebar">

    <div class="sidebar-module sidebar-module-inset">

        <h4>About</h4>

        <p>Amiri Kiarash<br> <em>Bootstrap Blog.</em> You can login in this blog and share your post to another people in world، login and injoy it.</p>


    </div>

    <div class="sidebar-module">

        <h4>Archives</h4>

        <ol class="list-unstyled">

            @foreach($archives as $stats)

                <li>

                    <a href="/laravel/index.php?m={{ $stats['m'] }}&y={{ $stats['y'] }}">

                        {{ date('M', $stats['m']).' '.$stats['y'] }}

                    </a>

                </li>

            @endforeach

        </ol>

    </div>

    <div class="sidebar-module">

        <h4>Elsewhere</h4>

        <ol class="list-unstyled">

        <li><a href="www.github.com">GitHub</a></li>

        <li><a href="www.twitter.com">Twitter</a></li>

        <li><a href="www.facebook.com">Facebook</a></li>

        </ol>

    </div>

</div><!-- /.blog-sidebar -->
