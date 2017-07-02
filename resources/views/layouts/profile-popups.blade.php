{{-- File too large Header --}}
<div class="modal fade" id="filelarge" style="z-index: 99999;" >
	<div class="modal-dialog ui-block window-popup filelarge">
		<div class="ui-block-title">
			<h6 class="title">File Error</h6>
		</div>

		<span class="upload-photo-item" onClick="$('#user-header').click();">
			<svg class="olymp-close-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-close-icon"></use></svg>

			<h6>Invalid File Dimensions</h6>
			<span>File should be of  size Min. width : 960px  and Max. Height : 768px</span><br>
			<span>{ OR }</span><br>
			<span>File dimensions are too large.</span>
		</span>
		<span data-toggle="modal" data-target="#crop-section-header" id="hit-cover-change"></span>
	</div>
</div>
<span data-toggle="modal" data-target="#filelarge" id="filelargehit"></span>

{{-- File too large Header --}}
<div class="modal fade" id="filelargeavatar" style="z-index: 99999;" >
	<div class="modal-dialog ui-block window-popup filelarge">
		<div class="ui-block-title">
			<h6 class="title">File Error</h6>
		</div>

		<span class="upload-photo-item" onClick="$('#user-header').click();">
			<svg class="olymp-close-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-close-icon"></use></svg>

			<h6>Invalid File Dimensions</h6>
			<span>File should be of  size Min. width : 960px  and Max. Height : 768px</span><br>
			<span>{ OR }</span><br>
			<span>File dimensions are too large.</span>
		</span>
		<span data-toggle="modal" data-target="#crop-section-header" id="hit-cover-change"></span>
	</div>
</div>
<span data-toggle="modal" data-target="#filelargeavatar" id="avatarfilelargehit"></span>



<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo">
	<div class="modal-dialog ui-block window-popup update-header-photo">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="ui-block-title">
			<h6 class="title">Update Header Photo</h6>
		</div>

		<span class="upload-photo-item" onClick="$('#user-header').click();">
			<svg class="olymp-computer-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-computer-icon"></use></svg>

			<h6>Upload Cover Pic</h6>
			<span>Browse your system.</span>
		</span>
		<form enctype="multipart/form-data" id="header-form" method="POST" style="display: none;">
				{{ csrf_field() }}
				<input type="file" name="user_header" id="user-header" accept="image/*" style="overflow: hidden; opacity:0">
		</form>
		<span data-toggle="modal" data-target="#crop-section-header" id="hit-cover-change"></span>
	</div>
</div>


<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Crop Section header -->

<div class="modal fade" id="crop-section-header">
	<div class="modal-dialog ui-block window-popup update-cover-photo">
		<div class="ui-block-title">
			<h6 class="title">Crop the Image</h6>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<form enctype="multipart/form-data" id="header-forms" method="POST" action="{{ route('coverupload')}}">
					{{ csrf_field() }}
					<div class="image-wrapper">
					<img src="" name="user_header_change" id="covershow">
					</div>
					<input type="hidden" id="coverimagebase64" name="cover64">
					<input type="hidden" name="cover_width" id="cover-width">
					<input type="hidden" name="cover_height" id="cover-height">
					<input type="hidden" name="cover_x" id="cover-x">
					<input type="hidden" name="cover_y" id="cover-y">
			    </form>
					
				<img id="header-to-crop" src="" alt="your header image" />
			</div>
			<div class="col-lg-12 col-sm-12 text-center">
				<button class="btn btn-primary btn-md upload-cover-result">Crop
					<div class="ripple-container"></div>
				</button>
			</div>
		</div>
	</div>
</div>



<!-- ... end Window-popup Window-popup Crop Section Header  -->



<!-- Window-popup Update Avatar Photo -->

<div class="modal fade" id="update-avtar-photo">
	<div class="modal-dialog ui-block window-popup update-avtar-photo">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="ui-block-title">
			<h6 class="title">Update Photo</h6>
		</div>

		<span class="upload-photo-item" onClick="$('#user-avatar').click();">
			<svg class="olymp-computer-icon"><use xlink:href="{{ route('basepath') }}/icons/icons.svg#olymp-computer-icon"></use></svg>

			<h6>Upload Photo</h6>
			<span>Browse your system.</span>
		</span>

		<form enctype="multipart/form-data" id="avatar-form" method="POST" action="{{ route('avatarupload')}}" style="display: none;">
				{{ csrf_field() }}
				<input type="file" name="user_avatar" id="user-avatar" accept="image/*" style="overflow: hidden; opacity:0">
		</form>
		<span data-toggle="modal" data-target="#crop-section-avatar" id="hit-avatar-change"></span>
	</div>
</div>


<!-- ... end Window-popup Update Avatar Photo -->

<!-- Window-popup Crop Section header -->

<div class="modal fade" id="crop-section-avatar">
	<div class="modal-dialog ui-block window-popup crop-section-avatar">
		<div class="ui-block-title">
			<h6 class="title">Crop the Image</h6>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<form enctype="multipart/form-data" id="avatar-forms" method="POST" action="{{ route('avatarupload')}}">
					{{ csrf_field() }}
					<div class="image-wrapper">
					<img src="" name="user_cover_change" id="avatarShow">
					</div>
					<input type="hidden" id="avatarimagebase64" name="avatar64">
					<input type="hidden" name="avatar_width" id="avatar-width">
					<input type="hidden" name="avatar_height" id="avatar-height">
					<input type="hidden" name="avatar_x" id="avatar-x">
					<input type="hidden" name="avatar_y" id="avatar-y">
			    </form>
				
				<img id="avatar-to-crop" src="" alt="your header image" />
			</div>
			<div class="col-lg-12 col-sm-12 text-center">
				<button class="btn btn-primary btn-md upload-avatar-result">Crop
					<div class="ripple-container"></div>
				</button>
			</div>
		</div>
	</div>
</div>



<!-- ... end Window-popup Window-popup Crop Section Header  -->

<!-- Window-popup Choose from my Photo -->
<div class="modal fade" id="choose-from-my-photo">
	<div class="modal-dialog ui-block window-popup choose-from-my-photo">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
		</a>

	<div class="ui-block-title">
		<h6 class="title">Choose from My Photos</h6>

		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
					<svg class="olymp-photos-icon"><use xlink:href="icons/icons.svg#olymp-photos-icon"></use></svg>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
					<svg class="olymp-albums-icon"><use xlink:href="icons/icons.svg#olymp-albums-icon"></use></svg>
				</a>
			</li>
		</ul>
	</div>


	<div class="ui-block-content">
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

				<div class="choose-photo-item" data-mh="choose-item">
					<div class="radio">
						<label class="custom-radio">
							<img src="img/choose-photo1.jpg" alt="photo">
							<input type="radio" name="optionsRadios">
						</label>
					</div>
				</div>
				<div class="choose-photo-item" data-mh="choose-item">
					<div class="radio">
						<label class="custom-radio">
							<img src="img/choose-photo2.jpg" alt="photo">
							<input type="radio" name="optionsRadios">
						</label>
					</div>
				</div>
				<div class="choose-photo-item" data-mh="choose-item">
					<div class="radio">
						<label class="custom-radio">
							<img src="img/choose-photo3.jpg" alt="photo">
							<input type="radio" name="optionsRadios">
						</label>
					</div>
				</div>

				<div class="choose-photo-item" data-mh="choose-item">
					<div class="radio">
						<label class="custom-radio">
							<img src="img/choose-photo4.jpg" alt="photo">
							<input type="radio" name="optionsRadios">
						</label>
					</div>
				</div>
				<div class="choose-photo-item" data-mh="choose-item">
					<div class="radio">
						<label class="custom-radio">
							<img src="img/choose-photo5.jpg" alt="photo">
							<input type="radio" name="optionsRadios">
						</label>
					</div>
				</div>
				<div class="choose-photo-item" data-mh="choose-item">
					<div class="radio">
						<label class="custom-radio">
							<img src="img/choose-photo6.jpg" alt="photo">
							<input type="radio" name="optionsRadios">
						</label>
					</div>
				</div>

				<div class="choose-photo-item" data-mh="choose-item">
					<div class="radio">
						<label class="custom-radio">
							<img src="img/choose-photo7.jpg" alt="photo">
							<input type="radio" name="optionsRadios">
						</label>
					</div>
				</div>
				<div class="choose-photo-item" data-mh="choose-item">
					<div class="radio">
						<label class="custom-radio">
							<img src="img/choose-photo8.jpg" alt="photo">
							<input type="radio" name="optionsRadios">
						</label>
					</div>
				</div>
				<div class="choose-photo-item" data-mh="choose-item">
					<div class="radio">
						<label class="custom-radio">
							<img src="img/choose-photo9.jpg" alt="photo">
							<input type="radio" name="optionsRadios">
						</label>
					</div>
				</div>


				<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
				<a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

			</div>
			<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

				<div class="choose-photo-item" data-mh="choose-item">
					<figure>
						<img src="img/choose-photo10.jpg" alt="photo">
						<figcaption>
							<a href="#">South America Vacations</a>
							<span>Last Added: 2 hours ago</span>
						</figcaption>
					</figure>
				</div>
				<div class="choose-photo-item" data-mh="choose-item">
					<figure>
						<img src="img/choose-photo11.jpg" alt="photo">
						<figcaption>
							<a href="#">Photoshoot Summer 2016</a>
							<span>Last Added: 5 weeks ago</span>
						</figcaption>
					</figure>
				</div>
				<div class="choose-photo-item" data-mh="choose-item">
					<figure>
						<img src="img/choose-photo12.jpg" alt="photo">
						<figcaption>
							<a href="#">Amazing Street Food</a>
							<span>Last Added: 6 mins ago</span>
						</figcaption>
					</figure>
				</div>

				<div class="choose-photo-item" data-mh="choose-item">
					<figure>
						<img src="img/choose-photo13.jpg" alt="photo">
						<figcaption>
							<a href="#">Graffity & Street Art</a>
							<span>Last Added: 16 hours ago</span>
						</figcaption>
					</figure>
				</div>
				<div class="choose-photo-item" data-mh="choose-item">
					<figure>
						<img src="img/choose-photo14.jpg" alt="photo">
						<figcaption>
							<a href="#">Amazing Landscapes</a>
							<span>Last Added: 13 mins ago</span>
						</figcaption>
					</figure>
				</div>
				<div class="choose-photo-item" data-mh="choose-item">
					<figure>
						<img src="img/choose-photo15.jpg" alt="photo">
						<figcaption>
							<a href="#">The Majestic Canyon</a>
							<span>Last Added: 57 mins ago</span>
						</figcaption>
					</figure>
				</div>


				<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
				<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
			</div>
		</div>
	</div>

</div>
</div>

<!-- ... end Window-popup Choose from my Photo -->


<div class="window-popup playlist-popup">

	<a href="" class="icon-close js-close-popup">
		<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
	</a>

	<table class="playlist-popup-table">

		<thead>

		<tr>

			<th class="play">
				PLAY
			</th>

			<th class="cover">
				COVER
			</th>

			<th class="song-artist">
				SONG AND ARTIST
			</th>

			<th class="album">
				ALBUM
			</th>

			<th class="released">
				RELEASED
			</th>

			<th class="duration">
				DURATION
			</th>

			<th class="spotify">
				GET IT ON SPOTIFY
			</th>

			<th class="remove">
				REMOVE
			</th>
		</tr>

		</thead>

		<tbody>
		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="img/playlist19.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">We Can Be Heroes</a>
					<a href="#" class="composition-author">Jason Bowie</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">Ziggy Firedust</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="img/playlist6.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">The Past Starts Slow and Ends</a>
					<a href="#" class="composition-author">System of a Revenge</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">Wonderize</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="img/playlist7.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">The Pretender</a>
					<a href="#" class="composition-author">Kung Fighters</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">Warping Lights</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="img/playlist8.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">Seven Nation Army</a>
					<a href="#" class="composition-author">The Black Stripes</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition ">Icky Strung (LIVE at Cube Garden)</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="img/playlist9.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">Leap of Faith</a>
					<a href="#" class="composition-author">Eden Artifact</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">The Assassins’s Soundtrack</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="img/playlist10.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">Killer Queen</a>
					<a href="#" class="composition-author">Archiduke</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition ">News of the Universe</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>
		</tbody>
	</table>

	<audio id="mediaplayer" data-showplaylist="true">
		<source src="mp3/Twice.mp3" title="Track 1" data-poster="track1.png" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 2" data-poster="track2.png" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 3" data-poster="track3.png" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 4" data-poster="track4.png" type="audio/mpeg">
	</audio>

</div>

<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive">
	<div class="ui-block-title">
		<span class="icon-status online"></span>
		<h6 class="title" >Chat</h6>
		<div class="more">
			<svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
			<svg class="olymp-little-delete js-chat-open"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
		</div>
	</div>
	<div class="mCustomScrollbar">
		<ul class="notification-list chat-message chat-message-field">
			<li>
				<div class="author-thumb">
					<img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
				</div>
			</li>

			<li>
				<div class="author-thumb">
					<img src="img/author-page.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Don’t worry Mathilda!</span>
					<span class="chat-message-item">I already bought everything</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
				</div>
			</li>

			<li>
				<div class="author-thumb">
					<img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
				</div>
			</li>
		</ul>
	</div>

	<form>

		<div class="form-group label-floating is-empty">
			<label class="control-label">Press enter to post...</label>
			<textarea class="form-control" placeholder=""></textarea>
			<div class="add-options-message">
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="icons/icons.svg#olymp-happy-sticker-icon"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img src="img/icon-chat1.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat2.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat3.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat4.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat5.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat6.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat7.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat8.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat9.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat10.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat11.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat12.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat13.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat14.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat15.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat16.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat17.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat18.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat19.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat20.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat21.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat22.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat23.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat24.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat25.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat26.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat27.png" alt="icon">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<span class="material-input"></span></div>

	</form>


</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->