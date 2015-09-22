@extends('main')

@section('body')
<section class="section-header">
    @section('section-header')
        @include('home.menu_top');
    @show
</section>
<section class="section-body"  onclick="$.getApp()">
    @section('section-body')
        <?php echo Auth::user()->person ?>
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