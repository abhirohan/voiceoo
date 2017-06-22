@extends('layout-setting')
@section('settings')
	@include('settingpages.setting-header')

	<!-- Your Account Personal Information -->

	<div class="container">
		<div class="row">
			<div class="col-xl-9 push-xl-3 col-lg-9 push-lg-3 col-md-12 col-sm-12 col-xs-12">
				@if(Session::has('settingSavemsg'))
					<span>{{ Session::get('settingSavemsg') }}</span>
				@endif
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Personal Information</h6>
					</div>
					<div class="ui-block-content">
						<form method="POST" action="{{ route('savePersonalSetting') }}">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">First Name</label>
										<input class="form-control" name="first_name" placeholder="" type="text" value="James">
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Your Email</label>
										<input class="form-control" name="email" placeholder="" type="email" value="jspiegel@yourmail.com">
									</div>

									<div class="form-group date-time-picker label-floating">
										<label class="control-label">Your Birthday</label>
										<input name="dob" value="10/24/1984" />
										<span class="input-group-addon">
											<svg class="olymp-month-calendar-icon icon"><use xlink:href="icons/icons.svg#olymp-month-calendar-icon"></use></svg>
										</span>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Last Name</label>
										<input class="form-control" name="last_name" placeholder="" type="text" value="Spiegel">
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Your Website</label>
										<input class="form-control" name="website" placeholder="" type="text" value="daydreamzagency.com">
									</div>


									<div class="form-group label-floating">
										<label class="control-label">Your Phone Number</label>
										<input class="form-control" name="phone_number" placeholder="" type="text">
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Your Country</label>
										<input class="form-control" name="country" placeholder="" type="text" value="">
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Your State / Province</label>
										<input class="form-control" name="state" placeholder="" type="text" value="">
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Your City</label>
										<input class="form-control" name="city" placeholder="" type="text" value="">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Write a little description about you</label>
										<textarea class="form-control" name="about_me" placeholder="">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56</textarea>
									</div>

									<div class="form-group label-floating is-select">
										<label class="control-label">Your Gender</label>
										<select class="selectpicker form-control" name="gender">
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Religious Belifs</label>
										<input class="form-control" name="religious_b" placeholder="" type="text">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Your Birthplace</label>
										<input class="form-control" name="birthplace" placeholder="" type="text">
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Your Occupation</label>
										<input class="form-control" name="occupation" placeholder="" type="text" value="UI/UX Designer">
									</div>

									<div class="form-group label-floating is-select">
										<label class="control-label">Status</label>
										<select class="selectpicker form-control" name="marital_status">
											<option value="married">Married</option>
											<option value="unmarried">Not Married</option>
										</select>
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Political Incline</label>
										<input class="form-control" name="political_view" placeholder="" type="text" value="Democrat">
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
						<h2>Social Attachment</h2>
						<form>
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Facebook Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-facebook c-facebook" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Twitter Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-twitter c-twitter" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Google+ Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-google-plus c-google" aria-hidden="true"></i>
									</div>

									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Vk Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-vk c-vk" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Pinterest Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-pinterest-p c-google" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Tumblr Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-tumblr c-tumblr" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Linkedin Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-linkedin c-linkedin" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Skype Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-skype c-skype" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Instagram Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-instagram c-instagram" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Github Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-github c-github" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your soundcloud Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-soundcloud c-soundcloud" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Flickr Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-flickr c-flickr" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Youtube Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-youtube-play c-youtube" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Vine Account</label>
										<input class="form-control" type="text" value="">
										<i class="fa fa-vine c-vine" aria-hidden="true"></i>
									</div>




									<div class="form-group with-icon label-floating">
										<label class="control-label">Your RSS Feed Account</label>
										<input class="form-control" type="text">
										<i class="fa fa-rss c-rss" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Dribbble Account</label>
										<input class="form-control" type="text" value="">
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

