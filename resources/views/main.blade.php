<!DOCTYPE html>
<html>
    <head>
        <title>@yield('appName')</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <section class="section-header">
            @section('section-header')
                @include('menu_top');
            @show
        </section>
        <section class="section-body"  onclick="$.getApp()">
            @section('section-body')
                @foreach($users as $user)
                	<p><b>{{$user->email}}</b></p>
                @endforeach
            @show
        </section>
        <footer class="section-footer">
            @section('section-footer')
                <div class="container">
                    <p class="text-muted">&copy; test</p>
                </div>
            @show
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="/js/main.js"></script>
        <script>
            $(document).ready(function() {
            	var user = {};
            	var pageJs = $(document).initApp().setUser(user);
            });
        </script>
    </body>
</html>
