@extends('layout-profile')
	@include('layouts.nav-profile')
	@include('layouts.sidebar-profile-left')
@section('setting-account')
	@include('settingpages.setting-header')
	<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col-xl-9 push-xl-3 col-lg-9 push-lg-3 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Friend Requests</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>

				<ul class="notification-list friend-requests">
					<li>
						<div class="author-thumb">
							<img src="{{ route('basepth') }}/img/avatar15-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
							<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add">
									<svg class="olymp-happy-face-icon"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
								Accept Friend Request
							</a>

							<a href="#" class="accept-request request-del">
								<span class="icon-minus">
									<svg class="olymp-happy-face-icon"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

						</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="{{ route('basepth') }}/img/avatar16-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tony Stevens</a>
							<span class="chat-message-item">4 Friends in Common</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add">
									<svg class="olymp-happy-face-icon"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
								Accept Friend Request
							</a>

							<a href="#" class="accept-request request-del">
								<span class="icon-minus">
									<svg class="olymp-happy-face-icon"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

						</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>

					<li class="accepted">
						<div class="author-thumb">
							<img src="{{ route('basepth') }}/img/avatar17-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.
						</div>
						<span class="notification-icon">
							<svg class="olymp-happy-face-icon"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-happy-face-icon"></use></svg>
						</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="{{ route('basepth') }}/img/avatar18-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Stagg Clothing</a>
							<span class="chat-message-item">9 Friends in Common</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add">
									<svg class="olymp-happy-face-icon"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
								Accept Friend Request
							</a>

							<a href="#" class="accept-request request-del">
								<span class="icon-minus">
									<svg class="olymp-happy-face-icon"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

						</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="{{ route('basepth') }}/icons/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>
				</ul>
			</div>
		</div>
		@include('settingpages.setting-left-nav')
	</div>
</div>

<!-- ... end Your Account Personal Information -->

@endsection

