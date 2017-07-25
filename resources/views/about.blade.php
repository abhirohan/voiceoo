@extends('layout-setting')
@section('settings')

	<!-- About page data-->
	<!-- Top Header -->

	<div class="header-spacer"></div>
	@include('layouts.profile-view')
	<!-- ... end Top Header -->
	<div class="container">
		<div class="row">
			<div class="col-xl-8 push-xl-4 col-lg-8 push-lg-4 col-md-12 col-sm-12 col-xs-12">
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Hobbies and Interests</h6>
						@if($userData->id == $currentLoggedInUser)
							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-three-dots-icon"></use></svg>
								<ul class="more-dropdown more-with-triangle">
									<li>
										<a href="{{ route('hobbiesSetting') }}">Update Hobbies</a>
									</li>
								</ul>
							</div>
						@endif
					</div>
					<div class="ui-block-content">
						<div class="row">
							@foreach($userInterests as $userInterest)
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<ul class="widget w-personal-info item-block">
									@if($userInterest->hobbies)
										<li>
											<span class="title">Hobbies:</span>
											<span class="text">{{ $userInterest->hobbies }}</span>
										</li>
									@else
										<li>
											@if($userData->id != $currentLoggedInUser)
												<a href="#" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Ask <b>{{$userData->first_name}}'s</b> hobbies</span>
												</a>
											@else
												<a href="{{ route('hobbiesSetting') }}" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Update your favourite Hobbies</span>
												</a>
											@endif
										</li>
									@endif
									@if($userInterest->tv_shows)
										<li>
											<span class="title">Favourite TV Shows:</span>
											<span class="text">{{ $userInterest->tv_shows }}</span>
										</li>
									@else
										<li>
											@if($userData->id != $currentLoggedInUser)
												<a href="#" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Ask <b>{{$userData->first_name}}'s</b> favourite TV Shows</span>
												</a>
											@else
												<a href="{{ route('hobbiesSetting') }}" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Update your favourite TV Shows</span>
												</a>
											@endif
										</li>
									@endif
									@if($userInterest->fav_movies)
										<li>
											<span class="title">Favourite Movies:</span>
											<span class="text">{{ $userInterest->fav_movies }}</span>
										</li>
									@else
										<li>
											@if($userData->id != $currentLoggedInUser)
												<a href="#" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Ask <b>{{$userData->first_name}}'s</b> favourite Movies</span>
												</a>
											@else
												<a href="{{ route('hobbiesSetting') }}" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Update your favourite Movies</span>
												</a>
											@endif
										</li>
									@endif
									@if($userInterest->fav_games)
										<li>
											<span class="title">Favourite Games:</span>
											<span class="text">{{ $userInterest->fav_games }}</span>
										</li>
									@else
										<li>
											@if($userData->id != $currentLoggedInUser)
												<a href="#" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Ask <b>{{$userData->first_name}}'s</b> favourite Games</span>
												</a>
											@else
												<a href="{{ route('hobbiesSetting') }}" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Update your favourite Games</span>
												</a>
											@endif
										</li>
									@endif
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<ul class="widget w-personal-info item-block">
									@if($userInterest->music_artists)
										<li>
											<span class="title">Favourite Music Bands / Artists:</span>
											<span class="text">{{ $userInterest->music_artists }}</span>
										</li>
									@else
										<li>
											@if($userData->id != $currentLoggedInUser)
												<a href="#" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Ask <b>{{$userData->first_name}}'s</b> favourite Music Bands / Artists</span>
												</a>
											@else
												<a href="{{ route('hobbiesSetting') }}" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Update your favourite Music Bands / Artists</span>
												</a>
											@endif
										</li>
									@endif
									@if($userInterest->fav_books)
										<li>
											<span class="title">Favourite Books:</span>
											<span class="text">{{ $userInterest->fav_books }}</span>
										</li>
									@else
										<li>
											@if($userData->id != $currentLoggedInUser)
												<a href="#" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Ask <b>{{$userData->first_name}}'s</b> favourite Books</span>
												</a>
											@else
												<a href="{{ route('hobbiesSetting') }}" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Update your favourite Books</span>
												</a>
											@endif
										</li>
									@endif
									@if($userInterest->fav_writers)
										<li>
											<span class="title">Favourite Writers:</span>
											<span class="text">{{ $userInterest->fav_writers }}</span>
										</li>
									@else
										<li>
											@if($userData->id != $currentLoggedInUser)
												<a href="#" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Ask <b>{{$userData->first_name}}'s</b> favourite writers</span>
												</a>
											@else
												<a href="{{ route('hobbiesSetting') }}" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Update your favourite Writers</span>
												</a>
											@endif
										</li>
									@endif
									@if($userInterest->other_interests)
										<li>
											<span class="title">Other Interests:</span>
											<span class="text">{{ $userInterest->other_interests }}</span>
										</li>
									@else
										<li>
											@if($userData->id != $currentLoggedInUser)
												<a href="#" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Ask <b>{{$userData->first_name}}'s</b> interests in life</span>
												</a>
											@else
												<a href="{{ route('hobbiesSetting') }}" class="add-field">
													<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
													</svg>
													<span>Update your Interests</span>
												</a>
											@endif
										</li>
									@endif
								</ul>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Education and Employement</h6>
						@if($userData->id == $currentLoggedInUser)
							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-three-dots-icon"></use></svg>
								<ul class="more-dropdown more-with-triangle">
									<li>
										<a href="{{ route('educationSetting') }}">Update Education</a>
									</li>
									<li>
										<a href="{{ route('educationSetting') }}">Update Employement/Work</a>
									</li>
								</ul>
							</div>
						@endif
					</div>
					<div class="ui-block-content">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<ul class="widget w-personal-info item-block">

									@if( sizeof($userEducations) <= 0)
										@if($userData->id != $currentLoggedInUser)
											<a href="#" class="add-field">
												<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
												</svg>
												<span>Ask <b>{{$userData->first_name}}</b> for Education Updates.</span>
											</a>
										@endif
									@else
										@foreach($userEducations as $userEducation)
											<li>
												<span class="title">{{ $userEducation->title }}</span> from 
												<span class="title">{{ $userEducation->school_university }}</span>
												<span class="date">{{  $userEducation->year }}</span>
												<span class="text">{{  $userEducation->description }}</span>
											</li>
										@endforeach
									@endif
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<ul class="widget w-personal-info item-block">
									@if( sizeof($userJobs) <= 0)
										@if($userData->id != $currentLoggedInUser)
											<a href="#" class="add-field">
												<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
												</svg>
												<span>Ask <b>{{$userData->first_name}}</b> for Work Updates.</span>
											</a>
										@endif
									@else
										@foreach($userJobs as $userJob)
										<li>
											<span class="title">{{ $userJob->title }}</span> in 
											<span class="title">{{ $userJob->company }}</span>
											<span class="date">{{  $userJob->year }}</span>
											<span class="text">{{  $userJob->description }}</span>
										</li>
										@endforeach
									@endif
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 pull-xl-8 col-lg-4 pull-lg-8 col-md-12 col-sm-12 col-xs-12">
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Personal Info</h6>
						@if($userData->id == $currentLoggedInUser)
							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-three-dots-icon"></use></svg>
								<ul class="more-dropdown more-with-triangle">
									<li>
										<a href="{{ route('personalSetting') }}">Update Personal Information</a>
									</li>
								</ul>
							</div>
						@endif
					</div>
					<div class="ui-block-content">
						<ul class="widget w-personal-info">
						@if($userData->about)
							<li>
								<span class="title">About Me:</span>
								<span class="text">{{ ucfirst($userData->about) }}
								</span>
							</li>
						@endif
						@if($userData->dob)
							<li>
								<span class="title">Birthday:</span>
								<span class="text">{{ $userData->dob }}</span>
							</li>
						@endif
						@if($userData->birthplace)
							<li>
								<span class="title">Birthplace:</span>
								<span class="text">{{ ucfirst($userData->birthplace) }}</span>
							</li>
						@endif
						@if($userData->city && $userData->country )
							<li>
								<span class="title">Lives in:</span>
								<span class="text">{{ ucfirst($userData->city) }}, {{ ucfirst($userData->state) }}, {{ ucfirst($userData->country) }}</span>
							</li>
						@endif
						@if($userData->occupation)
							<li>
								<span class="title">Occupation:</span>
								<span class="text">{{ ucfirst($userData->occupation) }}</span>
							</li>
						@endif
						@if($userData->created_at)
							<li>
								<span class="title">Joined:</span>
								<span class="text">
									{{ $userData->created_at->toFormattedDateString()  }}
									<small>( {{ $userData->created_at->diffForHumans()  }} )</small>
								</span>
								
							</li>
						@endif
						@if($userData->gender)
							<li>
								<span class="title">Gender:</span>
								<span class="text">{{ ucfirst($userData->gender) }}</span>
							</li>
						@endif
						@if($userData->marital_status)
							<li>
								<span class="title">Marital Status:</span>
								<span class="text">{{ ucfirst($userData->marital_status) }}</span>
							</li>
						@endif
						@if($userData->email)
							<li>
								<span class="title">Email:</span>
								<a href="#" class="text">{{ ucfirst($userData->email) }}</a>
							</li>
						@endif
						@if($userData->alternate_email)
							<li>
								<span class="title">Alternate Email:</span>
								<a href="#" class="text">{{ ucfirst($userData->alternate_email)  }}</a>
							</li>
						@endif
						@if($userData->website)
							<li>
								<span class="title">Website:</span>
								<a href="#" class="text">{{ ucfirst($userData->website)  }}</a>
							</li>
						@endif
						@if($userData->phone)
							<li>
								<span class="title">Phone Number:</span>
								<span class="text">{{ ucfirst($userData->phone)  }}</span>
							</li>
						@endif
						@if($userData->religious_belifs)
							<li>
								<span class="title">Religious Belifs:</span>
								<span class="text">{{ ucfirst($userData->religious_belifs)   }}</span>
							</li>
						@endif
						@if($userData->political_incline)
							<li>
								<span class="title">Political Incline:</span>
								<span class="text">{{ ucfirst($userData->political_incline)  }}</span>
							</li>
						@endif
						@if($userData->id != $currentLoggedInUser)
							<li>
								<a href="#" class="add-field">
									<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
									</svg>
									<span>Ask <b>{{$userData->first_name}}</b> for more information.</span>
								</a>
							</li>
							@endif
						</ul>

						<div class="widget w-socials">
							<h6 class="title">Other Social Networks:</h6>
							@foreach($userSocials as $userSocial)
								@if($userSocial->facebook == '' || $userSocial->twitter || $userSocial->google_plus || $userSocial->vk || $userSocial->pinterest || $userSocial->tumblr || $userSocial->linkedin || $userSocial->skype || $userSocial->instagram || $userSocial->github || $userSocial->soundcloud || $userSocial->flickr || $userSocial->youtube || $userSocial->vine || $userSocial->rss || $userSocial->dribble || $userSocial->behance || $userSocial->spotify)

									@if($userData->id != $currentLoggedInUser)
										<a href="#" class="add-field">
											<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
											</svg>
												<span>Ask <b>{{$userData->first_name}}</b> for more updates.</span>
										</a>
									@else
										<a href="{{ route('personalSetting') }}" class="add-field">
											<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use>
											</svg>
												<span>Update your social network links.</span>
										</a>
									@endif
								@endif
								@if($userSocial->facebook != '')
									<a href="{{ $userSocial->facebook  }}" target="_blank" class="social-item bg-facebook">
										<i class="fa fa-facebook" aria-hidden="true"></i>
										Facebook
									</a>
								@endif
								@if($userSocial->twitter != '')
									<a href="{{ $userSocial->twitter  }}" target="_blank" class="social-item bg-twitter">
										<i class="fa fa-twitter" aria-hidden="true"></i>
										Twitter
									</a>
								@endif
								@if($userSocial->google_plus != '')
									<a href="{{ $userSocial->google_plus  }}" target="_blank" class="social-item bg-google">
										<i class="fa fa-google-plus" aria-hidden="true"></i>
										Google+
									</a>
								@endif
								@if($userSocial->youtube != '')
									<a href="{{ $userSocial->youtube  }}" target="_blank" class="social-item bg-youtube">
										<i class="fa fa-youtube-play" aria-hidden="true"></i>
										youtube
									</a>
								@endif
								@if($userSocial->vine != '')
									<a href="{{ $userSocial->vine  }}" target="_blank" class="social-item bg-vine">
										<i class="fa fa-vine" aria-hidden="true"></i>
										Vine
									</a>
								@endif
								@if($userSocial->rss != '')
									<a href="{{ $userSocial->rss  }}" target="_blank" class="social-item bg-rss">
										<i class="fa fa-rss" aria-hidden="true"></i>
										Rss
									</a>
								@endif
								@if($userSocial->dribble != '')
									<a href="{{ $userSocial->dribble  }}" target="_blank" class="social-item bg-dribbble">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
										Dribble
									</a>
								@endif
								@if($userSocial->behance != '')
									<a href="{{ $userSocial->behance  }}" target="_blank" class="social-item bg-github">
										<i class="fa fa-behance" aria-hidden="true"></i>
										Behance
									</a>
								@endif
								@if($userSocial->spotify != '')
									<a href="{{ $userSocial->spotify  }}" target="_blank" class="social-item bg-spotify">
										<i class="fa fa-spotify" aria-hidden="true"></i>
										Spotify
									</a>
								@endif
								@if($userSocial->vk != '')
									<a href="{{ $userSocial->vk  }}" target="_blank" class="social-item bg-vk">
										<i class="fa fa-vk" aria-hidden="true"></i>
										VK
									</a>
								@endif
								@if($userSocial->pinterest != '')
									<a href="{{ $userSocial->pinterest  }}" target="_blank" class="social-item bg-pinterest">
										<i class="fa fa-pinterest" aria-hidden="true"></i>
										Pinterest
									</a>
								@endif
								@if($userSocial->tumblr != '')
									<a href="{{ $userSocial->tumblr  }}" target="_blank" class="social-item bg-tumblr">
										<i class="fa fa-tumblr" aria-hidden="true"></i>
										Tumblr
									</a>
								@endif
								@if($userSocial->linkedin != '')
									<a href="{{ $userSocial->linkedin  }}" target="_blank" class="social-item bg-linkedin">
										<i class="fa fa-linkedin" aria-hidden="true"></i>
										Linkedin
									</a>
								@endif
								@if($userSocial->skype != '')
									<a href="{{ $userSocial->skype  }}" target="_blank" class="social-item bg-skype">
										<i class="fa fa-skype" aria-hidden="true"></i>
										Skype
									</a>
								@endif
								@if($userSocial->instagram != '')
									<a href="{{ $userSocial->instagram  }}" target="_blank" class="social-item bg-instagram">
										<i class="fa fa-instagram" aria-hidden="true"></i>
										Instagram
									</a>
								@endif
								@if($userSocial->github != '')
									<a href="{{ $userSocial->github  }}" target="_blank" class="social-item bg-github">
										<i class="fa fa-github" aria-hidden="true"></i>
										Github
									</a>
								@endif
								@if($userSocial->soundcloud != '')
									<a href="{{ $userSocial->soundcloud  }}" target="_blank" class="social-item bg-soundcloud">
										<i class="fa fa-soundcloud" aria-hidden="true"></i>
										Soundcloud
									</a>
								@endif
								@if($userSocial->flickr != '')
									<a href="{{ $userSocial->flickr  }}" target="_blank" class="social-item bg-flickr">
										<i class="fa fa-flickr" aria-hidden="true"></i>
										Flickr
									</a>
								@endif
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end About page data -->

@endsection

