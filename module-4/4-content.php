<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<meta name="viewport" content="width=device-width, initial-scale = 1">
<!-- Footer -->
		<footer class="pt-5 pb-4" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold uyuy">ABOUT US</h5>
						<p class="mb-4">Etiam laoreet in ex quis efficitur , Etiam laoreet in ex quis efficitur.</p>
						
						Email:<p><a class="hoverppp"> nguyennguyenhoa9c@gmai.com </p><br></a>
						Phone:<p> 0397214101</p>
					
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">FRESH TWEETS</h5>
						<p><a class="hoverppp">Browser Candidates</a></p>
						<p><a class="hoverppp">Post a job</a></p>
						<p><a class="hoverppp">Employer Page</a></p>
						<p><a class="hoverppp">Resume</a></p>
						<p><a class="hoverppp">Dash Board</a></p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">LATEST UPDATES</h5>
						<p><a class="hoverppp">Browser Candidates</a></p>
						<p><a class="hoverppp">Post a job</a></p>
						<p><a class="hoverppp">Employer Page</a></p>
						<p><a class="hoverppp">Resume</a></p>
						<p><a class="hoverppp">Dash Board</a></p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis illo repellendus obcaecati eligendi doloremque. <br> <br>
						<div class="input-group">
						  	<input type="text" class="form-control" placeholder="Your Email Address">
						  	<span class="input-group-addon" id="basic-addon2"><i class="fa fa-envelope"></i></span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Copyright -->
		<section class="copyright">
			<div class="container">
				<div class="row">
						<div class="col-md-8">
						&copy; 2018 Your Company. All Rights Reserved.
					</div>
						<div class="col-md-4" >
							<ul class="social-pet mt-4 bbbb">
							<li><a href="#" title="facebook"><i class="fa fa-facebook-f"></i></a></li>
							<li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" title="instagram"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
						
					</div>
			</div>
		</section>
<!-- Footer -->