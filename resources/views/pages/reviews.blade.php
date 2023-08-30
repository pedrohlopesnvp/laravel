@extends('template.index')

@section('contents')

	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/3.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Reviews</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section review-page spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/5.jpg">
							<div class="score green">8.2</div>
						</div>
						<div class="review-text">
							<h4>Ahsoka</h4>
							<div class="rating">
								<p><span>Avaliação em destaque</span> - 6/10 <i class="fa fa-star"></i></p>
							</div>
							<p>"O que vi nos dois primeiros episódios é a definição de mediocracia. Não é ruim, não é bom, apenas fica em algum lugar no meio."</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/6.jpg">
							<div class="score green">8.6</div>
						</div>
						<div class="review-text">
							<h4>Oppenheimer</h4>
							<div class="rating">
								<p><span>Avaliação em destaque</span> - 8/10 <i class="fa fa-star"></i></p>
							</div>
							<p>"Um dos filmes mais esperados do ano por muitas pessoas, inclusive eu, Oppenheimer cumpre em grande parte. Muito disso é ótimo. Sinto que adorei duas das três horas e gostei da outra... mas é esse fato que me impede de adorar a coisa toda."</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/7.jpg">
							<div class="score yellow">7.4</div>
						</div>
						<div class="review-text">
							<h4>Barbie</h4>
							<div class="rating">
								<p><span>Avaliação em destaque</span> - 8/10 <i class="fa fa-star"></i></p>
							</div>
							<p>"Embora eu não tenha tanta certeza a princípio, o filme foi ficando ainda mais divertido, divertido e definitivamente melhor, além de lidar surpreendentemente com uma coisa séria e legítima, Barbie é um filme estranhamente divertido que preenche esse conceito muito interessante, definitivamente a primeiro vez que isso já aconteceu."</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/8.jpg">
							<div class="score red">4.8</div>
						</div>
						<div class="review-text">
							<h4>Gatos no Museu</h4>
							<div class="rating">
								<p><span>Avaliação em destaque</span> - 1/10 <i class="fa fa-star"></i></p>
							</div>
							<p>"Entrei no IMDb 2.0 apenas para alertar as pessoas sobre esse filme. Se há alguém que você realmente odeia, diga-lhe para ver este filme. Animação terrível, narração terrível, enredo doloroso... doloroso em geral."</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-4">
				<button class="site-btn btn-sm">Mostrar mais</button>
			</div>
		</div>
	</section>
	<!-- Page section end -->

@endsection