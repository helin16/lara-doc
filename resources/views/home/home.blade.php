@extends('main')

<section class="section-header">
    @section('section-header')
        @include('home.menu_top');
    @show
</section>
<section class="section-body"  onclick="$.getApp()">
    @section('section-body')
        dsfds
    @show
</section>
<footer class="section-footer">
    @section('section-footer')
        <div class="container">
            <p class="text-muted">&copy; test</p>
        </div>
    @show
</footer>
