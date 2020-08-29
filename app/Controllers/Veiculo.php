<?php
namespace App\Controllers;

	class Veiculo extends BaseController{
		function index(){
			$modelo = new \App\Models\VeiculoModel();
			$dados['veiculos'] = $modelo->find();
			
			return view('listagem', $dados);
		}
		function formulario(){
			return view('formulario');
		}
		function gravar(){
			$modelo = new \App\Models\VeiculoModel();
			print_r( $this->request->getPost() );

			if ($modelo->insert($this->request->getPost() ) ){
				return redirect()->to('index');
			}
		}
	}
