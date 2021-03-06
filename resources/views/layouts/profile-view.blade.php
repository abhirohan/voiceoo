<!-- Top Header -->

<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="top-header">
					<div class="top-header-thumb">
						<img src="/uploads/covers/{{ $userData->cover }}" alt="nature">
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col-lg-5 col-md-5 ">
								<ul class="profile-menu">
									<li>
										<a href="{{ route('profile') }}" class="active">Timeline</a>
									</li>
									<li>
										<a href="/aboutme/{{ $userData->id }}">About</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-5 offset-lg-2 col-md-5 offset-md-2">
								<ul class="profile-menu">
									<li>
										<a href="06-ProfilePage.html">Followers</a>
									</li>
									<li>
										<a href="07-ProfilePage-Photos.html">Following</a>
									</li>
									@if($userData->id != $currentLoggedInUser)
										<li>
											<div class="more">
												<svg class="olymp-three-dots-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-three-dots-icon"></use></svg>
												<ul class="more-dropdown more-with-triangle">
													<li>
														<a href="#">Report Profile</a>
													</li>
													<li>
														<a href="#">Block Profile</a>
													</li>
												</ul>
											</div>
										</li>
									@endif
								</ul>
							</div>
						</div>

						<div class="control-block-button">
							@if($userData->id != $currentLoggedInUser)
								<a href="{{ route('followerrequest')}}/{{$currentLoggedInUser}}/{{ $userData->id }}" class="btn btn-control bg-blue">
									<svg class="olymp-happy-face-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</a>
							@endif

							<a href="#" class="btn btn-control bg-purple">
								<svg class="olymp-chat---messages-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
							</a>

							@if($userData->id === $currentLoggedInUser)
								<div class="btn btn-control bg-primary more">
									<svg class="olymp-settings-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-settings-icon"></use></svg>

									<ul class="more-dropdown more-with-triangle triangle-bottom-right">
										<li>
											<a href="#" data-toggle="modal" data-target="#update-avtar-photo">Update Profile Photo</a>
										</li>
										<li>
											<a href="#" data-toggle="modal" data-target="#update-header-photo">Update Header Photo</a>
										</li>
										<li>
											<a href="{{ route('accountSetting') }}">Account Settings</a>
										</li>
									</ul>
								</div>
							@endif
						</div>
					</div>
					<div class="top-header-author">
						<a href="{{ route('profile') }}" class="author-thumb">
							<img src="/uploads/avatars/{{ $userData->avatar }}" alt="{{ $userData->first_name  }} {{ $userData->last_name  }}" style="width:128px; height:128px;">
						</a>
						<div class="author-content">
							<a href="/profile" class="h4 author-name">{{ ucfirst($userData->first_name)  }} {{ ucfirst($userData->last_name)  }}</a>
							<div class="country">
								{{ $userData->city  }}
								@if($userData->city && $userData->state),@endif {{ $userData->state  }} {{ $userData->country  }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Top Header -->