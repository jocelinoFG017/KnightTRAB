<?php
namespace App\Models;

	use CodeIgniter\Model;

	class VeiculoModel extends Model{
		protected $table = 'veiculo';
		protected $primaryKey = 'codigo';
		protected $allowedFields = ['placa', 'descricao', 'ano'];
	}
?>