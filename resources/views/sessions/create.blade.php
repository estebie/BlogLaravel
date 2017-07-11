@extends ('layouts.master')

@section ('content')
<header class="intro-header" style="background-image: url('/img/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                    
                        <h1>Register!</h1>
                        <hr class="small">
                        <span class="subheading">CREATE YOUR OWN BLOG ACCOUNT NOW</span>
                 
                    </div>
                </div>
            </div>
        </div>
    </header>

<div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Register to test one of the CRUD functions!</p>
                <form method="POST" action="register">
                    {{ csrf_field() }}
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name." name="name">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address." name="email">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password" required data-validation-required-message="Please enter your password." name="password">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Password Confirmation</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" required data-validation-required-message="Please enter your password." name="password_confirmation">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Register Now!</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            @include('layouts.errors')
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>
@endsection