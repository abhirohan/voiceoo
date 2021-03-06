<div class="col-xl-3 pull-xl-9 col-lg-3 pull-lg-9 col-md-12 col-sm-12 col-xs-12 responsive-display-none">
				<div class="ui-block">
					<div class="your-profile">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Your PROFILE</h6>
						</div>

						<div id="accordion" role="tablist" aria-multiselectable="true">
							<div class="card">
								<div class="card-header" role="tab" id="headingOne">
									<h6 class="mb-0">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Profile Settings
											<svg class="olymp-dropdown-arrow-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
										</a>
									</h6>
								</div>

								<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
									<ul class="your-profile-menu">
										<li>
											<a href="{{ route('personalSetting') }}">Personal Information</a>
										</li>
										<li>
											<a href="{{ route('accountSetting') }}">Account Settings</a>
										</li>
										<li>
											<a href="{{ route('changePasswordSetting') }}">Change Password</a>
										</li>
										<li>
											<a href="{{ route('hobbiesSetting') }}">Hobbies and Interests</a>
										</li>
										<li>
											<a href="{{ route('educationSetting') }}">Education and Employement</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="ui-block-title">
							<a href="{{ route('notificationSetting') }}" class="h6 title">Notifications</a>
							<a href="#" class="items-round-little bg-primary">8</a>
						</div>
						{{-- <div class="ui-block-title">
							<a href="{{ route('messagesSetting') }}" class="h6 title">Chat / Messages</a>
						</div> --}}
						<div class="ui-block-title">
							<a href="{{ route('followrequestSetting') }}" class="h6 title">Friend Requests</a>
							<a href="#" class="items-round-little bg-blue">4</a>
						</div>
						{{-- <div class="ui-block-title ui-block-title-small">
							<h6 class="title">FAVOURITE PAGE</h6>
						</div>
						<div class="ui-block-title">
							<a href="{{ route('personalSetting') }}" class="h6 title">Create Fav Page</a>
						</div>
						<div class="ui-block-title">
							<a href="{{ route('personalSetting') }}" class="h6 title">Fav Page Settings</a>
						</div> --}}
					</div>
				</div>
			</div>
<!-- Profile Settings Responsive -->

<div class="profile-settings-responsive">

	<a href="#" class="js-profile-settings-open profile-settings-open">
		<i class="fa fa-angle-right" aria-hidden="true"></i>
		<i class="fa fa-angle-left" aria-hidden="true"></i>
	</a>
	<div class="mCustomScrollbar" data-mcs-theme="dark">
		<div class="ui-block">
			<div class="your-profile">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Your PROFILE</h6>
				</div>

				<div id="accordion1" role="tablist" aria-multiselectable="true">
					<div class="card">
						<div class="card-header" role="tab" id="headingOne-1">
							<h6 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne">
									Profile Settings
									<svg class="olymp-dropdown-arrow-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
								</a>
							</h6>
						</div>

						<div id="collapseOne-1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
							<ul class="your-profile-menu">
								<li>
									<a href="{{ route('personalSetting') }}">Personal Information</a>
								</li>
								<li>
									<a href="{{ route('accountSetting') }}">Account Settings</a>
								</li>
								<li>
									<a href="{{ route('changePasswordSetting') }}">Change Password</a>
								</li>
								<li>
									<a href="{{ route('hobbiesSetting') }}">Hobbies and Interests</a>
								</li>
								<li>
									<a href="{{ route('educationSetting') }}">Education and Employement</a>
								</li>
							</ul>
						</div>
					</div>
				</div>


				<div class="ui-block-title">
					<a href="{{ route('notificationSetting') }}" class="h6 title">Notifications</a>
					<a href="#" class="items-round-little bg-primary">8</a>
				</div>
				{{-- <div class="ui-block-title">
					<a href="{{ route('messagesSetting') }}" class="h6 title">Chat / Messages</a>
				</div> --}}
				<div class="ui-block-title">
					<a href="{{ route('followrequestSetting') }}" class="h6 title">Friend Requests</a>
					<a href="#" class="items-round-little bg-blue">4</a>
				</div>
				{{-- <div class="ui-block-title ui-block-title-small">
					<h6 class="title">FAVOURITE PAGE</h6>
				</div>
				<div class="ui-block-title">
					<a href="{{ route('personalSetting') }}" class="h6 title">Create Fav Page</a>
				</div>
				<div class="ui-block-title">
					<a href="{{ route('personalSetting') }}" class="h6 title">Fav Page Settings</a>
				</div> --}}
			</div>
		</div>
	</div>
</div>

<!-- ... end Profile Settings Responsive -->
