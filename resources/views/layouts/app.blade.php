<!DOCTYPE html>
<html lang="zxx" class="js">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="AppsLand is a powerful App Landing HTML Template with full of customization options and features">
		<!-- Fav Icon  -->
		<link rel="shortcut icon" href="images/favicon.png">
		<!-- Site Title  -->
		<title>@yield("title")</title>
		<!-- Vendor Bundle CSS -->
		<link rel="stylesheet" href="assets/css/vendor.bundlec302.css?ver=130" >
		<!-- Custom styles for this template -->
		<link href="assets/css/stylec302.css?ver=130" rel="stylesheet">
		<link href="assets/css/theme-royel-tealc302.css?ver=130" rel="stylesheet" id="layoutstyle">
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-91615293-2', 'auto');
		ga('send', 'pageview');
		</script>
	</head>
	<body class="overflow-scroll">

		<!-- Start .header-section -->
		<div id="home" class="header-section flex-box-middle section gradiant-background header-curbed-circle background-circles header-software">
			<div id="particles-js" class="particles-container"></div>
			<div id="navigation" class="navigation is-transparent" data-spy="affix" data-offset-top="5">
				<nav class="navbar navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-collapse-nav" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#home">
								<img class="logo logo-light" src="images/logo-kelasmaju-white.png" alt="logo" />
								<img class="logo logo-color" src="images/logo-kelasmaju.png" alt="logo" />
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse font-secondary" id="site-collapse-nav">
							<ul class="nav nav-list navbar-nav navbar-right">
								<li><a class="nav-item" href="#home">Beranda</a></li>
								<li><a class="nav-item" href="#about">Tentang</a></li>
								<li><a class="nav-item" href="#features">Fitur</a></li>
								<li><a class="nav-item" >
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container -->
				</nav>
			</div><!-- .navigation -->

			<div class="header-content pt-90">
				<div class="container">
					<div class="row text-center">
						<div class="col-md-8 col-md-offset-2">
							<div class="header-texts">
								<h1 class="cd-headline clip is-full-width wow fadeInUp" data-wow-duration="1s">
									<span>Kramas Edu</span>
									<span class="cd-words-wrapper">
										<b class="is-visible">Kramas Berprestasi</b>
										<b>Kramas Berkarakter</b>
									</span>
								</h1>
								@if (!Auth::user())
								<ul class="buttons">
									<li><a href="{{route("login")}}" class="button button-border button-transparent wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".9s">Masuk</a></li>
								</ul>
								@else
								<ul class="buttons">
									<li><a href="{{route("dashboard")}}" class="button button-border button-transparent wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".9s">Haii, {{Auth::user()->name}}</a></li>
								</ul>
								@endif
							</div>
						</div><!-- .col -->
					</div><!-- .row -->
					<div class="row text-center">
						<div class="col-md-10 col-md-offset-1">
							<div class="header-mockups">
								<div class="header-laptop-mockup black wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" >
									<img src="images/home-dashboard.png" alt="software-screen" />
								</div>
								<div class="iphonex-flat-mockup wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">
									<img src="images/home-dashboard.png" alt="app screen">
								</div>
							</div>
						</div>
					</div>
				</div><!-- .container -->
			</div><!-- .header-content -->
		</div><!-- .header-section -->


		<!-- Start .about-section  -->
		<div id="about" class="about-section section white-bg">
			<div class="container tab-fix">
				<div class="section-head text-center">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="heading">Tentang <span>Kramas Edu</span></h2>
							<p><b>Kramas Edu </b>
                                adalah sistem informasi manajemen sekolah yang dirancang untuk membantu SDN Kramas dalam mengelola proses belajar mengajar dan administrasi sekolah. Kramas Edu dibangun menggunakan teknologi web modern, sehingga dapat diakses dengan mudah dari berbagai perangkat.</p>
						</div>
					</div>
				</div><!-- .section-head -->
				{{-- <div class="row tab-center mobile-center">
					<div class="col-md">
						<div class="video wow fadeInLeft" data-wow-duration=".5s">
							<img src="images/about-video.jpg" alt="about-video" />
							<div class="video-overlay gradiant-background"></div>
							<a href="https://youtu.be/131g9lQ1Vx0?si=PDgmMIlPBT35HsPk" class="video-play" data-effect="mfp-3d-unfold"><i class="fa fa-play"></i></a>
						</div>
					</div><!-- .col -->
				</div><!-- .row --> --}}
			</div><!-- .container -->
		</div><!-- .about-section  -->


		<!-- Start .features-box-section  -->
		<div id="features" class="features-box-section section pb-90 white-bg">
			<div class="container tab-fix">
				<div class="section-head text-center">
					<div class="row">
						<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
							<h2 class="heading">Kramas Edu <span>Fitur</span></h2>
							<p>Kramas Edu dibangun menggunakan framework Laravel dan didesain dengan menggunakan Bootstrap. SIMS ini memiliki berbagai fitur yang dapat memudahkan sekolah dalam mengelola kegiatannya, antara lain:</p>
						</div>
					</div>
				</div><!-- .section-head -->
				<div class="row text-center">
					<div class="col-md-6 col-sm-6">
						<div class="feature-box">
							<div class="box-icon box-icon-small">
								<em class="ti ti-layers"></em>
							</div>
							<h4>Responsive Design</h4>
							<p>Desain responsif memastikan bahwa halaman memiliki kemampuan untuk secara otomatis menyesuaikan tampilannya dengan berbagai ukuran layar.</p>
						</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<div class="feature-box">
							<div class="box-icon box-icon-small">
								<em class="ti ti-eye"></em>
							</div>
							<h4>User-friendly</h4>
							<p>Kramas Edu dirancang dengan tampilan yang sederhana dan mudah digunakan.</p>
						</div>
					</div>

				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .features-box-section  -->


		<!-- Start .features-section  -->
		<div class="features-section section gradiant-background section-overflow-fix">
			<div class="container tab-fix">
				<div class="features-content pt-10">
					<div class="row">
						<div class="col-md-7">
							<div class="section-head heading-light mobile-center tab-center">
								<div class="row">
									<div class="col-md-12">
										<h2 class="heading heading-light">Fitur SIMS</h2>
										<p>Berikut adalah beberapa fitur sederhana yang ada di Kramas Edu:</p>
									</div>
								</div>
							</div><!-- .section-head -->
							<div class="row">
								<div class="col-sm-6">
									<div class="single-features">
										<em class="ti ti-user"></em>
										<h4>Manajemen Data Siswa</h4>
										<p>
                                            Fitur ini memungkinkan sekolah untuk mengelola data siswa, seperti nama, alamat, tanggal lahir, dan kelas.
									</div>
								</div><!-- .col -->
								<div class="col-sm-6">
									<div class="single-features">
										<em class="ti ti-bolt"></em>
										<h4>Manajemen Data Guru</h4>
										<p>Fitur ini memungkinkan sekolah untuk mengelola data guru, seperti nama dan mata pelajaran yang diampu.</p>
									</div>
								</div><!-- .col -->
								<div class="col-sm-6">
									<div class="single-features">
										<em class="ti ti-video-camera"></em>
										<h4>Manajemen Jadwal Pelajaran</h4>
										<p>Fitur ini memungkinkan sekolah untuk membuat jadwal pelajaran untuk siswa dan guru.</p>
									</div>
								</div><!-- .col -->
								<div class="col-sm-6">
									<div class="single-features">
										<em class="ti ti-infinite"></em>
										<h4>Pembuatan Laporan Akademik</h4>
										<p>Fitur ini memungkinkan sekolah untuk membuat laporan akademik siswa, seperti laporan nilai, laporan kehadiran, dan laporan prestasi. </p>
									</div>
								</div><!-- .col -->
							</div><!-- .row -->
						</div><!-- .col -->
						<div class="col-md-5 pt-100 text-center">
							<div class="feature-mockups clearfix">
								<div class="fearures-software-mockup black right wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".7s">
									<img src="images/software-screen-b.png" alt="software-screen" />
								</div>
								<div class="phone-mockup">
									<div class="iphonex-flat-mockup large wow fadeInUp" data-wow-duration=".5s">
										<img src="images/app-screen-a.png" alt="app screen">
									</div>
								</div>
							</div>
						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .features-content -->
			</div><!-- .container -->
		</div><!-- .features-section  -->



		<!-- Start .contact-section  -->
		<div id="contacts" class="contact-section section gradiant-background pb-90">
			<div class="container">
				<div class="section-head heading-light text-center">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="heading heading-light">Get In Touch</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="contact-form white-bg text-center">
							<h3>Kontak Kami</h3>
							<p>Kirim kan saran, kritik, dan feedback di bawah ini</p>
							<form id="contact-form" class="form-message" action="https://demo.themenio.com/appsland/form/contact.php" method="post">
								<div class="form-results"></div>
								<div class="form-group row fix-gutter-10">
									<div class="form-field col-sm-6 gutter-10 form-m-bttm">
										<input name="contact-name" type="text" placeholder="Full Name *" class="form-control required">
									</div>
									<div class="form-field col-sm-6 gutter-10">
										<input name="contact-email" type="email" placeholder="Email *" class="form-control required email">
									</div>
								</div>
								<div class="form-group row fix-gutter-10">
									<div class="form-field col-md-6 gutter-10 form-m-bttm">
										<input name="contact-phone" type="text" placeholder="Phone  *" class="form-control required">
									</div>
									<div class="form-field col-md-6 gutter-10">
										<input name="contact-subject" type="text" placeholder="Subject *" class="form-control required">
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-12">
										<textarea name="contact-message" placeholder="Pesan *" class="txtarea form-control required"></textarea>
									</div>
								</div>
								<input type="text" class="hidden" name="form-anti-honeypot" value="">
								<button type="submit" class="button solid-btn sb-h">Submit</button>
							</form>
						</div>
					</div><!-- .col  -->
					<div class="col-md-6">
						<div class="contact-info white-bg">
							<div class="row">
								<div class="col-sm-6">
									<h6><em class="fa fa-envelope"></em> bertawsky02@gmail.com</h6>
								</div>
								<div class="col-sm-6">
									<h6><em class="fa fa-map-marker"></em> Semarang, Jawa Tengah</h6>
								</div>
							</div>
						</div>
					</div><!-- .col  -->
				</div><!-- .row  -->
			</div><!-- .container  -->
		</div><!-- .contact-section  -->


		<!-- Start .footer-section  -->
		<div class="footer-section section">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12">
						<ul class="footer-navigation inline-list">
							<li><a class="nav-item" href="#home">Beranda</a></li>
							<li><a class="nav-item" href="#about">Tentang</a></li>
							<li><a class="nav-item" href="#features">Fitur</a></li>
						</ul>
						<ul class="social-list inline-list">
							<li><a href="#"><em class="fa fa-facebook"></em></a></li>
							<li><a href="#"><em class="fa fa-twitter"></em></a></li>
							<li><a href="#"><em class="fa fa-linkedin"></em></a></li>
							<li><a href="#"><em class="fa fa-instagram"></em></a></li>
						</ul>
						<ul class="footer-links inline-list">
							<li>&copy; Copyright <script>document.write(new Date().getFullYear())</script>, Berta Setiyono.</li>
						</ul>
					</div><!-- .col  -->
				</div><!-- .row  -->
			</div><!-- .container  -->
		</div><!-- .footer-section  -->

		<!-- Preloader !remove please if you do not want -->
		<div id="preloader"><div id="status">&nbsp;</div></div>
		<!-- Preloader End -->

		<!-- Google Map Script -->
		<script src="https://maps.google.com/maps/api/js?key=AIzaSyD6cxB4idvB67_Mz1ScQn-_nBJmltUaS-g"></script>
		<script src="assets/js/googleMapc302.js?ver=130"></script>

		<!-- JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->

		<script src="assets/js/jquery.bundlec302.js?ver=130"></script>
		<script src="assets/js/scriptc302.js?ver=130"></script>

	</body>
</html>
