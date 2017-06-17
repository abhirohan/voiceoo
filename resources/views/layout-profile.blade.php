@include('layouts.header-profile')

@include('layouts.sidebar-profile-left')

{{-- @include('layouts.sidebar-profile-right') --}}

@include('layouts.navbar-profile')

	@yield('profile-data')

@include('layouts.profile-popups')

@include('layouts.footer-profile')
