<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {  
        # Setar o default do País
        $pais = null;
        if(!empty($_GET['pais'])){
            $pais = $_GET['pais'];
        }
        # dados do pais
        $pais = HomeController::verifica_pais($pais);
        
        #quantidade de meses anteriores para coletar
        $qtd = null;
        if(!empty($_GET['qtd'])){
            $qtd = $_GET['qtd'];
        }

        $grafico = HomeController::grafico_aumento($pais, $qtd);

        $r_pais = HomeController::buscar_pais($pais);
        $todos_paises = HomeController::buscar_todos_paises();
        $r_todos_estados = null;

        if($pais == 'Brazil' or $pais == 'brazil'){
            $r_todos_estados = HomeController::buscar_todos_estados();
        }

        return view(
            'dashboard',
            [
                'r_todos_estados'=> $r_todos_estados,
                'todos_paises'=> $todos_paises,
                'r_pais'=> $r_pais,
                'grafico'=> $grafico,
                'pais'=> $pais
            ]
        );
    }

    public function detalhes_estado(Request $request)
    {
        $data = HomeController::buscar_estado($request->uf);

        return view('covid.detalhes_estado', 
            [
                'data'=> $data
            ]
        );
    }

    public function como_proteger()
    {
        return view('covid.como_proteger');
    }

    public function como_se_proteger()
    {
        return view('covid.como_se_proteger');
    }

    public function fazer_mascara()
    {
        return view('covid.fazer_mascara');
    }

    # ----- functions -----

    function grafico_aumento($pais){
        $url = 'https://covid19uni9.herokuapp.com/deaths/'.$pais;
        return HomeController::faz_request($url);
    }

    function buscar_todos_estados()
    {
        $url = "https://covid19-brazil-api.now.sh/api/report/v1";
        $data = HomeController::faz_request($url)->data;
        return collect($data)->sortByDesc('state')->reverse();
    } 

    function buscar_todos_paises()
    {  
        $url = 'https://api.covid19api.com/countries';
        $data = HomeController::faz_request($url);
        
        $data = collect($data)->sortByDesc('Country')->reverse();
        return $data;
    }

    function buscar_pais($pais=null, $data_inicio=null, $data_fim=null){
        
        $pais = HomeController::verifica_pais($pais);
        $data = HomeController::verifica_data($data_inicio, $data_fim);

        $url = 'https://api.covid19api.com/country/'.$pais.'?from='.$data['data_inicio'].'&to='.$data['data_fim'];
        return HomeController::faz_request($url);
    }

    function buscar_estado($uf=null)
    {
        $estado = HomeController::verifica_estado($uf);
        $url = "https://covid19-brazil-api.now.sh/api/report/v1/brazil/uf/".$estado;
        return HomeController::faz_request($url);
    }

    # --- utils ---
    function verifica_pais($pais=null){
        if(empty($pais)){
            if(empty(auth()->user()->country)){
                $pais = env('PAIS_DEFAULT');
            }else{
                $pais = auth()->user()->country;
            }
        }
        return $pais;
    }

    function verifica_estado($estado=null){
        if(empty($estado)){
            $estado = env('ESTADO_DEFAULT');
        }
        return $estado;
    }

    function verifica_data($data_inicio=null, $data_fim=null){

        $data = HomeController::data_atual();

        if(empty($data_inicio)){
            $data_inicio = $data['data_anterior'];
        }

        if(empty($data_fim)){
            $data_fim = $data['data_atual'];
        }

        $data['data_inicio'] = $data_inicio;
        $data['data_fim'] = $data_fim;

        return $data;
    }

    function data_atual()
    {
        $data_atual =  date('Y-m-d');
        # API disponibiliza com 1 dia anterior (fechamento do dia)
        $data['data_atual'] = $data_atual;
        $data['data_anterior'] = date('Y-m-d', strtotime($data_atual. ' - 1 day'));
        return $data;
    }

    function ultimo_dia_mes($mes=null, $ano=null)
    {
        if(empty($mes)){
            $mes =  date('m');
        }

        if(empty($ano)){
            $ano =  date('Y');
        }

        return cal_days_in_month(CAL_GREGORIAN, $mes , $ano);
    }

    function meses_anteriores($qtd)
    {
        if(empty($qtd)){
            $qtd = 3;
        }
        # atual
        $meses['atual']['mes'] = date('m');
        $meses['atual']['ano'] = date('Y');
        # meses anteriores
        for ($i=1; $i <= $qtd; $i++) { 
            $meses[$i]['mes'] = date('m', strtotime('-'.$i.' months', strtotime(date('Y-m-d'))));
            $meses[$i]['ano'] = date('Y', strtotime('-'.$i.' months', strtotime(date('Y-m-d'))));
        }
        return $meses;
    }

    function faz_request($url)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $r = json_decode($response->getBody());
        return $r;
    }

}
