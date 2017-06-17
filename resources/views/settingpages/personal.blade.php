@extends('layout-profile')
	@include('layouts.nav-profile')
	@include('layouts.sidebar-profile-left')
@section('setting-personal')
	@include('settingpages.setting-header')

	<!-- Your Account Personal Information -->

	<div class="container">
		<div class="row">
			<div class="col-xl-9 push-xl-3 col-lg-9 push-lg-3 col-md-12 col-sm-12 col-xs-12">
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Personal Information</h6>
					</div>
					<div class="ui-block-content">
						<form>
							<div class="row">

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">First Name</label>
										<input class="form-control" placeholder="" type="text" value="James">
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" type="email" value="jspiegel@yourmail.com">
									</div>

									<div class="form-group date-time-picker label-floating">
										<label class="control-label">Your Birthday</label>
										<input name="datetimepicker" value="10/24/1984" />
										<span class="input-group-addon">
											<svg class="olymp-month-calendar-icon icon"><use xlink:href="icons/icons.svg#olymp-month-calendar-icon"></use></svg>
										</span>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Last Name</label>
										<input class="form-control" placeholder="" type="text" value="Spiegel">
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Your Website</label>
										<input class="form-control" placeholder="" type="email" value="daydreamzagency.com">
									</div>


									<div class="form-group label-floating">
										<label class="control-label">Your Phone Number</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating is-select">
										<label class="control-label">Your Country</label>
										<select class="selectpicker form-control">
											<option value="US">United States</option>
											<option value="AU">Australia</option>
										</select>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating is-select">
										<label class="control-label">Your State / Province</label>
										<select class="selectpicker form-control">
											<option value="CA">California</option>
											<option value="TE">Texas</option>
										</select>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating is-select">
										<label class="control-label">Your City</label>
										<select class="selectpicker form-control">
											<option value="SF">San Francisco</option>
											<option value="NY">New York</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Write a little description about you</label>
										<textarea class="form-control" placeholder="">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56</textarea>
									</div>

									<div class="form-group label-floating is-select">
										<label class="control-label">Your Gender</label>
										<select class="selectpicker form-control">
											<option value="MA">Male</option>
											<option value="FE">Female</option>
										</select>
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Religious Belifs</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Your Birthplace</label>
										<input class="form-control" placeholder="" type="text">
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Your Occupation</label>
										<input class="form-control" placeholder="" type="text" value="UI/UX Designer">
									</div>

									<div class="form-group label-floating is-select">
										<label class="control-label">Status</label>
										<select class="selectpicker form-control">
											<option value="MA">Married</option>
											<option value="FE">Not Married</option>
										</select>
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Political Incline</label>
										<input class="form-control" placeholder="" type="text" value="Democrat">
									</div>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Facebook Account</label>
										<input class="form-control" type="text" value="www.facebook.com/james-spiegel95321">
										<i class="fa fa-facebook c-facebook" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Twitter Account</label>
										<input class="form-control" type="text" value="www.twitter.com/james_spiegelOK">
										<i class="fa fa-twitter c-twitter" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your RSS Feed Account</label>
										<input class="form-control" type="text">
										<i class="fa fa-rss c-rss" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Dribbble Account</label>
										<input class="form-control" type="text" value="www.dribbble.com/thecowboydesigner">
										<i class="fa fa-dribbble c-dribbble" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Spotify Account</label>
										<input class="form-control" type="text">
										<i class="fa fa-spotify c-spotify" aria-hidden="true"></i>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<button class="btn btn-primary btn-lg full-width">Save all Changes</button>
								</div>

							</div>
						</form>
					</div>
				</div>
			</div>
			@include('settingpages.setting-left-nav')
		</div>
	</div>

	<!-- ... end Your Account Personal Information -->

@endsection

