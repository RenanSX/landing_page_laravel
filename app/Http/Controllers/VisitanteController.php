<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visitante;

class VisitanteController extends Controller
{
   //Esse é o metodo index do formulario,´vai carregar a view do formulario
    public function index(){
    	/*$visitante = new visitante();
    	dd($visitante->lista());*/
    	return view('formulario.index');
    }

    //Metodo para salvar no banco os dados passados pelo usuario na pagina do formulario
    public function salvar(Request $req){

    	
    	$this->validate($req, [
    		'name' => 'required',
    		'cellphone' => 'required',
    		'email' => 'required|email',
    		'birthday' => 'required',
    		'cep' => 'required',
    		'endereco' => 'required',
    		'bairro' => 'required',
    		'cidade' => 'required',
    		'uf' => 'required'
    	]);

    	$dados = $req->all();
    	$dados['birthday']= $this->mudarData($dados['birthday']);


    	
    	$visitante = new visitante();
    	$visitante::create($dados);

    	return redirect('visitante')->with('status', 'Usuário cadastrado com sucesso no banco de dados');
    }

    public function mudarData($data){
    	$data = explode("/", $data);
    	return $newdata = $data[2].'-'.$data[1].'-'.$data[0];
    }
}
