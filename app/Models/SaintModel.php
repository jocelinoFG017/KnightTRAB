<?php
namespace App\Models;

	use CodeIgniter\Model;

	class SaintModel extends Model{
		protected $table = 'personagem';
		protected $primaryKey = 'codigo';
		protected $allowedFields = ['nome', 'descricao', 'armadura', 'constelacao', 'idade'];
	}
?>