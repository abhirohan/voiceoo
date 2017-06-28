<div class="ui-block">
				<div class="news-feed-form">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						{{-- <li class="nav-item">
							<a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab" aria-expanded="true">

								<svg class="olymp-status-icon"><use xlink:href="icons/icons.svg#olymp-status-icon"></use></svg>

								<span>Status</span>
							</a>
						</li> --}}
						{{-- <li class="nav-item">
							<a class="nav-link inline-items" data-toggle="tab" href="#profile-1" role="tab" aria-expanded="false">

								<svg class="olymp-multimedia-icon"><use xlink:href="icons/icons.svg#olymp-multimedia-icon"></use></svg>

								<span>Multimedia</span>
							</a>
						</li> --}}

						<li class="nav-item">
							<a class="nav-link active inline-items" data-toggle="tab" href="#blog" role="tab" aria-expanded="false">
								<svg class="olymp-blog-icon"><use xlink:href="icons/icons.svg#olymp-blog-icon"></use></svg>

								<span>New Note</span>
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						{{-- <div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
							<form>
								<div class="author-thumb">
									<img src="/uploads/avatars/{{ $userDetails->avatar }}" alt="{{ $userDetails->first_name }} {{ $userDetails->last_name }}" class="header-avtar">
								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Share what you are thinking here...</label>
									<textarea class="form-control" placeholder=""></textarea>
								</div>
								<div class="add-options-message">
									<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD PHOTOS">
										<svg class="olymp-camera-icon"><use xlink:href="icons/icons.svg#olymp-camera-icon"></use></svg>
									</a>
									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top" title="" data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
									</a>

									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD LOCATION">
										<svg class="olymp-small-pin-icon"><use xlink:href="icons/icons.svg#olymp-small-pin-icon"></use></svg>
									</a>

									<button class="btn btn-primary btn-md-2">Update Status</button>
									<button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>

								</div>

							</form>
						</div> --}}

						{{-- <div class="tab-pane" id="profile-1" role="tabpanel" aria-expanded="true">
							<form>
								<div class="author-thumb">
									<img src="/uploads/avatars/{{ $userDetails->avatar }}" alt="{{ $userDetails->first_name }} {{ $userDetails->last_name }}" class="header-avtar">
								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Share what you are thinking here...</label>
									<textarea class="form-control" placeholder=""  ></textarea>
								</div>
								<div class="add-options-message">
									<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD PHOTOS">
										<svg class="olymp-camera-icon"><use xlink:href="icons/icons.svg#olymp-camera-icon"></use></svg>
									</a>
									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top" title="" data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
									</a>

									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD LOCATION">
										<svg class="olymp-small-pin-icon"><use xlink:href="icons/icons.svg#olymp-small-pin-icon"></use></svg>
									</a>

									<button class="btn btn-primary btn-md-2">Post Status</button>
									<button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>

								</div>

							</form>
						</div> --}}

						<div class="tab-pane active" id="blog" role="tabpanel" aria-expanded="true">
							<form action="{{ route('newnoteUplaod') }}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="author-thumb">
									<img src="/uploads/avatars/{{ $userDetails->avatar }}" alt="{{ $userDetails->first_name }} {{ $userDetails->last_name }}" class="header-avtar">

								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Share what you are thinking here...</label>
									<textarea class="form-control" name="note_content" placeholder=""  ></textarea>
								</div>
								<div class="form-group with-icon label-floating if-featured">
									<img src="/uploads/avatars/{{ $userDetails->avatar }}" id="fetatured-upload" class="blog-fetured-upload">
									<span class="featured-image-cross">
										<svg class="olymp-close-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-close-icon"></use></svg>
									</span>

								</div>
								<div class="add-options-message">
									<a href="#" class="options-message" onclick="$('#note-featured').click(); return false;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Featured Image">
										<svg class="olymp-camera-icon"><use xlink:href="icons/icons.svg#olymp-camera-icon"></use></svg>
									</a>
									{{-- <a href="#" class="options-message" data-toggle="tooltip" data-placement="top" title="" data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
									</a> --}}

									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD LOCATION">
										<svg class="olymp-small-pin-icon"><use xlink:href="icons/icons.svg#olymp-small-pin-icon"></use></svg>
									</a>
									<input type="file" name="note_featured" id="note-featured" accept="image/*" style="opacity: 0; display:none;">

									<button type="submit" class="btn btn-primary btn-md-2">Write Note</button>
									{{-- <button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button> --}}

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>