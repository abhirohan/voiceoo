@extends('layout-newsfeed')
@section('newsfeed-data')
<div class="header-spacer"></div>
	<main class="col-xl-6 push-xl-3 col-lg-12 push-lg-0 col-md-12 col-sm-12 col-xs-12">
	@include('new-note')
	</main>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="clients-grid">

				<ul class="cat-list-bg-style align-center sorting-menu">
					<li class="cat-list__item active" data-filter="*"><a href="#" class="">All Projects</a></li>
					<li class="cat-list__item" data-filter=".politics"><a href="#" class="">Politics</a></li>
					<li class="cat-list__item" data-filter=".natural"><a href="#" class="">Natural</a></li>
					<li class="cat-list__item" data-filter=".worlds"><a href="#" class="">Worlds</a></li>
					<li class="cat-list__item" data-filter=".animals"><a href="#" class="">Animals</a></li>
					<li class="cat-list__item" data-filter=".family"><a href="#" class="">Family</a></li>
				</ul>


				<div class="row sorting-container" id="clients-grid-1" data-layout="masonry">

					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 sorting-item ecommerce natural">
						<div class="ui-block">
							<article class="hentry post">

								<div class="post__author author vcard inline-items">
									<img src="img/author-page.jpg" alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												19 hours ago
											</time>
										</div>
									</div>

									<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
										<ul class="more-dropdown">
											<li>
												<a href="#">Edit Post</a>
											</li>
											<li>
												<a href="#">Delete Post</a>
											</li>
											<li>
												<a href="#">Turn Off Notifications</a>
											</li>
											<li>
												<a href="#">Select as Featured</a>
											</li>
										</ul>
									</div>

								</div>

								<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
									pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
									mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
									accusantium doloremque.
								</p>

								<div class="post-additional-info inline-items">

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
										<span>8</span>
									</a>

									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img src="img/friend-harmonic7.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic8.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic9.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic10.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic11.jpg" alt="friend">
											</a>
										</li>
									</ul>

									<div class="names-people-likes">
										<a href="#">Jenny</a>, <a href="#">Robert</a> and
										<br>6 more liked this
									</div>


									<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
											<span>17</span>
										</a>

										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
											<span>24</span>
										</a>
									</div>


								</div>

								<div class="control-block-button post-control-button">

									<a href="#" class="btn btn-control featured-post">
										<svg class="olymp-trophy-icon"><use xlink:href="icons/icons.svg#olymp-trophy-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
									</a>

								</div>

							</article>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 sorting-item worlds family politics">

						<div class="ui-block">
							<article class="hentry post video">

								<div class="post__author author vcard inline-items">
									<img src="img/author-page.jpg" alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a> shared a <a href="#">link</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												7 hours ago
											</time>
										</div>
									</div>

									<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
										<ul class="more-dropdown">
											<li>
												<a href="#">Edit Post</a>
											</li>
											<li>
												<a href="#">Delete Post</a>
											</li>
											<li>
												<a href="#">Turn Off Notifications</a>
											</li>
											<li>
												<a href="#">Select as Featured</a>
											</li>
										</ul>
									</div>

								</div>

								<p>If someone missed it, check out the new song by System of a Revenge! I thinks they are going back to their roots...</p>

								<div class="post-video">
									<div class="video-thumb">
										<img src="img/video5.jpg" alt="photo">
										<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
											<svg class="olymp-play-icon"><use xlink:href="icons/icons.svg#olymp-play-icon"></use></svg>
										</a>
									</div>

									<div class="video-content">
										<a href="#" class="h4 title">System of a Revenge - Nothing Else Matters (LIVE)</a>
										<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempo incididunt ut labore..</p>
										<a href="#" class="link-site">YOUTUBE.COM</a>
									</div>
								</div>

								<div class="post-additional-info inline-items">

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
										<span>15</span>
									</a>

									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img src="img/friend-harmonic9.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic10.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic7.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic8.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic11.jpg" alt="friend">
											</a>
										</li>
									</ul>

									<div class="names-people-likes">
										<a href="#">Jenny</a>, <a href="#">Robert</a> and
										<br>13 more liked this
									</div>

									<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
											<span>1</span>
										</a>

										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
											<span>16</span>
										</a>
									</div>


								</div>

								<div class="control-block-button post-control-button">

									<a href="#" class="btn btn-control">
										<svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
									</a>

								</div>

							</article>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 sorting-item family animals natural politics">

						<div class="ui-block">
							<article class="hentry post">

								<div class="post__author author vcard inline-items">
									<img src="img/author-page.jpg" alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												2 hours ago
											</time>
										</div>
									</div>

									<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
										<ul class="more-dropdown">
											<li>
												<a href="#">Edit Post</a>
											</li>
											<li>
												<a href="#">Delete Post</a>
											</li>
											<li>
												<a href="#">Turn Off Notifications</a>
											</li>
											<li>
												<a href="#">Select as Featured</a>
											</li>
										</ul>
									</div>

								</div>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.
								</p>

								<div class="post-additional-info inline-items">

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
										<span>36</span>
									</a>

									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img src="img/friend-harmonic7.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic8.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic9.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic10.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic11.jpg" alt="friend">
											</a>
										</li>
									</ul>

									<div class="names-people-likes">
										<a href="#">You</a>, <a href="#">Elaine</a> and
										<br>34 more liked this
									</div>


									<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
											<span>17</span>
										</a>

										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
											<span>24</span>
										</a>
									</div>


								</div>

								<div class="control-block-button post-control-button">

									<a href="#" class="btn btn-control">
										<svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
									</a>

								</div>

							</article>

							<ul class="comments-list">
								<li>
									<div class="post__author author vcard inline-items">
										<img src="img/avatar10-sm.jpg" alt="author">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
											<div class="post__date">
												<time class="published" datetime="2017-03-24T18:18">
													5 mins ago
												</time>
											</div>
										</div>

										<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>

									</div>

									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
										<span>8</span>
									</a>
									<a href="#" class="reply">Reply</a>
								</li>
								<li class="has-children">
									<div class="post__author author vcard inline-items">
										<img src="img/avatar5-sm.jpg" alt="author">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Green Goo Rock</a>
											<div class="post__date">
												<time class="published" datetime="2017-03-24T18:18">
													1 hour ago
												</time>
											</div>
										</div>

										<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>

									</div>

									<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugiten, sed quia
										consequuntur magni dolores eos qui ratione voluptatem sequi en lod nesciunt. Neque porro
										quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit en lorem ipsum der.
									</p>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
										<span>5</span>
									</a>
									<a href="#" class="reply">Reply</a>

									<ul class="children">
										<li>
											<div class="post__author author vcard inline-items">
												<img src="img/avatar8-sm.jpg" alt="author">

												<div class="author-date">
													<a class="h6 post__author-name fn" href="#">Diana Jameson</a>
													<div class="post__date">
														<time class="published" datetime="2017-03-24T18:18">
															39 mins ago
														</time>
													</div>
												</div>

												<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>

											</div>

											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

											<a href="#" class="post-add-icon inline-items">
												<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
												<span>2</span>
											</a>
											<a href="#" class="reply">Reply</a>
										</li>
										<li>
											<div class="post__author author vcard inline-items">
												<img src="img/avatar2-sm.jpg" alt="author">

												<div class="author-date">
													<a class="h6 post__author-name fn" href="#">Nicholas Grisom</a>
													<div class="post__date">
														<time class="published" datetime="2017-03-24T18:18">
															24 mins ago
														</time>
													</div>
												</div>

												<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>

											</div>

											<p>Excepteur sint occaecat cupidatat non proident.</p>

											<a href="#" class="post-add-icon inline-items">
												<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
												<span>0</span>
											</a>
											<a href="#" class="reply">Reply</a>

										</li>
									</ul>

								</li>



								<li>
									<div class="post__author author vcard inline-items">
										<img src="img/avatar4-sm.jpg" alt="author">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Chris Greyson</a>
											<div class="post__date">
												<time class="published" datetime="2017-03-24T18:18">
													1 hour ago
												</time>
											</div>
										</div>

										<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>

									</div>

									<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
										<span>7</span>
									</a>
									<a href="#" class="reply">Reply</a>

								</li>
							</ul>

							<a href="#" class="more-comments">View more comments <span>+</span></a>
							<form class="comment-form inline-items">

								<div class="post__author author vcard inline-items">
									<img src="img/author-page.jpg" alt="author">
								</div>

								<div class="form-group with-icon-right is-empty">
									<textarea class="form-control" placeholder=""  ></textarea>
									<div class="add-options-message">
										<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
											<svg class="olymp-camera-icon"><use xlink:href="icons/icons.svg#olymp-camera-icon"></use></svg>
										</a>
									</div>
									<span class="material-input"></span></div>

							</form>
						</div>

					</div>

					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 sorting-item worlds ecommerce">

						<div class="ui-block">
							<article class="hentry post has-post-thumbnail shared-photo">

								<div class="post__author author vcard inline-items">
									<img src="img/author-page.jpg" alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a> shared <a href="#">Diana Jameson</a>’s <a href="#">photo</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												7 hours ago
											</time>
										</div>
									</div>

									<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
										<ul class="more-dropdown">
											<li>
												<a href="#">Edit Post</a>
											</li>
											<li>
												<a href="#">Delete Post</a>
											</li>
											<li>
												<a href="#">Turn Off Notifications</a>
											</li>
											<li>
												<a href="#">Select as Featured</a>
											</li>
										</ul>
									</div>

								</div>

								<p>Hi! Everyone should check out these amazing photographs that my friend shot the past week. Here’s one of them...leave a kind comment!</p>

								<div class="post-thumb">
									<img src="img/post-photo6.jpg" alt="photo">
								</div>

								<ul class="children single-children">
									<li>
										<div class="post__author author vcard inline-items">
											<img src="img/avatar8-sm.jpg" alt="author">
											<div class="author-date">
												<a class="h6 post__author-name fn" href="#">Diana Jameson</a>
												<div class="post__date">
													<time class="published" datetime="2017-03-24T18:18">
														16 hours ago
													</time>
												</div>
											</div>
										</div>

										<p>Here’s the first photo of our incredible photoshoot from yesterday. If you like it please say so and tel me what you wanna see next!</p>
									</li>
								</ul>

								<div class="post-additional-info inline-items">

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
										<span>15</span>
									</a>

									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img src="img/friend-harmonic5.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic10.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic7.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic8.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic2.jpg" alt="friend">
											</a>
										</li>
									</ul>

									<div class="names-people-likes">
										<a href="#">Diana</a>, <a href="#">Nicholas</a> and
										<br>13 more liked this
									</div>

									<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
											<span>0</span>
										</a>

										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
											<span>16</span>
										</a>
									</div>

								</div>

								<div class="control-block-button post-control-button">

									<a href="#" class="btn btn-control">
										<svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
									</a>

								</div>

							</article>
						</div>

					</div>

					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 sorting-item ecommerce natural">
						<div class="ui-block">
							<article class="hentry post">

								<div class="post__author author vcard inline-items">
									<img src="img/author-page.jpg" alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												19 hours ago
											</time>
										</div>
									</div>

									<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
										<ul class="more-dropdown">
											<li>
												<a href="#">Edit Post</a>
											</li>
											<li>
												<a href="#">Delete Post</a>
											</li>
											<li>
												<a href="#">Turn Off Notifications</a>
											</li>
											<li>
												<a href="#">Select as Featured</a>
											</li>
										</ul>
									</div>

								</div>

								<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
									pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
									mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
									accusantium doloremque.
								</p>

								<div class="post-additional-info inline-items">

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
										<span>8</span>
									</a>

									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img src="img/friend-harmonic7.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic8.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic9.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic10.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic11.jpg" alt="friend">
											</a>
										</li>
									</ul>

									<div class="names-people-likes">
										<a href="#">Jenny</a>, <a href="#">Robert</a> and
										<br>6 more liked this
									</div>


									<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
											<span>17</span>
										</a>

										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
											<span>24</span>
										</a>
									</div>


								</div>

								<div class="control-block-button post-control-button">

									<a href="#" class="btn btn-control featured-post">
										<svg class="olymp-trophy-icon"><use xlink:href="icons/icons.svg#olymp-trophy-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
									</a>

								</div>

							</article>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 sorting-item worlds family">

						<div class="ui-block">
							<article class="hentry post video">

								<div class="post__author author vcard inline-items">
									<img src="img/author-page.jpg" alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a> shared a <a href="#">link</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												7 hours ago
											</time>
										</div>
									</div>

									<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
										<ul class="more-dropdown">
											<li>
												<a href="#">Edit Post</a>
											</li>
											<li>
												<a href="#">Delete Post</a>
											</li>
											<li>
												<a href="#">Turn Off Notifications</a>
											</li>
											<li>
												<a href="#">Select as Featured</a>
											</li>
										</ul>
									</div>

								</div>

								<p>If someone missed it, check out the new song by System of a Revenge! I thinks they are going back to their roots...</p>

								<div class="post-video">
									<div class="video-thumb">
										<img src="img/video5.jpg" alt="photo">
										<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
											<svg class="olymp-play-icon"><use xlink:href="icons/icons.svg#olymp-play-icon"></use></svg>
										</a>
									</div>

									<div class="video-content">
										<a href="#" class="h4 title">System of a Revenge - Nothing Else Matters (LIVE)</a>
										<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempo incididunt ut labore..</p>
										<a href="#" class="link-site">YOUTUBE.COM</a>
									</div>
								</div>

								<div class="post-additional-info inline-items">

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
										<span>15</span>
									</a>

									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img src="img/friend-harmonic9.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic10.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic7.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic8.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic11.jpg" alt="friend">
											</a>
										</li>
									</ul>

									<div class="names-people-likes">
										<a href="#">Jenny</a>, <a href="#">Robert</a> and
										<br>13 more liked this
									</div>

									<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
											<span>1</span>
										</a>

										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
											<span>16</span>
										</a>
									</div>


								</div>

								<div class="control-block-button post-control-button">

									<a href="#" class="btn btn-control">
										<svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
									</a>

								</div>

							</article>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 sorting-item family animals natural">

						<div class="ui-block">
							<article class="hentry post has-post-thumbnail shared-photo">

								<div class="post__author author vcard inline-items">
									<img src="img/author-page.jpg" alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a> shared <a href="#">Diana Jameson</a>’s <a href="#">photo</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												7 hours ago
											</time>
										</div>
									</div>

									<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
										<ul class="more-dropdown">
											<li>
												<a href="#">Edit Post</a>
											</li>
											<li>
												<a href="#">Delete Post</a>
											</li>
											<li>
												<a href="#">Turn Off Notifications</a>
											</li>
											<li>
												<a href="#">Select as Featured</a>
											</li>
										</ul>
									</div>

								</div>

								<p>Hi! Everyone should check out these amazing photographs that my friend shot the past week. Here’s one of them...leave a kind comment!</p>

								<div class="post-thumb">
									<img src="img/post-photo6.jpg" alt="photo">
								</div>

								<ul class="children single-children">
									<li>
										<div class="post__author author vcard inline-items">
											<img src="img/avatar8-sm.jpg" alt="author">
											<div class="author-date">
												<a class="h6 post__author-name fn" href="#">Diana Jameson</a>
												<div class="post__date">
													<time class="published" datetime="2017-03-24T18:18">
														16 hours ago
													</time>
												</div>
											</div>
										</div>

										<p>Here’s the first photo of our incredible photoshoot from yesterday. If you like it please say so and tel me what you wanna see next!</p>
									</li>
								</ul>

								<div class="post-additional-info inline-items">

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
										<span>15</span>
									</a>

									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img src="img/friend-harmonic5.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic10.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic7.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic8.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic2.jpg" alt="friend">
											</a>
										</li>
									</ul>

									<div class="names-people-likes">
										<a href="#">Diana</a>, <a href="#">Nicholas</a> and
										<br>13 more liked this
									</div>

									<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
											<span>0</span>
										</a>

										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
											<span>16</span>
										</a>
									</div>

								</div>

								<div class="control-block-button post-control-button">

									<a href="#" class="btn btn-control">
										<svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
									</a>

								</div>

							</article>
						</div>

					</div>

					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 sorting-item worlds ecommerce">

						<div class="ui-block">
							<article class="hentry post video">

								<div class="post__author author vcard inline-items">
									<img src="img/author-page.jpg" alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a> shared a <a href="#">link</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												7 hours ago
											</time>
										</div>
									</div>

									<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
										<ul class="more-dropdown">
											<li>
												<a href="#">Edit Post</a>
											</li>
											<li>
												<a href="#">Delete Post</a>
											</li>
											<li>
												<a href="#">Turn Off Notifications</a>
											</li>
											<li>
												<a href="#">Select as Featured</a>
											</li>
										</ul>
									</div>

								</div>

								<p>If someone missed it, check out the new song by System of a Revenge! I thinks they are going back to their roots...</p>

								<div class="post-video">
									<div class="video-thumb">
										<img src="img/video5.jpg" alt="photo">
										<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
											<svg class="olymp-play-icon"><use xlink:href="icons/icons.svg#olymp-play-icon"></use></svg>
										</a>
									</div>

									<div class="video-content">
										<a href="#" class="h4 title">System of a Revenge - Nothing Else Matters (LIVE)</a>
										<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempo incididunt ut labore..</p>
										<a href="#" class="link-site">YOUTUBE.COM</a>
									</div>
								</div>

								<div class="post-additional-info inline-items">

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
										<span>15</span>
									</a>

									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img src="img/friend-harmonic9.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic10.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic7.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic8.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic11.jpg" alt="friend">
											</a>
										</li>
									</ul>

									<div class="names-people-likes">
										<a href="#">Jenny</a>, <a href="#">Robert</a> and
										<br>13 more liked this
									</div>

									<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon"><use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
											<span>1</span>
										</a>

										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
											<span>16</span>
										</a>
									</div>


								</div>

								<div class="control-block-button post-control-button">

									<a href="#" class="btn btn-control">
										<svg class="olymp-like-post-icon"><use xlink:href="icons/icons.svg#olymp-like-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
									</a>

									<a href="#" class="btn btn-control">
										<svg class="olymp-share-icon"><use xlink:href="icons/icons.svg#olymp-share-icon"></use></svg>
									</a>

								</div>

							</article>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="clients-grid">

			<ul class="cat-list-bg-style align-center sorting-menu">
				<li class="cat-list__item active" data-filter="*"><a href="#" class="">All Projects</a></li>
				<li class="cat-list__item" data-filter=".politics"><a href="#" class="">Politics</a></li>
				<li class="cat-list__item" data-filter=".natural"><a href="#" class="">Natural</a></li>
				<li class="cat-list__item" data-filter=".worlds"><a href="#" class="">Worlds</a></li>
				<li class="cat-list__item" data-filter=".animals"><a href="#" class="">Animals</a></li>
				<li class="cat-list__item" data-filter=".family"><a href="#" class="">Family</a></li>
			</ul>


			<div class="row sorting-container" id="clients-grid" data-layout="masonry">

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item ecommerce natural">
					<div class="ui-block">
						<div class="widget w-birthday-alert">
							<div class="icons-block">
								<svg class="olymp-cupcake-icon"><use xlink:href="icons/icons.svg#olymp-cupcake-icon"></use></svg>
								<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
							</div>

							<div class="content">
								<div class="author-thumb">
									<img src="img/avatar48-sm.jpg" alt="author">
								</div>
								<span>Today is</span>
								<a href="#" class="h4 title">Marina Valentine’s Birthday!</a>
								<p>Leave her a message with your best wishes on her profile page!</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item worlds family politics">

					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Friend Suggestions</h6>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
						</div>

						<ul class="widget w-friend-pages-added notification-list friend-requests">
							<li class="inline-items">
								<div class="author-thumb">
									<img src="img/avatar38-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Francine Smith</a>
									<span class="chat-message-item">8 Friends in Common</span>
								</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>

							</li>

							<li class="inline-items">
								<div class="author-thumb">
									<img src="img/avatar39-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Hugh Wilson</a>
									<span class="chat-message-item">6 Friends in Common</span>
								</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>

							</li>

							<li class="inline-items">
								<div class="author-thumb">
									<img src="img/avatar40-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Karen Masters</a>
									<span class="chat-message-item">6 Friends in Common</span>
								</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>

							</li>

						</ul>

					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item family animals natural politics">

					<div class="ui-block">

						<div class="ui-block-title">
							<h6 class="title">Activity Feed</h6>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
						</div>

						<ul class="widget w-activity-feed notification-list">
							<li>
								<div class="author-thumb">
									<img src="img/avatar49-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Marina Polson</a> commented on Jason Mark’s <a href="#" class="notification-link">photo.</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 mins ago</time></span>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar9-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Jake Parker </a> liked Nicholas Grissom’s <a href="#" class="notification-link">status update.</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">5 mins ago</time></span>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar50-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Mary Jane Stark </a> added 20 new photos to her <a href="#" class="notification-link">gallery album.</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">12 mins ago</time></span>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar51-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Nicholas Grissom </a> updated his profile <a href="#" class="notification-link">photo</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
								</div>
							</li>
							<li>
								<div class="author-thumb">
									<img src="img/avatar48-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Marina Valentine </a> commented on Chris Greyson’s <a href="#" class="notification-link">status update</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar52-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Green Goo Rock </a> posted a <a href="#" class="notification-link">status update</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
								</div>
							</li>
							<li>
								<div class="author-thumb">
									<img src="img/avatar10-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Elaine Dreyfuss  </a> liked your <a href="#" class="notification-link">blog post</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 hours ago</time></span>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar10-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Elaine Dreyfuss  </a> commented on your <a href="#" class="notification-link">blog post</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 hours ago</time></span>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar53-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Bruce Peterson </a> changed his <a href="#" class="notification-link">profile picture</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">15 hours ago</time></span>
								</div>
							</li>

						</ul>
					</div>

				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item worlds ecommerce">

					<div class="ui-block">
						<div class="widget w-action">

							<img src="img/logo.png" alt="Olympus">
							<div class="content">
								<h4 class="title">OLYMPUS</h4>
								<span>THE BEST SOCIAL NETWORK THEME IS HERE!</span>
								<a href="01-LandingPage.html" class="btn btn-bg-secondary btn-md">Register Now!</a>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item ecommerce natural">
					<div class="ui-block">
						<div class="widget w-birthday-alert">
							<div class="icons-block">
								<svg class="olymp-cupcake-icon"><use xlink:href="icons/icons.svg#olymp-cupcake-icon"></use></svg>
								<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
							</div>

							<div class="content">
								<div class="author-thumb">
									<img src="img/avatar48-sm.jpg" alt="author">
								</div>
								<span>Today is</span>
								<a href="#" class="h4 title">Marina Valentine’s Birthday!</a>
								<p>Leave her a message with your best wishes on her profile page!</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item worlds family">

					<div class="ui-block">
						<div class="ui-block-title">
							<h6 class="title">Friend Suggestions</h6>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
						</div>

						<ul class="widget w-friend-pages-added notification-list friend-requests">
							<li class="inline-items">
								<div class="author-thumb">
									<img src="img/avatar38-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Francine Smith</a>
									<span class="chat-message-item">8 Friends in Common</span>
								</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>

							</li>

							<li class="inline-items">
								<div class="author-thumb">
									<img src="img/avatar39-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Hugh Wilson</a>
									<span class="chat-message-item">6 Friends in Common</span>
								</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>

							</li>

							<li class="inline-items">
								<div class="author-thumb">
									<img src="img/avatar40-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Karen Masters</a>
									<span class="chat-message-item">6 Friends in Common</span>
								</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>

							</li>

						</ul>

					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item family animals natural">

					<div class="ui-block">

						<div class="ui-block-title">
							<h6 class="title">Activity Feed</h6>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
						</div>

						<ul class="widget w-activity-feed notification-list">
							<li>
								<div class="author-thumb">
									<img src="img/avatar49-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Marina Polson</a> commented on Jason Mark’s <a href="#" class="notification-link">photo.</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 mins ago</time></span>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar9-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Jake Parker </a> liked Nicholas Grissom’s <a href="#" class="notification-link">status update.</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">5 mins ago</time></span>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar50-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Mary Jane Stark </a> added 20 new photos to her <a href="#" class="notification-link">gallery album.</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">12 mins ago</time></span>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar51-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Nicholas Grissom </a> updated his profile <a href="#" class="notification-link">photo</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
								</div>
							</li>
							<li>
								<div class="author-thumb">
									<img src="img/avatar48-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Marina Valentine </a> commented on Chris Greyson’s <a href="#" class="notification-link">status update</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar52-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Green Goo Rock </a> posted a <a href="#" class="notification-link">status update</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
								</div>
							</li>
							<li>
								<div class="author-thumb">
									<img src="img/avatar10-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Elaine Dreyfuss  </a> liked your <a href="#" class="notification-link">blog post</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 hours ago</time></span>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar10-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Elaine Dreyfuss  </a> commented on your <a href="#" class="notification-link">blog post</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 hours ago</time></span>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar53-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Bruce Peterson </a> changed his <a href="#" class="notification-link">profile picture</a>.
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">15 hours ago</time></span>
								</div>
							</li>

						</ul>
					</div>

				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item worlds ecommerce">

					<div class="ui-block">
						<div class="widget w-action">

							<img src="img/logo.png" alt="Olympus">
							<div class="content">
								<h4 class="title">OLYMPUS</h4>
								<span>THE BEST SOCIAL NETWORK THEME IS HERE!</span>
								<a href="01-LandingPage.html" class="btn btn-bg-secondary btn-md">Register Now!</a>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
		</div>
	</div>
</div>


@endsection