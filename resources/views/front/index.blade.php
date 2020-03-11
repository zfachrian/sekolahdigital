@extends('front.templates.main')
@section('title') Digital Development Course @endsection
@section('content')

	<!-- banner -->
	<div class="banner" id="home">
		<div class="container">
			<div class="row banner-text">
				<div class="slider-info col-lg-6">
					<div class="banner-info-grid mt-lg-5">
						<h2>Welcome To Digital Course Platform </h2>
						<p>Integer pulvinar leo id viverra feugiat. Pellentesque libero justo, semper at tempus vel,
							ultrices in ligula.
							Nulla ut sollicitudin velit. Sed porttitor orci vel fermentum maximus. Curabitur ut turpis
							massa.</p>
					</div>
					<a class="btn mr-2 text-capitalize" href="#popup1">read more </a>
					<a class="btn text-capitalize" href="#popup2">watch video </a>
				</div>
				<div class="col-lg-6 col-md-8 mt-lg-0 mt-sm-5 mt-3 banner-image text-lg-center">
					<img src="{{asset('front/images/bannerpng.png')}}" alt="" class="img-fluid" />
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->

	<!-- about -->
	<section class="about py-5" id="about">
		<div class="container py-lg-5 py-sm-3">
			<div class="row">
				<div class="col-lg-3 about-left">
					<h3 class="heading mb-lg-5 mb-4">About us</h3>
				</div>
				<div class="col-lg-5 col-md-7 about-text">
					<h3>Welcome To Our Digital Course Platform Website </h3>
					<p class="mt-3">Integer pulvinar leo id viverra feugiat. Pellentesque libero justo, semper at tempus
						vel, ultrices in ligula. Nulla uter sollicitudin velit. Sed porttitor orci vel ferm.</p>
					<p class="mt-2">Integer pulvinar leo id viverra feugiat. Pellentesque libero justo, semper at tempus
						vel, ultrices in ligula. Nulla uter sollicitudin velit. Sed porttitor orci vel fermentum elit
						maximus. Curabitur ut turpis massa in condimentum libero. Pellentesque maximus.</p>
				</div>
				<div class="col-lg-4 col-md-5 about-img">
					<img src="{{asset('front/images/1.png')}}" alt="" class="img-fluid" />
				</div>
			</div>
		</div>
	</section>
	<!-- //about -->

	<!-- why choose us -->
	<section class="choose py-5" id="services">
		<div class="container py-md-3">
			<h3 class="heading mb-5"> What we provide</h3>
			<div class="feature-grids row">
				<div class="col-lg-3 col-sm-6">
					<div class="f1 icon1 p-4">
						<div class="icon">
							<span class="fa fa-bandcamp"></span>
						</div>
						<h3 class="my-3">Digital Marketing</h3>
						<p>Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu
							ullamcorper.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
					<div class="f1 icon2 p-4">
						<div class="icon">
							<span class="fa fa-codepen"></span>
						</div>
						<h3 class="my-3">Web Development</h3>
						<p>Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu
							ullamcorper.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
					<div class="f1 icon3 p-4">
						<div class="icon">
							<span class="fa fa-btc"></span>
						</div>
						<h3 class="my-3">Advertising</h3>
						<p>Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu
							ullamcorper.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
					<div class="f1 icon4 p-4">
						<div class="icon">
							<span class="fa fa-cloud"></span>
						</div>
						<h3 class="my-3">Product Sales</h3>
						<p>Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu
							ullamcorper.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //why choose us -->

	<!-- Offered Services -->
	<section class="process py-5" id="process">
		<div class="container py-md-3">
			<h3 class="heading mb-5">Marketing Process</h3>
			<div class="row process-grids">
				<div class="col-lg-3 col-md-6 my-lg-4 w3pvt-ab position-relative">
					<div class="">
						<img src="{{asset('front/images/1.png')}}" alt="" class="img-fluid">
					</div>
					<h4 class="feed-title my-md-3 mb-3">Marketing Products</h4>
					<p> Excepteur ut occaecat proident, sunt in culpa quis. Phasellus lacinia id erat risus quis.</p>
				</div>
				<div class="col-lg-3 col-md-6 my-lg-4 mt-md-0 mt-4 w3pvt-ab position-relative">
					<div class="">
						<img src="{{asset('front/images/2.png')}}" alt="" class="img-fluid">
					</div>
					<h4 class="feed-title my-md-3 mb-3">Advertising Agency</h4>
					<p> Excepteur ut occaecat proident, sunt in culpa quis. Phasellus lacinia id erat risus quis.</p>
				</div>
				<div class="col-lg-3 col-md-6 my-lg-4 mt-sm-5 mt-4 w3pvt-ab position-relative">
					<div class="">
						<img src="{{asset('front/images/1.png')}}" alt="" class="img-fluid">
					</div>
					<h4 class="feed-title my-md-3 mb-3">Process Planning</h4>
					<p> Excepteur ut occaecat proident, sunt in culpa quis. Phasellus lacinia id erat risus quis.</p>
				</div>
				<div class="col-lg-3 col-md-6 mt-lg-4 mt-sm-5 mt-4 w3pvt-ab">
					<div class="">
						<img src="{{asset('front/images/2.png')}}" alt="" class="img-fluid">
					</div>
					<h4 class="feed-title my-md-3 mb-3">Product Sales</h4>
					<p> Excepteur ut occaecat proident, sunt in culpa quis. Phasellus lacinia id erat risus quis.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Offered Services -->

	<!-- video -->
	<section class="video py-5" id="video">
		<div class="container">
			<div class="inner-sec-w3ls py-lg-5 py-3">
				<div class="row">
					<div class="col-lg-6 video-right px-lg-5 px-2">
						<h3 class="tittle-w3">Digital Marketing Business Agency</h3>
						<p class="mt-4">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum
							dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras
							sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel
							interdum.</p>

					</div>
					<div class="col-lg-6 video-img mt-lg-0 mt-4">
						<img src="{{asset('front/images/banner.png')}}" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //video -->

	<!-- portfolio -->
	<section class="portfolio py-5" id="portfolio">
		<div class="container py-3">
			<h3 class="heading text-capitalize mb-md-5 mb-4">Our Portfolio <span></span></h3>
			<div class="row news-grids text-center">
				<div class="col-md-3 col-6 gal-img">
					<a href="#gal1"><img src="{{asset('front/images/g1.jpg')}}" alt="portfolio image" class="img-fluid"></a>
				</div>
				<div class="col-md-3 col-6 gal-img">
					<a href="#gal2"><img src="{{asset('front/images/g2.jpg')}}" alt="portfolio image" class="img-fluid"></a>
				</div>
				<div class="col-md-3 col-6 gal-img">
					<a href="#gal3"><img src="{{asset('front/images/g3.jpg')}}" alt="portfolio image" class="img-fluid"></a>
				</div>
				<div class="col-md-3 col-6 gal-img">
					<a href="#gal3"><img src="{{asset('front/images/g4.jpg')}}" alt="portfolio image" class="img-fluid"></a>
				</div>
				<div class="col-md-3 col-6 gal-img">
					<a href="#gal3"><img src="{{asset('front/images/g5.jpg')}}" alt="portfolio image" class="img-fluid"></a>
				</div>
				<div class="col-md-3 col-6 gal-img">
					<a href="#gal3"><img src="{{asset('front/images/g6.jpg')}}" alt="portfolio image" class="img-fluid"></a>
				</div>
				<div class="col-md-3 col-6 gal-img">
					<a href="#gal3"><img src="{{asset('front/images/g7.jpg')}}" alt="portfolio image" class="img-fluid"></a>
				</div>
				<div class="col-md-3 col-6 gal-img">
					<a href="#gal3"><img src="{{asset('front/images/g8.jpg')}}" alt="portfolio image" class="img-fluid"></a>
				</div>

			</div>
			<!-- portfolio popups -->
			<!-- popup-->
			<div id="gal1" class="pop-overlay animate">
				<div class="popup">
					<img src="i{{asset('front/images/g1.jpg')}}" alt="Popup Image" class="img-fluid" />
					<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
						dolor.</p>
					<a class="close" href="#portfolio">&times;</a>
				</div>
			</div>
			<!-- //popup -->
			<!-- popup-->
			<div id="gal2" class="pop-overlay animate">
				<div class="popup">
					<img src="{{asset('front/images/g2.jpg')}}" alt="Popup Image" class="img-fluid" />
					<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
						dolor.</p>
					<a class="close" href="#portfolio">&times;</a>
				</div>
			</div>
			<!-- //popup -->
			<!-- popup-->
			<div id="gal3" class="pop-overlay animate">
				<div class="popup">
					<img src="{{asset('front/images/g3.jpg')}}" alt="Popup Image" class="img-fluid" />
					<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
						dolor.</p>
					<a class="close" href="#portfolio">&times;</a>
				</div>
			</div>
			<!-- //popup3 -->
			<!-- popup-->
			<div id="gal4" class="pop-overlay animate">
				<div class="popup">
					<img src="{{asset('front/images/g4.jpg')}}" alt="Popup Image" class="img-fluid" />
					<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
						dolor.</p>
					<a class="close" href="#portfolio">&times;</a>
				</div>
			</div>
			<!-- //popup -->
			<!-- popup-->
			<div id="gal5" class="pop-overlay animate">
				<div class="popup">
					<img src="{{asset('front/images/g5.jpg')}}" alt="Popup Image" class="img-fluid" />
					<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
						dolor.</p>
					<a class="close" href="#portfolio">&times;</a>
				</div>
			</div>
			<!-- //popup -->
			<!-- popup-->
			<div id="gal6" class="pop-overlay animate">
				<div class="popup">
					<img src="{{asset('front/images/g6.jpg')}}" alt="Popup Image" class="img-fluid" />
					<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
						dolor.</p>
					<a class="close" href="#portfolio">&times;</a>
				</div>
			</div>
			<!-- //popup -->
			<!-- popup-->
			<div id="gal7" class="pop-overlay animate">
				<div class="popup">
					<img src="{{asset('front/images/g7.jpg')}}" alt="Popup Image" class="img-fluid" />
					<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
						dolor.</p>
					<a class="close" href="#portfolio">&times;</a>
				</div>
			</div>
			<!-- //popup -->
			<!-- popup-->
			<div id="gal8" class="pop-overlay animate">
				<div class="popup">
					<img src="{{asset('front/images/g8.jpg')}}" alt="Popup Image" class="img-fluid" />
					<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
						dolor.</p>
					<a class="close" href="#portfolio">&times;</a>
				</div>
			</div>
			<!-- //popup -->
			<!-- //portfolio popups -->
		</div>
	</section>
	<!-- //Projects -->


	<!--/Partners-->
	<section class="partners py-5" id="partners">
		<div class="container py-md-3">
			<h3 class="heading mb-5">Our Marketing Partners</h3>
			<div class="inner-sec-w3ls">
				<div class="sponsers-icon text-center">
					<ul class="list-unstyled partners-icon row">
						<li class="col-md-2 col-4">
							<span class="fa fa-codepen" aria-hidden="true"></span>
						</li>
						<li class="col-md-2 col-4 border-left border-right">
							<span class="fa fa-lastfm" aria-hidden="true"></span>
						</li>
						<li class="col-md-2 col-4 border-right">
							<span class="fa fa-codiepie" aria-hidden="true"></span>
						</li>
						<li class="col-md-2 col-4 border-right mt-md-0 mt-3">
							<span class="fa fa-drupal" aria-hidden="true"></span>
						</li>
						<li class="col-md-2 col-4 border-right mt-md-0 mt-3">
							<span class="fa fa-dashcube" aria-hidden="true"></span>
						</li>
						<li class="col-md-2 col-4 mt-md-0 mt-3">
							<span class="fa fa-skyatlas" aria-hidden="true"></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- //Partners -->

	<!-- popup -->
	<div id="popup1" class="popup-effect">
		<div class="popup">
			<img src="{{asset('front/images/banner.png')}}" alt="Popup Image" class="img-fluid" />
			<p class="mt-4 ">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
				laudantium, totam rem aperiam, eaque ipsa quae ab illo quasi architecto beatae vitae dicta
				sunt explicabo.</p>
			<a class="close" href="#">&times;</a>
		</div>
	</div>
	<!-- //popup -->

	<!-- popup -->
	<div id="popup2" class="popup-effect">
		<div class="popup">
			<iframe src="https://player.vimeo.com/video/188673754"></iframe>
			<p class="mt-4 ">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
				laudantium, totam rem aperiam, eaque ipsa quae ab illo quasi architecto beatae vitae dicta
				sunt explicabo.</p>
			<a class="close" href="#">&times;</a>
		</div>
	</div>
	<!-- //popup -->

	<!-- popup for login -->
	<div id="popup3" class="popup-effect">
		<div class="popup">
			<div class="login px-sm-4 mx-auto mw-100">
				<h5 class="text-center mb-4">Login to Digital</h5>
				<form action="#" method="post">
					<div class="form-group">
						<label class="mb-2">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
							placeholder="" required="">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
							else.</small>
					</div>
					<div class="form-group">
						<label class="mb-2">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder=""
							required="">
					</div>
					<button type="submit" class="btn btn-primary submit mt-2">Login</button>
					<p class="text-center mt-2">
						<a href="#popup4"> Don't have an account?</a>
					</p>
				</form>
			</div>

			<a class="close" href="#">&times;</a>
		</div>
	</div>
	<!-- //popup for login -->

	<!-- popup for register -->
	<div id="popup4" class="popup-effect">
		<div class="popup">
			<div class="login px-sm-4 mx-auto mw-100">
				<h5 class="text-center mb-4">Register Now</h5>
				<form action="#" method="post">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
					</div>
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" class="form-control" id="validationDefault02" placeholder="" required="">
					</div>
					<div class="form-group">
						<label class="mb-2">Password</label>
						<input type="password" class="form-control" id="password1" placeholder="" required="">
					</div>
					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" class="form-control" id="password2" placeholder="" required="">
					</div>

					<button type="submit" class="btn btn-primary submit">Register</button>
					<p class="text-center mt-3">
						<a href="#">By clicking Register, I agree to your terms</a>
					</p>
				</form>
			</div>
			<a class="close" href="#">&times;</a>
		</div>
	</div>
	<!-- //popup for register -->
@endsection
