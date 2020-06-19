@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
	    <div class="container-fluid">
	        <div class="header-body">
				
				<div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card mb-4 mb-xl-0">
                            <img class="card-img-top" src="{{ asset('argon') }}/img/covid/mascara2.jpg" alt="Card image cap" height="230px">
                            <div class="card-body">
                                <h3 class="card-title">Sobre a doença</h3>
                                <p class="card-text">Coronavírus é uma família de vírus que causam infecções respiratórias.</p>
                                <a href="{{ route('home.como_se_proteger') }}" class="btn btn-primary">Leia mais</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card mb-4 mb-xl-0">
                            <img class="card-img-top" src="{{ asset('argon') }}/img/covid/mascara.jpg" alt="Card image cap" height="230px">
                            <div class="card-body">
                                <h3 class="card-title">Como fazer máscara de pano contra o coronavírus</h3>
                                <p class="card-text">Veja também os cuidados que você deve ter com ela.</p>
                                <a href="{{ route('home.fazer_mascara') }}" class="btn btn-primary">Leia mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
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