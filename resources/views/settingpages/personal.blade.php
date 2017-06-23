@extends('layout-setting')
@section('settings')
	@include('settingpages.setting-header')

	<!-- Your Account Personal Information -->

	<div class="container">
		<div class="row">
			<div class="col-xl-9 push-xl-3 col-lg-9 push-lg-3 col-md-12 col-sm-12 col-xs-12">
				@if(Session::has('settingSavemsg'))
					<span class="c-spotify"><big>{{ Session::get('settingSavemsg') }}</big></span>
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
									<div class="form-group label-floating {{ $errors->has('first_name') ? ' has-danger' : '' }}">
										<label class="control-label">First Name</label>
										<input class="form-control" name="first_name" placeholder="" type="text" value="{{ $userDetails->first_name }}">
									</div>
									@if ($errors->has('first_name'))
	                                    <span>
	                                        <strong>{{ $errors->first('first_name') }}</strong>
	                                    </span>
	                                @endif

									<div class="form-group label-floating">
										<label class="control-label">Alternate Email</label>
										<input class="form-control" name="email" placeholder="" type="email" value="{{ $userDetails->alternate_email }}">
									</div>

									<div class="form-group date-time-picker label-floating">
										<label class="control-label">Your Birthday</label>
										<input name="dob" value="{{ $userDetails->dob }}" />
										<span class="input-group-addon">
											<svg class="olymp-month-calendar-icon icon"><use xlink:href="icons/icons.svg#olymp-month-calendar-icon"></use></svg>
										</span>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating {{ $errors->has('last_name') ? ' has-danger' : '' }}">
										<label class="control-label">Last Name</label>
										<input class="form-control" name="last_name" placeholder="" type="text" value="{{ $userDetails->last_name }}">
									</div>
									@if ($errors->has('last_name'))
	                                    <span>
	                                        <strong>{{ $errors->first('last_name') }}</strong>
	                                    </span>
	                                @endif

									<div class="form-group label-floating">
										<label class="control-label">Your Website</label>
										<input class="form-control" name="website" placeholder="" type="text" value="{{ $userDetails->website }}">
									</div>


									<div class="form-group label-floating">
										<label class="control-label">Your Phone Number</label>
										<input class="form-control" name="phone_number" placeholder="" type="text" value="{{ $userDetails->phone }}">
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Your Country</label>
										<input class="form-control" name="country" placeholder="" type="text" value="{{ $userDetails->country }}">
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Your State / Province</label>
										<input class="form-control" name="state" placeholder="" type="text" value="{{ $userDetails->state }}">
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Your City</label>
										<input class="form-control" name="city" placeholder="" type="text" value="{{ $userDetails->city }}">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Write a little description about you</label>
										<textarea class="form-control" name="about_me" placeholder="">{{ $userDetails->about }}</textarea>
									</div>

									<div class="form-group label-floating is-select">
										<label class="control-label">Your Gender</label>
										<select class="selectpicker form-control" name="gender">
											<option value="male" {{ $userDetails->gender == 'male'?'selected':'' }}>Male</option>
											<option value="female" {{ $userDetails->gender == 'female'?'selected':'' }}>Female</option>
										</select>
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Religious Belifs</label>
										<input class="form-control" name="religious_b" placeholder="" type="text" value="{{ $userDetails->religious_belifs }}">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Your Birthplace</label>
										<input class="form-control" name="birthplace" placeholder="" type="text" value="{{ $userDetails->birthplace }}">
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Your Occupation</label>
										<input class="form-control" name="occupation" placeholder="" type="text" value="{{ $userDetails->occupation }}">
									</div>

									<div class="form-group label-floating is-select">
										<label class="control-label">Status</label>
										<select class="selectpicker form-control" name="marital_status">
											<option value="married"  {{ $userDetails->marital_status == 'married'?'selected':''}}>Married</option>
											<option value="unmarried" {{ $userDetails->marital_status == 'unmarried'?'selected':''}}>Not Married</option>
										</select>
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Political Incline</label>
										<input class="form-control" name="political_view" placeholder="" type="text" value="{{ $userDetails->political_incline }}">
									</div>
								</div>
								{{-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<button type="reset" class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
								</div> --}}
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<button type="submit" class="btn btn-primary btn-lg full-width">Save all Changes</button>
								</div>
							</div>
						</form>
						<h2>Social Attachment</h2>
						<form action="{{ route('saveSocialSetting') }}" method="POST">
							<div class="row">
								{{ csrf_field() }}
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Facebook Account</label>
										<input class="form-control" name="c_facebook" type="text" value="{{ $userSocial->facebook }}">
										<i class="fa fa-facebook c-facebook" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Twitter Account</label>
										<input class="form-control" name="c_twitter" type="text" value="{{ $userSocial->twitter }}">
										<i class="fa fa-twitter c-twitter" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Google+ Account</label>
										<input class="form-control" type="text" name="c_google" value="{{ $userSocial->google_plus }}">
										<i class="fa fa-google-plus c-google" aria-hidden="true"></i>
									</div>

									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Vk Account</label>
										<input class="form-control" name="c_vk" type="text" value="{{ $userSocial->vk }}">
										<i class="fa fa-vk c-vk" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Pinterest Account</label>
										<input class="form-control" name="c_pin" type="text" value="{{ $userSocial->pinterest }}">
										<i class="fa fa-pinterest-p c-google" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Tumblr Account</label>
										<input class="form-control" name="c_tumblr" type="text" value="{{ $userSocial->tumblr }}">
										<i class="fa fa-tumblr c-tumblr" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Linkedin Account</label>
										<input class="form-control" name="c_linkedin" type="text" value="{{ $userSocial->linkedin }}">
										<i class="fa fa-linkedin c-linkedin" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Skype Account</label>
										<input class="form-control" name="c_skype" type="text" value="{{ $userSocial->skype }}">
										<i class="fa fa-skype c-skype" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Instagram Account</label>
										<input class="form-control" name="c_insta" type="text" value="{{ $userSocial->instagram }}">
										<i class="fa fa-instagram c-instagram" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Github Account</label>
										<input class="form-control" name="c_github" type="text" value="{{ $userSocial->github }}">
										<i class="fa fa-github c-github" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your soundcloud Account</label>
										<input class="form-control" name="c_soundcloud" type="text" value="{{ $userSocial->soundcloud }}">
										<i class="fa fa-soundcloud c-soundcloud" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Flickr Account</label>
										<input class="form-control" name="c_flickr" type="text" value="{{ $userSocial->flickr }}">
										<i class="fa fa-flickr c-flickr" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Youtube Account</label>
										<input class="form-control" name="c_youtube" type="text" value="{{ $userSocial->youtube }}">
										<i class="fa fa-youtube-play c-youtube" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Vine Account</label>
										<input class="form-control" name="c_vine" type="text" value="{{ $userSocial->vine }}">
										<i class="fa fa-vine c-vine" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your RSS Feed Account</label>
										<input class="form-control" name="c_rss" type="text" value="{{ $userSocial->rss }}">
										<i class="fa fa-rss c-rss" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Dribbble Account</label>
										<input class="form-control" name="c_dribble" type="text" value="{{ $userSocial->dribble }}">
										<i class="fa fa-dribbble c-dribbble" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Behance Account</label>
										<input class="form-control" name="c_behance" type="text" value="{{ $userSocial->behance }}">
										<i class="fa fa-behance c-github" aria-hidden="true"></i>
									</div>
									<div class="form-group with-icon label-floating">
										<label class="control-label">Your Spotify Account</label>
										<input class="form-control" name="c_spotify" type="text" value="{{ $userSocial->spotify }}">
										<i class="fa fa-spotify c-spotify" aria-hidden="true"></i>
									</div>
								</div>
								{{-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
								</div> --}}
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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

