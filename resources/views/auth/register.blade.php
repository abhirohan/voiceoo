@extends('layout')
@section ('access-content')
<!-- Login-Registration Form  -->

<div class="container">
    <div class="row display-flex">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="landing-content">
                <h1>Welcome to the Biggest Social Network in the World</h1>
                <p>We are the best and biggest social network with 5 billion active users all around the world. Share you
                    thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
                </p>
                <a href="/register" class="btn btn-md btn-border c-white">Have an account!</a> 
            </div>
        </div>

        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="registration-login-form">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
                        <div class="title h6">Register to Olympus</div>
                        <form class="content" role="form" method="POST" action="{{ route('register') }}>
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group label-floating {{ $errors->has('first_name') ? ' has-danger' : '' }}">
                                        <label class="control-label">First Name</label>
                                        <input id="first_name" type="text" placeholder="" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group label-floating {{ $errors->has('last_name') ? ' has-danger' : '' }}">
                                        <label class="control-label">Last Name</label>
                                        <input id="last_name" type="text" placeholder="" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group label-floating {{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label class="control-label">Your Email</label>
                                        <input id="email" type="email" placeholder="" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    </div>
                                    <div class="form-group label-floating {{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label class="control-label">Your Password</label>
                                        <input id="password" type="text" placeholder="" class="form-control" name="password" value="{{ old('password') }}" required autofocus>
                                    </div>

                                    <div class="form-group date-time-picker label-floating {{ $errors->has('dob') ? ' has-danger' : '' }}">
                                        <label class="control-label">Your Birthday</label>
                                        <input id="dob" type="text" value="10/24/1984" placeholder="" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>
                                        <span class="input-group-addon">
                                            <svg class="olymp-calendar-icon"><use xlink:href="icons/icons.svg#olymp-calendar-icon"></use></svg>
                                        </span>
                                    </div>

                                    <div class="form-group label-floating {{ $errors->has('gender') ? ' has-danger' : '' }} is-select">
                                        <label class="control-label">Your Gender</label>
                                        <select class="selectpicker form-control" id="gender" type="text" placeholder="" name="gender" value="{{ old('gender') }}" required autofocus>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                    <div class="remember">
                                        <div class="checkbox">
                                            <label>
                                                <input name="optionsCheckboxes" type="checkbox">
                                                {{-- <span class="checkbox-material"><span class="check"></span></span> --}}
                                                I accept the <a href="#">Terms and Conditions</a> of the website
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-purple btn-lg full-width">Complete Registration!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... end Login-Registration Form  -->
@endsection
