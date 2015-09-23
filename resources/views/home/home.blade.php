@extends('main')

@section('body')
<section class="section-header">
    @section('section-header')
        @include('home.menu_top');
    @show
</section>
<section class="section-body">
    @section('section-body')
        <div class="container">
            <input type="text" ng-model="yourName" placeholder="Enter a name here"/>
            <hr />
            <h1>hello, @{{yourName}}</h1>
        </div>
    @show
</section>
<footer class="section-footer">
    @section('section-footer')
        <div class="container">
            <p class="text-muted">&copy; test</p>
        </div>
    @show
</footer>
@endsection

@section('end-js')
<script>
   $(document).ready(function() {
      	var pageJs = $(document).initApp().setUser(<?php echo Auth::user()->toJson(); ?>);
    });
</script>
@endsection