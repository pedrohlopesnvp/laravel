<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>IMDb 2.0</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="/">
				<img src="img/logo.png" alt="">
			</a>
			<!-- <div class="user-panel">
				<a href="#">Fazer Login</a>
			</div> -->
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul class="nav">
					<li><a href="/" class=" {{ Request::is('/') ? 'active':'' }} ">Home</a></li>
					<li><a href="reviews" class=" {{ Request::is('reviews') ? 'active':'' }} ">Reviews</a></li>
					<li><a href="oqueassistir" class=" {{ Request::is('oqueassistir') ? 'active':'' }} ">O que assistir?</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Últimas notícias</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">Teaser</span>O filme dos Mamonas Assassinas enfim ganhou um teaser. </div>
				<div class="nt-item"><span class="strategy">Recomendação</span>A mais nova série brasileira da Prime Video, Cangaço Novo. </div>
				<div class="nt-item"><span class="racing">Adiado</span>Duna: Parte Dois foi adiado para 15 de março de 2024. </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->

	@yield('contents')

	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/footer-top-bg.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="img/footer-logo.png" alt="">
					</div>
				</div>
				<div class="col-lg-2 col-md-2"></div>
				<div class="col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Principais Notícias</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/1.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">27 de ago</div>
									<p>Bilheteria: ‘Gran Turismo’ supera ‘Barbie’ com mediana de US$ 17,3 milhões </p>
									<a href="https://www.imdb.com/news/ni64214390/" class="lb-author">Variety - Film News8</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/2.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">28 de ago</div>
									<p>Trabalhadores de efeitos visuais da Disney pedem sindicalização sob IATSE </p>
									<a href="https://www.imdb.com/news/ni64215570/" class="lb-author">The Hollywood Reporter - Movie News</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/3.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">28 de ago</div>
									<p>A deputada norte-americana Barbara Lee sobre greves, campanha no Senado e dissidência: “Fui chamada de traidora” </p>
									<a href="https://www.imdb.com/news/ni64215539/" class="lb-author">The Hollywood Reporter - Movie News</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site was made by Pedro H Lopes
			</p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>