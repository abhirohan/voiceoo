@extends('layout-setting')
@section('settings')
	@include('settingpages.setting-header')
	<!-- Your Account Personal Information -->
	
	<div class="container">
		<div class="row">
			<div class="col-xl-9 push-xl-3 col-lg-9 push-lg-3 col-md-12 col-sm-12 col-xs-12">
				@if(Session::has('changpasswordmsg'))
					<span>{{ Session::get('changpasswordmsg') }}</span>
				@endif
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Change Password</h6>
					</div>
					<div class="ui-block-content">
						<form action="{{ route('saveNewPasswordSetting') }}" method="POST">
							{{ csrf_field() }}
							<div class="row">

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group label-floating {{ $errors->has('password') ? ' has-danger' : '' }}">
										<label class="control-label">Confirm Current Password</label>
										<input class="form-control" name="current_password" placeholder="" type="password" value="" required>
									</div>
									@if ($errors->has('current_password'))
	                                    <span>
	                                        <strong>{{ $errors->first('current_password') }}</strong>
	                                    </span>
		                            @endif
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating {{ $errors->has('new_password') ? ' has-danger' : '' }}">
										<label class="control-label">Your New Password</label>
										<input class="form-control" name="new_password" placeholder="" type="password" required>
									</div>
									@if ($errors->has('new_password'))
	                                    <span>
	                                        <strong>{{ $errors->first('new_password') }}</strong>
	                                    </span>
		                            @endif
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group label-floating {{ $errors->has('new_confirm_password') ? ' has-danger' : '' }}">
										<label class="control-label">Confirm New Password</label>
										<input class="form-control" name="new_confirm_password" placeholder="" type="password" required>
									</div>
									@if ($errors->has('new_confirm_password'))
	                                    <span>
	                                        <strong>{{ $errors->first('new_confirm_password') }}</strong>
	                                    </span>
		                            @endif
								</div>

							{{-- 	<div class="col-lg-12 col-sm-12 col-sm-12 col-xs-12">
									<div class="remember">
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												Remember Me
											</label>
										</div>
										<a href="#" class="forgot">Forgot my Password</a>
									</div>
								</div> --}}

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<button type="submit" class="btn btn-primary btn-lg full-width">Change Password Now!</button>
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

