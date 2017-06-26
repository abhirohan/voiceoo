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
						<h6 class="title">Your Education History</h6>
					</div>
					<div class="ui-block-content">
						<form action="{{ route('saveEducationSetting') }}" method="POST">
							{{ csrf_field() }}
							<div class="row edu-row">
							@if($eduCount == 0)
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="titleedu">
									<div class="form-group label-floating">
										<label class="control-label">Education Title</label>
										<input class="form-control" name="title[]" placeholder="" type="text" value="">
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="schooledu">
									<div class="form-group label-floating">
										<label class="control-label">School/University</label>
										<input class="form-control" name="school[]" placeholder="" type="text" value="">
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="periodedu">
									<div class="form-group label-floating">
										<label class="control-label">Period of Time</label>
										<input class="form-control" name="period[]" placeholder="eg: 2001-2004" type="text" value="eg: 2001-2004">
									</div>
								</div>

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" id="descedu">
									<div class="form-group label-floating">
										<label class="control-label">Description</label>
										<textarea class="form-control" name="description[]" placeholder=""></textarea>
									</div>
								</div>
							@else
								@foreach($userEducation as $userEducations)
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="titleedu">
										<div class="form-group label-floating">
											<label class="control-label">Title or Place</label>
											<input class="form-control" name="title[]" placeholder="" type="text" value="{{ $userEducations->title }}">
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="schooledu">
										<div class="form-group label-floating">
											<label class="control-label">School/University</label>
											<input class="form-control" name="school[]" placeholder="" type="text" value="{{ $userEducations->school_university }}">
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="periodedu">
										<div class="form-group label-floating">
											<label class="control-label">Period of Time</label>
											<input class="form-control" name="period[]" placeholder="" type="text" value="{{ $userEducations->year }}">
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" id="descedu">
										<div class="form-group label-floating">
											<label class="control-label">Description</label>
											<textarea class="form-control" name="description[]" placeholder="">{{ $userEducations->description }}</textarea>
										</div>
									</div>
									@endforeach
								@endif
								<div class="ui-block-content">
									<div class="row" id="more-edu">
									</div>
								</div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<span class="add-field add-field-education" onclick="educationClone()">
										<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use></svg>
										<span>Add Education Field</span>
									</span>
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 cancel">
									<a href="{{ route('educationSetting') }}" class="btn btn-secondary btn-lg full-width">Cancel</a>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 save-all">
									<button class="btn btn-primary btn-lg full-width">Save all Changes</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Your Employement History</h6>
					</div>
					<div class="ui-block-content">
						<form action="{{ route('saveWorkSetting') }}" method="POST">
							{{ csrf_field() }}
							<div class="row work-row">
								@if($jobCount == 0)
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="titlework">
										<div class="form-group label-floating">
											<label class="control-label">Title or Place</label>
											<input class="form-control" name="title[]" placeholder="" type="text" value="">
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="namework">
										<div class="form-group label-floating">
											<label class="control-label">Company/Organization</label>
											<input class="form-control" name="company[]" placeholder="" type="text" value="">
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="periodwork">
										<div class="form-group label-floating">
											<label class="control-label">Period of Time</label>
											<input class="form-control"  name="timeperiod[]" placeholder="" type="text" value="">
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" id="descwork">
										<div class="form-group label-floating">
											<label class="control-label">Description</label>
											<textarea class="form-control" name="description[]" placeholder=""></textarea>
										</div>
									</div>
								@else
									@foreach($userWork as $userWorks)
										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="titlework">
											<div class="form-group label-floating">
												<label class="control-label">Title or Place</label>
												<input class="form-control" name="title[]" placeholder="" type="text" value="{{ $userWorks->title }}">
											</div>
										</div>

										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="namework">
											<div class="form-group label-floating">
												<label class="control-label">Company/Organization</label>
												<input class="form-control" name="company[]" placeholder="" type="text" value="{{ $userWorks->company }}">
											</div>
										</div>

										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="periodwork">
											<div class="form-group label-floating">
												<label class="control-label">Period of Time</label>
												<input class="form-control"  name="timeperiod[]" placeholder="" type="text" value="{{ $userWorks->year }}">
											</div>
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" id="descwork">
											<div class="form-group label-floating">
												<label class="control-label">Description</label>
												<textarea class="form-control" name="description[]" placeholder="">{{ $userWorks->description }}</textarea>
											</div>
										</div>
									@endforeach
								@endif

								<div class="ui-block-content">
									<div class="row" id="more-work">
									</div>
								</div>

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<span class="add-field add-field-education" onclick="workClone()">
										<svg class="olymp-plus-icon" "><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-plus-icon"></use></svg>
										<span>  Add Work Field</span>
									</span>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<a href="{{ route('educationSetting') }}" class="btn btn-secondary btn-lg full-width">Cancel</a>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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

