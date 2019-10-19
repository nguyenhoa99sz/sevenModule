<<<<<<< HEAD
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<section class="type-572">
<section id="tabs" class="project-tab">
<div class="container">
    <div class="row">
		<div class="col-md-12" >
			<h3></h3>

			<div class="tabbable-panel" >
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							Description </a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">
							Review (0) </a>
						</li>
						<li>
							<a href="#tab_default_3" data-toggle="tab">
							Shiping And Delevery </a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_default_1">
							<div class="col-md-6">
								<h1>Viverra a consectetur</h1>
								<br>
								Enim in malesuada fusce dolor mi massa leo taciti nulla vestibulum dignissim senectus vitae elit ullamcorper primis.
								<br>
								<br>
								<b>Facilisis scelerisque mi</b> <br> <br>
								Amet quisque adipiscing scelerisque vestibulum a parturient aptent et pretium a a suspendisse a vestibulum dolor a adipiscing a curabitur integer vulputate praesent convallis. Est nisi ante accumsan pulvinar facilisi orci dignissim lacinia ad sodales conubia viverra a consectetur lectus cras quis aliquam eros curabitur ultricies mauris lectus dictumst magna hac aenean. Odio nec adipiscing. Pulvinar in taciti dui condimentum a vel bibendum aliquet velit nam ultrices. Odio nec adipiscing neque purus parturient a est eu accumsan placerat vestibulum.
							</div>
							<div class="col-md-6" style="margin-top : 30px;">
								<b>Ullamcorper metus
								</b>
								<br><br>
								Nam orci mi non ultricies ut eu in vitae pharetra est in dapibus eu cum nam. Nisl orci quisque congue in ullamcorper metus a hac a arcu tristique class ullamcorper mi lacinia leo id mi at lectus. Pulvinar in taciti dui condimentum a vel bibendum aliquet velit nam ultrices. Odio nec adipiscing neque purus parturient a est eu accumsan placerat dapibus adipiscing parturient placerat a tincidunt enim.
								<br>
								<br>
								<b>Dignissim a leo cum</b> <br><br>
								A parturient adipiscing dignissim facilisi ullamcorper ut natoque vestibulum class. Mus sit ridiculus risus dignissim a leo cum adipiscing vehicula et adipiscing maecenas adipiscing senectus ultrices at pulvinar neque iaculis a viverra. Bibendum class nec sapien at cubilia dictumst torquent felis.

							</div>
						</div>
						<div class="tab-pane" id="tab_default_2" style="margin-top:30px;">
							<div class="col-md-6">
								<b>Reviews</b> <br>
								<br>
								There are no reviews yet.
							</div>
							<div class="col-md-6" style="position: relative;">
								<b>
								Be the first to review “Ysed rhoncus”
								<br>
								<br>
								</b>
								Your email address will not be published. Required fields are marked *
								<br>
								<br>
								<div class="popo">
								<div class="rate">your rating
									<input type="radio" id="star5" name="rate" value="5" />
									<label for="star5" title="text">5 stars</label>
									<input type="radio" id="star4" name="rate" value="4" />
									<label for="star4" title="text">4 stars</label>
									<input type="radio" id="star3" name="rate" value="3" />
									<label for="star3" title="text">3 stars</label>
									<input type="radio" id="star2" name="rate" value="2" />
									<label for="star2" title="text">2 stars</label>
									<input type="radio" id="star1" name="rate" value="1" />
									<label for="star1" title="text">1 star</label>
								</div>
								</div>
								 <br> <br>
								<div style="position: absolute; left: 15px;">You reviews*</div> <br>
								<textarea rows="6" cols="60"></textarea>
								<div style="margin-left: -15px;">
									<div class="col-md-6">
									Name*
									<br>
									<input>
								</div>
								<div class="col-md-6">
									Email*
									<br>
									<input>
								</div>
								</div> <br> <br>
								<input type="checkbox" name="vehicle1" value="Bike">Save my name, email, and website in this browser for the next time I comment.<br> <br>
								<button type="button" class="btn btn-default">Submit</button> <br>
							</div>
						</div>
						<div class="tab-pane" id="tab_default_3">
							<p>
								Howdy, I'm in Tab 3.
							</p>
							<p>
								Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
							</p>
							<p>
							</p>
						</div>
					</div>
				</div>
			</div>
</div>
=======
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<section class="type-572">
<section id="tabs" class="project-tab">
<div class="container">
    <div class="row">
		<div class="col-md-12">
			<h3></h3>

			<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							Tab 1 </a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">
							Tab 2 </a>
						</li>
						<li>
							<a href="#tab_default_3" data-toggle="tab">
							Tab 3 </a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_default_1">
							<p>
								I'm in Tab 1.
							</p>
							<p>
								Duis autem eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
							</p>
							<p>
							</p>
						</div>
						<div class="tab-pane" id="tab_default_2">
							<p>
								Howdy, I'm in Tab 2.
							</p>
							<p>
								Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
							</p>
							<p>
							</p>
						</div>
						<div class="tab-pane" id="tab_default_3">
							<p>
								Howdy, I'm in Tab 3.
							</p>
							<p>
								Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
							</p>
							<p>
							</p>
						</div>
					</div>
				</div>
			</div>
</div>
>>>>>>> d8b30b30d45fc8b12d7f6ac7aa4c6722006c0556
</section>