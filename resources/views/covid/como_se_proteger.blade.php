@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
	    <div class="container-fluid">
	        <div class="header-body">
				<div class="row">
					<div class="col-xl-12 col-lg-6">
                        <div class="card mb-4 mb-xl-0">
                            <img class="card-img-top" src="{{ asset('argon') }}/img/covid/mascara2.jpg" alt="Card image cap" height="300px">
                            <div class="card-body">
                                
                            	<h1 class="display-3">Sobre a doença</h1>
					        	<h1 class="display-4">O que é COVID-19</h1>
					        	<br>
					        	<p>
					        		A COVID-19 é uma doença causada pelo coronavírus SARS-CoV-2, que apresenta um quadro clínico que varia de infecções assintomáticas a quadros respiratórios graves. De acordo com a Organização Mundial de Saúde (OMS), a maioria dos pacientes com COVID-19 (cerca de 80%) podem ser assintomáticos e cerca de 20% dos casos podem requerer atendimento hospitalar por apresentarem dificuldade respiratória e desses casos aproximadamente 5% podem necessitar de suporte para o tratamento de insuficiência respiratória (suporte ventilatório).
					        	</p>
					        	<br>

					        	<h1 class="display-4">O que é o coronavírus?</h1>
					        	<br>
					        	<p>
					        		Coronavírus é uma família de vírus que causam infecções respiratórias. O novo agente do coronavírus foi descoberto em 31/12/19 após casos registrados na China. Provoca a doença chamada de coronavírus (COVID-19).
					        	</p>
					        	<p>
									Os primeiros coronavírus humanos foram isolados pela primeira vez em 1937. No entanto, foi em 1965 que o vírus foi descrito como coronavírus, em decorrência do perfil na microscopia, parecendo uma coroa.
								</p>
								<p>
									A maioria das pessoas se infecta com os coronavírus comuns ao longo da vida, sendo as crianças pequenas mais propensas a se infectarem com o tipo mais comum do vírus. Os coronavírus mais comuns que infectam humanos são o alpha coronavírus 229E e NL63 e beta coronavírus OC43, HKU1.
					        	</p>
					        	<br>
					        	<h1 class="display-4">Quais são os sintomas:</h1>
					        	<p>
					        		Os sintomas da COVID-19 podem variar de um simples resfriado até uma pneumonia severa. Sendo os sintomas mais comuns:
					        	</p>
					        	<p>
					        		<ul class="list-unstyled">
						                <li>
						                  	<ul>
							                    <li>Tosse;</li>
												<li>Febre;</li>
							                    <li>Coriza;</li>
												<li>Dor de garganta;</li>
							                    <li>Dificuldade para respirar.</li>
						                  	</ul>
						                </li>
						             </ul>
					        	</p>

					        	<br>
					        	<h1 class="display-4">Como é transmitido:</h1>
					        	<p>
					        		A transmissão acontece de uma pessoa doente para outra ou por contato próximo por meio de:
					        	</p>
					        	<p>
					        		<ul class="list-unstyled">
						                <li>
						                  	<ul>
							                    <li>Toque do aperto de mão;</li>
												<li>Gotículas de saliva;</li>
							                    <li>Espirro;</li>
												<li>Tosse;</li>
							                    <li>Catarro;</li>
							                    <li>Objetos ou superfícies contaminadas, como celulares, mesas, maçanetas, brinquedos, teclados de computador etc.</li>
						                  	</ul>
						                </li>
						             </ul>
					        	</p>

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