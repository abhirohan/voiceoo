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
						<h6 class="title">Hobbies and Interests</h6>
					</div>
					<div class="ui-block-content">
						<form action="{{ route('saveinterestSetting') }}" method="POST">
							{{ csrf_field() }}
							<div class="row">

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Hobbies</label>
									<textarea class="form-control" name="hobbies" placeholder="">{{ $userInterest['hobbies'] }}
									</textarea>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Favourite TV Shows</label>
										<textarea class="form-control" name="fav_tv" placeholder="">{{ $userInterest['tv_shows'] }}</textarea>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Favourite Movies</label>
										<textarea class="form-control" name="fav_movies" placeholder="">{{ $userInterest['fav_movies'] }}</textarea>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Favourite Games</label>
										<textarea class="form-control" name="fav_games" placeholder="">{{ $userInterest['fav_games'] }}</textarea>
									</div>

									<a href="{{ route('profile') }}" class="btn btn-secondary btn-lg full-width">Cancel</a>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Favourite Music Bands / Artists</label>
										<textarea class="form-control" name="fav_music" placeholder="">{{ $userInterest['music_artists'] }}</textarea>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Favourite Books</label>
										<textarea class="form-control" name="fav_books" placeholder="">{{ $userInterest['fav_books'] }}</textarea>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Favourite Writers</label>
										<textarea class="form-control" name="fav_writers" placeholder="">{{ $userInterest['fav_writers'] }}</textarea>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Other Interests</label>
										<textarea class="form-control" name="other_interest" placeholder="">{{ $userInterest['other_interest'] }}</textarea>
									</div>

									<button type="submit" class="btn btn-primary btn-lg full-width">Save all Changes</button>
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

