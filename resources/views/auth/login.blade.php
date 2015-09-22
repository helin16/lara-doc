@extends('main')

@section('body')
<div class="text-center auth-wrapper">
    <div class="logo">login</div>
    <div class="login-form-div col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <form method="POST" action="<?php echo route('auth::postLogin')?>" class="text-left">
            {!! csrf_field() !!}
            <div class="form-group">
				<label class="sr-only" for="email">Email:</label>
				<input type="email" placeholder="Your Email" name="email" id="email" class="form-control" />
			</div>
            <div class="form-group">
                <label class="sr-only" for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control" />
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" id="remember"></input>
                    Remember Me
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" style="width: 100%">
                    <span class="hidden-sm hidden-md hidden-xs">Login</span>
                    <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection