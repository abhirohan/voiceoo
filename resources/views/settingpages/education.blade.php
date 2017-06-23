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
							<div class="row">

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Title or Place</label>
										<input class="form-control" name="title[]" placeholder="" type="text" value="The New College of Design">
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">School/University</label>
										<input class="form-control" name="school[]" placeholder="" type="text" value="asd">
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Period of Time</label>
										<input class="form-control" name="period[]" placeholder="" type="text" value="2001 - 2006">
									</div>
								</div>

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Description</label>
										<textarea class="form-control" name="description[]" placeholder=""  >Bachelor of Interactive Design in the New College. It was a five years intensive career. Average: A+
										</textarea>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Title or Place</label>
										<input class="form-control" name="title[]" placeholder="" type="text" value="The New College of Design">
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">School/University</label>
										<input class="form-control" name="school[]" placeholder="" type="text" value="wed">
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Period of Time</label>
										<input class="form-control" name="period[]" placeholder="" type="text" value="2001 - 2006">
									</div>
								</div>

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Description</label>
										<textarea class="form-control" name="description[]" placeholder=""  >Bachelor of Interactive Design in the New College. It was a five years intensive career. Average: A+
										</textarea>
									</div>
									<a href="#" class="add-field">
										<svg class="olymp-plus-icon"><use xlink:href="icons/icons.svg#olymp-plus-icon"></use></svg>
										<span>Add Education Field</span>
									</a>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<button class="btn btn-secondary btn-lg full-width">Cancel</button>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
						<form>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Title or Place</label>
										<input class="form-control" placeholder="" type="text" value="Digital Design Intern">
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Company/Organization</label>
										<input class="form-control" placeholder="" type="text" value="2006 - 2008">
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Period of Time</label>
										<input class="form-control" placeholder="" type="text" value="2006 - 2008">
									</div>
								</div>

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Description</label>
										<textarea class="form-control" placeholder=""  >Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.
										</textarea>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Title or Place</label>
										<input class="form-control" placeholder="" type="text" value="Digital Design Intern">
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Company/Organization</label>
										<input class="form-control" placeholder="" type="text" value="2006 - 2008">
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Period of Time</label>
										<input class="form-control" placeholder="" type="text" value="2006 - 2008">
									</div>
								</div>

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Description</label>
										<textarea class="form-control" placeholder=""  >Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.
										</textarea>
									</div>
									<a href="#" class="add-field">
										<svg class="olymp-plus-icon"><use xlink:href="icons/icons.svg#olymp-plus-icon"></use></svg>
										<span>Add Education Field</span>
									</a>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<button class="btn btn-secondary btn-lg full-width">Cancel</button>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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

