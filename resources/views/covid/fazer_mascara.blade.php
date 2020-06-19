@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
	    <div class="container-fluid">
	        <div class="header-body">
				<div class="row">
					<div class="col-xl-12 col-lg-6">
                        <div class="card mb-4 mb-xl-0">
                            <img class="card-img-top" src="{{ asset('argon') }}/img/covid/mascara.jpg" alt="Card image cap" height="300px">
                            <div class="card-body">
                                
                            	<h1 class="display-3">Como fazer máscara de pano contra o coronavírus</h1>
					        	<br>
					        	<p>
					        		Para reduzir a quantidade de gotículas que podem ficar no ar e em objetos ao nosso redor, o uso de máscaras de tecido, recomendado por autoridades de saúde em tempos de coronavírus, pode se tornar o novo padrão social - é o que apontam especialistas, ao menos enquanto não se produz vacina contra a COVID-19. Este passo a passo em vídeo mostra como fazer máscara de pano reutilizável e barata, com materiais que você tem em casa. Este tutorial segue as recomendações do Ministério da Saúde e da Agência Nacional de Vigilância Sanitária (Anvisa).
					        	</p>
					        	<br>
					        	<h1 class="display-4">Materiais necessários:</h1>
					        	<p>
					        		<ul class="list-unstyled">
						                <li>
						                  	<ul>
							                    <li>Uma camiseta velha 100% algodão. Dê preferência àquela que, colocada contra a luz, bloqueia mais raios solares;</li>
												<li>Alfinetes;</li>
							                    <li>Caneta, de preferência uma específica para tecido;</li>
												<li>Tesoura;</li>
							                    <li>Papel toalha;</li>
						                  	</ul>
						                </li>
						             </ul>
					        	</p>

					        	<br>
					        	<h1 class="display-4">Como fazer máscara de pano:</h1>
					        	<p>
					        		<ul class="list-unstyled">
						                <li>
						                  	<ul>
							                    <li>Com a caneta, faça a letra U nas mangas e duas linhas paralelas, uma na altura do peito e outra perto do decote;</li>
												<li>Com a tesoura, siga as linhas feitas e corte os dois lados da blusa;</li>
							                    <li>Pegue os alfinetes e prenda um dos lados da blusa;</li>
												<li>Coloque um pedaço de papel toalha entre os dois lados, como um filtro extra;</li>
							                    <li>Sua máscara está pronta.</li>
						                  	</ul>
						                </li>
						             </ul>
					        	</p>
					        	<br>

					        	<iframe width="100%" height="500" src="https://www.youtube.com/embed/ujsg9qZDgE4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

                            </div>
                        </div>
                    </div>
				</div>

			</div>
	    </div>
	</div>
    
    <div class="container-fluid mt--7">
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush