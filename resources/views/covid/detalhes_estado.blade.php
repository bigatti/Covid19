@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
	    <div class="container-fluid">
	        <div class="header-body">
	            <!-- Card stats -->
	            <div class="row">
	                <div class="col-xl-12 col-lg-12">
	                    <div class="card card-stats mb-4 mb-xl-0">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col">
	                                    <h5 class="card-title text-uppercase text-muted mb-0">Estado</h5>
	                                    <span class="h2 font-weight-bold mb-0">{{ $data->state }}</span>
	                                </div>
	                                <div class="col-auto">
	                                	<p></p>
	                                	<img src="https://devarthurribeiro.github.io/covid19-brazil-api/static/flags/{{ $data->uf }}.png" >
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <br>
	            <div class="row">
	                <div class="col-xl-3 col-lg-6">
	                    <div class="card card-stats mb-4 mb-xl-0">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col">
	                                    <h5 class="card-title text-uppercase text-muted mb-0">Casos</h5>
	                                    <span class="h2 font-weight-bold mb-0">{{ $data->cases }}</span>
	                                </div>
	                                <div class="col-auto">
	                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
	                                        <i class="fas fa-chart-pie"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="col-xl-3 col-lg-6">
	                    <div class="card card-stats mb-4 mb-xl-0">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col">
	                                    <h5 class="card-title text-uppercase text-muted mb-0">Mortes</h5>
	                                    <span class="h2 font-weight-bold mb-0">{{ $data->deaths }}</span>
	                                </div>
	                                <div class="col-auto">
	                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
	                                        <i class="fas fa-chart-bar"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 col-lg-6">
	                    <div class="card card-stats mb-4 mb-xl-0">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col">
	                                    <h5 class="card-title text-uppercase text-muted mb-0">Suspeitas</h5>
	                                    <span class="h2 font-weight-bold mb-0">{{ $data->suspects }}</span>
	                                </div>
	                                <div class="col-auto">
	                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
	                                        <i class="fas fa-chart-bar"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="col-xl-3 col-lg-6">
	                    <div class="card card-stats mb-4 mb-xl-0">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col">
	                                    <h5 class="card-title text-uppercase text-muted mb-0">Negativo</h5>
	                                    <span class="h2 font-weight-bold mb-0">{{ $data->refuses }}</span>
	                                </div>
	                                <div class="col-auto">
	                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
	                                        <i class="ni ni-satisfied"></i>
	                                    </div>
	                                </div>
	                            </div>
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