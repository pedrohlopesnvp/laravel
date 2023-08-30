@extends('template.index')

@section('contents')

	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>O que assistir?</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-md-6">
						<div class="tournament-title red">NETFLIX</div>
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/1.jpg">
								</div>
								<div class="rgi-content">
									<h5>Tudo que há de novo na Netflix em Agosto</h5>
									<a href="https://www.imdb.com/list/ls525420258/" class="comment">72 títulos</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
						<div class="tournament-title blue">DISNEY+</div>
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/2.jpg">
								</div>
								<div class="rgi-content">
									<h5>Tudo que há de novo no Disney+ em Agosto</h5>
									<a href="https://www.imdb.com/list/ls525900493/" class="comment">25 títulos</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
						<div class="tournament-title purple">MAX</div>
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/3.jpg">
								</div>
								<div class="rgi-content">
									<h5>Tudo que há de novo no MAX em Agosto</h5>
									<a href="https://www.imdb.com/list/ls525441614/" class="comment">146 títulos</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
						<div class="tournament-title whiteblue">PRIME VIDEO</div>
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/4.jpg">
								</div>
								<div class="rgi-content">
									<h5>Tudo que há de novo no Prime Video em Agosto</h5>
									<a href="https://www.imdb.com/list/ls525905646/" class="comment">84 títulos</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<!-- sidebar -->
				<div class="col-lg-4 col-md-6 sidebar pt-4 pt-lg-0">
					<!-- widget -->
					<div class="widget-item">
						<form class="search-widget">
							<input type="text" placeholder="Pesquisar">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- widget -->
					<div class="widget-item">
						<h4 class="widget-title">Últimos Posts</h4>
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
					
					<!-- widget -->
					<div class="widget-item">
						<div class="feature-item set-bg" data-setbg="img/features/1.jpg">
							<span class="cata yellow">star wars</span>
							<div class="fi-content text-white">
								<h5>Ahsoka</h5>
								<p>Após a queda do Império Galáctico, a ex-Cavaleira Jedi Ahsoka Tano investiga uma ameaça emergente a uma galáxia vulnerável. </p>
								<a class="fi-comment">Criado por Dave Filoni</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->

@endsection