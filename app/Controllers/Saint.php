<?php
namespace App\Controllers;

	class Saint extends BaseController{

		function index(){
			$modelo = new \App\Models\SaintModel();

			$dados['saints'] = $modelo->find();
			
			return view('listagem', $dados);
		}
		function formulario(){

			return view('formulario');
		}
		function gravar(){
			$modelo = new \App\Models\SaintModel();

			print_r( $this->request->getPost() );

			if($modelo->insert($this->request->getPost() )){
				return redirect()->to('index');
			}
		}
	}
