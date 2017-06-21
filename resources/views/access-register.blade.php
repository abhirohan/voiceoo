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
				<a href="/login" class="btn btn-md btn-border c-white">Have an account!</a> 
			</div>
		</div>

		<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="registration-login-form">
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Register to Olympus</div>
						<form class="content" role="form" method="POST" action="{{ route('registerhit') }}">
						{{ csrf_field() }}
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-group label-floating {{ $errors->has('first_name') ? ' has-danger' : '' }}">
										<label class="control-label">First Name</label>
										<input id="first_name" type="text" placeholder="" class="form-control" name="first_name" value="{{ old('first_name') }}"  autofocus>
										@if ($errors->has('first_name'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('first_name') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group label-floating {{ $errors->has('last_name') ? ' has-danger' : '' }}">
										<label class="control-label">Last Name</label>
										<input id="last_name" type="text" placeholder="" class="form-control" name="last_name" value="{{ old('last_name') }}"  autofocus>
										@if ($errors->has('last_name'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('last_name') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="form-group label-floating {{ $errors->has('email') ? ' has-danger' : '' }}">
										<label class="control-label">Your Email</label>
										<input id="email" type="email" placeholder="" class="form-control" name="email" value="{{ old('email') }}"  autofocus>
										@if ($errors->has('email'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
									</div>
									<div class="form-group label-floating {{ $errors->has('password') ? ' has-danger' : '' }}">
										<label class="control-label">Your Password</label>
										<input id="password" type="password" placeholder="" class="form-control" name="password" value="{{ old('password') }}"  autofocus>
										@if ($errors->has('password'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
									</div>

									<div class="form-group date-time-picker label-floating {{ $errors->has('datetimepicker') ? ' has-danger' : '' }}">
										<label class="control-label">Your Birthday</label>
										<input id="datetimepicker" type="text" value="10/24/1984" placeholder="" class="form-control" name="datetimepicker" value="{{ old('datetimepicker') }}"  autofocus>
										<span class="input-group-addon">
											<svg class="olymp-calendar-icon"><use xlink:href="icons/icons.svg#olymp-calendar-icon"></use></svg>
										</span>
										@if ($errors->has('datetimepicker'))
		                                    <span class="help-block">
		                                        <strong>Appropriate Date of Birth is required</strong>
		                                    </span>
		                                @endif
									</div>

									<div class="form-group label-floating {{ $errors->has('gender') ? ' has-danger' : '' }} is-select">
										<label class="control-label">Your Gender</label>
										<select class="selectpicker form-control" id="gender" type="text" placeholder="" name="gender" value="{{ old('gender') }}"  autofocus>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
										@if ($errors->has('gender'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('gender') }}</strong>
		                                    </span>
		                                @endif
									</div>

									<div class="remember" {{ $errors->has('checktc') ? ' has-danger' : '' }}>
										<div class="checkbox">
											<label>
												<input type="checkbox" id="checktc" name="checktc[]">
												I accept the <a href="#">Terms and Conditions</a> of the website.
											</label>
										</div>
										<br>
										@if ($errors->has('checktc'))
		                                    <span class="help-block">
		                                        <strong>By checking this field you agree our term&conditions and policies.</strong>
		                                    </span>
		                                @endif
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
