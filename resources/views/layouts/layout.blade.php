<!DOCTYPE html>

<html lang="en">

    <head>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({
                selector: 'textarea.tinymce',
                height: 500,
                theme: 'modern',
                plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
                toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
                image_advtab: true,
                templates: [
                    { title: 'Test template 1', content: 'Test 1' },
                    { title: 'Test template 2', content: 'Test 2' }
                ],
                content_css: [
                    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                    '//www.tinymce.com/css/codepen.min.css'
                ]
            });</script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>Blog Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="/css/album.css" rel="stylesheet">
    </head>

    <body>
        @include('layouts.nav')


        @if($flash = session('message'))
            <div id="flash-message" class="alert alert-success" role="alert">

                {{ $flash }}

            </div>
        @endif

        <div class="blog-header">
            <div class="container">
                <h1 class="blog-title">The Bootstrap Blog</h1>
                <p class="lead blog-description">An example blog template built with Bootstrap.</p>
            </div>
        </div>

    <div class="container">

        <div class="row">

            @yield('content')

            @include('layouts.sidebar')

        </div><!-- /.row -->

    </div><!-- /.container -->

    @include('layouts.footer')

    </body>
    <script src="/js/javascript.js"></script>
</html>
