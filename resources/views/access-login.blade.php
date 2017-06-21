@extends('layout')
@section ('access-content')
<!-- Login-Registration Form  -->

<div class="container">
	<div class="row display-flex">
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			@if(Session::has('regmessage'))
		        <div class="landing-content">
					<h1>{{ Session::get('regmessage') }}</h1>
					<p>You are on right place where you can give wings 
					to your voice.
					</p>
				</div>
	        @else  
				<div class="landing-content">
					<h1>Welcome to the Biggest Social Network in the World</h1>
					<p>We are the best and biggest social network with 5 billion active users all around the world. Share you
						thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
					</p>
					<a href="/newuser" class="btn btn-md btn-border c-white">Register Now!</a> 
				</div>
			@endif
		</div>

		<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="registration-login-form">
				<!-- Tab panes -->
				<div class="tab-content">
					

					<div class="tab-pane active" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Login to your Account</div>
						<form class="content" role="form" method="POST" action="{{ route('login') }}">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="form-group label-floating {{ $errors->has('email') ? ' has-danger' : '' }}">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
										@if ($errors->has('email'))
		                                    <span>
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
									</div>
									<div class="form-group label-floating {{ $errors->has('password') ? ' has-danger' : '' }}">
										<label class="control-label">Your Password</label>
										<input id="password" type="password" placeholder="" class="form-control" name="password" required>
									</div>

									<div class="remember">

										<div class="checkbox">
											<label>
												<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
												Remember Me
											</label>
										</div>
										<a href="{{ route('password.request') }}" class="forgot">Forgot my Password</a>
									</div>

									<button type="submit" class="btn btn-lg btn-primary full-width">Login</button>

									<div class="or"></div>

									<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fa fa-facebook" aria-hidden="true"></i>Login with Facebook</a>

									<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fa fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


									<p>Don’t you have an account? <a data-toggle="tab" href="#home" role="tab">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
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
