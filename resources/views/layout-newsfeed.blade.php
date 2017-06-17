@include('layouts.header-profile')

@include('layouts.sidebar-profile-left')

{{-- @include('layouts.sidebar-profile-right') --}}

@include('layouts.navbar-profile')

	@yield('newsfeed-data')

@include('layouts.profile-popups')

@include('layouts.footer-profile')
