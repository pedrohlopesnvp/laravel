@extends('template.index')

@section('contents')

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
		<div class="hs-item set-bg" data-setbg="img/slider-4.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>Todos os <span>Filmes</span> estão aqui!</h2>
						<h2 class="subtext"><span>Transformers: </span> Rise of the Beasts</h2>
						<a href="https://www.imdb.com/title/tt5090568/" class="site-btn" target="_blank">Leia mais</a>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider-3.jpg">
				<div class="hs-text">
					<div class="container">
					    <h2>Fique por dentro das <span>Séries!</span></h2>
						<h2 class="subtext"><span>Ahsoka</span></h2>
						<a href="https://www.imdb.com/title/tt13622776" class="site-btn" target="_blank">Leia mais</a>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider-1.jpg">
				<div class="hs-text">
					<div class="container">
						<h2><span>Monarch: </span>Legacy of Monsters</h2>
						<a href="https://www.imdb.com/title/tt17220216" class="site-btn" target="_blank">Leia mais</a>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider-2.jpg">
				<div class="hs-text">
					<div class="container">
						<h2><span>Rebel Moon - Parte 1:</span> A Menina do Fogo</h2>
						<a href="https://www.imdb.com/title/tt14998742" class="site-btn" target="_blank">Leia mais</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Feature section -->
	<section class="feature-section spad">
		<div class="container">
		<div class="section-title">
			<div class="cata new">agosto</div>
				<h2>Escolhas de agosto: os filmes e a TV que você não pode perder</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/1.jpg">
						<span class="cata yellow">star wars</span>
						<div class="fi-content text-white">
							<h5>Ahsoka</h5>
							<p>Após a queda do Império Galáctico, a ex-Cavaleira Jedi Ahsoka Tano investiga uma ameaça emergente a uma galáxia vulnerável. </p>
							<a class="fi-comment">Criado por Dave Filoni</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/2.jpg">
						<span class="cata adventure">PlayStation</span>
						<div class="fi-content text-white">
							<h5>Gran Turismo</h5>
							<p>Baseado na inspiradora história real de um jogador que arrisca tudo para enfrentar o esporte de elite do mundo. </p>
							<a class="fi-comment">Direção de Neill Blomkamp</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/3.jpg">
						<span class="cata strategy">tmnt</span>
						<div class="fi-content text-white">
							<h5>As Tartarugas Ninja: Caos Mutante</h5>
							<p>As Tartaruga trabalham para conquistar o amor da cidade de Nova York enquanto enfrentam um exército de mutantes. </p>
							<a class="fi-comment">Direção de Jeff RoweKyler e Spears</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/4.jpg">
						<span class="cata racing">terror</span>
						<div class="fi-content text-white">
							<h5>Drácula: A Última Viagem do Deméter</h5>
							<p>Baseado no livro "Drácula" de Bram Stoker, a história se passa a bordo do navio Demeter, onde uma tripulação condenada enfrenta eventos aterrorizantes durante a viagem. </p>
							<a class="fi-comment">Direção de André Øvredal</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature section end -->


	<!-- Tournaments section -->
	<section class="tournaments-section spad">
		<div class="container">
			<div class="tournament-title">Nos cinemas</div>
			<div class="row">
				<div class="col-md-6">
					<div class="tournament-item mb-4 mb-lg-0">
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/1.jpg"></div>
							<div class="ti-text">
								<h4>Besouro Azul</h4>
								<ul>
									<li><span>Classificação Indicativa:</span> 14</li>
									<li><span>Duração:</span> 2 h 7 min</li>
									<li><span>Direção:</span> Angel Manuel Soto</li>
								</ul>
								<p><span>Sinopse:</span> Jaime Reyes, um adolescente de origem mexicana encontra um artefato alienígena que lhe torna no Besouro Azul.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
				<div class="tournament-title">Nos cinemas</div>
					<div class="tournament-item">
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/2.jpg"></div>
							<div class="ti-text">
								<h4>Oppenheimer</h4>
								<ul>
									<li><span>Classificação Indicativa:</span> 16</li>
									<li><span>Duração:</span> 3 h</li>
									<li><span>Direção:</span> Christopher Nolan</li>
								</ul>
								<p><span>Sinopse:</span> A história do cientista americano J. Robert Oppenheimer e o seu papel no desenvolvimento da bomba atômica.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Tournaments section bg -->


@endsection